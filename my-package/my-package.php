<?php
  $pathPrefix = '';
  $page = 'cart';
  $paths = explode('/', realpath('./'));
  for ($i = sizeof($paths) - 1; $i >= 0 && $paths[$i] != 'gb-brochures'; $i--) {
    $pathPrefix .= '../';
  }
  include $pathPrefix . 'php/data.php';

  $wInPackage = TRUE;

  $countries = $countries_data;
  $packages = $packages_data;
  $services = $services_data;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <title>Globuzzer - My package</title>

    <!------ STYLESHEETS ------->
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,900|Source+Sans+Pro" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:900" rel="stylesheet">
    <!-- Simple grid -->
    <link rel="stylesheet" href="../css/simple-grid.css">
    <!-- jQuery -->
    <link rel="stylesheet" href="../css/jquery-ui.theme.min.css">
    <link rel="stylesheet" href="../css/jquery-ui.min.css">
    <!-- Own stylesheets -->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="my-package.css">

    <!------ SCRIPTS ------->
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="../js/jquery-ui.js"></script>
    <!-- Font Awesome -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
    <!-- jsPDF -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.min.js"></script>
    <!-- html to canvas -->
    <script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>
    <!-- lodash -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/2.4.1/lodash.min.js"></script>
    <script>
        // import lodash
        _ = _.noConflict();
        // import data
        var countries = <?php echo json_encode($countries) ?>;
        var packages = <?php echo json_encode($packages) ?>;
        var services = <?php echo json_encode($services) ?>;
        var pathPrefix = '<?php echo $pathPrefix; ?>';
        var countriesList = <?php echo json_encode($countries_list) ?>;
    </script>
    <script>
      // validates email address
      function validateEmail(email) {
          var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
          return re.test(String(email).toLowerCase());
      }

      var rates = {};
      var payment;

      $(document).ready(function () {

        packageC = packages[localStorage.package || '6-hours-package'];

        // arrow to scroll down
        $(".arrow-container p").click(function () {
          $('html, body').animate({
            scrollTop: $(".chosen-services").offset().top - 115
          }, 500);
        });

        // Sent successfully dialog
        var mailSuccess = $("#mail-sent").dialog({
          autoOpen: false,
          resizable: false,
          draggable: false,
          height: "auto",
          width: 400,
          modal: true,
          show: {
            effect: "fadeIn", duration: 300
          },
          hide: {
            effect: "fadeOut", duration: 300
          },
          open: function(event, ui){
            setTimeout("$('#mail-sent').dialog('close')",1000);
          }
        });

        // Email dialog
        var dialog = $("#dialog-confirm").dialog({
          autoOpen: false,
          resizable: false,
          draggable: false,
          height: "auto",
          width: 400,
          modal: true,
          show: {
            effect: "drop", duration: 300
          },
          hide: {
            effect: "drop", duration: 300
          },
          buttons: {
            "Send": function () {
              var $email = $("#email").val();
              var mailPDF = createPDF();
              var pdfBase64 = mailPDF.output('datauristring');

              if($email === "" || !validateEmail($email)) {
                $("#warning").show();
              } else {
                $(this).dialog("close");
                // ajax to send data to php-file
                $.post("mail.php", { data: pdfBase64, mail: $email },
                function (){}).done(function(data) {
                    mailSuccess.dialog("open");
                  $(".container").append(data);
                });
              }
            },
            Cancel: function () {
              $(this).dialog("close");
            }
          }
        });

        var contactInformationIDs = [
          '#first-name',
          '#last-name',
          '#address',
          '#postal-code',
          '#city',
          '#country',
          '#prefix',
          '#phone',
          '#emailC',
          '#confirm-email',
        ];

        payment = $("#payment").dialog({
          autoOpen: false,
          resizable: false,
          draggable: false,
          width: '750px',
          height: "auto",
          modal: true,
          show: {
            effect: "fadeIn", duration: 300
          },
          hide: {
            effect: "fadeOut", duration: 300
          },
        });
        $('#payment .no').click(function() {
          $('#payment').dialog('close');
        });
        $('#payment .yes').click(function() {
          var firstnameValid = true;
          var lastnameValid = true;
          var addressValid = true;
          var postalCodeValid = true;
          var cityValid = true;
          var countryValid = true;
          var prefixValid = true;
          var phoneValid = true;
          var emailValid = true;
          var confirmEmailValid = true;
          var termsValid = true;
          var holderNameValid = true;
          var cardNumberValid = true;
          var cvvValid = true;
          var expireValid = true;
          if ($('#card-number').val().length <= 15) {
            cardNumberValid = false;
          }
          if ($('#cvv').val().length < 3) {
            cvvValid = false;
          }
          if ($('#expire').val().length < 4) {
            expireValid = false;
          } else {
            var month = parseInt($('#expire').val().slice(0, 2));
            var year = parseInt($('#expire').val().slice(2, 4));
            if (month > 12) {
              expireValid = false;
            } else {
              var dateC = new Date();
              if (year + 2000 < dateC.getFullYear()
                || year + 2000 == dateC.getFullYear() && month - 1 < dateC.getMonth()) {
                expireValid = false;
              }
            }
          }
          if (!$('#holder-name').val()) holderNameValid = false;
          if (!$('#first-name').val()) firstnameValid = false;
          if (!$('#last-name').val()) lastnameValid = false;
          if (!$('#address').val()) addressValid = false;
          if (!$('#postal-code').val()) postalCodeValid = false;
          if (!$('#city').val()) cityValid = false;
          if (!$('#country').val()) countryValid = false;
          if (!$('#prefix').val()) prefixValid = false;
          if (!$('#phone').val()) phoneValid = false;
          if (!$('#emailC').val() || !validateEmail($('#emailC').val())) emailValid = false;
          if (!$('#confirm-email').val()) confirmEmailValid = false;
          if (!$('#terms')[0].checked) termsValid = false;

          if (!firstnameValid) $('#first-name').addClass('error');
          if (!lastnameValid) $('#last-name').addClass('error');
          if (!addressValid) $('#address').addClass('error');
          if (!postalCodeValid) $('#postal-code').addClass('error');
          if (!cityValid) $('#city').addClass('error');
          if (!countryValid) $('#country').addClass('error');
          if (!prefixValid) $('#prefix').addClass('error');
          if (!phoneValid) $('#phone').addClass('error');
          if (!emailValid) $('#emailC').addClass('error');
          if (!confirmEmailValid) $('#confirm-email').addClass('error');
          if (!holderNameValid) $('#holder-name').addClass('error');
          if (!cardNumberValid) $('#card-number').addClass('error');
          if (!cvvValid) $('#cvv').addClass('error');
          if (!expireValid) $('#expire').addClass('error');
          if (!termsValid) $('#terms-content').addClass('error');
        });

        // Open email modal
        $("#email-btn").click(function (e) {
          e.preventDefault();
          $("#warning").hide();
          dialog.dialog("open");
        });

        // Downloads pdf
        $("#pdf-btn").click(function (e) {
          e.preventDefault();
          createPDF().save('My-package.pdf');
        });

        $('#checkout').click(function() {
          payment.dialog('open');
        });

        $('#first-name').on('input', function() {
          $(this).val($(this).val().replace(/[0-9]/g, ''));
        });

        $('#last-name').on('input', function() {
          $(this).val($(this).val().replace(/[0-9]/g, ''));
        });

        $('#card-number').on('input', function() {
          var str = $(this).val();
          var strC = '';
          for (var i = 0; i < str.length; i += 1) {
            if (str.charCodeAt(i) >= 48 && str.charCodeAt(i) <= 57) {
              strC += str.charAt(i);
              if (strC.length % 5 == 4 && strC.length <= 15) strC += ' ';
            }
          }
          $(this).val(strC);
        });
        $('#card-number').on('focus', function() {
          $(this).removeClass('error');
        });

        $('#cvv').on('input', function() {
          var str = $(this).val();
          var strC = '';
          for (var i = 0; i < str.length; i += 1) {
            if (str.charCodeAt(i) >= 48 && str.charCodeAt(i) <= 57) strC += str.charAt(i);
          }
          $(this).val(strC);
        });
        $('#cvv').on('focus', function() {
          $(this).removeClass('error');
        });

        $('#expire').on('input', function() {
          var str = $(this).val();
          var strC = '';
          for (var i = 0; i < str.length; i += 1) {
            if (str.charCodeAt(i) >= 48 && str.charCodeAt(i) <= 57) strC += str.charAt(i);
          }
          $(this).val(strC);
        });
        $('#expire').on('focus', function() {
          $(this).removeClass('error');
        });

        $('#holder-name').on('focus', function() {
          $(this).removeClass('error');
        });
        $('#holder-name').on('input', function() {
          $(this).val($(this).val().replace(/[0-9]/g, ''));
        });

        $('.terms-conditions').click(function() {
          termsConditions.dialog('open');
        });

        _.each(contactInformationIDs, function(id) {
          $(id).on('focus', function() {
            $(this).removeClass('error');
          });
        });

        $('#terms').on('change', function() {
          $('#terms-content').removeClass('error');
        });

        setCountry(localStorage.countries);

        fetch('http://data.fixer.io/api/latest?access_key=e25bec2748c12d5bd6e697b69169ab62&symbols=EUR,SEK,DKK,NOK,USD&format=1')
          .then(function(res) {
            return res.json();
          })
          .then(function(res) {
            rates = res.rates;
            setServices();
          });

        setCurrency(localStorage.currency);
        setPackageNum();
      });
    </script>
