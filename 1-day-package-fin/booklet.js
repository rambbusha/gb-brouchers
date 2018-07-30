// heart-check icons paths
var hoverHeart = '<path fill="currentColor" d="M414.9 24C361.8 24 312 65.7 288 89.3 264 65.7 214.2 24 161.1 24 70.3 24 16 76.9 16 165.5c0 72.6 66.8 133.3 69.2 135.4l187 180.8c8.8 8.5 22.8 8.5 31.6 0l186.7-180.2c2.7-2.7 69.5-63.5 69.5-136C560 76.9 505.7 24 414.9 24z"></path>';
var hoverCheck = '<path fill="currentColor" d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path>';
var unHoverHeart = '<path fill="currentColor" d="M257.3 475.4L92.5 313.6C85.4 307 24 248.1 24 174.8 24 84.1 80.8 24 176 24c41.4 0 80.6 22.8 112 49.8 31.3-27 70.6-49.8 112-49.8 91.7 0 152 56.5 152 150.8 0 52-31.8 103.5-68.1 138.7l-.4.4-164.8 161.5a43.7 43.7 0 0 1-61.4 0zM125.9 279.1L288 438.3l161.8-158.7c27.3-27 54.2-66.3 54.2-104.8C504 107.9 465.8 72 400 72c-47.2 0-92.8 49.3-112 68.4-17-17-64-68.4-112-68.4-65.9 0-104 35.9-104 102.8 0 37.3 26.7 78.9 53.9 104.3z"></path>';
var unHoverCheck = '<path fill="currentColor" d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path>';

// heart-check container
var $heart = $('.unHoverHeart');
var $check = $('.unHoverCheck');

// container of the slideshow
var $slideshow = $("#slideshow");

$(document).ready(function () {
    // initialize hover on heart icon
    $heart.mouseenter(
        function () {
            $(this).html(hoverHeart);
        });
    $heart.mouseleave(function () {
        $(this).html(unHoverHeart);
    });

    // arrow to scroll down to brochure viewer
    $(".arrow-container p").click(function (e) {
        e.preventDefault();
        $('html, body').animate({
            scrollTop: $("#brochure-viewer").offset().top + 80
        }, 500);
    });

    // jumps down to the services
    $(".jump-to-service").click(function (e) {
        e.preventDefault();
        $('html, body').animate({
            scrollTop: $("#services-block").offset().top - 80
        }, 500);
    });

    if($(window).width() < 960) {
        //Initialize turnJS
        $slideshow.turn({
            width: '100%',
            height: 535,
            autoCenter: true
        });
    } else {
        //Initialize turnJS
        $slideshow.turn({
            width: 950,
            height: 535
        });
    }

    // hides brochure content
    $(".lastBrochure").hide();
    $(".heart-check").hide();
    $(".detailTour").hide();

    //show Slider and hide arrow, if booklet is opened
    $slideshow.bind("turning", function (event, page, view) {
        if (page === 1) {
            showWelcomeText();
            if($(window).width() > 960) resizeSmall();
            //960px
        }
        else {
            // hide/show everything necessary in the brochure
            $(".footnote").show();
            $(".heart-check").show();
            $(".extend-resize").show();
            $(".normalArrow").hide();
            if($(window).width() > 960) $(".welcome-text div").hide();
            $(".lastBrochure").hide();
            showPosition(page);
            markChosenService(page);

            //shows Detail description of the current service
            $('.nameTag').on("click", (function () {
                $(this).next('.detailTour').show(500);
            }));

            // closes detail view of current service
            $('.close-btn').click(function () {
                $(this).parent().parent().hide(500);
            });

            // if it's the last page, show certain buttons and hide heart/check-buttons
            if (page === 20) {
                $(".lastBrochure").fadeIn(500);
                $(".heart-check").hide();
            } else {
                // check, if the opened service is already chosen
                var currService = getCurrentService(page);
                if(localStorage[currService]) {
                    setChosenState();
                } else {
                    setChooseState();
                }
            }
        }
    });

    //resize the brochure
    $('.resize').click(function () {
        if ($('.brochure-container').hasClass('container')) {
            $('.brochure-container').removeClass('container');
            $('.brochure-viewer').css('padding', '0');
            $slideshow.turn('size', '100vw', 'calc(100vh - 80px');
            $(".introduction .col-6").css("width", "100%");
            $slideshow.css("left", 0);
        } else {
            resizeSmall();
        }
    });

    // Go back to the first page
    $(".go-back").click(function (e) {
        e.preventDefault();
        showWelcomeText();
        if($(window).width() > 960) resizeSmall();
        $slideshow.turn("page", 1);
    });

    // adds current Service
    $('.check-btn').click(function () {
        var currPage = $slideshow.turn('page');
        var currService = getCurrentService(currPage);
        if(!localStorage[currService]) setChosenState();
        addItem(currService);
        setThumbnailState();
    });

    // navigate to the clicked page-dot
    $(".nav-dot").click(function() {
        var id = $(this).attr("id");
        var page = Number(id.substring(4, id.length))*2;
        $slideshow.turn("page", page);
    });

    setThumbnailState();
});

