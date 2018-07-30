/* global: countries, packages, swiper */

function setCountry(country, wBanSwipe) {
  $('.img-header').css("background-image", "url('" + (typeof pathPrefix !== 'undefined' ? pathPrefix : '') + country.backgroundImage + "'");
  $('.intro .discover').text(country.intro);

  var countryIndex = -1;
  var i = -1;
  _.each(countries, (countryA) => {
    i++;
    if (country.key == countryA.key) countryIndex = i;
    $('.' + countryA.name.toLowerCase()).hide();
    $('.country-card.' + countryA.key + '-card').removeClass('country-card-on');
    $('.' + countryA.key + '-dot').removeClass('dot-on');
  });
  $('.' + country.name.toLowerCase()).show();
  $('.country-card.' + country.key + '-card').addClass('country-card-on');
  $('.' + country.key + '-dot').addClass('dot-on');

  $('.search').attr('href', country.key);

  if (typeof swiper != 'undefined' && swiper && !wBanSwipe) {
    swiper.slideTo(countryIndex + 1);
  }

  $('.' + country.key + '-video').removeClass('video-small');
  $('.' + country.key + '-video .tag').show();
  $('.' + country.key + '-video .slide').hide();
  _.each(countries, (countryA) => {
    if (countryA.key == country.key) return;
    $('.' + countryA.key + '-video').addClass('video-small');
    $('.' + countryA.key + '-video .tag').hide();
    $('.' + countryA.key + '-video .slide').show();
  });
}

function setCity() {
  $('.city').removeClass('city-on');
  var cityKeys = localStorage.citys.split(',');
  _.each(cityKeys, function(cityKey) {
    if (!cityKey) return;
    var countryKey;
    _.each(countries, function(country) {
      if (country.citys && country.citys[cityKey]) {
        countryKey = country.key;
        return false;
      }
    });
    if (!countryKey) return;
    $('.city-' + countryKey + '-' + cityKey).addClass('city-on');
  });

  _.each(countries, function(country) {
    var wSelect = false;
    _.each(country.citys, function(city) {
      if (cityKeys.includes(city.key)) {
        wSelect = true;
        return false;
      }
    });
    if (!wSelect) {
      _.each(servicesAll, function(service) {
        if (service.country != country.key) return;
        _.each(service.choices, function(choice) {
          $('.' + choice.key).show();
        });
      });
    } else {
      _.each(servicesAll, function(service) {
        if (service.country != country.key) return;
        _.each(service.choices, function(choice) {
          if (!choice.city) {
            $('.' + choice.key).show();
          } else {
            $('.' + choice.key).hide();
          }
        });
      });
      _.each(country.citys, function(city) {
        if (cityKeys.includes(city.key)) {
          $('.choice-city-' + city.key).show();
        } else {
          $('.choice-city-' + city.key).hide();
        }
      });
    }
  });
}

