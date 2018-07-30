<?php
  $pathPrefix = '';
  $page = 'package';
  $paths = explode('/', realpath('./'));
  for ($i = sizeof($paths) - 1; $i >= 0 && $paths[$i] != 'gb-brochures'; $i--) {
    $pathPrefix .= '../';
  }
  include $pathPrefix . 'php/data.php';

  $package = $packages_data[$packageKey];
  $packages = $packages_data;
  $country = $countries_data[$package['country']];
  $countries = $countries_data;
  $servicesAll = $services_data;

  $countries = [];
  $countries[$country['key']] = $country;
  array_walk($countries_data, function($countryC) {
    global $countries, $country;
    if ($countryC['key'] == $country['key']) return;
    $countries[$countryC['key']] = $countryC;
  });

  // Pick available services for displaying
  $services = [];
  array_walk($services_data, function($service) {
    global $package, $services;
    if ($service['country'] != $package['country']) return;
    if (array_key_exists('onlyFor', $service) && !in_array($package['time'], $service['onlyFor'])) return;
    array_push($services, $service);
  });
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Globuzzer - <?php echo join(explode(' ', $package['time']), '-') ?></title>
    <!------ STYLESHEETS ------->
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,900|Source+Sans+Pro:400,500,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:900" rel="stylesheet">
    <!-- Simple grid -->
    <link rel="stylesheet" href="<?php echo $pathPrefix; ?>css/simple-grid.css">
    <!-- jQuery -->
    <link rel="stylesheet" href="<?php echo $pathPrefix; ?>css/jquery-ui.theme.min.css">
    <link rel="stylesheet" href="<?php echo $pathPrefix; ?>css/jquery-ui.min.css">
    <!-- Own stylesheet -->
    <link rel="stylesheet" href="<?php echo $pathPrefix; ?>css/style.css">
    <link rel="stylesheet" href="<?php echo $pathPrefix; ?>css/package.css">
    <!-- Animated hand -->
    <link rel="stylesheet" href="<?php echo $pathPrefix; ?>css/animated-hand.css">
    <!------ SCRIPTS ------->
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="<?php echo $pathPrefix; ?>js/jquery-ui.js"></script>
    <!-- TurnJS -->
    <script src="<?php echo $pathPrefix; ?>turnJS/turn.min.js"></script>
    <!-- Font Awesome -->
    <script src="<?php echo $pathPrefix; ?>js/script-with-data.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/2.4.1/lodash.min.js"></script>
    <script src='<?php echo $pathPrefix; ?>js/fetch-polyfill.js' ></script>
    <script>
        // import lodash
        _ = _.noConflict();
        // import data
        var pathPrefix = '<?php echo $pathPrefix; ?>';
        var country = <?php echo json_encode($country) ?>;
        var countries = <?php echo json_encode($countries) ?>;
        var package = <?php echo json_encode($package) ?>;
        var packages = <?php echo json_encode($packages) ?>;
        var services = <?php echo json_encode($services) ?>;
        var servicesAll = <?php echo json_encode($servicesAll) ?>;
    </script>
    <script>
      var success;
      var fail;
      var budgetExceed;
      var choicesDialog;
      var countriesC = new Set();
      var rates = {};
      if (!localStorage.currency) localStorage.currency = 'EUR';

      var exceedKey;
      var exceedPrice;
      var exceedDuration;

      $(document).ready(function() {
        success = $("#service-added").dialog({
            autoOpen: false,
            resizable: false,
            draggable: false,
            height: "auto",
            modal: true,
            show: {
                effect: "fadeIn", duration: 300
            },
            hide: {
                effect: "fadeOut", duration: 300
            },
            open: function(event, ui){
                setTimeout("$('#service-added').dialog('close')",1000);
            }
        });

        fail = $("#service-exists").dialog({
            autoOpen: false,
            resizable: false,
            draggable: false,
            height: "auto",
            modal: true,
            show: {
                effect: "fadeIn", duration: 300
            },
            hide: {
                effect: "fadeOut", duration: 300
            },
            buttons: {
                "OK": function () {
                    $(this).dialog("close");
                }
            }
        });

        budgetExceed = $("#budget-exceed").dialog({
          autoOpen: false,
          resizable: false,
          draggable: false,
          width: '400px',
          height: "auto",
          modal: true,
          show: {
            effect: "fadeIn", duration: 300
          },
          hide: {
            effect: "fadeOut", duration: 300
          },
        });
        $('#budget-exceed .no').click(function() {
          $('#budget-exceed').dialog('close');
        });
        $('#budget-exceed .yes').click(function() {
          $('#budget-exceed').dialog('close');
          if (exceedPrice) setBudget(Math.ceil(exceedPrice));
          if (exceedDuration) setDuration(Math.ceil(exceedDuration));
          if (exceedKey.indexOf('|') === -1) {
            addItem(exceedKey);
          } else {
            addChoice(exceedKey);
          }
        });

        choicesDialog = $("#choices").dialog({
          autoOpen: false,
          resizable: false,
          draggable: false,
          width: '600px',
          height: 'auto',
          modal: true,
          show: {
            effect: "fadeIn", duration: 300
          },
          hide: {
            effect: "fadeOut", duration: 300
          },
        });

        $('span.currency').text(localStorage.currency);

        countriesC.add(country.key);
        fetch('http://data.fixer.io/api/latest?access_key=e25bec2748c12d5bd6e697b69169ab62&symbols=EUR,SEK,DKK,NOK,USD&format=1')
          .then(function(res) {
            return res.json();
          })
          .then(function(res) {
            rates = res.rates;
            setCurrency(localStorage.currency);
          });
        setTotalPrice();
        setTotalTime();
        setBudget(localStorage.budget);
        setDuration(localStorage.duration);
        localStorage.countries = Array.from(countriesC);
        localStorage.package = package.key;

        if (localStorage.arriveDate) {
          var date = new Date(localStorage.arriveDate);
          if (date.getTime() < new Date().getTime() - 24 * 60 * 60000) {
            localStorage.arriveDate = '';
          } else {
            $('.start-date').text(date.getFullYear() + '-' + ('0' + (date.getMonth() + 1)).slice(-2) + '-' + ('0' + date.getDate()).slice(-2));
          }
        }
        if (localStorage.departDate) {
          var date = new Date(localStorage.departDate);
          if (date.getTime() < new Date().getTime() - 24 * 60 * 60000) {
            localStorage.departDate = '';
          } else {
            $('.end-date').text(date.getFullYear() + '-' + ('0' + (date.getMonth() + 1)).slice(-2) + '-' + ('0' + date.getDate()).slice(-2));
          }
        }

        if (localStorage.people) {
          $('.people').text(localStorage.people + ' ' + (localStorage.people > 1 ? 'people' : 'person'));
        }

        setPackageNum();

        setThumbnailState();
        $(".thumbnail-container").click(function(e) {
          e.preventDefault();
          var serviceC = servicesAll[$(this).attr('id')];
          addItem($(this).attr('id'));
          setThumbnailState();

          // looks if the current service in the brochure has been chosen
          // to mark it as checked if necessary.
          var currPage = $slideshow.turn('page');
          var currService = getCurrentService(currPage);
          if(localStorage[currService]) {
              setChosenState();
          }
        });

        $('.country-selector-' + country.key + ' .selector').addClass('selector-on');
        _.each(countries, function(countryC) {
          if (countryC.key == country.key) return;
          $('.country-selector-' + countryC.key + ' .selector').click(function() {
            if (countriesC.has(countryC.key)) {
              countriesC.delete(countryC.key);
              $('.country-selector-' + countryC.key + ' .selector').removeClass('selector-on');
              $('.services-country-' + countryC.key).hide();
            } else {
              countriesC.add(countryC.key);
              $('.country-selector-' + countryC.key + ' .selector').addClass('selector-on');
              $('.services-country-' + countryC.key).show();
            }
            localStorage.countries = Array.from(countriesC);
            setTotalTime();
            setTotalPrice();
          });
        });
        _.each(countries, function(countryC) {
          if (countryC.key != country.key) {
            $('.services-country-' + countryC.key).hide();
          }
        });

        $('.remove-service').click(function() {
          var key = $(this).attr('class').slice($(this).attr('class').indexOf('remove-service-') + 15);
          addItem(key);
        });
        $('.remove-choice').click(function() {
          var key = $(this).attr('class').slice($(this).attr('class').indexOf('remove-choice-') + 14);
          addChoice(key);
        });

        localStorage.setItem('citys', '');
        $('.city').click(function() {
          var className = $(this).attr('class').split(' ')[1];
          var countryKey = className.slice(5, className.indexOf('-', 5));
          var cityKey = className.slice(className.indexOf('-', 5) + 1);
          var cityKeys = (localStorage.getItem('citys') || '').split(',');
          if (cityKeys.includes(cityKey)) {
            var cityKeysC = [];
            _.each(cityKeys, function(key) {
              if (key == cityKey) return;
              cityKeysC.push(key);
            });
            localStorage.setItem('citys', cityKeysC);
          } else {
            cityKeys.push(cityKey);
            localStorage.setItem('citys', cityKeys);
          }
          setCity();
        });
      });

      var lastScroll;
      $(window).on('scroll', function(e) {
        var scroll = $(window).scrollTop();
        if (scroll > lastScroll) { // Scroll down
          if ($('.left-container')[0].offsetTop + $('.left-container')[0].offsetHeight + $('.services-container').offset().top < scroll + window.innerHeight) {
            $('.left-container').css('top', Math.min(
              scroll + window.innerHeight - $('.left-container')[0].offsetHeight - $('.services-container').offset().top,
              $('.services-container')[0].offsetHeight - $('.left-container')[0].offsetHeight,
            ) + 'px');
          }
        } else {
          if ($('.left-container')[0].offsetTop + $('.services-container').offset().top > scroll + 80) {
            $('.left-container').css('top', Math.max(
              0,
              scroll + 80 - $('.services-container').offset().top,
            ) + 'px');
          }
        }
        lastScroll = scroll;
      });
    </script>