</head>

<body>

<?php
  include $pathPrefix . 'php/header.php';
?>

<div id="dialog-confirm" title="Send it to my mail">
    <form method="post">
        <label for="mail">Please enter your eMail here:</label>
        <input id="email" type="email" name="mail" placeholder="example@globuzzer.com"
               class="text ui-widget-content ui-corner-all">
        <p id="warning">Please enter a valid eMail!</p>
    </form>
</div>
<div id="mail-sent">
    eMail sent successfully!
</div>
<div id="delete-confirm">
    Are you sure, you want to delete this service?
</div>

<div class="container">
    <div class="row">
        <div class="col-12 brochure-container no-select">
            <h2 class="grey-heading">
              <span>NO SERVICE IS SELECTED YET!</span>
            </h2>
            <a class="index-link edge-btn-pink" href="#">Go back to choose</a>
        </div>
        <div class="col-12 brochure-container with-select">
            <div class="printable-container">
                <h2 class="grey-heading">
                    Here you can find your<br>
                    <span>printable brochure</span>
                </h2>
                <p class="check-point">
                  <span class="icon"><i class="fas fa-check"></i></span>
                  <span class="package-name"></span>
                </p>
                <p class="check-point">
                  <span class="icon"><i class="fas fa-check"></i></span>
                  Discover
                  <span class="country-name"></span>
                </p>
                <p class="check-point">
                  <span class="icon"><i class="fas fa-check"></i></span>
                  <i class="amount">0</i>
                  services chosen
                </p>

                <div class="buttons left">
                    <a href="#" class="edge-btn-pink" id="pdf-btn">Save it in PDF</a>
                    <a href="#" class="edge-btn-white" id="email-btn">Send it to my email</a>
                </div>
            </div>
            <!--img src="../img/mockups%2002.png" alt="brochure" id="my-brochure"-->
            <div id="my-brochure" class="view">

            </div>
        </div>
    </div>
    <div class="arrow-container">
        <p class="mouse">
          <div class="dot"></div>
        </p>
    </div>