// adds Item to local storage and increases the counter by 1
function addItem(id, forcedAdd) {
  if (!$('.choices').hasClass('choices-hide')) {
    if (!servicesAll[id].choices) {
      $('.choices').addClass('choices-hide');
      $('.service-tag').removeClass('service-tag-open');
    }
  }
  if (servicesAll[id].choices) {
    var serviceC = servicesAll[id];
    var packageC = packages[serviceC.package];
    var choices = serviceC.choices;
    var delay = 0;
    if ($('.service-tag.' + serviceC.key).hasClass('service-tag-open')) {
      $('.choices').addClass('choices-hide');
      $('.service-tag.' + serviceC.key).removeClass('service-tag-open');
      return;
    }
    if (!$('.choices').hasClass('choices-hide')) {
      $('.service-tag').removeClass('service-tag-open');
      $('.choices').addClass('choices-hide');
      delay = 250;
    }
    setTimeout(function() {
      $('.choices .container').html(_.map(choices, (choice, key) => {
        var choiceTime = typeof choice.hour == 'undefined' ? 0 : (typeof choice.hour == 'object' ? choice.hour[packageC.time] : choice.hour);
        var choicePrice = typeof choice.price == 'undefined' ? 0 : (typeof choice.price == 'object' ? choice.price[packageC.time] : choice.price);
        return (
          '<div class="thumbnail-container choice ' + key + ' ' + (choice.city ? 'choice-city-' + choice.city : '') + '">' +
          '  <div class="hover-container">' +
          '    <div class="thumbnail" style="background-image:url(\'' + pathPrefix + choice.image + '\')"></div>' +
          '    <div class="cover"></div>' +
          '    <div class="body">' +
          '      <div class="name">' + choice.name + '</div>' +
          '    </div>' +
          '    <div class="footer">' +
          (choiceTime ? '      <div class="footer-time">' + choiceTime + ' hours</div>' : '') +
          (choicePrice ? '      <div class="footer-price">' + choicePrice + ' ' + countries[serviceC.country].currency + '</div>' : '') +
          '    </div>' +
          '    <div class="color-overlay"></div>' +
          '    <div class="service-desc">' +
          '      <div class="service-desc-body">' +
          '        <h3>' + choice.name + '</h3>' +
          '        <div class="choice-description ' + (choice.description.length > 220 ? 'desc-superlong' : choice.description.length > 150 ? 'desc-long' : '') + '">' + choice.description + '</div>' +
          '      </div>' +
          '    </div>' +
          '  </div>' +
          '  <svg class="choose ' + key + 'svg-inline--fa fa-check-circle fa-w-16 icon unHoverCheck" aria-hidden="true" data-prefix="far" data-icon="check-circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">' +
          '' + unHoverCheck +
          '    </path>' +
          '  </svg>' +
          '</div>'
        );
      }).join(''));
      var keys = (localStorage.getItem(id) || '').split(',');
      _.each(keys, function(item, key) {
        if (!item) return;
        $('.choice.' + item + ' .choose').html(hoverCheck);
      });
      $('.cancel').click(function() {
        $('.service-tag').removeClass('service-tag-open');
        $('.choices').addClass('choices-hide');
      });
      $('.choices .choice').click(function(evt) {
        evt.preventDefault();
        var className = $(this).attr('class');
        var choiceKey = className.slice(className.indexOf(' ', 25) + 1, className.indexOf(' ', className.indexOf(' ', 25) + 1));
        addChoice(serviceC.key + '|' + choiceKey);
      });
      $('.service-tag.' + serviceC.key).addClass('service-tag-open');
      $('.choices').css('top', $('.service-tag.' + serviceC.key)[0].offsetTop + 390);
      $('.choices').removeClass('choices-hide');

      setCity();
    }, delay);
    return;
  }
  var $numPackages = $("#num-packages");
  if(localStorage[id]) {
    // removes item from local storage
    localStorage.removeItem(id);
    localStorage.clickcount = Number(localStorage.clickcount) - 1;
    $numPackages.html(localStorage.clickcount);
    // sets thumbnails to the right state
    setThumbnailState();
    // looks, if the current opened page in the brochure is concerned.
    var currPage = $slideshow.turn('page');
    var currService = getCurrentService(currPage);
    if(!localStorage[currService]) {
      setChooseState();
    }
    //fail.dialog("open");
    setTotalTime();
    setTotalPrice();
  } else {
    var service = servicesAll[id];
    /*
    var priceC = typeof service.price == 'undefined' ? 0 :
      typeof service.price == 'number' ? service.price :
      service.price[package.time];
    */
    var hourC = typeof service.hour == 'undefined' ? 0 :
      typeof service.hour == 'number' ? service.hour :
      service.hour[package.time];

    exceedPrice = 0;
    exceedDuration = 0;
    /*
    if (!forcedAdd && getTotalPrice() + priceC / rates[countries[service.country].currency] * rates[localStorage.currency] > localStorage.budget) {
      exceedKey = id;
      exceedPrice = getTotalPrice() + priceC / rates[countries[service.country].currency] * rates[localStorage.currency];
    } */
    if (!forcedAdd && getTotalTime() + hourC > localStorage.duration) {
      exceedKey = id;
      exceedDuration = getTotalTime() + hourC;
    }
    if (exceedPrice || exceedDuration) {
      budgetExceed.dialog('open');
      return;
    }

    if(typeof(Storage) !== "undefined") {
      if (localStorage.clickcount) {
        localStorage.clickcount = Number(localStorage.clickcount)+1;
      } else {
        localStorage.clickcount = 1;
      }
      $numPackages.html(localStorage.clickcount);
      $numPackages.show();
    }
    localStorage.setItem(id, id);
    localStorage.setItem('package-' + servicesAll[id].country, package.key);
    success.dialog("open");
    setThumbnailState()

    setTotalTime();
    setTotalPrice();
  }
}