</head>

<body>

<?php
  include $pathPrefix . 'php/header.php';
?>
<div class="img-header" style="background-image: url('<?php echo $pathPrefix . $country['backgroundImage']; ?>')">
  <div class="cover"></div>
  <div class="content">
    <div class="package-name">
      <?php echo $package['name']; ?> Package
    </div>
    <div class="time">
      Discover <?php echo $country['name']; ?><br>
      in <?php echo $package['time']; ?>
    </div>
  </div>
</div>

<div class="brochure-viewer" id="brochure-viewer">
    <div class="extend-resize">
        <img src="<?php echo $pathPrefix; ?>img/resize.png" alt="" class="resize">
        <a href="#" class="jump-to-service">
            <img src="<?php echo $pathPrefix; ?>img/extend.png" alt="" class="extend">
        </a><!-- this should be called jumping down -->
    </div>
    <div class="section brochure-section brochure-container container">
        <div class="row introduction">
            <div class='col-6 welcome-section'>
              <div>
                <h1>Welcome!</h1>
                <?php echo $package['slogan'] ?>
              </div>
            </div>
            <div class='col-6 brochure-col'>
                <!-- INTERACTIVE BROCHURE -->
                <div class="row" id='slideshow'>
                    <!-- Book Cover -->
                    <div id="brochure-cover" class="hard" style="background-image:url('<?php echo $pathPrefix . $package['cover'] ?>')"></div>
                    <?php
                      $pageC = 0;
                      function getBookpage($service) {
                        global $pathPrefix, $pageC, $package, $country;
                        return (
                          '<!-- Page ' . ++$pageC . ' -->
                          <div>
                              <div class="white-overlay"></div>
                              <img src="' . $pathPrefix . $service['imageL'] . '" class="img-responsive img-even">
                              <div class="nameTag">
                                  ' . strtoupper($service['name']) . '
                                  <span class="show-more"><i class="fas fa-angle-double-right"></i></span>
                              </div>
                              <!-- Detail View -->
                              <div class="detailTour">
                                  <div>
                                      <h1>' . strtoupper($service['name']) . '</h1>
                                      <span class="close-btn"><i class="fas fa-times"></i></span>
                                      <div class="description">
                                        <p>' . $service['description'] . '</p>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div>
                              <div class="white-overlay"></div>
                              <img src="' . $pathPrefix . $service['imageR'] . '" class="img-responsive img-odd">
                          </div>'
                        );
                      }

                      echo join(array_map('getBookpage', $services), '');
                    ?>
                    <!-- last page -->
                    <div>
                        <div class="black-overlay"></div>
                        <img src="<?php echo $pathPrefix . array_values($services)[0]['imageL']; ?>" class="img-responsive img-even">
                    </div>
                    <div>
                        <div class="black-overlay"></div>
                        <img src="<?php echo $pathPrefix . array_values($services)[0]['imageR']; ?>" class="img-responsive img-odd">
                    </div>
                </div>
                <!-- Hand animation -->
                <div class="h-icon">
                    <div class="icon-wrapper">
                        <div class="hand-icon">
                            <div class="hand">
                                <div class="circle"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Last brochure page elements -->
            <div class="lastBrochure">
                <h2>Thank you for choosing our services!</h2>
                <div>
                    <a href="<?php echo $pathPrefix; ?>my-package/my-package.php" class="button-pink">See My Package</a>
                    <a href="#services-block" class="button-pink">All Services</a>
                    <a href="#slideshow" class="button-pink go-back">Go Back</a>
                </div>
            </div>
        </div>

        <!-- Navigation -->
        <div class="footnote">
            <?php
              $serviceC = 0;
              function getDot($service) {
                global $serviceC;
                return '<span class="nav-dot" id="page' . ++$serviceC . '"><i class="fas fa-circle dot' . ($serviceC - 1) . ' dots"></i></span>';
              }
              echo join(array_map('getDot', $services), '')
            ?>
            <span class="nav-dot" id="page<?php echo count($services) + 1; ?>"><i class="fas fa-circle dot<?php echo count($services); ?> dots"></i></span> <!-- Circle -->
        </div>

        <div id="moving-down-icon">
            <p>Or jump to see all the services</p>
            <a href="#services-block">
                <i class="fas fa-chevron-circle-down"></i>
            </a>
        </div>
    </div>
