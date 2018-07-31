<?php
  $pathPrefix = '';
  $page = 'country';
  $paths = explode('/', realpath('./'));
  for ($i = sizeof($paths) - 1; $i >= 0 && $paths[$i] != 'gb-brochures'; $i--) {
    $pathPrefix .= '../';
  }
  include $pathPrefix . 'php/data.php';

  $country = $countries_data[$countryKey];
  $countries = $countries_data;
  $services = $services_data;

  // Pick available packages for displaying
  $packages = [];
  array_walk($packages_data, function($package) {
    global $packages, $country;
    if ($package['country'] != $country['key']) return;
    array_push($packages, $package);
  });
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Globuzzer</title>
    <!------ STYLESHEETS ------->
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,900|Source+Sans+Pro:400,500,700,900" rel="stylesheet">
    <!-- Simple grid -->
    <link rel="stylesheet" href="<?php echo $pathPrefix; ?>css/simple-grid.css">
    <!-- jQuery -->
    <link rel="stylesheet" href="<?php echo $pathPrefix; ?>css/jquery-ui.theme.min.css">
    <link rel="stylesheet" href="<?php echo $pathPrefix; ?>css/jquery-ui.min.css">
    <!-- Own stylesheet -->
    <link rel="stylesheet" href="<?php echo $pathPrefix; ?>css/style.css">
    <link rel="stylesheet" href="<?php echo $pathPrefix; ?>css/country.css">

    <!------ SCRIPTS ------->
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="<?php echo $pathPrefix; ?>js/jquery-ui.js"></script>
    <!-- Font Awesome -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
    <!-- lodash -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/2.4.1/lodash.min.js"></script>
    <script>
        // import lodash
        _ = _.noConflict();
        // import data
        var pathPrefix = '<?php echo $pathPrefix; ?>';
        var country = <?php echo json_encode($country) ?>;
        var countries = <?php echo json_encode($countries) ?>;
        var packages = <?php echo json_encode($packages) ?>;
        var services = <?php echo json_encode($services) ?>;
    </script>

    <script type="text/javascript" src="<?php echo $pathPrefix; ?>js/script-with-data.js"></script>
    <script>
      if (!localStorage.currency) localStorage.currency = 'EUR';

      var tag = document.createElement('script');
      tag.src = "https://www.youtube.com/player_api";
      var firstScriptTag = document.getElementsByTagName('script')[0];
      firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
      var player;
      function onYouTubePlayerAPIReady() {
        player = new YT.Player('youtube-container', {
          height: '360',
          width: '640',
          videoId: country.video.slice(country.video.lastIndexOf('/') + 1),
        });
      }

      $(document).ready(function() {

        //toggle mobile menu
        $('#mobilemenu').click(function() {
            $('#mainmenu').slideToggle('slow');
        });

        // Shows the number of chosen services in the package
        var clickcount = 0;
        for (var i = 0; i < localStorage.length; i++) {
            var key = localStorage.key(i);
            if (services[key]) {
              clickcount++;
            }
        }
        localStorage.clickcount = clickcount;
        if (localStorage.clickcount && localStorage.clickcount != 0) {
            $("#num-packages").html(localStorage.clickcount);
        } else {
            $("#num-packages").hide();
        }

        var currCountry = countries['sweden'];
        _.each(countries, function(country) {
          if (location.href.indexOf(country.key) != -1) {
            currCountry = country;
            return false;
          }
        });
        $('#city-select').val(currCountry.key);
        setCountry(currCountry);

        setDuration(localStorage.duration);

        $('.duration').on('blur', function(evt) {
          setDuration(Number(evt.target.value));
        });
        $('.duration').keydown(function(evt) {
          if (evt.key == 'Enter') {
            setDuration(Number(evt.target.value));
          }
        });

        setBudget(localStorage.budget);
        $('.budget').on('blur', function(evt) {
          setBudget(Number(evt.target.value));
        });
        $('.budget').keydown(function(evt) {
          if (evt.key == 'Enter') {
            setBudget(Number(evt.target.value));
          }
        });

        localStorage.currency = country.currency;
        setCurrency(localStorage.currency);
        $('.currency').on('change', function() {
          setCurrency($(this).val());
        });

        $('#suggest').click(function() {
          $('.package-part').removeClass('package-part-on');
          if (localStorage.duration <= 6) {
            $('.6-hours').addClass('package-part-on');
          } else if (localStorage.duration <= 24) {
            $('.1-day').addClass('package-part-on');
          } else {
            $('.2-days').addClass('package-part-on');
          }
          $('html, body').animate({
            scrollTop: $(".section.packages").offset().top - 70,
          }, 500);
        });

        $('.youtube-wrapper .play').click(function() {
          $('.youtube-wrapper iframe').attr('src', country.video + '?rel=0&amp;controls=0&amp;showinfo=0;autoplay=1');
          $('.youtube-wrapper .cover').addClass('cover-on');
        });

        $(window).scroll(function() {
          if ($(window).scrollTop() > $('.section.video').offset().top - 100
            && !$('.youtube-wrapper .cover').hasClass('cover-on')) {
            $('.youtube-wrapper .play').click();
            $('.youtube-wrapper iframe').focus();
          }
        })
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
    Welcome to <?php echo $country['name'] ?>
  </div>
</div>

<div class="section welcome">
  <div class="title">Welcome to <?php echo $country['name'] ?></div>
  <div class="welcome-container">
    <div class="selector-container">
      <div class="selector selector-duration">
        <div class="title">&nbsp;</div>
        <div class="body">
          <div class="name">Duration of trip in hours</div>
          <img src="<?php echo $pathPrefix; ?>img/duration.svg"></img>
          <input class="duration" type="number" value="6" maxlength="3" placeholder="Type a number"></input>
        </div>
      </div>
      <div class="button-container">
        <div id="suggest" class="edge-btn-pink">Suggest a package</div>
      </div>
      <!--
      <div class="selector selector-budget">
        <div class="title">Your budget</div>
        <div class="body">
          <img src="<?php echo $pathPrefix; ?>img/budget.svg"></img>
          <input class="budget" type="text" value="1000" maxlength="4" placeholder="Type a number"></input>
        </div>
      </div>
      <div class="selector selector-currency">
        <div class="title">Currency</div>
        <div class="body">
          <img src="<?php echo $pathPrefix; ?>img/currency.svg"></img>
          <select class="currency">
            <option value="EUR">EUR</option>
            <option value="SEK">SEK</option>
            <option value="NOK">NOK</option>
            <option value="DKK">DKK</option>
          </select>
        </div>
      </div>
      -->
    </div>
  </div>
</div>

<div class="section packages">
  <div class="title">Choose a package</div>
  <div class="packages-container">
    <img class="brochure-img" src="<?php echo $pathPrefix . $country['brochureImage']; ?>" alt="<?php echo $package['time']; ?>-brochure"></img>
    <?php
      echo '
        <div class="packages-row ' . $country['key'] . '">' .
          join(array_map(function($package) {
            global $country, $pathPrefix;
            return ('
              <div class="package-part ' . join(explode(' ', $package['time']), '-') . '">
                <div class="package-image" style="background-image: url(\'' . $pathPrefix . $package['image'] . '\')"></div>
                <div class="package-name">
                  ' . strtoupper(join(explode(' ', $package['name']), ' ')) . '<br>PACKAGE
                </div>
                <div class="package-button">
                  <a href="' . $pathPrefix . $package['key'] . '/index.php" class="edge-btn-pink">Choose</a>
                </div>
                <div class="package-hover">
                  <div class="name">
                    ' . strtoupper(join(explode(' ', $package['name']), ' ')) . '<br>PACKAGE
                  </div>
                  <p class="package-desc">' . $package['description'] . '</p>
                </div>
              </div>
            ');
          }, $packages), '') . '
        </div>';
    ?>
  </div>
</div>

<div class="section video">
  <div class="youtube-wrapper">
    <div id="youtube-container"></div>
    <div class="cover" style="background-image: url('<? echo str_replace('embed', 'vi', str_replace('www.youtube', 'img.youtube', $country['video'])); ?>/0.jpg'">
      <div class="color"></div>
      <div class="play">
        <img src="<?php echo $pathPrefix; ?>img/video-play.png"></img>
      </div>
    </div>
  </div>
</div>

<?php
  include $pathPrefix . 'php/chat.php';
?>

<?php
  include $pathPrefix . 'php/footer.php';
?>

</body>

</html>