function addChoice(id, forcedAdd) {
  var serviceId = id.split('|')[0];
  var choiceKey = id.split('|')[1];
  console.log(serviceId, choiceKey);
  var keys = (localStorage.getItem(serviceId) || '').split(',');
  if (keys.includes(choiceKey)) {
    var keysO = keys;
    keys = [];
    _.each(keysO, function(item, key) {
      if (!item) return;
      if (item === choiceKey) return;
      keys.push(item);
    });
    $('.choice.' + choiceKey + ' .choose').html(unHoverCheck);
  } else {
    var choice = servicesAll[serviceId].choices[choiceKey];
    var hourC = typeof choice.hour == 'undefined' ? 0 :
      typeof choice.hour == 'number' ? choice.hour :
      choice.hour[package.time];

    exceedPrice = 0;
    exceedDuration = 0;
    /*
    if (!forcedAdd && getTotalPrice() + priceC / rates[countries[service.country].currency] * rates[localStorage.currency] > localStorage.budget) {
      exceedKey = id;
      exceedPrice = getTotalPrice() + priceC / rates[countries[service.country].currency] * rates[localStorage.currency];
    } */
    if (!forcedAdd && getTotalTime() + hourC > localStorage.duration) {
      exceedKey = id;
      exceedDuration = getTotalTime() + hourC;
    }
    if (exceedPrice || exceedDuration) {
      budgetExceed.dialog('open');
      return;
    }

    var keysO = keys;
    keys = [];
    _.each(keysO, function(item, key) {
      if (!item) return;
      keys.push(item);
    });
    keys.push(choiceKey);
    $('.choice.' + choiceKey + ' .choose').html(hoverCheck);
  }
  if (!keys.length) {
    localStorage.removeItem(serviceId);
    $('.' + serviceId + ' .footer').html('');
    $('.' + serviceId + ' .footer').addClass('footer-hide');
  } else {
    localStorage.setItem(serviceId, keys);
  }
  setPackageNum();
  setThumbnailState();
  setTotalTime();
  setTotalPrice();
  setServicesPrice();
}

function setPackageNum() {
  var clickcount = 0;
  for (var i = 0; i < localStorage.length; i++) {
    var key = localStorage.key(i);
    if (typeof servicesAll != 'undefined') {
      if (servicesAll[key]) {
        clickcount++;
      }
    } else if (typeof services != 'undefined') {
      if (services[key]) {
        clickcount++;
      }
    }
  }
  localStorage.clickcount = clickcount;
  if (localStorage.clickcount && localStorage.clickcount != 0) {
    $("#num-packages").html(localStorage.clickcount);
  } else {
    $("#num-packages").hide();
  }
}