</div>

<!--div id='supplementalDiv'></div-->
<!--div id='mobileButtons'>
    <div id="filterButton">Filters</div>
    <div id="featureButton">Featured</div>
</div-->

<div class="section services-section">
    <div class="title">What is included in <?php echo $package['name'] . ' Package'; ?></div>
    <div class="services-all-container">
        <div class="services-header" id='filterForm'>
          <div class="path">
            <a href="../index.php#<?php echo $country['key']; ?>">Home</a> > <a href="../<?php echo $country['key']; ?>"><?php echo $country['name']; ?> packages</a> > <?php echo $package['name']; ?> Package
          </div>
          <div class="fill"></div>
          <form id="filter" method="POST">
            <select id="filter-services" name="filter">
              <option value="filter" selected hidden disabled>Filters</option>
              <option value="arts">Arts & Museums</option>
              <option value="city">City Tour</option>
              <option value="food">Food Related</option>
              <option value="inside">Inside Programs</option>
              <option value="outside">Outside Programs</option>
              <option value="water">Water Related</option>
              <option value="all">Show All</option>
            </select>
          </form>
          <form name="featured" method="POST">
            <select id="featured" class="pink-select">
              <option value="featured" selected hidden disabled>Featured</option>
              <option value="most-view">Most Viewed</option>
              <option value="most-cheered">Most Cheered</option>
              <option value="most-chosen">Most Chosen</option>
              <option value="lowest-price">Lowest Price</option>
              <option value="highest-price">Highest Price</option>
            </select>
          </form>
        </div>
        <hr class="fine-hr">
        <div class="services-intro">Add your favourite services to your package. You can also add services from different countries as you have chosen <?php echo $package['name']; ?> Package</div>
        <div class="services-container">
          <div class="left-container">
            <div class="info-container">
              <div class="title">YOUR PACKAGE</div>
              <?php
                if ($package['time'] != '6 hours') {
                  echo '
                    <div class="part part-country">
                      <i class="fas fa-map-marker-alt"></i>
                      <div class="info-right">
                        <div class="title">
                          Country
                        </div>
                        <div class="content">' .
                          join(array_map(function($country) {
                            return '
                              <div class="country-selector country-selector-' . $country['key'] . '">
                                <div class="name">' . $country['name'] . '</div>
                                <div class="selector selector-' . $country['key'] . '"></div>
                              </div>
                            ';
                          }, $countries), '')
                        . '</div>
                      </div>
                    </div>
                  ';
                }
              ?>
              <div class="part part-date">
                <i class="fas fa-calendar-alt"></i>
                <div class="info-right">
                  <div class="title">
                    Date
                  </div>
                  <div class="content">
                    <span class="start-date"></span> - <span class="end-date"></span>
                  </div>
                </div>
              </div>
              <div class="part part-people">
                <i class="fas fa-users"></i>
                <div class="info-right">
                  <div class="title">
                    Travelers
                  </div>
                  <div class="content">
                    <span class="people"></span>
                  </div>
                </div>
              </div>
              <div class="part part-time">
                <i class="far fa-clock"></i>
                <div class="info-right">
                  <div class="title">
                    Duration
                  </div>
                  <div class="content">
                    <span class="duration"></span> hours / <span class="total-time"></span> hours
                  </div>
                  <div class="progress-circle">
                    <svg class="svg"></svg>
                    <div class="cover"></div>
                    <span class="content">
                      <span class="title total-time"></span><br>
                      <span class="content">hours</span>
                    </span>
                  </div>
                  <div class="package-info">
                    <span class="duration"></span> hours package
                  </div>
                  <div class="list">
                    <?php
                      $i = 0;
                      $currCurrency;
                      $serviceKey;
                      echo join(array_map(function($service) {
                        global $servicesAll, $i, $countries, $package, $currCurrency, $serviceKey;
                        $currCurrency = $countries[$service['country']]['currency'];
                        $serviceKey = $service['key'];
                        $i = $i + 1;
                        $ret = '
                          <div class="line service-line-' . $service['key'] . '">
                            ' . (array_key_exists('choices', $service) ? '' : '<div class="remove remove-service remove-service-' . $service['key'] . '">X  </div>') . '
                            <div class="dot"></div>
                            <div class="name">' . $service['name'] . '</div>
                            <div style="flex: 1"></div>
                            <div class="time"><span class="service-hour-' . $service['key'] . '">' . (gettype($service['hour']) == 'array' ? $service['hour'][$package['time']] : $service['hour']) . '</span> hours</div>
                          </div>
                        ';
                        if (array_key_exists('choices', $service)) {
                          $ret = $ret . join(array_map(function($choice) {
                            global $currCurrency, $serviceKey;
                            return '
                              <div class="line choice-line-' . $choice['key'] . '">
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<div class="remove remove-choice remove-choice-' . $serviceKey . '|' . $choice['key'] . '">X  </div>
                                <div class="name">' . $choice['name'] . '</div>
                                <div style="flex: 1"></div>
                                <div class="time"><span class="choice-hour-' . $choice['key'] . '">' . (gettype($choice['hour']) == 'array' ? $choice['hour'][$package['time']] : $choice['hour']) . '</span> hours</div>
                              </div>
                            ';
                          }, $service['choices']));
                        }
                        return $ret;
                      }, $servicesAll), '');
                    ?>
                  </div>
                </div>
              </div>
              <div class="part part-budget" style="border: none">
                <i class="fas fa-euro-sign"></i>
                <div class="info-right">
                  <div class="title">
                    Your Total Price
                  </div>
                  <div class="progress-circle">
                    <svg class="svg"></svg>
                    <div class="cover"></div>
                    <span class="content">
                      <span class="title total-price"></span><br>
                      <span class="content"><span class="currency"></span></span>
                    </span>
                  </div>
                  <div class="list">
                    <div class="line service-line-' . $service['key'] . '">
                      <div class="name">Booking fee</div>
                      <div style="flex: 1"></div>
                      <div class="time"><span class="booking-fee"><?php echo $package['bookingFee'] ?></span> <span class="currency"><?php echo $countries[$service['country']]['currency']; ?></span></div>
                    </div>
                    <?php
                      $i = 0;
                      $currCurrency;
                      $serviceKey;
                      echo join(array_map(function($service) {
                        global $servicesAll, $i, $countries, $package, $currCurrency, $serviceKey;
                        $currCurrency = $countries[$service['country']]['currency'];
                        $serviceKey = $service['key'];
                        $i = $i + 1;
                        $ret =  '
                          <div class="line service-line-' . $service['key'] . '">
                            ' . (array_key_exists('choices', $service) ? '' : '<div class="remove remove-service remove-service-' . $service['key'] . '">X  </div>') . '
                            <div class="dot"></div>
                            <div class="name">' . $service['name'] . '</div>
                            <div style="flex: 1"></div>
                            <div class="time"><span class="service-price-' . $service['key'] . '">' . (gettype($service['price']) == 'array' ? $service['price'][$package['time']] : $service['price']) . '</span> <span class="currency">' . $countries[$service['country']]['currency'] . '</span></div>
                          </div>
                        ';
                        if (array_key_exists('choices', $service)) {
                          $ret = $ret . join(array_map(function($choice) {
                            global $currCurrency, $serviceKey;
                            return '
                              <div class="line choice-line-' . $choice['key'] . '">
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<div class="remove remove-choice remove-choice-' . $serviceKey . '|' . $choice['key'] . '">X  </div>
                                <div class="name">' . $choice['name'] . '</div>
                                <div style="flex: 1"></div>
                                <div class="time"><span class="choice-price-' . $choice['key'] . '">' . (gettype($choice['price']) == 'array' ? $choice['price'][$package['time']] : $choice['price']) . '</span> <span class="currency">' . $currCurrency . '</span></div>
                              </div>
                            ';
                          }, $service['choices']));
                        }
                        return $ret;
                      }, $servicesAll), '');
                    ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="button">
              <a id="checkout" class="edge-btn-pink" href="<?php echo $pathPrefix; ?>my-package/my-package.php">Check out</a>
            </div>
          </div>
          <div class="services">
            <?php
              $countryC = $country;
              $servicesC = [];

              function getCountryNode($country) {
                global $countryC, $services_data, $servicesC;
                $countryC = $country;

                $servicesC = [];
                array_walk($services_data, function($service) {
                  global $servicesC, $countryC, $package;
                  if ($service['country'] != $countryC['key']) return;
                  if (array_key_exists('onlyFor', $service) && !in_array($package['time'], $service['onlyFor'])) return;
                  array_push($servicesC, $service);
                });

                return '
                  <div class="services-country services-country-' . $country['key'] . '">
                    <div class="title">
                      <div class="country-name">' . $country['name'] . '</div><div style="flex: 1"></div>' .
                      join(array_map(function($city) {
                        global $countryC;
                        return '
                          <div class="city city-' . $countryC['key'] . '-' . $city['key'] . '">
                            ' . $city['name'] . '
                          </div>
                        ';
                      }, $country['citys']), ' ') . '
                    </div>
                    <div class="services-container">
                ' . join(array_map(function ($service) {
                  global $pathPrefix, $countryC, $package;
                  $tags = join(array_map(function($tag) {
                    return 'service-tag-' . $tag;
                  }, $service['tags']), ' ');
                  return (
                    '<div id="' . $service['key'] . '" class="thumbnail-container col-4 ' . $service['key'] . ' service-tag ' . $tags . '">
                      <div class="hover-container">
                        <div class="thumbnail" style="background-image:url(\'' . $pathPrefix . $service['image'] . '\')"></div>
                        <div class="cover"></div>
                        <div class="body">
                          <div class="name">' . $service['name'] . '</div>
                        </div>
                        <div class="footer footer-hide">
                        ' . (gettype($service['choices']) == 'array' ? '<div class="footer-time"></div>' : ('
                          <div class="footer-time">' . (gettype($service['hour']) == 'array' ? $service['hour'][$package['time']] : $service['hour']) . ' hours</div>
                          <div class="footer-price"><span class="service-price-' . $service['key'] . '">' . (gettype($service['price']) == 'array' ? $service['price'][$package['time']] : $service['price']) . '</span> <span class="currency">' . $countryC['currency'] . '</span></div>')) .
                        '</div>
                        <div class="color-overlay"></div>
                        <div class="service-desc">
                          <div class="service-desc-body">
                            <h3>' . $service['name'] . '</h3>
                            <div class="' . (strlen($service['descriptionShort']) > 240 ? 'desc-superlong' : strlen($service['descriptionShort']) > 200 ? 'desc-long' : '') . '">' . $service['descriptionShort'] . '</div>
                          </div>
                        </div>
                      </div>
                      <a href="#" class="check edge-btn-white">Choose</a>
                    </div>'
                  );
                } , $servicesC), '')
                . '
                  <div class="choices choices-hide">
                    <div class="left">
                      <div class="cancel"><i class="fas fa-angle-up"></i></div>
                    </div>
                    <div class="container"></div>
                  </div>
                </div></div>';
              }

              echo join(array_map('getCountryNode', $countries), '');
            ?>
          </div>
        </div>
    </div>
</div>

<!-- Dialog for successfully added service -->
<div id="service-added">
    Service added successfully!
</div>

<!-- Alert dialog for existing service -->
<div id="service-exists">
    You have already chosen this service!
</div>

<!-- Dialog for successfully send -->
<div id="budget-exceed">
  <div class="header">
    <div class="icon">!</div>
    You have exceeded your previously chosen duration or budget.
  </div>
  <div class="body">
    Do you want to extend the duration?
  </div>
  <div class="footer">
    <div class="no button">
      No, I delete one.
    </div>
    <div class="yes button btn-white">
      Sure, extend it!
    </div>
  </div>
</div>

<?php
  include $pathPrefix . 'php/chat.php';
?>

<?php
  include $pathPrefix . 'php/footer.php';
?>

<script type="text/javascript" src="<?php echo $pathPrefix; ?>js/service-filter.js"></script>
<script type="text/javascript" src="<?php echo $pathPrefix; ?>js/booklet.js"></script>

</body>