/**
 * resize brochure back to its normal size
 */
function resizeSmall() {
    $('.brochure-container').addClass('container');
    $('.brochure-viewer').css('padding', '75px 0');
    $slideshow.turn('size', 950, 535);
    $(".introduction .col-6").css("width", "calc(100% / 2)");
    $slideshow.css("left", "-476px");
}

/**
 * sets added items into chosen state in thumbnails
 */
function setThumbnailState() {
    $(".thumbnail-container").each(function() {
        var service = $(this).attr("id");
        var $choseField = $(this).children(".check").children(".choose-field");
        if(localStorage[service]) {
            $choseField.html('Chosen');
            $choseField.parent(".check").addClass("chosen");
        } else {
            $(this).children(".check").children(".choose-field").html('Choose');
            $choseField.parent(".check").removeClass("chosen");
        }
    });
}

/**
 * Sets icon in unchosen state and initializes hover.
 */
function setChooseState() {
    $check.html(unHoverCheck);
    $(".choose").html('Choose');
    // initialize hover
    $check.mouseenter(
        function () {
            $(this).html(hoverCheck);
        });
    $check.mouseleave(function () {
        $(this).html(unHoverCheck);
    });
}

/**
 * Sets check icon into chosen state in the brochure
 */
function setChosenState() {
    $check.off("mouseenter");
    $check.off("mouseleave");
    $check.html(hoverCheck);
    $(".choose").html('Chosen');
}

/**
 * Shows the current position on the navigation at the bottom.
 *
 * @param page
 */
function showPosition(page) {
    var currCircle = 0;
    if (page === 2) currCircle = 0;
    else currCircle = Math.floor(page / 2 - 1);
    $('.dots').removeClass('bigCircle');
    $('.dot' + currCircle).addClass('bigCircle');
}

/**
 * Shows elements of closed brochure.
 */
function showWelcomeText() {
    $(".footnote").hide();
    $(".welcome-text div").show();
    $(".lastBrochure").hide();
    $(".heart-check").hide();
    $(".extend-resize").hide();
    if($(window).width() > 960) {
        $(".normalArrow").show();
    }
}

/**
 * Marks the opened service in the thumbnails below the brochure
 * @param page
 */
function markChosenService(page) {
    // gets current service depending on the page
    var service = getCurrentService(page);

    // removes highlight of other services
    $(".thumbnail").css({
        'opacity': '0.8',
        'border': 'none'
    });

    // highlights chosen service
    $("#"+service + " .thumbnail").css({
        'opacity': '1',
        'border': '2px solid #E84F51'
    });
}

/**
 * Returns current service depending on the case.
 *
 * @param page
 * @returns {*} current Service
 */
function getCurrentService(page) {
    switch(page) {
        case 2: case 3:
        return 'service9';
        break;
        case 4: case 5:
        return 'service10';
        break;
        case 6: case 7:
        return 'service11';
        break;
        case 8: case 9:
        return 'service12';
        break;
        case 10: case 11:
        return 'service13';
        break;
        case 12: case 13:
        return 'service14';
        break;
        case 14: case 15:
        return 'service15';
        break;
        case 16: case 17:
        return 'service16';
        break;
        case 18: case 19:
        return 'service17';
        break;
        case 20: case 21:
        return 'service18';
        break;
    }
}