</div>

<?php
    require_once 'mail.php';
?>

<div class="light-grey-box">
    <div class="service-container">
        <div class="basket">
            <p id="curr-package">Discover <span class="country-name"></span></p>
            <p><span class="amount">0</span> services</p>
            <hr>
            <p class="total-price"><span class="price-label">Price:</span> <span id="price">99€</span><span class="currency"></span></p>
            <hr>
            <div class="buttons">
                <a id="add-more" href="#" class="button-pink">Add more</a>
                <a id="checkout" class="button-pink">Checkout</a>
            </div>
        </div>

        <div class="chosen-services">
            <h3>Aren't these the services you wanted?</h3>
            <p>Delete the ones you are not interested in or go back and add the ones you missed.</p>
            <hr class="shortHr">
            <div id="chosen-sevice-cards" class="cards"></div>
        </div>
    </div>
</body>

<?php
  include $pathPrefix . 'php/chat.php';
?>

<?php
  include $pathPrefix . 'php/footer.php';
?>

<div id="payment">
  <div class="body">
    <div class="section">
      <div class="name">
        Contact information
      </div>
      <div class="part first-name">
        <div class="name">First name</div>
        <input id="first-name" type="text" placeholder="First name"></input>
      </div>
      <div class="part last-name">
        <div class="name">Last name</div>
        <input id="last-name" type="text" placeholder="Last name"></input>
      </div>
      <div class="part address">
        <div class="name">Address</div>
        <input id="address" type="text" placeholder="Address"></input>
      </div>
      <div class="part postal-code">
        <div class="name">Postal code</div>
        <input id="postal-code" type="text" placeholder="Postal code"></input>
      </div>
      <div class="part city">
        <div class="name">City</div>
        <input id="city" type="text" placeholder="City"></input>
      </div>
      <div class="part country">
        <div class="name">Country</div>
        <select id="country">
          <option value="default" selected hidden disabled>--- All ---</option>
          <?php
            echo join(array_map(function($country) {
              return '<option value="' . $country['iso2'] . '">' . $country['name'] . '</option>';
            }, $countries_list), '');
          ?>
        </select>
      </div>
      <div class="part prefix">
        <div class="name">Prefix</div>
        <select id="prefix">
          <option value="default" selected hidden disabled>Prefix</option>
          <?php
            echo join(array_map(function($country) {
              return '<option value="' . $country['code'] . '">+' . $country['code'] . '</option>';
            }, $countries_list), '');
          ?>
        </select>
      </div>
      <div class="part phone">
        <div class="name">Phone</div>
        <input id="phone" type="text" placeholder="Phone"></input>
      </div>
      <div class="part format">
        <div class="name">Format: area code - number e.g.</div>
        <div class="content">501234567</div>
      </div>
      <div class="part email">
        <div class="name">Email</div>
        <input id="emailC" type="text" placeholder="Email"></input>
      </div>
      <div class="part confirm-email">
        <div class="name">Confirm email</div>
        <input id="confirm-email" type="text" placeholder="Confirm email"></input>
      </div>
      <div class="part terms">
        <div class="name">Terms and conditions</div>
        <div class="content">
          <input id="terms" type="checkbox" placeholder="Confirm email"></input>
          <div id="terms-content">I have read and accept the <a class="terms-conditions" href="#">terms and conditions</a>. The terms and conditions contains information about payments, cancellations policy, rules regarding age limits and ID requirements. The data protection policy inform you how Globuzzer collects and users personal information when you book a trip.</div>
        </div>
      </div>
    </div>
    <div class="section">
      <div class="name">
        Payment information
      </div>
      <div class="part holder-name">
        <div class="name">Cardholder's name</div>
        <input id="holder-name" type="text" placeholder="Cardholder's name"></input>
      </div>
      <div class="part card-number">
        <div class="name">Card Number</div>
        <input id="card-number" type="text" placeholder="•••• •••• •••• ••••" maxlength="19"></input>
      </div>
      <div class="part cvv">
        <div class="name">CVV</div>
        <input id="cvv" type="text" placeholder="•••" maxlength="3"></input>
      </div>
      <div class="part expire">
        <div class="name">Expiration Date</div>
        <input id="expire" type="text" placeholder="MM/YY" maxlength="4"></input>
      </div>
    </div>
  </div>
  <div class="footer">
    <div class="no button edge-btn-white">
      Cancel
    </div>
    <div class="yes button edge-btn-pink">
      Confirm
    </div>
  </div>
</div>

<script type="text/javascript" src="../js/script-with-data.js"></script>
<script type="text/javascript" src="my-package.js"></script>
