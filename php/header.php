<?php
  echo '
    <script>
      $(document).ready(function() {
        if (typeof pathPrefix === "undefined") {
          $(".header-home").click(function() {
            $("html, body").animate({
              scrollTop: 0,
            }, 500);
          });
          $(".header-contact").click(function() {
            $("html, body").animate({
              scrollTop: $(".section.contact").offset().top - 80,
            }, 500);
          });
        }

        if (localStorage.currency) $("header .currency").val(localStorage.currency);
        $("header .currency").on("change", function() {
          if (typeof setCurrency !== "undefined") {
            setCurrency($(this).val());
          }
          if (typeof setServices !== "undefined") {
            setServices($(this).val());
          }
        });

        if (localStorage.package) {
          $(".header-services").attr("href", "../" + packages[localStorage.package].key + "/index.php");
        } else {
          $(".header-services").attr("href", "../index.php");
        }
      });
    </script>
    <header>
      <div>
        <div class="menu">
          <div class="logo"><a href="' . $pathPrefix . 'index.php#' . $country['key'] . '"><img src="' . $pathPrefix . 'img/globuzzerLogo.png" alt="gb-logo"></a></div>
          <div id="mobilemenu" class="show-mobile"><span class="fa fa-bars"></span></div>
          <div style="flex: 1"></div>
          ' . ($page != 'index' ? ('<a href="' . $pathPrefix . 'index.php#' . $country['key'] . '" class="header-home"><i class="fas fa-home"></i> Home</a></li>') : '') . '
          ' . ($page == 'index' ? ('<a href="#" class="header-contact"><i class="fas fa-phone"></i> Contact us</a></li>') : '') . '
          ' . ($page == 'cart' ? ('<a href="" class="header-services"><i class="fas fa-bicycle"></i> Services</a></li>') : '') . '
          <a href="' . $pathPrefix . 'my-package/my-package.php"><i class="fas fa-shopping-cart"></i> My package</a><span id="num-packages">5</span></li>
          ' . ($page == 'cart' || $page == 'package' ? ('
            <select class="currency">
              <option value="EUR">EUR</option>
              <option value="USD">USD</option>
              <option value="SEK">SEK</option>
              <option value="NOK">NOK</option>
              <option value="DKK">DKK</option>
            </select>
          ') : '') . '
          <div style="width: 40px"></div>
        </div>
      </div>
    </header>
  ';
?>
