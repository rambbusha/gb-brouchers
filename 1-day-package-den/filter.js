// different categories of services
var $artsMuseums = $(".arts-museums");
var $cityTour = $(".city-tour");
var $foodRelated = $(".food-related");
var $insidePrograms = $(".inside-programs");
var $outsidePrograms = $(".outside-programs");
var $waterRelated = $(".water-related");

$(document).ready(function () {
    // Looks for the current selection and filters the right services
   $("#filter-services").change(function() {
       var currFilter = $(this).val();

       switch(currFilter) {
           case 'arts-museums':
               showArtMuseum();
               break;
           case 'city-tour':
               showCityTour();
               break;
           case 'food-related':
               showFoodRelated();
               break;
           case 'inside-programs':
               showInsideProgram();
               break;
           case 'outside-programs':
               showOutsideProgram();
               break;
           case 'water-related':
               showWaterRelated();
               break;
           case 'all':
               showAll();
               break;
       }
   }) ;
});

/**
 * Shows all services.
 */
function showAll() {
    $artsMuseums.show();
    $cityTour.show();
    $foodRelated.show();
    $insidePrograms.show();
    $outsidePrograms.show();
    $waterRelated.show();
}

/**
 * Shows only water related services.
 */
function showWaterRelated() {
    $artsMuseums.hide();
    $cityTour.hide();
    $foodRelated.hide();
    $insidePrograms.hide();
    $outsidePrograms.hide();
    $waterRelated.show();
}

/**
 * Shows only outside program.
 */
function showOutsideProgram() {
    $waterRelated.hide();
    $artsMuseums.hide();
    $cityTour.hide();
    $foodRelated.hide();
    $insidePrograms.hide();
    $outsidePrograms.show();
}

/**
 * Shows only inside program.
 */
function showInsideProgram() {
    $outsidePrograms.hide();
    $waterRelated.hide();
    $artsMuseums.hide();
    $cityTour.hide();
    $foodRelated.hide();
    $insidePrograms.show();
}

/**
 * Shows only food-related services.
 */
function showFoodRelated() {
    $insidePrograms.hide();
    $outsidePrograms.hide();
    $waterRelated.hide();
    $artsMuseums.hide();
    $cityTour.hide();
    $foodRelated.show();
}

/**
 * Shows city tour services.
 */
function showCityTour() {
    $foodRelated.hide();
    $insidePrograms.hide();
    $outsidePrograms.hide();
    $waterRelated.hide();
    $artsMuseums.hide();
    $cityTour.show();
}

/**
 * Shows art and museums.
 */
function showArtMuseum() {
    $cityTour.hide();
    $foodRelated.hide();
    $insidePrograms.hide();
    $outsidePrograms.hide();
    $waterRelated.hide();
    $artsMuseums.show();
}