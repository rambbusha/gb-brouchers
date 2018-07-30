/* global: countries, packges, services, pathPrefix */

var pdf = '';
var newLoaded = true;
var countryC = 'sweden';
var servicesC = [];
var packageC;

function getCanvasTextLine(text, width, ctx) {
  text = text.replace(/<[b|B][r|R]>/g, ' <br> ');
  var wa = text.split(" ");
  var phraseArray = [];
  var lastPhrase = wa[0];
  var measure = 0;
  if (wa.length <= 1) {
    return wa;
  }
  for (var i = 1; i < wa.length; i++) {
    var w = wa[i];
    if (!w || w == ' ') continue;
    if (w == '<br>') {
      phraseArray.push(lastPhrase);
      lastPhrase = '';
      continue;
    }
    measure = ctx.measureText(lastPhrase + ' ' + w).width;
    if (measure < width) {
      lastPhrase += ' ' + w;
    } else {
      phraseArray.push(lastPhrase);
      lastPhrase=w;
    }
    if (i == wa.length-1) {
      phraseArray.push(lastPhrase);
      break;
    }
  }
  return phraseArray;
}

function setServices() {
    var countriesC = [];
    if (localStorage.countries) {
      countriesC = _.map(localStorage.countries.split(','), function(key) {
        return countries[key];
      });
    } else {
      countriesC = [countries.sweden];
    }
    var country = countriesC[0];
    var countriesCKeys = _.map(countriesC, function(country) {
      return country.key;
    });

    // Pick up the services of current country
    servicesC = [];
    _.each(services, (service) => {
      if (countriesCKeys.indexOf(service.country) === -1) return;
      if (localStorage.getItem(service.key)) {
        servicesC.push(service);
      }
    });

    // If no services selected
    if (!servicesC.length) {
      $('.with-select').hide();
      $('.no-select').show();
      $(".chosen-services h3").html("No service is selected yet!");
      $(".chosen-services p").html("Discover our packages and select services that interest you.");
    } else {
      $('.with-select').show();
      $('.no-select').hide();
      $(".chosen-services h3").html("Aren't these the services you wanted?");
      $(".chosen-services p").html("Delete the ones you are not interested in or go back and add the ones you missed.");
    }

    $('.amount').text(servicesC.length);

    var brochures = '';
    _.each(servicesC, function(service, index) {
      var type = index % 5 + 1;
      var title =
        '<div class="title">' +
          '<div class="number">' + ('0' + (index + 1)).slice(-2) + '</div>' +
          '<div class="name">' + service.name.toUpperCase() + '</div>' +
        '</div>';
      var image = '<div class="image" style="background-image: url(\'' + pathPrefix + service.image + '\')"></div>';
      var content = '<div class="content">' + service.descriptionShort + '</div>';
      brochures +=
        '<div class="slice s' + (index + 1) + ' type' + type + '" style="' + (index >= 8 ? 'transform: scale(0)' : '') + '">' +
          '<div id="' + service.key + '-slice-container" class="slice-container">' +
            (type == 1 ? image : title) +
            (type == 1 ? title : (type == 2 || type == 5 ? image : content)) +
            (type == 1 || type == 2 || type == 5 ? content : image) +
            '<div class="block"></div>' +
            '<img id="' + service.key + '-img" src="' + pathPrefix + service.image + '" style="display: none"></img>' +
          '</div>' +
          '<div class="slice-cover"></div>' +
        '</div>';
    });
    $('#my-brochure').html(brochures);

    var cards = '';
    _.each(servicesC, function(service, index) {
      cards +=
        '<div id="' + service.key + '-card" class="service-card">' +
          '<div class="img" style="background-image: url(\'' + pathPrefix + service.image + '\')"></div>' +
          '<div class="service-card-desc">' +
            '<h1>' + service.name + '</h1>' +
            '<p>' + service.descriptionShort + '</p>' +
            '<hr>' +
            '<a href="#' + countryC + '" class="delete-btn">Delete</a>' +
          '</div>' +
        '</div>';
    });
    $('#chosen-sevice-cards').html(cards);

    var price = getTotalPrice(packages[localStorage.package], services);
    $('#price').html(price.toFixed(0));

    // Delete Service
    $(".delete-btn").click(function (e) {
      e.preventDefault();
      var that = $(this);
      // Delete confirm
      $("#delete-confirm").dialog({
        autoOpen: true,
        resizable: false,
        draggable: false,
        height: "auto",
        modal: true,
        show: {
          effect: "drop", duration: 300
        },
        hide: {
          effect: "drop", duration: 300
        },
        buttons: {
          "Yes": function () {
            $(this).dialog("close");
            var key = $(that).parent().parent().attr('id');
            key = key.slice(0, key.length - 5);
            localStorage.removeItem(key);
            setServices();
          },
          Cancel: function () {
            $(this).dialog("close");
          }
        }
      });
    });
}

function setCountry(countriesC) {
    if (countriesC) {
      countriesC = _.map(countriesC.split(','), function(key) {
        return countries[key];
      });
    } else {
      countriesC = [countries.sweden];
    }

    var country = countriesC[0];
    var packageC = packages[localStorage.package];
    $('.index-link').attr('href', '../index.php#' + country.key);
    $('#my-package-link').attr('href', 'my-package.php#' + country.key);
    $('.country-name').text(_.map(countriesC, function(country) {
      return country.name;
    }).join(', '));
    if (packageC) {
      $('.package-name').text(packageC.name);
      $('#add-more').attr('href', '../' + packageC.key + '/index.php');
    } else {
      $('#add-more').attr('href', '../index.php#' + countryC);
    }

    setServices();
}