var monthNames = [
  'Jan',
  'Feb',
  'Mar',
  'Apr',
  'May',
  'Jun',
  'Jul',
  'Aug',
  'Sep',
  'Oct',
  'Nov',
  'Dec',
];
function setCalendar(id, date, field) {
  var year = date.getFullYear();
  var month = date.getMonth();
  $('.' + id + ' .month').text(year + ' ' + monthNames[month]);
  $('.' + id + ' .left').unbind('click');
  $('.' + id + ' .left').click(function() {
    var dateC = new Date(date.getTime());
    if (month) {
      dateC.setMonth(month - 1);
    } else {
      dateC.setFullYear(year - 1);
      dateC.setMonth(11);
    }
    if (dateC.getFullYear() < new Date().getFullYear()
      || dateC.getFullYear() == new Date().getFullYear() && dateC.getMonth() < new Date().getMonth()) return;
    setCalendar(id, dateC);
  });
  $('.' + id + ' .right').unbind('click');
  $('.' + id + ' .right').click(function() {
    var dateC = new Date(date.getTime());
    if (month < 11) {
      dateC.setMonth(month + 1);
    } else {
      dateC.setFullYear(year + 1);
      dateC.setMonth(0);
    }
    setCalendar(id, dateC);
  });
  var dayC = 0;
  var startDay = date.getDay();
  var startDate = new Date();
  startDate.setFullYear(year);
  startDate.setMonth(month);
  startDate.setDate(1);
  for (var i = 0; i < 6; i++) {
    for (var j = 0; j < 7; j++) {
      var block = $('.' + id + ' .' + i + '-' + j);
      if (dayC == 0) {
        block.text('');
        block.css('pointer-events', 'none');
        if (j == startDay) dayC = 1;
      }
      if (dayC != 0) {
        if (new Date(startDate.getTime() + (dayC - 1) * 24 * 60 * 60000).getMonth() != month) {
          block.hide();
          continue;
        }
        block.show();
        block.text(dayC);
        block.css('pointer-events', 'auto');
        var dateC = new Date(startDate.getTime() + (dayC - 1) * 24 * 60 * 60000);
        if (dateC.getTime() < new Date().getTime() - 24 * 60 * 60000) {
          block.css('opacity', 0.5);
          block.css('pointer-events', 'none');
        } else {
          block.css('opacity', 1);
          block.css('pointer-events', 'auto');
        }
        block.unbind('click');
        (function() {
          var dateC2 = new Date(dateC);
          block.click(function() {
            localStorage[field] = dateC2.toJSON();
            $('.' + id + '-date').text(('0' + dateC2.getDate()).slice(-2) + '/' + ('0' + (dateC2.getMonth() + 1)).slice(-2) + '/' + dateC2.getFullYear());
            $('.' + id).hide();
          });
        })();
        dayC++;
      }
    }
  }
}

function setDuration(duration) {
  if (!duration) duration = 6;

  localStorage.duration = duration;
  $('.duration').val(duration || '');
  $('.duration').text(duration);
}

function setBudget(budget) {
  if (!budget) budget = 1000;

  localStorage.budget = budget;
  $('.budget').val(budget || '');
  $('.budget').text(budget);
}

function getTotalPrice(pack = package, services = servicesAll) {
  var price = pack.bookingFee / rates[countries[pack.country].currency] * rates[localStorage.currency];
  var people = localStorage.people || 1;
  var countriesC = (localStorage.countries || '').split(',');
  for (var i = 0; i < localStorage.length; i++) {
    var key = localStorage.key(i);
    if (services[key]) {
      var service = services[key];
      if (countriesC.includes(service.country)
        && !(service.onlyFor && service.onlyFor.indexOf(pack.time) == -1)) {
        var priceC = typeof service.price == 'undefined' ? 0 :
          typeof service.price == 'number' ? service.price :
          service.price[pack.time];
        if (service.choices) {
          priceC = 0;
          var choices = (localStorage[key] || []).split(',');
          _.each(service.choices, function(choice, key) {
            if (!choices.includes(key)) return;
            var priceB = typeof choice.price == 'undefined' ? 0 :
              typeof choice.price == 'number' ? choice.price :
              choice.price[pack.time];
            if (choice.priceType == 'guide') {
              priceB = priceB / 2 * (people + 1);
            } else {
              priceB = priceB * people;
            }
            priceC += priceB;
          });
        }
        price += priceC / rates[countries[service.country].currency] * rates[localStorage.currency];
      }
    }
  }
  return price;
}

