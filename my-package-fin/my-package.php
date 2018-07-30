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
</head>
<body>
<header>
    <div class="menu">
        <div class="logo"><a href="../index.html"><img src="../img/globuzzerLogo.png" alt="gb-logo"></a></div>
        <div id="mobilemenu" class="show-mobile"><span class="fa fa-bars"></span></div>
        <ul id="mainmenu" class="nav-bar">
            <li><a href="../index.html"><i class="fas fa-home"></i> Home</a></li>
            <li><a href="my-package.php"><i class="fas fa-shopping-cart"></i> My package</a><span id="num-packages">5</span></li>
        </ul>
    </div>
</header>

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
    <div class="row back-to-services">
        <div class="col-12">
            <a href="../6-hours-package-fin/6hours.html" class="edge-btn-pink">Back to services...</a>
        </div>
    </div>
    <div class="row">
        <div class="col-12 brochure-container">
            <div class="printable-container">
                <h2 class="grey-heading">
                    Here you can find your<br>
                    <span>printable brochure</span>
                </h2>
                <p class="check-point"><span><i class="fas fa-check"></i></span> Your Package</p>
                <p class="check-point"><span><i class="fas fa-check"></i></span> Discover Finland</p>
                <p class="check-point"><span><i class="fas fa-check"></i></span> <i class="amount">5</i> services chosen</p>

                <div class="buttons left">
                    <a href="#" class="edge-btn-pink" id="pdf-btn">Save it in PDF</a>
                    <a href="#" class="edge-btn-white" id="email-btn">Send it to my email</a>
                </div>
            </div>
            <!--img src="../img/mockups%2002.png" alt="brochure" id="my-brochure"-->
            <div id="my-brochure" class="view">
                <div class="slice s1" style="background-image: url(../img/1.jpg); "></div>
                <div class="slice s2" style="background-image: url(../img/2.jpg); "></div>
                <div class="slice s3" style="background-image: url(../img/3.jpg); "></div>
                <div class="slice s4" style="background-image: url(../img/4.jpg); "></div>
                <div class="slice s5" style="background-image: url(../img/5.jpg); "></div>
                <div class="slice s6"></div>
                <div class="slice s7"></div>
                <div class="slice s8"></div>
            </div>
        </div>
    </div>
</div>

<?php
    require_once 'mail.php';
?>

<div class="light-grey-box">
    <div class="arrow-container">
        <p><i class="fas fa-chevron-circle-down"></i></p>
    </div>
    <div class="service-container">
        <div class="basket">
            <p id="curr-package">Discover Finland</p>
            <p><span class="amount">0</span> services</p>
            <hr>
            <p class="total-price"><span class="price-label">Price:</span> <span id="price">99€</span></p>
            <hr>
            <div class="buttons">
                <a href="../6-hours-package-fin/6hours.html" class="button-pink">Add more</a>
                <a class="button-white">Checkout</a>
            </div>
        </div>

        <div class="chosen-services">
            <h3>Aren't these the services you wanted?</h3>
            <p>Delete the ones you are not interested in or go back and add the ones you missed.</p>
            <hr class="shortHr">
        </div>
    </div>

    <footer>
        <div class="privacy-copyright">
            <ul class="socialmedia">
                <li><a href="https://www.globuzzer.com/"><img class="gb-icon" src="../img/GB%20icon.png" alt="gb-icon"></a>
                </li>
                <li><a href="https://www.facebook.com/Globuzzer/"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="https://twitter.com/globuzzer"><i class="fab fa-twitter"></i></a></li>
                <li><a href="https://www.pinterest.at/globuzzer/"><i class="fab fa-pinterest"></i></a></li>
                <li><a href="https://www.linkedin.com/company/globuzzer"><i class="fab fa-linkedin-in"></i></a></li>
            </ul>
            <ul class="nav-bar">
                <li><a href="#">Home</a></li>
                <li><a href="#">Privacy</a></li>
                <li><a href="#">Terms & Conditions</a></li>
                <li><a href="#">Contact us</a></li>
            </ul>
            <br>
            <p class="copyright">&copy; Copyright statement</p>
        </div>
    </footer>

    <script type="text/javascript" src="../js/script.js"></script>
    <script type="text/javascript" src="package.js"></script>
    <script type="text/javascript" src="my-package.js"></script>
</body>