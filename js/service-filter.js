
$(document).ready(function () {
    // Looks for the current selection and filters the right services
   $("#filter-services").change(function() {
     var currFilter = $(this).val();
     if (currFilter == 'all') {
       $('.service-tag').show();
       return;
     }
     $('.service-tag').hide();
     $('.service-tag-' + currFilter).show();
   });

   $("#featured").change(function() {
     var currFeature = $(this).val();
     if (currFeature === 'lowest-price' || currFeature === 'highest-price') {
       _.each(countries, function(country) {
         var container = $('.services-country-' + country.key + ' .services-container')[0];
         var children = {};
         var emptyChildren = [];
         var unknownKey = 0;
         var services = [];
         _.each(container.childNodes, function(node) {
           if (node.id) {
             children[node.id] = node;
             services.push(node.id);
           } else {
             emptyChildren.push(node);
           }
         });
         container.innerHTML = '';
         services = services.sort(function(a, b) {
           var priceA = typeof servicesAll[a].price === 'number' ? servicesAll[a].price
              : typeof servicesAll[a].price === 'object' ? servicesAll[a].price[package.time] : 0;
           var priceB = typeof servicesAll[b].price === 'number' ? servicesAll[b].price
              : typeof servicesAll[b].price === 'object' ? servicesAll[b].price[package.time] : 0;
           if (priceA < priceB) {
             if (currFeature === 'lowest-price') {
               return -1;
             } else {
               return 1;
             }
           }
           if (priceA > priceB) {
             if (currFeature === 'lowest-price') {
               return 1;
             } else {
               return -1;
             }
           }
           return 0;
         });
         _.each(services, function(key) {
           container.appendChild(children[key]);
         });
         _.each(emptyChildren, function(child) {
           container.appendChild(child);
         });
       });
     }
   });
});