function setTotalPrice() {
  var priceTotal = Math.round(getTotalPrice());
  if (priceTotal < 1000) {
    $('.total-price').text(priceTotal);
  } else {
    $('.total-price').text(((priceTotal / 1000).toFixed(2)) + ' k');
  }
  var bookingFee = Math.round(package.bookingFee / rates[countries[package.country].currency] * rates[localStorage.currency]);
  if (bookingFee < 1000) {
    $('.booking-fee').text(bookingFee);
  } else {
    $('.booking-fee').text(((bookingFee / 1000).toFixed(2)) + ' k');
  }
  localStorage.budget = Math.max(getTotalPrice() * 1.5, 1000);
  var lineN = 0;
  _.each(servicesAll, function(service) {
    if (localStorage.getItem(service.key)) lineN++;
  });
  var lineC = 0;
  var priceA = 0;
  var svg = $('.part-budget .info-right .progress-circle .svg');
  svg.html('');
  _.each(servicesAll, function(service) {
    if (localStorage.getItem(service.key)
      && countriesC.has(service.country)
      && !(service.onlyFor && service.onlyFor.indexOf(package.time) == -1)) {

      var priceC = typeof service.price == 'undefined' ? 0 :
        typeof service.price == 'number' ? service.price :
        service.price[package.time];
      if (service.choices) {
        priceC = 0;
        var choices = (localStorage[service.key] || []).split(',');
        _.each(service.choices, function(choice, key) {
          if (!choices.includes(key)) return;
          priceC += typeof choice.price == 'undefined' ? 0 :
            typeof choice.price == 'number' ? choice.price :
            choice.price[package.time];
        });
        $('.service-price-' + service.key).html(priceC);
      }
      priceC = priceC / rates[countries[service.country].currency] * rates[localStorage.currency];
      var start = priceA / localStorage.budget * 360;
      priceA += priceC;
      var end = priceA / localStorage.budget * 360;
      if (start == 0 && end == 360) end = 359.9;

      lineC++;
      var color = 'rgba(94, 128, 122, ' + lineC / lineN + ')';
      $('.service-line-' + service.key).show();
      $('.service-line-' + service.key + ' .dot').css('background-color', color);

      var x = 75, y = 75, radius = 75;
      var x0 = Math.sin(start / 180 * Math.PI) * radius,
          y0 = -Math.cos(start / 180 * Math.PI) * radius,
          x1 = Math.sin(end / 180 * Math.PI) * radius,
          y1 = -Math.cos(end / 180 * Math.PI) * radius,
          large = end - start > 180 ? 1 : 0;
      svg.html(svg.html() + '<path d="M' + x + ' ' + y + ',L' + (x+x0) + ' ' + (y+y0) + ',A' + radius + ' ' + radius+ ' 0 ' + large + '1 ' + (x+x1) + ' ' + (y+y1) + ',Z" fill="' + color + '"></path>');

      var choices = localStorage.getItem(service.key).split(',');
      _.each(service.choices, function(choice) {
        if (choices.includes(choice.key)) {
          $('.choice-line-' + choice.key).show();
        } else {
          $('.choice-line-' + choice.key).hide();
        }
      });
    } else {
      $('.service-line-' + service.key).hide();
      _.each(service.choices, function(choice) {
        $('.choice-line-' + choice.key).hide();
      });
    }
  });
}

function getTotalTime() {
  var hour = 0;
  for (var i = 0; i < localStorage.length; i++) {
    var key = localStorage.key(i);
    if (servicesAll[key]) {
      var service = servicesAll[key];
      if (countriesC.has(service.country)
        && !(service.onlyFor && service.onlyFor.indexOf(package.time) == -1)) {
        var hourC = typeof service.hour == 'undefined' ? 0 :
          typeof service.hour == 'number' ? service.hour :
          service.hour[package.time];
        if (service.choices) {
          hourC = 0;
          var choices = (localStorage[key] || []).split(',');
          _.each(service.choices, function(choice, key) {
            if (!choices.includes(key)) return;
            hourC += typeof choice.hour == 'undefined' ? 0 :
              typeof choice.hour == 'number' ? choice.hour :
              choice.hour[package.time];
          });
        }
        hour += hourC;
      }
    }
  }
  return hour;
}

