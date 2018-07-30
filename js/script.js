// Added successfully dialog

var success = $("#service-added").dialog({

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



// Service exists dialog

var fail = $("#service-exists").dialog({

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



$(document).ready(function () {

    //toggle mobile menu

    $('#mobilemenu').click(function() {

        $('#mainmenu').slideToggle('slow');

    });



    //Change header-image and text on city change

    $('#city-select').change(function() {

        var currCity = $(this).val();

        var imgURL = '';

        var intro = '';

        var p = '';

        var quote = '';



        switch(currCity) {

            case 'stockholm':

                imgURL = 'img/raphael-andres-430356.png';

                intro = 'Discover Sweden';

                p = 'Explore, enjoy and experience.';

                


		quote = 'Discover Stockholm like a local, Globuzzer offers you tailored travel packages that will ensure the best experience in a short time.<br>' +
			'Most trips are organized purely from a touristic point of view, but ours are designed by locals to get you an authentic<br>' + 
			'Swedish experience. Discover the most amazing places Stockholm has to offer with us.'

                $(".sweden").show();

                $(".finland").hide();

                break;

            case 'oslo':

                imgURL = 'img/Oslo.jpg';

                intro = 'Discover Norway';

                p = 'Explore, enjoy and experience.';

                quote = 'Sit amet consectetur adipisicing elit, sed do eiusmo. Tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim\n' +

                    '                veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.';

                break;

            case 'helsinki':

                imgURL = 'img/Helsinki.jpg';

                intro = 'Discover Finland';

                p = 'Explore, enjoy and experience.';

                quote = 'Discover Helsinki like a local. Globuzzer offers you tailored travel packages that will ensure the best experience in a short time.<br>' +

                    'Most trips are made from a touristic point of view, but ours is designed by locals to get a true Finnish experience. <br>' +

                    'Discover the most amazing places Helsinki and Finland have to offer. ';

                $(".sweden").hide();

                $(".finland").show();

                break;

            case 'copenhagen':

                imgURL = 'img/Copenhagen2.jpg';

                intro = 'Discover Denmark';

                p = 'Explore, enjoy and experience.';

                quote = 'Sit amet consectetur adipisicing elit, sed do eiusmo. Tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim\n' +

                    '                veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.';

                break;

            default:

                break;

        }



        $('.img-header').css("background-image", "url('" + imgURL + "'");

        $('.intro h2').text(intro);

        $('.intro p').text(p);

        $('.quote p').html(quote);

    });



    // Store service in local storage, if check symbol is clicked

    $(".check").click(function(e) {

        e.preventDefault();

        addItem($(this).parent().attr('id'));

        setThumbnailState();

        // looks if the current service in the brochure has been chosen

        // to mark it as checked if necessary.

        var currPage = $slideshow.turn('page');

        var currService = getCurrentService(currPage);

        if(localStorage[currService]) {

            setChosenState();

        }

    });



    // Shows the number of chosen services in the package

    if (localStorage.clickcount && localStorage.clickcount != 0) {

        $("#num-packages").html(localStorage.clickcount);

    } else {

        $("#num-packages").hide();

    }

});



// adds Item to local storage and increases the counter by 1

function addItem(id) {

    var $numPackages = $("#num-packages");

    console.log(id);

    console.log(localStorage[id]);

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

        console.log(currService);

        if(!localStorage[currService]) {

            setChooseState();

        }

        //fail.dialog("open");

    } else {

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

        success.dialog("open");

    }

}