// Creates a jsPDF file of the chosen services.
function createPDF() {
  pdf = new jsPDF("1", "pt");
  pdf.deletePage(1);

  _.each(servicesC, function(service, index) {
    pdf.addPage(239.75, 582.25);
    var width = pdf.internal.pageSize.width;
    var height = pdf.internal.pageSize.height;

    var cav = document.createElement('canvas');
    cav.width = 448;
    cav.height = 1088;
    var ctx = cav.getContext('2d');
    ctx.fillStyle = '#FFFFFF';
    ctx.fillRect(0, 0, cav.width, cav.height);

    var type = index % 5 + 1;
    var y = 0;
    if (type != 1) y = 50;

    var drawImage = function() {
      var img = document.getElementById(service.key + '-img');
      var widthL = cav.width;
      var heightL = cav.width * 0.75;
      var ratio = Math.min(img.width / widthL, img.height / heightL);
      ctx.drawImage(img,
        img.width / 2 - ratio * widthL / 2,
        img.height / 2 - ratio * heightL / 2,
        img.width / 2 + ratio * widthL / 2,
        img.height / 2 + ratio * heightL / 2,
        0, y, widthL, heightL
      );
      y += heightL;
    }

    var drawTitle = function() {
      ctx.font = 'bold 45px Roboto';
      ctx.fillStyle = '#e75152';
      y += 75;
      ctx.fillText(('0' + (index + 1)).slice(-2), 45, y);
      y += 55;
      ctx.font = 'bold 38px Roboto';
      ctx.fillStyle = '#000000';
      var phrases = getCanvasTextLine(service.name.toUpperCase(), cav.width - 45 * 2, ctx);
      _.each(phrases, function(phrase) {
        ctx.fillText(phrase, 45, y);
        y += 45;
      });
      y += 45;
    }

    var drawContent = function() {
      if (type == 2 || type == 5) {
        y += 62;
      }
      ctx.font = '30px Roboto';
      ctx.fillStyle = '#000000';
      var phrases = getCanvasTextLine(service.descriptionShort.replace(/\r?\n|\r/g, ''), cav.width - 45 * 2, ctx);
      _.each(phrases, function(phrase) {
        ctx.fillText(phrase, 45, y);
        y += 42;
      });
      y += 10;
    }

    var drawBlock = function() {
      ctx.fillStyle = 'rgba(231, 81, 82, 0.6)';
      switch (type) {
        case 1:
          ctx.fillRect(0, 0.2 * cav.height, 25, 0.55 * cav.height);
          break;
        case 2:
          ctx.fillRect(cav.width - 40, 0, 40, 0.55 * cav.height);
          break;
        case 3:
          ctx.fillRect(0, cav.height - 45, cav.width, 45);
          break;
        case 4:
          ctx.fillRect(0, cav.height - 45, 0.25 * cav.width, 45);
          break;
        case 5:
          ctx.fillRect(cav.width - 40, 0.55 * cav.height, 40, 0.45 * cav.height);
          break;
        default:
      }
    }

    if (type == 1) {
      drawImage();
    } else {
      drawTitle();
    }
    if (type == 1) {
      drawTitle();
    } else if (type == 2 || type == 5) {
      drawImage();
    } else {
      drawContent();
    }
    if (type == 1 || type == 2 || type == 5) {
      drawContent();
    } else {
      drawImage();
    }
    drawBlock();

    pdf.addImage(cav.toDataURL('image/jpeg'), 'JPEG', 0, 0, width, height);
  });

  return pdf;
}

// validates email address
function validateEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}

// hides the brochure
function hideBrochure() {
    $("#my-brochure").children().hide();
}

// Fetches chosen packages from local storage
function getChosenPackages() {
    for (var i = 0; i < localStorage.length; i++) {
        var key = localStorage.key(i);
        if (key !== 'clickcount') {
            var item = localStorage.getItem(localStorage.key(i));
            if(newLoaded) showPackage(item);
            showInBrochure(item, i);
        }
    }
    newLoaded = false;
}

// Shows the chosen services in a brochure
function showInBrochure(item, i) {
    var $page = $(".s"+i);
    var service = getService(item);
    $page.css("background-image", "url('" + service.getBrochureImg() + "'");
    $page.show();
}

// Goes through the service array and fetches the current service.
function getService(service) {
    for (var i = 0; i < window.services.length; i++)
        if (window.services[i].id === service) return services[i];
}

// shows the chosen packages
function showPackage(item) {
    var currObj = getService(item);
    var imageURL = currObj.getImgURL();
    var name = currObj.getName();

    var html = '<div id="' + item + '" class="service-card">' +
        '                <div class="img" style="background-image: url(' + imageURL + ')"></div>' +
        '                <div class="service-card-desc">' +
        '                    <h1>' + name + '</h1>' +
        '                    <p>Lorem ipsum dolor sit amet<br>' +
        '                        Lorem ipsum dolor...</p>' +
        '                    <hr>' +
        '                    <a href="#" class="delete-btn">Delete</a>' +
        '                </div>' +
        '            </div>';

    $(".chosen-services").append(html);
}

function setCurrency(currency) {
  $('.currency').val(currency);
  $('span.currency').text(currency);
  localStorage.currency = currency;
  if (typeof servicesAll !== 'undefined') setTotalPrice();
}