function setTotalTime() {
  $('.total-time').text(getTotalTime());var lineN = 0;
  _.each(servicesAll, function(service) {
    if (localStorage.getItem(service.key)) lineN++;
  });
  var lineC = 0;
  var hourA = 0;
  var svg = $('.part-time .info-right .progress-circle .svg');
  svg.html('');
  _.each(servicesAll, function(service) {
    if (localStorage.getItem(service.key)
      && countriesC.has(service.country)
      && !(service.onlyFor && service.onlyFor.indexOf(package.time) == -1)) {

      var hourC = typeof service.hour == 'undefined' ? 0 :
        typeof service.hour == 'number' ? service.hour :
        service.hour[package.time];
      if (service.choices) {
        hourC = 0;
        var choices = (localStorage[service.key] || []).split(',');
        _.each(service.choices, function(choice, key) {
          if (!choices.includes(key)) return;
          hourC += typeof choice.hour == 'undefined' ? 0 :
            typeof choice.hour == 'number' ? choice.hour :
            choice.hour[package.time];
        });
        if (hourC > 0) {
          $('.service-hour-' + service.key).html(hourC);
        } else {
          $('.service-hour-' + service.key).html('---');
        }

        var keys = [];
        _.each((localStorage.getItem(service.key) || []).split(','), function(item) {
          if (item) keys.push(item);
        });
        if (!keys.length) {
          $('.' + service.key + ' .footer').html('');
          $('.' + service.key + ' .footer').addClass('footer-hide');
        } else {
          var price = 0;
          _.each(keys, function(key) {
            if (!service.choices[key]) return;
            price += typeof service.choices[key].price == 'undefined' ? 0 :
              typeof service.choices[key].price == 'object' ? service.choices[key].price[package.time] : service.choices[key].price;
          });
          $('.' + service.key + ' .footer').html(
            (hourC ? '<div class="footer-time">' + hourC + ' hours</div>' : '') +
            (price ? '<div class="footer-price">' + price + ' ' + country.currency + '</div>' : '')
          );
          $('.' + service.key + ' .footer').removeClass('footer-hide');
        }
      }
      var start = hourA / localStorage.duration * 360;
      hourA += hourC;
      var end = hourA / localStorage.duration * 360;

      lineC++;
      var color = 'rgba(94, 128, 122, ' + lineC / lineN + ')';
      $('.service-line-' + service.key).show();
      $('.service-line-' + service.key + ' .dot').css('background-color', color);

      var x = 75, y = 75, radius = 75;
      var x0 = Math.sin(start / 180 * Math.PI) * radius,
          y0 = -Math.cos(start / 180 * Math.PI) * radius,
          x1 = Math.sin(end / 180 * Math.PI) * radius,
          y1 = -Math.cos(end / 180 * Math.PI) * radius,
          large = end - start > 180 ? 1 : 0;
      svg.html(svg.html() + '<path d="M' + x + ' ' + y + ',L' + (x+x0) + ' ' + (y+y0) + ',A' + radius + ' ' + radius+ ' 0 ' + large + '1 ' + (x+x1) + ' ' + (y+y1) + ',Z" fill="' + color + '"></path>');

      var choices = localStorage.getItem(service.key).split(',');
      _.each(service.choices, function(choice) {
        if ($('.choice-hour-' + choice.key).text() == '0') {
          $('.choice-hour-' + choice.key).text('---');
        }
        if (choices.includes(choice.key)) {
          $('.choice-line-' + choice.key).show();
        } else {
          $('.choice-line-' + choice.key).hide();
        }
      });
    } else {
      $('.service-line-' + service.key).hide();
      _.each(service.choices, function(choice) {
        $('.choice-line-' + choice.key).hide();
      });
    }
  });
}

function setServicesPrice() {
  _.each(servicesAll, function(service) {
    var price = 0;
    if (!service.choices) {
      price = typeof service.price == 'undefined' ? 0 :
        typeof service.price == 'number' ? service.price :
        service.price[package.time];
    } else {
      if (!localStorage.getItem(service.key)) return;
      var choices = localStorage.getItem(service.key).split(',');
      _.each(service.choices, function(choice, key) {
        if (!choices.includes(key)) return;
        var priceC = typeof choice.price == 'undefined' ? 0 :
          typeof choice.price == 'number' ? choice.price :
          choice.price[package.time];
        var priceR = priceC / rates[countries[service.country].currency] * rates[localStorage.currency];
        priceR = priceR.toFixed(0);
        if (priceR >= 1000) priceR = (priceR / 1000).toFixed(2) + ' k';
        if (priceR == 0) priceR = '---';
        $('.choice-price-' + choice.key).text(priceR);
        price += priceC;
      });
    }
    price = price / rates[countries[service.country].currency] * rates[localStorage.currency];
    price = price.toFixed(0);
    if (price >= 1000) price = (price / 1000).toFixed(2) + ' k';
    if (price == 0) price = '---';
    $('.service-price-' + service.key).text(price);
  });
}

function setCurrency(currency) {
  $('.currency').val(currency);
  $('span.currency').text(currency);
  localStorage.currency = currency;
  if (typeof servicesAll !== 'undefined') {
    setTotalPrice();
    setServicesPrice();
  }
}
