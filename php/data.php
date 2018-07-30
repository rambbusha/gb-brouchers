<?php
  $countries_data = [
    "sweden" => [
      "key" => "sweden",
      "name" => "Sweden",
      "city" => "Stockholm",
      "currency" => "EUR",
      "currencyDisplay" => "€",
      "intro" => "Welcome to Sweden",
      "slogan" => "Explore, enjoy and experience.",
      "quote" => "Discover Sweden like a local, Globuzzer offers you tailored travel packages that will ensure the best experience in a short time.<br>
                  Most trips are organized purely from a touristic point of view, but ours are designed by locals to get you an authentic<br>
                  Swedish experience. Discover the most amazing places Stockholm has to offer with us.",
      "backgroundImage" => "img/sweden/thumbnail.jpg",
      "thumbnailImage" => "img/sweden/thumbnail.jpg",
      "brochureImage" => "img/6-hours-brochure.png",
      "video" => "https://www.youtube.com/embed/K3vOSmkhCOM",
      "citys" => [
        "stockholm" => [
          "key" => "stockholm",
          "name" => "Stockholm",
        ],
        "malmo" => [
          "key" => "malmo",
          "name" => "Malmo",
        ],
        "goteborg" => [
          "key" => "goteborg",
          "name" => "Goteborg",
        ],
      ],
    ],
    "denmark" => [
      "key" => "denmark",
      "name" => "Denmark",
      "city" => "Copenhagen",
      "currency" => "DKK",
      "currencyDisplay" => "DKK",
      "intro" => "Welcome to Denmark",
      "slogan" => "Feel the spirit of Denmark.<br>
                  Enjoy the hustle and flow of<br>
                  one of Europe’s most unique countries!",
      "quote" => "Welcome to Denmark! We would love to show you our city. Each of the packages gives you different opportunities to <br>
                  discover a special part of the city in a time frame that fits you perfectly. Choose what suits you the best!",
      "backgroundImage" => "img/denmark/thumbnail.jpg",
      "thumbnailImage" => "img/denmark/thumbnail.jpg",
      "brochureImage" => "img/finland/brochure-cover.png",
      "video" => "https://www.youtube.com/embed/SR0XcQR9lOU",
      "citys" => [
        "copenhagen" => [
          "key" => "copenhagen",
          "name" => "Copenhagen",
        ],
        "skagen" => [
          "key" => "skagen",
          "name" => "Skagen",
        ],
        "aarhus" => [
          "key" => "aarhus",
          "name" => "Aarhus",
        ],
      ],
    ],
    "finland" => [
      "key" => "finland",
      "name" => "Finland",
      "city" => "Helsinki",
      "currency" => "EUR",
      "currencyDisplay" => "€",
      "intro" => "Welcome to Finland",
      "slogan" => "Explore, enjoy and experience.",
      "quote" => "Discover Finland like a local. Globuzzer offers you tailored travel packages that will ensure the best experience in a short time.<br>
                  Most trips are made from a touristic point of view, but ours is designed by locals to get a true Finnish experience.<br>
                  Discover the most amazing places Helsinki and Finland have to offer.",
      "backgroundImage" => "img/finland/thumbnail.jpg",
      "thumbnailImage" => "img/finland/thumbnail.jpg",
      "brochureImage" => "img/finland/brochure-cover.png",
      "video" => "https://www.youtube.com/embed/yawXq5TlgBU",
      "citys" => [
        "helsinki" => [
          "key" => "helsinki",
          "name" => "Helsinki",
        ],
        "turku" => [
          "key" => "turku",
          "name" => "Turku",
        ],
        "rovaniemi" => [
          "key" => "rovaniemi",
          "name" => "Rovaniemi",
        ],
      ],
    ],
    "norway" => [
      "key" => "norway",
      "name" => "Norway",
      "city" => "Oslo",
      "currency" => "NOK",
      "currencyDisplay" => "NOK",
      "intro" => "Welcome to Norway",
      "slogan" => "Take care of your business,<br>
                  we will take care of you.",
      "quote" => "To have a smooth time and experience in Oslo while conducting your business, we have designed 3 different packages to choose from that will cover your needs while staying in the “Tiger state”.",
      "backgroundImage" => "img/norway/thumbnail.jpg",
      "thumbnailImage" => "img/norway/thumbnail.jpg",
      "brochureImage" => "img/finland/brochure-cover.png",
      "video" => "https://www.youtube.com/embed/XRLAhcEPHlc",
      "citys" => [
        "oslo" => [
          "key" => "oslo",
          "name" => "Oslo",
        ],
        "bergen" => [
          "key" => "bergen",
          "name" => "Bergen",
        ],
        "trondheim" => [
          "key" => "trondheim",
          "name" => "Trondheim",
        ],
      ],
    ],
  ];
  $packages_data = [
    "6-hours-package" => [
      "key" => "6-hours-package",
      "name" => "In a Nutshell",
      "country" => "sweden",
      "time" => "6 hours",
      "title" => "The Nutshell",
      "bookingFee" => 99,
      "price" => 200,
      "priceDisplay" => "457 €",
      "hour" => 9,
      "description" => "Even with a few hours in hand, we will make sure that you get an authentic experience of being in Sweden. Take a look at our services and choose the ones that you like.",
      "image" => "img/sweden/6-hours-package.jpg",
      "cover" => "img/sweden/package_nutshell.jpg",
      "slogan" => "<p>Are you interested in discovering Sweden?</p>
                  <p>Just open the brochure, take a look at our</p>
                  <p>services and choose the ones you like.</p>",
    ],
    "1-day-package" => [
      "key" => "1-day-package",
      "name" => "The Traveler",
      "country" => "sweden",
      "time" => "1 day",
      "title" => "The Traveler",
      "bookingFee" => 149,
      "price" => 567,
      "priceDisplay" => "567 €",
      "hour" => 24,
      "description" => "Enjoy a truly Swedish sojourn, where you will be delighted by a medley of cultural and culinary treats. Select your choice of adventures with this package and enjoy a full day activities in Sweden.",
      "image" => "img/sweden/1-day-package.jpg",
      "cover" => "img/sweden/package_traveler.jpg",
      "slogan" => "<p>Are you interested in discovering Sweden?</p>
                  <p>Just open the brochure, take a look at our</p>
                  <p>services and choose the ones you like.</p>",
    ],
    "2-days-package" => [
      "key" => "2-days-package",
      "name" => "The Local",
      "country" => "sweden",
      "time" => "2 days",
      "title" => "The Local",
      "bookingFee" => 199,
      "price" => 692,
      "priceDisplay" => "692 €",
      "hour" => 48,
      "description" => "Sweden is one of the most outstanding and breathtaking countries in the world. Take a look at our services and discover this hidden gem in the north.",
      "image" => "img/sweden/2-days-package.jpg",
      "cover" => "img/sweden/package_local.jpg",
      "slogan" => "<p>Are you interested in discovering Sweden?</p>
                  <p>Just open the brochure, take a look at our</p>
                  <p>services and choose the ones you like.</p>",
    ],
    "6-hours-package-fin" => [
      "key" => "6-hours-package-fin",
      "name" => "The Nutshell",
      "country" => "finland",
      "time" => "6 hours",
      "title" => "The Nutshell",
      "bookingFee" => 199,
      "price" => 799,
      "priceDisplay" => "799 €",
      "description" => "Even with a few hours in hand, we will make sure that you get an authentic experience of being in Finland. Take a look at our services and choose the ones that you like.",
      "image" => "img/finland/6-hours-image.jpg",
      "cover" => "img/finland/package_nutshell.jpg",
      "slogan" => "<p>Are you interested in discovering Finland?</p>
                  <p>Just open the brochure, take a look at our</p>
                  <p>services and choose the ones you like.</p>",
    ],
    "1-day-package-fin" => [
      "key" => "1-day-package-fin",
      "name" => "The Traveler",
      "country" => "finland",
      "time" => "1 day",
      "title" => "The Traveler",
      "bookingFee" => 399,
      "price" => 1299,
      "priceDisplay" => "1.299 €",
      "description" => "Enjoy a truly Finnish sojourn, where you will be delighted by a medley of cultural and culinary treats. Select your choice of adventures with this package and enjoy a full day activities in Finland.",
      "image" => "img/finland/1-day-image.jpg",
      "cover" => "img/finland/package_traveler.jpg",
      "slogan" => "<p>Are you interested in discovering Finland?</p>
                  <p>Just open the brochure, take a look at our</p>
                  <p>services and choose the ones you like.</p>",
    ],
    "2-days-package-fin" => [
      "key" => "2-days-package-fin",
      "name" => "The Local",
      "country" => "finland",
      "time" => "2 days",
      "title" => "The Local",
      "bookingFee" => 599,
      "price" => 1899,
      "priceDisplay" => "1.899 €",
      "description" => "Finland is one of the most outstanding and breathtaking countries in the world. Take a look at our services and discover this hidden gem in the north.",
      "image" => "img/finland/2-days-image.jpg",
      "cover" => "img/finland/package_local.jpg",
      "slogan" => "<p>Are you interested in discovering Finland?</p>
                  <p>Just open the brochure, take a look at our</p>
                  <p>services and choose the ones you like.</p>",
    ],
    "easy-stay-nor" => [
      "key" => "easy-stay-nor",
      "name" => "The Easy Stay",
      "country" => "norway",
      "time" => "6 hours",
      "title" => "The Nutshell",
      "bookingFee" => 2000,
      "price" => 2500,
      "priceDisplay" => "2500 NOK",
      "description" => "Even with a tight schedule we will help you to discover and spent a great moment in Oslo even for a few Hours and it will be consist in museums, tours, discover the beauty of Norway landscapes and natures and the Nordic food",
      "image" => "img/norway/6-hours-image.jpg",
      "cover" => "img/norway/6-hours-image.jpg",
      "slogan" => "<p>This brochure will contain a greater</p><p>description of the included services.</p>",
    ],
    "oslo-caretaker-nor" => [
      "key" => "oslo-caretaker-nor",
      "name" => "The Oslo Care-taker",
      "country" => "norway",
      "time" => "1 day",
      "title" => "The Traveler",
      "bookingFee" => 3000,
      "price" => 5000,
      "priceDisplay" => "5000 NOK",
      "description" => "With This package you will be able to get a real experience of the Nordic life in Oslo and it will grant you enough time to admire the beautiful landscapes of Norway through a plethora of Visit tours and trips as well as the Norwegian culture and the Norwegian food.",
      "image" => "img/norway/1-day-image.jpg",
      "cover" => "img/norway/1-day-image.jpg",
      "slogan" => "<p>This brochure will contain a greater</p><p>description of the included services.</p>",
    ],
    "customized-experience-nor" => [
      "key" => "customized-experience-nor",
      "name" => "The Customize Experience",
      "country" => "norway",
      "time" => "2 days",
      "title" => "The Local",
      "bookingFee" => 5000,
      "price" => 2500,
      "priceDisplay" => "2500 NOK",
      "description" => "This is the Ultimate package with a 2 day 48 hour long package that will make you fell in love with Norway, you will have time to discover all the beautiful places you want to visit and this package includes as well a trip to other cities such as Bergen or Trondheim as well as many tours of Fjords and Island around Oslo.",
      "image" => "img/norway/2-days-image.jpg",
      "cover" => "img/norway/2-days-image.jpg",
      "slogan" => "<p>This brochure will contain a greater</p><p>description of the included services.</p>",
    ],
    "6-hours-package-den" => [
      "key" => "6-hours-package-den",
      "name" => "The Nutshell",
      "country" => "denmark",
      "time" => "6 hours",
      "title" => "The Nutshell",
      "bookingFee" => 1800,
      "price" => 6900,
      "priceDisplay" => "6.9K DKK",
      "description" => "Even with a few hours in hand, we will make sure that you will get an authentic experience of being in Denmark. Take a look at our services and choose the ones that you like.",
      "image" => "img/denmark/6-hours-image.jpg",
      "cover" => "img/denmark/6-hours-image.jpg",
      "slogan" => "<p>Are you interested in discovering Denmark?</p>
                  <p>Just open the brochure, take a look at our</p>
                  <p>services and choose the ones you like.</p>",
    ],
    "1-day-package-den" => [
      "key" => "1-day-package-den",
      "name" => "The Traveler",
      "country" => "denmark",
      "bookingFee" => 2600,
      "time" => "1 day",
      "title" => "The Traveler",
      "price" => 9900,
      "priceDisplay" => "9.9K DKK",
      "description" => "Get the chance to become familiar with the history of Denmark as well as see more uniquesights depicting the architecture and the flow of the city.",
      "image" => "img/denmark/1-day-image.jpg",
      "cover" => "img/denmark/1-day-image.jpg",
      "slogan" => "<p>Are you interested in discovering Denmark?</p>
                  <p>Just open the brochure, take a look at our</p>
                  <p>services and choose the ones you like.</p>",
    ],
    "2-days-package-den" => [
      "key" => "2-days-package-den",
      "name" => "The Local",
      "country" => "denmark",
      "bookingFee" => 4000,
      "time" => "2 days",
      "title" => "The Local",
      "price" => 19900,
      "priceDisplay" => "19,9K DKK",
      "description" => "Discover sights and explore Denmark as a local! Get the opportunity to see the unique spots outside the city as well as get a rare glimpse of every day Danish life.",
      "image" => "img/denmark/2-days-image.jpg",
      "cover" => "img/denmark/2-days-image.jpg",
      "slogan" => "<p>Are you interested in discovering Denmark?</p>
                  <p>Just open the brochure, take a look at our</p>
                  <p>services and choose the ones you like.</p>",
    ],
  ];
  $services_data = [
    "swe-transportation" => [
      "key" => "swe-transportation",
      "country" => "sweden",
      "name" => "Transportation",
      "hour" => 0.5,
      "description" => "To help you get the maximum out of the city with minimum possible hassles, we provide you with these options.",
      "descriptionShort" => "To help you get the maximum out of the city with minimum possible hassles, we provide you with these options.",
      "readmore" => "https://globuzzer.mn.co/posts/public-transportation-in-stockholm-sl",
      "image" => "img/sweden/transportation/0.jpg",
      "imageL" => "img/sweden/transportation-L.jpg",
      "imageR" => "img/sweden/transportation-R.jpg",
      "tags" => ["city tour"],
      "choices" => [
        "swe-taxi" => [
          "key" => "swe-taxi",
          "name" => "Taxi",
          "price" => 35,
          "description" => "A taxi is always a good option, they are easy to get and will quickly drive you from a to b as they know the city like the back of their hand.",
          "image" => "img/sweden/transportation/1.jpg",
        ],
        "swe-rental-car" => [
          "key" => "swe-rental-car",
          "name" => "Rental Car",
          "price" => 90,
          "description" => "If you love driving and want to get a feel of the city by yourself, then this is the perfect option for you.",
          "image" => "img/sweden/transportation/2.jpg",
        ],
        "swe-private-driver" => [
          "key" => "swe-private-driver",
          "name" => "Private Driver",
          "price" => 150,
          "description" => "We will provide you with a personal driver, who will drive you around during your whole trip.",
          "image" => "img/sweden/transportation/3.png",
        ],
        "swe-public-transport" => [
          "key" => "swe-public-transport",
          "name" => "Public Transportation",
          "price" => 9,
          "description" => "The public transport network (bus, tram, train) in Sweden is one of the best. These are highly coordinated and efficient and its very easy to move from place to another.",
          "image" => "img/sweden/transportation/4.png",
        ],
      ],
    ],
    "swe-cuisine" => [
      "key" => "swe-cuisine",
      "country" => "sweden",
      "name" => "Swedish Cuisine",
      "hour" => 1,
      "description" => "One of the best ways to understand a country and its culture is to make sure you get an authentic and gastronomical experience. Top quality ingredients are the building blocks of a great meal, and the Swedish capital has you covered.",
      "descriptionShort" => "One of the best ways to understand a country and its culture is to make sure you get an authentic and gastronomical experience. Top quality ingredients are the building blocks of a great meal, and the Swedish capital has you covered.",
      "readmore" => "https://globuzzer.mn.co/posts/h-in-stockholm-day-1-a-walk-in-the-old-city",
      "image" => "img/sweden/food/0.jpg",
      "imageL" => "img/sweden/guided-tours-L.jpg",
      "imageR" => "img/sweden/guided-tours-R.jpg",
      "tags" => ["city"],
      "choices" => [
        "swe-breakfast" => [
          "key" => "swe-breakfast",
          "name" => "Breakfast",
          "hour" => 1,
          "description" => "Choose a place of your own liking and we can help you with advance reservations and bookings.",
          "image" => "img/sweden/food/1.jpg",
        ],
        "swe-lunch" => [
          "key" => "swe-lunch",
          "name" => "Lunch",
          "hour" => 1,
          "description" => "Choose a place of your own liking and we can help you with advance reservations and bookings.",
          "image" => "img/sweden/food/2.jpeg",
        ],
        "swe-dinner" => [
          "key" => "swe-dinner",
          "name" => "Dinner",
          "hour" => 2,
          "description" => "Choose a place of your own liking and we can help you with advance reservations and bookings.",
          "image" => "img/sweden/food/3.jpg",
        ],
        "swe-stockholm-food-tour" => [
          "key" => "swe-stockholm-food-tour",
          "name" => "Stockholm's Food Tour",
          "price" => 85,
          "hour" => 3.5,
          "description" => "You will taste delicious food samples at specially selected locations while learning about the food, history and culture. Together the samples add up to a perfect meal. ",
          "image" => "img/sweden/food/4.jpg",
          "city" => "stockholm",
        ],
        "swe-stockholm-pub-tour" => [
          "key" => "swe-stockholm-pub-tour",
          "name" => "Stockholm's Pub Tour",
          "price" => 55,
          "hour" => 3,
          "description" => "Join us for this special tour and drink your way through Swedish history from viking mead to modern microbrews.",
          "image" => "img/sweden/food/5.jpg",
          "city" => "stockholm",
        ],
      ],
    ],
    "swe-tours" => [
      "key" => "swe-tours",
      "country" => "sweden",
      "name" => "Tours",
      "description" => "Stockholm is an eclectic seaside city - all parks, islands, culture and nightlife. We offer the best private tours that would help you experience Stockholm and surrounding areas like a local.",
      "descriptionShort" => "Stockholm is an eclectic seaside city - all parks, islands, culture and nightlife. We offer the best private tours that would help you experience Stockholm and surrounding areas like a local.",
      "readmore" => "https://globuzzer.mn.co/posts/1120531",
      "image" => "img/sweden/tours/0.jpg",
      "imageL" => "img/sweden/stockholm-archipelago-L.jpg",
      "imageR" => "img/sweden/stockholm-archipelago-R.jpg",
      "tags" => ["city", "outside"],
      "choices" => [
        "swe-sailing-tour" => [
          "key" => "swe-sailing-tour",
          "name" => "Sailing Tour",
          "price" => 225,
          "hour" => 9,
          "description" => "Visiting Stockholm’s beautiful archipelago is an absolute must, especially if you’re visiting during the summer, and there’s no better way to see the islands than from the deck of a beautiful sailing boat.",
          "image" => "img/sweden/tours/1.jpg",
          "city" => "stockholm",
        ],
        "swe-private-walking" => [
          "key" => "swe-private-walking",
          "name" => "Private Walking Tour",
          "price" => 25,
          "hour" => 3,
          "description" => " You will see all the main sights plus some secret gems. Stockholm Our Way invites you to take a walk on Stockholm’s wilder side – there is a lot more to Stockholm than just water and bridges!",
          "image" => "img/sweden/tours/2.jpg",
          "city" => "stockholm",
        ],
        "swe-subway-art-tour" => [
          "key" => "swe-subway-art-tour",
          "name" => "Subway Art Tour",
          "price" => 20,
          "hour" => 2,
          "description" => "Stockholm offers the world largest subway art exhibition! You will see subway in general from a different perspective - clean, calm and artistic.",
          "image" => "img/sweden/tours/3.jpg",
          "city" => "stockholm",
        ],
        "swe-glass-wine" => [
          "key" => "swe-glass-wine",
          "name" => "Glass & Wine Tasting",
          "price" => 55,
          "hour" => 1,
          "description" => "You will learn the importance of how the shape and quality of the glass when it comes to concentrating the aromas and controlling each drink's specific tastes.",
          "image" => "img/sweden/tours/4.jpg",
          "city" => "stockholm",
        ],
        "swe-booaboat-tour" => [
          "key" => "swe-booaboat-tour",
          "name" => "Bookaboat tour",
          "price" => 99,
          "hour" => 2,
          "description" => "Bookaboat is a great way to do something different in Malmo. The electric boats are quite easy to operate with a very user friendly sign in/sign out operation via your cell phone.",
          "image" => "img/sweden/tours/5.jpeg",
          "city" => "malmo",
        ],
        "swe-malmo-walking-tour" => [
          "key" => "swe-malmo-walking-tour",
          "name" => "Malmo Walking Tours",
          "price" => 20,
          "hour" => 2,
          "description" => "Come explore the history and sights of Malmö on an enjoyable walking tour through the streets of the ever changing city.",
          "image" => "img/sweden/tours/6.jpg",
          "city" => "malmo",
        ],
        "swe-gothenbury-city-tour" => [
          "key" => "swe-gothenbury-city-tour",
          "name" => "Gothenburg City Tour",
          "price" => 250,
          "hour" => 3,
          "description" => "Gothenburg is the second largest city in Sweden with the largest harbor opening in the North Sea famous for trade since the 18th-century. This 3-hour private walking tour will be a great way to discover all that the city has to offer.",
          "image" => "img/sweden/tours/7.jpg",
          "city" => "goteborg",
        ],
        "swe-private-bike-tour" => [
          "key" => "swe-private-bike-tour",
          "name" => "Private Bike Tour",
          "price" => 260,
          "hour" => 3,
          "description" => "Enjoy a private bike tour of Gothenburg just for you, your family and friends! You will cycle through the history, culture and everyday life of Gothenburg.",
          "image" => "img/sweden/tours/8.jpg",
          "city" => "goteborg",
        ],
      ],
    ],
    "swe-museums" => [
      "key" => "swe-museums",
      "country" => "sweden",
      "name" => "Museums",
      "hour" => 1,
      "description" => "Get more insight on the Swedish culture, history and art by exploring one or more of these museums.",
      "descriptionShort" => "Get more insight on the Swedish culture, history and art by exploring one or more of these museums.",
      "readmore" => "https://globuzzer.mn.co/posts/best-visiting-museums-in-stockholm-prices-locations",
      "image" => "img/sweden/museums/0.jpg",
      "imageL" => "img/sweden/museums-L.jpg",
      "imageR" => "img/sweden/museums-R.jpg",
      "tags" => ["arts", "inside"],
      "price" => 25,
      "choices" => [
        "swe-vasa-museum" => [
          "key" => "swe-vasa-museum",
          "name" => "Vasa Museum",
          "price" => 20,
          "hour" => 2,
          "description" => "The Vasa ship capsized and sank on its maiden voyage in 1628, and was fully restored after 333 years on the sea bed, and now exhibited in the Vasa Museum.",
          "image" => "img/sweden/museums/1.jpg",
          "city" => "stockholm",
        ],
        "swe-army-museum" => [
          "key" => "swe-army-museum",
          "name" => "Army Museum",
          "price" => 12,
          "hour" => 1.5,
          "description" => "Take a walk through Swedish history, from 1500 to the present day, among fascinating historical objects and realistic scenes. Experience living conditions for soldiers, their families and the general population.",
          "image" => "img/sweden/museums/2.jpg",
          "city" => "stockholm",
        ],
        "swe-thiel-gallery" => [
          "key" => "swe-thiel-gallery",
          "name" => "Thiel Gallery",
          "price" => 12,
          "hour" => 2,
          "description" => "Thielska Galleriet is one of Sweden's most important art museums and beautifully situated in a walled park on the blockhouseudden at Djurgården in Stockholm.",
          "image" => "img/sweden/museums/3.jpg",
          "city" => "stockholm",
        ],
        "swe-hallwyl-museum" => [
          "key" => "swe-hallwyl-museum",
          "name" => "Hallwyl Museum",
          "price" => 4,
          "hour" => 2,
          "description" => "The Hallwyl Museum is a House-Museum with collections of Art and Decorative Art from earlier periods. ",
          "image" => "img/sweden/museums/4.jpg",
          "city" => "stockholm",
        ],
        "swe-royal-armory" => [
          "key" => "swe-royal-armory",
          "name" => "Royal Armory",
          "price" => 4,
          "hour" => 1.5,
          "description" => "The Royal Armoury is the oldest museum in Sweden. It was established by King Gustav II Adolph in 1628 after his decision to preserve the clothes he wore on his campaign in Poland.",
          "image" => "img/sweden/museums/5.jpg",
          "city" => "stockholm",
        ],
        "swe-house-maritime" => [
          "key" => "swe-house-maritime",
          "name" => "The House of Technology and Maritime",
          "price" => 4,
          "hour" => 2,
          "description" => "Get into the real submarine U3 ! Visit the base exhibitions The city of time - Malmö 1850 to today , Heaven and Earth, Muscles and Motors , Coastal Land , Smart and Impression",
          "image" => "img/sweden/museums/6.jpg",
          "city" => "malmo",
        ],
        "swe-malmohus-castle" => [
          "key" => "swe-malmohus-castle",
          "name" => "Malmöhus Castle",
          "price" => 4,
          "hour" => 1,
          "description" => "Malmöhus Castle in Malmö is the oldest surviving renaissance castle in Scandinavia and one of Sweden’s most popular museums.",
          "image" => "img/sweden/museums/7.jpg",
          "city" => "malmo",
        ],
        "swe-aeroseum" => [
          "key" => "swe-aeroseum",
          "name" => "Aeroseum",
          "price" => 10,
          "hour" => 2,
          "description" => " Aeroseum shows the history and development of the flight. Everything from Ikaros to today's modern aircraft, helicopters and other flying craft.Civil, military, national and international.",
          "image" => "img/sweden/museums/8.jpg",
          "city" => "goteborg",
        ],
        "swe-goteborgs-konstmuseum" => [
          "key" => "swe-goteborgs-konstmuseum",
          "name" => "Goteborgs Konstmuseum",
          "price" => 6,
          "hour" => 1.5,
          "description" => "International artists are represented with works by Monet, Picasso and Rembrandt, while the local history of Gothenburg's Colorists is also explored.",
          "image" => "img/sweden/museums/9.jpg",
          "city" => "goteborg",
        ],
        "swe-volvo-museum" => [
          "key" => "swe-volvo-museum",
          "name" => "Volvo Museum",
          "price" => 10,
          "hour" => 1.5,
          "description" => "At Volvo Museum you can take a trip through Volvo’s history and heritage, all the way from the start in 1927. Our collection encompasses a wide range of passenger cars, buses and heavy trucks as well as marine engines and construction equipment.",
          "image" => "img/sweden/museums/10.jpg",
          "city" => "goteborg",
        ],
      ],
    ],
    "swe-nature" => [
      "key" => "swe-nature",
      "country" => "sweden",
      "name" => "Nature",
      "description" => "Explore Sweden's vast nature. From its beautiful stretched out forests to its coastline with thousands of small island. ",
      "descriptionShort" => "Explore Sweden's vast nature. From its beautiful stretched out forests to its coastline with thousands of small island. ",
      "readmore" => "https://globuzzer.mn.co/posts/1120531",
      "image" => "img/sweden/nature/0.jpg",
      "imageL" => "img/sweden/stockholm-archipelago-L.jpg",
      "imageR" => "img/sweden/stockholm-archipelago-R.jpg",
      "tags" => ["city", "outside"],
      "choices" => [
        "swe-moose" => [
          "key" => "swe-moose",
          "name" => "Moose & Wildlife Safari",
          "price" => 125,
          "hour" => 5,
          "description" => "Meet Swedish wildlife in its natural habitat! Get a chance to see some of Sweden iconic animals such as moose, osprey and boars. Enjoy a day in nature and explore more of Sweden’s wildlife.",
          "image" => "img/sweden/nature/1.jpg",
          "city" => "stockholm",
        ],
        "swe-kayaking" => [
          "key" => "swe-kayaking",
          "name" => "Kayaking in Stockholm's Archipelago",
          "price" => 155,
          "hour" => 8,
          "description" => "Leave the city behind you while you explore the archipelago and the Baltic Sea by kayak! Paddle into a far stretched world that exists of 30.000 islands.Enjoy the unique scenery and enjoy a whole day out on the water.",
          "image" => "img/sweden/nature/2.jpg",
          "city" => "stockholm",
        ],
        "swe-nature-hiking" => [
          "key" => "swe-nature-hiking",
          "name" => "Off Trail Nature Hiking",
          "price" => 125,
          "hour" => 7,
          "description" => "The best way of getting a taste of Sweden’s beautiful nature. Get a chance to explore the mystical forest, visit beaver dams, lakes and much more. During the trip we will ejoy a nice campfire lunch to recharge before continuing the adventure.",
          "image" => "img/sweden/nature/3.jpg",
          "city" => "stockholm",
        ],
      ],
    ],
    "swe-additional" => [
      "key" => "swe-additional",
      "country" => "finland",
      "name" => "Additional Services",
      "description" => "Need any extra help or do you have any special requests, we offer several extra services that will make your trip go as smoothly as possible. ",
      "descriptionShort" => "Need any extra help or do you have any special requests, we offer several extra services that will make your trip go as smoothly as possible. ",
      "readmore" => "https://globuzzer.mn.co/posts/1264899",
      "image" => "img/finland/additional/0.jpg",
      "imageL" => "img/finland/a-day-away-L.jpg",
      "imageR" => "img/finland/a-day-away-R.jpg",
      "tags" => ["outside"],
      "price" => 338.25,
      "choices" => [
        "swe-booking" => [
          "key" => "swe-booking",
          "name" => "Booking reservations",
          "description" => "Our local guide will make sure that all bookings for you will be done whether you need a conference room or want a table in a specific restaurant they are on it.",
          "hour" => 0,
          "price" => 0,
          "image" => "img/finland/additional/1.jpg",
        ],
        "swe-help-support" => [
          "key" => "swe-help-support",
          "name" => "Extra help and support",
          "description" => "If you require extra assistance our local guide will make sure that all activities and services are moderated and catered to your needs. (Please notify the customer service of your special needs before booking to make sure we are able to give you the best experience possible)",
          "hour" => 0,
          "price" => 0,
          "image" => "img/finland/additional/2.jpg",
        ],
        "swe-local-guide" => [
          "key" => "swe-local-guide",
          "name" => "Local Guide Language",
          "description" => "All our guides speak English, if you would prefer the guide to speak and guide you in another one, please select. We will do our best to find a guide who speaks your preferred language (Globuzzer can not guarantee availability of a guide)",
          "hour" => 0,
          "price" => 0,
          "image" => "img/finland/additional/3.jpg",
        ],
        "swe-special-service" => [
          "key" => "swe-special-service",
          "name" => "Special Service Request",
          "description" => "Couldn't find a specific service or activity you were looking for? Add this one to your package and we will contact you for more information. ",
          "hour" => 0,
          "price" => 0,
          "image" => "img/finland/additional/4.jpg",
        ],
      ],
    ],
    "fin-transportation" => [
      "key" => "fin-transportation",
      "country" => "finland",
      "name" => "Transportation",
      "description" => "To help you get the maximum out of the city, we have these options available for you.",
      "descriptionShort" => "To help you get the maximum out of the city, we have these options available for you.",
      "readmore" => "https://globuzzer.mn.co/posts/1214179",
      "image" => "img/finland/transportation/0.jpg",
      "imageL" => "img/finland/transportation-L.jpg",
      "imageR" => "img/finland/transportation-R.jpg",
      "tags" => ["city"],
      "price" => [
        "6 hours" => 70,
        "1 day" => 70,
        "2 days" => 140,
      ],
      "choices" => [
        "fin-taxi" => [
          "key" => "fin-taxi",
          "name" => "Taxi",
          "description" => "To travel worry free a taxi is a good option, they are easy to get and will quickly drive you from a to b as they know all places like the back of their hand.",
          "price" => 0,
          "hour" => 0.5,
          "image" => "img/finland/transportation/1.jpg",
        ],
        "fin-private-car" => [
          "key" => "fin-private-car",
          "name" => "Rental Car",
          "description" => "If you love driving and want to get a feel of the city by yourself, then this is the perfect option for you. ",
          "price" => 190,
          "hour" => 0,
          "image" => "img/finland/transportation/2.jpg",
        ],
        "fin-personal-driver" => [
          "key" => "fin-personal-driver",
          "name" => "Private Driver",
          "description" => "We will provide you with a personal driver, who will drive you around during your whole trip.",
          "price" => 400,
          "hour" => 8,
          "image" => "img/finland/transportation/3.jpg",
        ],
        "fin-public-transportation" => [
          "key" => "fin-public-transportation",
          "name" => "Public Transportation",
          "description" => "The public transport network(bus, tram, train) in Finland is one of the best. These are highly coordinated and efficient and its very easy to move from place to another.",
          "price" => 9,
          "hour" => 0,
          "image" => "img/finland/transportation/4.jpg",
        ],
      ],
    ],
    "fin-cuisine" => [
      "key" => "fin-cuisine",
      "country" => "finland",
      "name" => "Finland’s cuisine",
      "description" => "Choose a place of your own liking or let use recommend you the best places to have either your breakfast, lunch or dinner. We can help you with reservations and bookings in advance and will to guide to to the chosen location.",
      "descriptionShort" => "Choose a place of your own liking or let use recommend you the best places to have either your breakfast, lunch or dinner. We can help you with reservations and bookings in advance and will to guide to to the chosen location. ",
      "readmore" => "https://globuzzer.mn.co/posts/taste-finland-the-most-popular-finnish-foods",
      "image" => "img/finland/cuisine/0.jpg",
      "imageL" => "img/finland/helsinkis-cuisine-L.jpg",
      "imageR" => "img/finland/helsinkis-cuisine-R.jpg",
      "tags" => ["food"],
      "price" => [
        "6 hours" => 50,
        "1 day" => 50,
        "2 days" => 125,
      ],
      "choices" => [
        "fin-breakfast" => [
          "key" => "fin-breakfast",
          "name" => "Breakfast",
          "description" => "Choose a place of your own liking and we can help you with advance reservations and bookings.",
          "hour" => 1,
          "image" => "img/finland/cuisine/1.jpg",
        ],
        "fin-lunch" => [
          "key" => "fin-lunch",
          "name" => "Lunch",
          "description" => "Choose a place of your own liking and we can help you with advance reservations and bookings.",
          "hour" => 1,
          "image" => "img/finland/cuisine/2.jpg",
        ],
        "fin-dinner" => [
          "key" => "fin-dinner",
          "name" => "Dinner",
          "description" => "Choose a place of your own liking and we can help you with advance reservations and bookings.",
          "hour" => 1,
          "image" => "img/finland/cuisine/3.jpg",
        ],
        "fin-helsinki-food" => [
          "key" => "fin-helsinki-food",
          "name" => "Helsink's Food Tour",
          "description" => "Join us and get a taste of Finnish food in this 2 hour culinary tour. We will visit two of the best markets in Helsinki; the Old Market Square and Hietalahti Market Hall.",
          "hour" => 2,
          "price" => 35,
          "image" => "img/finland/cuisine/4.jpg",
          "city" => "helsinki",
        ],
        "fin-lapland-taste" => [
          "key" => "fin-lapland-taste",
          "name" => "Taste of Lapland",
          "description" => "Try some typical Lappish dishes at the best restaurants in town. During the four courses of the food tour, your taste buds will enjoy wild flavors.",
          "hour" => 3,
          "price" => 150,
          "image" => "img/finland/cuisine/5.jpg",
          "city" => "rovaniemi",
        ],
        "fin-wilderness-dinner" => [
          "key" => "fin-wilderness-dinner",
          "name" => "Wilderness Dinner",
          "description" => "They say that everything tastes even better if eaten under clear sky You will be taken to a traditional Lappish hut for a three course dinner by the open fire. (min. of 2 persons)",
          "hour" => 3,
          "price" => 130,
          "image" => "img/finland/cuisine/6.jpg",
          "city" => "rovaniemi",
        ],
        "fin-turku-food" => [
          "key" => "fin-turku-food",
          "name" => "Turku's Food Journey",
          "description" => "Join us and get a delightful taste of Turku delicacies in a 2-hour culinary tour. We will visit the Turku Market Hall and try out different local food samples throughout the whole journey.",
          "hour" => 2,
          "price" => 98,
          "image" => "img/finland/cuisine/7.jpg",
          "city" => "turku",
        ],
      ],
    ],
    "fin-tours" => [
      "key" => "fin-tours",
      "country" => "finland",
      "name" => "Tours",
      "description" => "The best and fastest way to get to know a place is by taking a well organized tour, these tours will enrich your knowledge about Finland and show you all the beauty and history of it.",
      "descriptionShort" => "The best and fastest way to get to know a place is by taking a well organized tour, these tours will enrich your knowledge about Finland and show you all the beauty and history of it.",
      "readmore" => "https://globuzzer.mn.co/posts/must-see-attractions-in-helsinki",
      "image" => "img/finland/tours/0.jpg",
      "imageL" => "img/finland/suomenlinna-L.jpg",
      "imageR" => "img/finland/suomenlinna-R.jpg",
      "tags" => ["inside"],
      "price" => 360.43,
      "choices" => [
        "fin-helsinki-tour" => [
          "key" => "fin-helsinki-tour",
          "name" => "Helsinki city tour",
          "description" => "See the best of Helsinki in this 2 hour private guided tour starting with the landmarks like the Helsinki cathedral, Sibelius Monument, Uspenski Cathedral, Rock Church, Market Square and more",
          "hour" => 2,
          "price" => 150,
          "image" => "img/finland/tours/1.jpg",
          "city" => "helsinki",
        ],
        "fin-suomenlinna" => [
          "key" => "fin-suomenlinna",
          "name" => "Suomenlinna",
          "description" => "Just 15 minutes ferry trip away from the capital, you will get to explore one of the most amazing and popular historical destination. During the summertime, it’s best to have a picnic near the beach, take a dip, breath in fresh air and relax.",
          "hour" => 4,
          "price" => 145,
          "image" => "img/finland/tours/2.jpg",
          "city" => "helsinki",
        ],
        "fin-porvoo-tour" => [
          "key" => "fin-porvoo-tour",
          "name" => "Helsinki and Porvoo tour",
          "description" => "Two beautiful cities in one day. In this tour you will get a tour in Helsinki and then drive through countryside to visit Porvoo, the second oldest city in Finland.",
          "hour" => 8,
          "price" => 250,
          "image" => "img/finland/tours/3.jpg",
          "city" => "helsinki",
        ],
        "fin-helsinki-archipelago" => [
          "key" => "fin-porvoo-tour",
          "name" => "Sailing Tour through Helsinki's Archipelago",
          "description" => "Helsinki's archipelago offers great opportunities for unique nature experiences. One of the best ways to see Helsinki is from the sea.",
          "hour" => 3,
          "price" => 170,
          "image" => "img/finland/tours/4.jpg",
          "city" => "helsinki",
        ],
        "fin-rovaniemi-city-tour" => [
          "key" => "fin-rovaniemi-city-tour",
          "name" => "Rovaniemi city tour",
          "description" => "This is the capital city in Lapland . Visit the famous Santa Claus village, Arktikum museum, reindeer and husky farms and the arctic snow hotel.",
          "hour" => 8,
          "price" => 300,
          "image" => "img/finland/tours/5.jpg",
          "city" => "rovaniemi",
        ],
        "fin-rovaniemi-santa-claus" => [
          "key" => "fin-rovaniemi-santa-claus",
          "name" => "Rovaniemi the City and Santa Claus Village",
          "description" => "Explore all that the city of Rovaniemi has to offer and also visit Santa Claus village and cross the magical Arctic Circle.",
          "hour" => 4,
          "price" => 100,
          "image" => "img/finland/tours/6.jpg",
          "city" => "rovaniemi",
        ],
        "fin-turku-city-tour" => [
          "key" => "fin-turku-city-tour",
          "name" => "Turku City Tour",
          "description" => "See the best of Finland oldest city in a 3 hour private guided tour where you could have a good walk along the beautiful Aura River, visit the Turku Castle, the Old Great Square and much more.",
          "hour" => 3,
          "price" => 150,
          "image" => "img/finland/tours/7.jpg",
          "city" => "turku",
        ],
        "fin-aland-tour" => [
          "key" => "fin-aland-tour",
          "name" => "Åland Tour",
          "description" => " Spend a day to visit an isolated island, discover historical ruins and enjoy the beauty of seascapes that Aland offer.",
          "hour" => 48,
          "price" => 899,
          "image" => "img/finland/tours/8.jpg",
          "city" => "turku",
        ],
      ],
    ],
    "fin-museums" => [
      "key" => "fin-museums",
      "country" => "finland",
      "name" => "Museums",
      "description" => "Finland known for its cultural, historical and art museums.",
      "descriptionShort" => "Finland known for its cultural, historical and art museums.",
      "readmore" => "https://globuzzer.mn.co/posts/modern-art-museums-in-helsinki",
      "image" => "img/finland/museums/0.jpg",
      "imageL" => "img/finland/museums-L.jpg",
      "imageR" => "img/finland/museums-R.jpg",
      "tags" => ["arts", "inside"],
      "price" => 17.77,
      "choices" => [
        "fin-kiasma" => [
          "key" => "fin-kiasum",
          "name" => "Kiasma Museum of Contemporary Art",
          "description" => "Visit one of the leading museums of contemporary art in the Nordic region.",
          "hour" => 2,
          "price" => 28,
          "image" => "img/finland/museums/1.jpg",
          "city" => "helsinki",
          "priceType" => "guide",
        ],
        "fin-national-museum" => [
          "key" => "fin-national-museum",
          "name" => "National Museum of Finland",
          "description" => "Finnish history, a trip from the Stone Age to the present day.",
          "hour" => 2,
          "price" => 24,
          "image" => "img/finland/museums/2.jpg",
          "city" => "helsinki",
          "priceType" => "guide",
        ],
        "fin-ham" => [
          "key" => "fin-ham",
          "name" => "HAM",
          "description" => "HAM draws attention to modern art and contemporary art that belongs to the people  of Helsinki, which includes over 9,000 works of art.",
          "hour" => 2,
          "price" => 24,
          "image" => "img/finland/museums/3.jpeg",
          "city" => "helsinki",
          "priceType" => "guide",
        ],
        "fin-ateneum" => [
          "key" => "fin-ateneum",
          "name" => "Ateneum",
          "description" => "This art museum is the oldest building of the National Gallery of Finland. It displays the largest collection of paintings and sculptures in Finland with emphasis on Finnish art, but there are also works from international artists.",
          "hour" => 2,
          "price" => 30,
          "image" => "img/finland/museums/4.jpg",
          "city" => "helsinki",
          "priceType" => "guide",
        ],
        "fin-design-museum" => [
          "key" => "fin-design-museum",
          "name" => "Design Museum",
          "description" => "This museum is located in the fashionable design district of Helsinki. It displays some of the best examples of Finnish fashion, art, and even household objects that Scandinavia is well known for.",
          "hour" => 1.5,
          "price" => 24,
          "image" => "img/finland/museums/5.jpg",
          "city" => "helsinki",
          "priceType" => "guide",
        ],
        "fin-arktikum" => [
          "key" => "fin-arktikum",
          "name" => "Arktikum",
          "description" => "Arktikum is a science center and museum that lets you experience northern nature, culture, and history up close.",
          "hour" => 2,
          "price" => 26,
          "image" => "img/finland/museums/6.jpg",
          "city" => "rovaniemi",
          "priceType" => "guide",
        ],
        "fin-korundi" => [
          "key" => "fin-korundi",
          "name" => "Korundi",
          "description" => "Introduce yourself to the Finnish contemporary art and Northern art. The museum introduces works from artists who wheather work in North or are born there.",
          "hour" => 1,
          "price" => 18,
          "image" => "img/finland/museums/7.jpg",
          "city" => "rovaniemi",
          "priceType" => "guide",
        ],
        "fin-aboa-vetus" => [
          "key" => "fin-aboa-vetus",
          "name" => "Aboa Vetus & Ars Nova",
          "description" => "An unique cultural attraction. The museum is a fascinating combination of old and new that invites the visitor to explore the medieval history and culture of Finland.",
          "hour" => 1.5,
          "price" => 20,
          "image" => "img/finland/museums/8.jpg",
          "city" => "turku",
          "priceType" => "guide",
        ],
        "fin-luostarinmaki" => [
          "key" => "fin-luostarinmaki",
          "name" => "Luostarinmäki",
          "description" => "In 1827 a fire destroyed almost all of Turku. Luostarinmäki was one of the few areas that were saved, and now it hosts a handicrafts museum.",
          "hour" => 1.5,
          "price" => 14,
          "image" => "img/finland/museums/9.JPG",
          "city" => "turku",
          "priceType" => "guide",
        ],
        "fin-pharmacy" => [
          "key" => "fin-pharmacy",
          "name" => "Pharmacy Museum and Qwensel House",
          "description" => "Look into the 18th century home, the oldest building in Finland, and learn about the history of medicines and the nobilities living here during the 1700s-1800s.",
          "hour" => 1,
          "price" => 12,
          "image" => "img/finland/museums/10.jpg",
          "city" => "turku",
          "priceType" => "guide",
        ],
      ],
    ],
    "fin-sauna" => [
      "key" => "fin-sauna",
      "country" => "finland",
      "name" => "Sauna and Spa",
      "description" => "When in Finland, do as the Finns do! There is nothing more Finnish than sauna. It is a pivotal element of the culture and very dear to Finns. It is also a place for mental and physical relaxation. All Finns have a favourite sauna and these are best in Helsinki has to offer.",
      "descriptionShort" => "When in Finland, do as the Finns do! There is nothing more Finnish than sauna. It is a pivotal element of the culture and very dear to Finns. It is also a place for mental and physical relaxation. All Finns have a favourite sauna and these are best in Helsinki has to offer.",
      "readmore" => "https://globuzzer.mn.co/posts/1215068",
      "image" => "img/finland/sauna/0.jpg",
      "imageL" => "img/finland/private-walking-L.jpg",
      "imageR" => "img/finland/private-walking-R.jpg",
      "tags" => ["city", "outside"],
      "price" => 117.7,
      "choices" => [
        "fin-skywheel" => [
          "key" => "fin-skywheel",
          "name" => "Skysauna Helsinki",
          "description" => "Sauna in the sky with an amazing seaview and a comfortable hot tub on the ground. You will get a view of the Baltic sea and the city’s neoclassical centre from up to 130 feet.",
          "hour" => 1,
          "price" => 240,
          "image" => "img/finland/sauna/1.jpeg",
          "city" => "helsinki",
        ],
        "fin-loyly" => [
          "key" => "fin-loyly",
          "name" => "Loyly",
          "description" => "Enjoy traditional smoke sauna and a wood-burning sauna with refreshing swim in the sea all the year round. Relax and enjoy the beautiful view of  Helsinki's Archipelago.",
          "hour" => 2,
          "price" => 19,
          "image" => "img/finland/sauna/2.jpg",
          "city" => "helsinki",
        ],
        "fin-snow-sauna" => [
          "key" => "fin-snow-sauna",
          "name" => "Snow Sauna Experience  with Dinner",
          "description" => "Explore ice and snow structures, spectacular ice sculptures and unique snow sauna with dinner served in a magical atmosphere by an open fire at Lappish Kota restaurant. (only in winter)",
          "hour" => 1,
          "price" => 150,
          "image" => "img/finland/sauna/3.jpg",
          "city" => "rovaniemi",
        ],
        "fin-arctic-forest" => [
          "key" => "fin-arctic-forest",
          "name" => "Arctic Forest Spa",
          "description" => "Enjoy the magical natural phenomenon. In addition to traditional Finnish sauna, A quick dip in an Arctic lake or a relaxing soak in one of the two Jacuzzis makes bathing experience incredibly good.",
          "hour" => 3,
          "price" => 89,
          "image" => "img/finland/sauna/4.jpg",
          "city" => "rovaniemi",
        ],
        "fin-ruissalo-spa" => [
          "key" => "fin-ruissalo-spa",
          "name" => "Ruissalo Spa",
          "description" => "Relax with a nice private sauna session at Ruissalo Spa. In addition you can enjoy pampering beauty and spa treatments as well (excl. in price).",
          "hour" => 2,
          "price" => 135,
          "image" => "img/finland/sauna/5.jpg",
          "city" => "turku",
        ],
      ],
    ],
    "fin-nature" => [
      "key" => "fin-nature",
      "country" => "finland",
      "name" => "Nature",
      "description" => "Escape into the wild natural settings, with lovely lakes, green forests and rugged crags.",
      "descriptionShort" => "Escape into the wild natural settings, with lovely lakes, green forests and rugged crags.",
      "readmore" => "https://globuzzer.mn.co/posts/1281814",
      "image" => "img/finland/nature/0.jpg",
      "imageL" => "img/finland/nature-L.jpg",
      "imageR" => "img/finland/nature-R.jpg",
      "tags" => ["outside"],
      "onlyFor" => ["1 day", "2 days"],
      "price" => 445.87,
      "choices" => [
        "fin-nuuksio-forest" => [
          "key" => "fin-nuuksio-forest",
          "name" => "Private Nuuksio Forest Lake Walk",
          "description" => "Here you can experience the Nuuksio forest and lake country characterized by rugged hills, steep gorges and deep lakes formed by Ice Age.",
          "hour" => 4.5,
          "price" => 276,
          "image" => "img/finland/nature/1.jpg",
          "city" => "helsinki",
        ],
        "fin-nuuksio-campfire" => [
          "key" => "fin-nuuksio-campfire",
          "name" => "Nuuksio Short Walk and Campfire",
          "description" => "Be in touch with nature without any filter in between. While cleansing your mind with the fresh forest air, you can also nourish your body with hand picked fresh berries( in summer), mushrooms and grilled hot dogs.",
          "hour" => 4.5,
          "price" => 69,
          "image" => "img/finland/nature/2.jpg",
          "city" => "helsinki",
        ],
        "fin-korouoma" => [
          "key" => "fin-korouoma",
          "name" => "Korouoma Canyon and Auttiköngäs Waterfall Hiking Tour with picnic",
          "description" => "Enjoy a day of Finnish nature with a great hiking adventure starting from Korouoma which is a 30-km-long fracture valley running from northwest to southeast, to Auttiköngäs Waterfall, includes a picnic with fantastic view.",
          "hour" => 8,
          "price" => 150,
          "image" => "img/finland/nature/3.jpg",
          "city" => "rovaniemi",
        ],
        "fin-ranua-arctic" => [
          "key" => "fin-ranua-arctic",
          "name" => "Day Trip to Ranua Arctic Wildlife Park",
          "description" => "Visit the most northern wildlife park in the world and see many animals native to the arctic areas. The park consists of approximately 50 wild animal species and 200 individuals.",
          "hour" => 6,
          "price" => 119,
          "image" => "img/finland/nature/4.jpg",
          "city" => "rovaniemi",
        ],
        "fin-lapland-aurora" => [
          "key" => "fin-lapland-aurora",
          "name" => "Lapland Aurora Borealis Picnic",
          "description" => "Travel to the countryside where the dark skies heighten the chances of sightings Aurora. Enjoy a picnic cooked on fire and listen to amazing stories about Rovaniemi and the nature. (only in winter)",
          "hour" => 3,
          "price" => 69,
          "image" => "img/finland/nature/5.jpg",
          "city" => "rovaniemi",
        ],
        "fin-lapland-reindeer" => [
          "key" => "fin-lapland-reindeer",
          "name" => "Lapland Reindeer and Husky Safari from Rovaniemi",
          "description" => "Enjoy a great experience and settle on a reindeer sleigh for a wonderful ride through the snowy woods and visit husky farm. (only in winter)",
          "hour" => 3,
          "price" => 156,
          "image" => "img/finland/nature/6.jpg",
          "city" => "rovaniemi",
        ],
        "fin-northern-light-snowmobile" => [
          "key" => "fin-northern-light-snowmobile",
          "name" => "Northern Lights Snowmobile Driving Safari",
          "description" => "Experience a nice and memorable trip in the dark wilderness of finnish nature by driving a snowmobile. A great adventure worth to try it! (only in winter)",
          "hour" => 5,
          "price" => 159,
          "image" => "img/finland/nature/7.jpg",
          "city" => "rovaniemi",
        ],
        "fin-savojarvi-trail" => [
          "key" => "fin-savojarvi-trail",
          "name" => "Hiking on Savojärvi Trail",
          "description" => "This 2 hour hike takes you through a beautiful landscape the shores of Lake Savojärvi in national park Kurjenrahka.",
          "hour" => 2,
          "price" => 47,
          "image" => "img/finland/nature/8.jpg",
          "city" => "turku",
        ],
      ],
    ],
    "fin-additional" => [
      "key" => "fin-additional",
      "country" => "finland",
      "name" => "Additional Services",
      "description" => "Need any extra help or do you have any special requests, we offer several extra services that will make your trip go as smoothly as possible. ",
      "descriptionShort" => "Need any extra help or do you have any special requests, we offer several extra services that will make your trip go as smoothly as possible. ",
      "readmore" => "https://globuzzer.mn.co/posts/1264899",
      "image" => "img/finland/additional/0.jpg",
      "imageL" => "img/finland/a-day-away-L.jpg",
      "imageR" => "img/finland/a-day-away-R.jpg",
      "tags" => ["outside"],
      "price" => 338.25,
      "choices" => [
        "fin-booking" => [
          "key" => "fin-booking",
          "name" => "Booking reservations",
          "description" => "Our local guide will make sure that all bookings for you will be done whether you need a conference room or want a table in a specific restaurant they are on it.",
          "hour" => 0,
          "price" => 0,
          "image" => "img/finland/additional/1.jpg",
        ],
        "fin-help-support" => [
          "key" => "fin-help-support",
          "name" => "Extra help and support",
          "description" => "If you require extra assistance our local guide will make sure that all activities and services are moderated and catered to your needs. (Please notify the customer service of your special needs before booking to make sure we are able to give you the best experience possible)",
          "hour" => 0,
          "price" => 0,
          "image" => "img/finland/additional/2.jpg",
        ],
        "fin-local-guide" => [
          "key" => "fin-local-guide",
          "name" => "Local Guide Language",
          "description" => "All our guides speak English, if you would prefer the guide to speak and guide you in another one, please select. We will do our best to find a guide who speaks your preferred language (Globuzzer can not guarantee availability of a guide)",
          "hour" => 0,
          "price" => 0,
          "image" => "img/finland/additional/3.jpg",
        ],
        "fin-special-service" => [
          "key" => "fin-special-service",
          "name" => "Special Service Request",
          "description" => "Couldn't find a specific service or activity you were looking for? Add this one to your package and we will contact you for more information. ",
          "hour" => 0,
          "price" => 0,
          "image" => "img/finland/additional/4.jpg",
        ],
      ],
    ],
    "den-transportation" => [
      "key" => "den-transportation",
      "country" => "denmark",
      "name" => "Transportation",
      "description" => "To help you get the maximum out of the city, we have these options available for you.",
      "descriptionShort" => "To help you get the maximum out of the city, we have these options available for you.",
      "readmore" => "https://globuzzer.mn.co/posts/museums-in-copenhagen-art-and-history",
      "image" => "img/denmark/transportation/0.jpg",
      "imageL" => "img/denmark/museum-tour-L.jpg",
      "imageR" => "img/denmark/museum-tour-R.jpg",
      "tags" => ["city", "arts", "inside"],
      "price" => 0,
      "choices" => [
        "den-taxi" => [
          "key" => "den-taxi",
          "name" => "Taxi",
          "description" => "To travel worry free a taxi is a good option, they are easy to get and will quickly drive you from a to b as they know all places like the back of their hand.",
          "hour" => 0,
          "price" => 0,
          "image" => "img/denmark/transportation/1.jpg",
        ],
        "den-private-car" => [
          "key" => "den-private-car",
          "name" => "Private Car",
          "description" => "If you love driving and want to get a feel of the city by yourself, then this is the perfect option for you.",
          "hour" => 0,
          "price" => 1000,
          "image" => "img/denmark/transportation/2.jpg",
        ],
        "den-private-driver" => [
          "key" => "den-private-driver",
          "name" => "Private Driver",
          "description" => "We will provide you with a personal driver, who will drive you around during your whole trip.",
          "hour" => 0,
          "price" => 2000,
          "image" => "img/denmark/transportation/3.jpg",
        ],
        "den-bike" => [
          "key" => "den-bike",
          "name" => "Bike",
          "description" => "If you would like to feel like a real Copenhagener, then having a bike is a must! We will provide you with a bike that will suits your needs. ",
          "hour" => 0,
          "price" => 100,
          "image" => "img/denmark/transportation/4.jpg",
        ],
        "den-public-transport" => [
          "key" => "den-public-transport",
          "name" => "Public Transport",
          "description" => "Takin the public transport (metro, s-tog and bus) in Denmark is really easy and will take you wherever you need.",
          "hour" => 0,
          "price" => 100,
          "image" => "img/denmark/transportation/5.jpg",
        ],
      ],
    ],
    "den-cuisine" => [
      "key" => "den-cuisine",
      "country" => "denmark",
      "name" => "The Cuisine",
      "description" => "Choose a place of your own liking or let us recommend you the best places to have either your breakfast, lunch or dinner. We can help you with reservations and bookings in advance and will guide you to the chosen location.",
      "descriptionShort" => "Choose a place of your own liking or let us recommend you the best places to have either your breakfast, lunch or dinner. We can help you with reservations and bookings in advance and will guide you to the chosen location.",
      "readmore" => "https://globuzzer.mn.co/posts/1367321",
      "image" => "img/denmark/cuisine/0.jpg",
      "imageL" => "img/denmark/architecture-tour-L.jpg",
      "imageR" => "img/denmark/architecture-tour-R.jpg",
      "tags" => ["city", "inside"],
      "price" => 0,
      "choices" => [
        "den-breakfast" => [
          "key" => "den-breakfast",
          "name" => "Breakfast",
          "description" => "Choose a place by yourself or trust our recommendations. We can assist you in booking a restaurant.",
          "hour" => 1,
          "price" => 0,
          "image" => "img/denmark/cuisine/1.jpg",
        ],
        "den-lunch" => [
          "key" => "den-lunch",
          "name" => "Lunch",
          "description" => "Choose a place by yourself or trust our recommendations. We can assist you in booking a restaurant.",
          "hour" => 1,
          "price" => 0,
          "image" => "img/denmark/cuisine/2.jpg",
        ],
        "den-dinner" => [
          "key" => "den-dinner",
          "name" => "Dinner",
          "description" => "Choose a place by yourself or trust our recommendations. We can assist you in booking a restaurant.",
          "hour" => 1.5,
          "price" => 0,
          "image" => "img/denmark/cuisine/3.jpg",
        ],
        "den-food-tour" => [
          "key" => "den-food-tour",
          "name" => "Food tour",
          "description" => "Join us and get a taste of modern Danish cuisine in this 3 hour evening tour. We will visit the famous Meatpacking District and Reffen - newly opened street food market.",
          "hour" => 3,
          "price" => 1000,
          "image" => "img/denmark/cuisine/4.jpg",
        ],
      ],
    ],
    "den-tours" => [
      "key" => "den-tours",
      "country" => "denmark",
      "name" => "Tours",
      "description" => "The best and fastest way to get to know a place is by taking a well organized tour. These tours will enrich your knowledge about Copenhagen and show you all the beauty and history of it.",
      "descriptionShort" => "The best and fastest way to get to know a place is by taking a well organized tour. These tours will enrich your knowledge about Copenhagen and show you all the beauty and history of it.",
      "readmore" => "https://globuzzer.mn.co/posts/must-see-attractions-in-copenhagen",
      "image" => "img/denmark/tours/0.jpg",
      "imageL" => "img/denmark/spirit-L.jpg",
      "imageR" => "img/denmark/spirit-R.jpg",
      "tags" => ["city", "outside"],
      "price" => 640,
      "choices" => [
        "den-walking-tour" => [
          "key" => "den-walking-tour",
          "name" => "Walking tour",
          "description" => "See the best of Copenhagen during this 3 hours guided tour with your private guide.",
          "hour" => 3,
          "price" => 1300,
          "image" => "img/denmark/tours/1.jpg",
        ],
        "den-biking-tour" => [
          "key" => "den-biking-tour",
          "name" => "Biking tour",
          "description" => "See more of magical Copenhagen and feel like a local during this 3 hours biking tour with your private guide.",
          "hour" => 3,
          "price" => 300,
          "image" => "img/denmark/tours/2.jpg",
        ],
        "den-boat-tour" => [
          "key" => "den-boat-tour",
          "name" => "Boat tour",
          "description" => "Explore the beauty of the famous canals and harbours of Copenhagen.",
          "hour" => 1,
          "price" => 2000,
          "image" => "img/denmark/tours/3.jpg",
          "city" => "copenhagen",
        ],
        "den-evening-food" => [
          "key" => "den-evening-food",
          "name" => "Evening food and beer tasting tour",
          "description" => "Join us and get a taste of modern Danish cuisine in this 3 hour evening tour. We will visit the famous Meatpacking District and Reffen - newly opened street food market.",
          "hour" => 3,
          "price" => 1500,
          "image" => "img/denmark/tours/4.jpg",
        ],
        "den-private-guide" => [
          "key" => "den-private-guide",
          "name" => "Private guide for a day",
          "description" => "Dive into the Danish culture and history and explore the less touristy places in Copenhagen with your private guide.",
          "hour" => 8,
          "price" => 2600,
          "image" => "img/denmark/tours/5.jpg",
        ],
      ],
    ],
    "den-museum" => [
      "key" => "den-museum",
      "country" => "denmark",
      "name" => "Museums",
      "description" => "Experience Danish history culture and art by visiting those museums.",
      "descriptionShort" => "Experience Danish history culture and art by visiting those museums.",
      "readmore" => "https://globuzzer.mn.co/posts/1334898 ",
      "image" => "img/denmark/museum/0.jpg",
      "imageL" => "img/denmark/bike-L.jpg",
      "imageR" => "img/denmark/bike-R.jpg",
      "tags" => ["outside"],
      "price" => 739,
      "choices" => [
        "den-national-gallery" => [
          "key" => "den-national-gallery",
          "name" => "National Gallery of Denmark",
          "description" => "The gallery presents Danish art to the world and the world’s art to Denmark. It has the largest art collection in Denmark.",
          "hour" => 3,
          "price" => 220,
          "image" => "img/denmark/museum/1.jpg",
          "city" => "copenhagen",
        ],
        "den-national-museum" => [
          "key" => "den-national-museum",
          "name" => "National Museum",
          "description" => "The National Museum is largest Denmark's largest museum of cultural history, located in a heart of Copenhagen.",
          "hour" => 3,
          "price" => 170,
          "image" => "img/denmark/museum/2.jpg",
          "city" => "copenhagen",
        ],
        "den-glyptoteket" => [
          "key" => "den-glyptoteket",
          "name" => "Glyptoteket",
          "description" => "The Glyptotek’s superlative collection contains over 10,000 works of art and archaeological objects and offers ever new perspectives on life, culture and civilization through a time span of 6,000 years.",
          "hour" => 3,
          "price" => 230,
          "image" => "img/denmark/museum/3.jpg",
          "city" => "copenhagen",
        ],
        "den-danish-jewish" => [
          "key" => "den-danish-jewish",
          "name" => "The Danish Jewish Museum",
          "description" => "Join the guided tour of the Danish Jewish Museum and hear the story of more than 400 years of Danish Jewish history, in the marvelous settings of Daniel Libeskinds architecture.",
          "hour" => 3,
          "price" => 120,
          "image" => "img/denmark/museum/4.jpg",
          "city" => "copenhagen",
        ],
        "den-design-museum" => [
          "key" => "den-design-museum",
          "name" => "Design Museum",
          "description" => "See the best of Danish Design while visiting Copenhagen. Take a look at the designs that made Danish design famous around the world",
          "hour" => 3,
          "price" => 230,
          "image" => "img/denmark/museum/5.jpg",
          "city" => "copenhagen",
        ],
        "den-louisiana-museum" => [
          "key" => "den-louisiana-museum",
          "name" => "Louisiana Art Museum",
          "description" => "Louisiana opened its door in 1958 and since then has become an international museum with many internationally renowned works.",
          "hour" => 3,
          "price" => 240,
          "image" => "img/denmark/museum/6.jpg",
          "city" => "copenhagen",
        ],
        "den-aros" => [
          "key" => "den-aros",
          "name" => "ARoS",
          "description" => "Famous art museum in Aarhus. Enjoy amazing rainbow panorama of the city from the top of the building.",
          "hour" => 3,
          "price" => 280,
          "image" => "img/denmark/museum/7.jpg",
          "city" => "aarhus",
        ],
      ],
    ],
    "den-nature" => [
      "key" => "den-nature",
      "country" => "denmark",
      "name" => "Nature",
      "description" => "Enjoy and explore Danish nature.",
      "descriptionShort" => "Enjoy and explore Danish nature.",
      "readmore" => "https://globuzzer.mn.co/posts/frightful-fun-in-freetown-christiania ",
      "image" => "img/denmark/nature/0.jpg",
      "imageL" => "img/denmark/freetown-L.jpg",
      "imageR" => "img/denmark/freetown-R.jpg",
      "tags" => ["city", "outside"],
      "price" => 213,
      "choices" => [
        "den-jogging" => [
          "key" => "den-jogging",
          "name" => "Jogging",
          "description" => "Join a local for your morning (or evening) jog and see the most beautiful jogging routes in the biggest Danish cities.",
          "hour" => 1,
          "price" => 0,
          "image" => "img/denmark/nature/1.jpg",
        ],
        "den-copenhagen-park" => [
          "key" => "den-copenhagen-park",
          "name" => "Parks of Copenhagen",
          "description" => "Enjoy the calmness of the parks in the heart of Copenhagen.",
          "hour" => 1,
          "price" => 0,
          "image" => "img/denmark/nature/2.jpg",
          "city" => "copenhagen",
        ],
        "den-botanical-garden" => [
          "key" => "den-botanical-garden",
          "name" => "The botanical garden",
          "description" => "Escape the city's craziness without leaving the strict center.",
          "hour" => 1,
          "price" => 0,
          "image" => "img/denmark/nature/3.jpg",
        ],
        "den-beach" => [
          "key" => "den-beach",
          "name" => "Beach",
          "description" => "Denmark is famous for its terrible weather but when the sun is out, you should go to the beach and share the happiness with the locals!",
          "hour" => 1,
          "price" => 0,
          "image" => "img/denmark/nature/4.jpg",
        ],
        "den-skagen" => [
          "key" => "den-skagen",
          "name" => "Skagen",
          "description" => "Visit the most northern part of Denmark, where two seas meet.",
          "hour" => 3,
          "price" => 0,
          "image" => "img/denmark/nature/5.jpg",
          "city" => "skagen",
        ],
      ],
    ],
    "den-additional" => [
      "key" => "den-additional",
      "country" => "denmark",
      "name" => "Additional Services",
      "description" => "Need any extra help or do you have any special requests, we offer several extra services that will make your trip go as smoothly as possible. ",
      "descriptionShort" => "Need any extra help or do you have any special requests, we offer several extra services that will make your trip go as smoothly as possible. ",
      "readmore" => "https://globuzzer.mn.co/posts/1264899",
      "image" => "img/finland/additional/0.jpg",
      "imageL" => "img/finland/a-day-away-L.jpg",
      "imageR" => "img/finland/a-day-away-R.jpg",
      "tags" => ["outside"],
      "price" => 338.25,
      "choices" => [
        "den-booking" => [
          "key" => "den-booking",
          "name" => "Booking reservations",
          "description" => "Our local guide will make sure that all bookings for you will be done whether you need a conference room or want a table in a specific restaurant they are on it.",
          "hour" => 0,
          "price" => 0,
          "image" => "img/finland/additional/1.jpg",
        ],
        "den-help-support" => [
          "key" => "den-help-support",
          "name" => "Extra help and support",
          "description" => "If you require extra assistance our local guide will make sure that all activities and services are moderated and catered to your needs. (Please notify the customer service of your special needs before booking to make sure we are able to give you the best experience possible)",
          "hour" => 0,
          "price" => 0,
          "image" => "img/finland/additional/2.jpg",
        ],
        "den-local-guide" => [
          "key" => "den-local-guide",
          "name" => "Local Guide Language",
          "description" => "All our guides speak English, if you would prefer the guide to speak and guide you in another one, please select. We will do our best to find a guide who speaks your preferred language (Globuzzer can not guarantee availability of a guide)",
          "hour" => 0,
          "price" => 0,
          "image" => "img/finland/additional/3.jpg",
        ],
        "den-special-service" => [
          "key" => "den-special-service",
          "name" => "Special Service Request",
          "description" => "Couldn't find a specific service or activity you were looking for? Add this one to your package and we will contact you for more information. ",
          "hour" => 0,
          "price" => 0,
          "image" => "img/finland/additional/4.jpg",
        ],
      ],
    ],
    "nor-transportation" => [
      "key" => "nor-transportation",
      "country" => "norway",
      "name" => "Transports",
      "description" => "We will provide you several options regarding transportation.",
      "descriptionShort" => "We will provide you several options regarding transportation.",
      "readmore" => "https://globuzzer.mn.co/posts/how-to-reach-oslo-airport-from-oslo-city-center",
      "image" => "img/norway/transportation/0.jpg",
      "imageL" => "img/norway/transpotation-L.jpg",
      "imageR" => "img/norway/transpotation-R.jpg",
      "tags" => ["city"],
      "choices" => [
        "den-taxi" => [
          "key" => "den-taxi",
          "name" => "Taxis & Uber",
          "description" => "Taxis are avaliable for you to any destination.",
          "hour" => 0,
          "price" => 0,
          "image" => "img/norway/transportation/1.jpg",
        ],
        "den-private-driver" => [
          "key" => "den-private-driver",
          "name" => "Personal Driver",
          "description" => "If you want to be at eas and avoid looking at a map or searching for train tickets you can tak a chauffeur and he will drive you where ever you want to go.",
          "hour" => 0,
          "price" => 2500,
          "image" => "img/norway/transportation/2.jpg",
        ],
        "den-rent-car" => [
          "key" => "den-rent-car",
          "name" => "Rent a Car",
          "description" => "If you would like to drive on your own then you can rent a car for a day or two.",
          "hour" => 0,
          "price" => 2000,
          "image" => "img/norway/transportation/3.jpg",
        ],
        "den-public-transport" => [
          "key" => "den-public-transport",
          "name" => "Public Transport",
          "description" => "The Public Trasnport of Oslo will provide you with a wide range of,choice with tram subway trains and busses.",
          "hour" => 0,
          "price" => 150,
          "image" => "img/norway/transportation/4.jpg",
        ],
      ],
    ],
    "nor-food" => [
      "key" => "nor-food",
      "country" => "norway",
      "name" => "Norwegian Food",
      "description" => "This Nordic Country is famous for several dishes such as Smoked Salmon.",
      "descriptionShort" => "This Nordic Country is famous for several dishes such as Smoked Salmon.",
      "readmore" => "https://globuzzer.mn.co/posts/best-cafes-for-remote-work-in-oslo",
      "image" => "img/norway/food/0.jpg",
      "imageL" => "img/norway/booking-L.jpg",
      "imageR" => "img/norway/booking-R.jpg",
      "tags" => [],
      "choices" => [
        "nor-breakfast" => [
          "key" => "nor-breakfast",
          "name" => "Breakfast",
          "description" => "You can make a request if you need an advice or pick a place of your own liking.",
          "hour" => 1,
          "price" => 0,
          "image" => "img/norway/food/1.jpg",
        ],
        "nor-lunch" => [
          "key" => "nor-lunch",
          "name" => "Lunch",
          "description" => "You can make a request if you need an advice or pick a place of your own liking.",
          "hour" => 1.5,
          "price" => 0,
          "image" => "img/norway/food/2.jpg",
        ],
        "nor-dinner" => [
          "key" => "nor-dinner",
          "name" => "Diner",
          "description" => "For dinner there are some great restaurants especially fish restaurants and it could be the best opportunity to taste the Fiskesuppe.",
          "hour" => 2,
          "price" => 0,
          "image" => "img/norway/food/3.jpg",
        ],
        "nor-nordic-food-tour" => [
          "key" => "nor-nordic-food-tour",
          "name" => "Nordic Food Walking Tour",
          "description" => "This tour will help you to get a precise idea of the culture of the Nordic countries and of their most famous recipes",
          "hour" => 4,
          "price" => 1000,
          "image" => "img/norway/food/4.jpg",
        ],
      ],
    ],
    "nor-museum" => [
      "key" => "nor-museum",
      "country" => "norway",
      "name" => "Museums",
      "description" => "Oslo is a city with a very rich culture and you will be able to choose between a wide range of science art, and history museums",
      "descriptionShort" => "Oslo is a city with a very rich culture and you will be able to choose between a wide range of science art, and history museums",
      "readmore" => "https://globuzzer.mn.co/posts/an-introduction-to-vinmonopolet",
      "image" => "img/norway/museum/0.jpg",
      "imageL" => "img/norway/navigator-L.jpg",
      "imageR" => "img/norway/navigator-R.jpg",
      "tags" => ["city"],
      "choices" => [
        "nor-national-gallery" => [
          "key" => "nor-national-gallery",
          "name" => "National Gallery",
          "description" => "Norway's largest public collection of paintings, drawings and sculptures is found in the National Gallery, established in 1837.The gallery's central attractions include Edvard Munch's 'The Scream' and 'Madonna'.",
          "hour" => 2,
          "price" => 240,
          "image" => "img/norway/museum/1.jpg",
          "city" => "oslo",
        ],
        "nor-viking-ship" => [
          "key" => "nor-viking-ship",
          "name" => "The Vikings Ship Museum",
          "description" => "Museumon the Bygdøy peninsula with the world's best-preserved Viking ships and findsfrom Viking tombs around the Oslo Fjord. The Viking Ship Museum shows sledges, a beautiful cart, tools, textiles and household utensils.",
          "hour" => 2,
          "price" => 200,
          "image" => "img/norway/museum/2.jpg",
          "city" => "oslo",
        ],
        "nor-fram-museum" => [
          "key" => "nor-fram-museum",
          "name" => "Fram Museum ",
          "description" => "Fram is the strongest wooden ship ever built and still holds the records for sailing farthest north and farthest south. You will try to understand how they managed to survive in the coldest and most dangerous places on earth.",
          "hour" => 2.5,
          "price" => 240,
          "image" => "img/norway/museum/3.jpg",
          "city" => "oslo",
        ],
        "nor-national-history" => [
          "key" => "nor-national-history",
          "name" => "Natural History Museum",
          "description" => "The Zoological Museum has permanent and changing exhibitions displaying wildlife from Norway and the rest of the world. Here you can among other things penguins from Antarctic or chimpanzee from Africa.",
          "hour" => 1.5,
          "price" => 200,
          "image" => "img/norway/museum/4.jpg",
          "city" => "oslo",
        ],
        "nor-horsk-volkemuseum" => [
          "key" => "nor-horsk-volkemuseum",
          "name" => "Norsk Volkemuseum",
          "description" => "One of the world's oldest and largest open-air museums in Norway with a stavechurch from the year 1200. The museum also has indoor exhibits with traditional handicraft items, folk costumes,Sami culture, weapons and toys.",
          "hour" => 2,
          "price" => 260,
          "image" => "img/norway/museum/5.jpg",
          "city" => "oslo",
        ],
        "nor-troldhaugen-home" => [
          "key" => "nor-troldhaugen-home",
          "name" => "Troldhaugen Home of composer Edvard Grieg",
          "description" => "Visit Edvard Grieg Museum Troldhaugen - the home of composer Edvard Grieg, one of the most famous painters in Norway.He composed many of his best-known works in the little garden hut.",
          "hour" => 2,
          "price" => 200,
          "image" => "img/norway/museum/6.jpg",
          "city" => "bergen",
        ],
        "nor-royal-residence" => [
          "key" => "nor-royal-residence",
          "name" => "The Royal Residence Gamlehaugen",
          "description" => "Gamlehaugen is the King’s official residence in Bergen. Owned by the state and managed by western Norway regional office of the Directorate of Public Construction and Property, the building is at the disposal of the King.",
          "hour" => 3,
          "price" => 0,
          "image" => "img/norway/museum/7.jpg",
          "city" => "bergen",
        ],
        "nor-ringve-museum" => [
          "key" => "nor-ringve-museum",
          "name" => "Ringve Museum",
          "description" => "The Museum houses a wonderful collection of musical instruments gathered from all over the world. Hear a variety of instruments as you tour this unique Museum.",
          "hour" => 2,
          "price" => 260,
          "image" => "img/norway/museum/8.jpg",
          "city" => "trondheim",
        ],
        "nor-archbishop-palace" => [
          "key" => "nor-archbishop-palace",
          "name" => "Archbishop's Palace and Museum",
          "description" => "The museum built over the ruins of the original buildings reveals its complex history, while in the west wing, you can get up close and personal with the Crown Regalia, including the actual crown of the King of Norway.",
          "hour" => 2,
          "price" => 200,
          "image" => "img/norway/museum/9.jpg",
          "city" => "trondheim",
        ],
      ],
    ],
    "nor-tours" => [
      "key" => "nor-tours",
      "country" => "norway",
      "name" => "Tours",
      "description" => "You will be able to choose between several private tours that will show you the best spots in Oslo and it's surroundings.",
      "descriptionShort" => "You will be able to choose between several private tours that will show you the best spots in Oslo and it's surroundings.",
      "readmore" => "https://globuzzer.mn.co/posts/discover-mathallen-part-1",
      "image" => "img/norway/tours/0.jpg",
      "imageL" => "img/norway/assistance-L.jpg",
      "imageR" => "img/norway/assistance-R.jpg",
      "tags" => [],
      "choices" => [
        "nor-oslo-city-tour" => [
          "key" => "nor-oslo-city-tour",
          "name" => "Oslo City Tour & Fjord Cruise",
          "description" => "This tour includes a great tour of the city with the outside view of the Holmenkollen Ski Jump then a guided walking tour through Vigeland Sculpture Park , Entrance fees to 2 museums: either to the Fram Museum or Kon-Tiki Museum and in the end a 2 hours Fjord sightseeing cruise.",
          "hour" => 7,
          "price" => 680,
          "image" => "img/norway/tours/1.jpg",
          "city" => "oslo",
        ],
        "nor-monastery-tour" => [
          "key" => "nor-monastery-tour",
          "name" => "Tour of the Monastery ruins on Hovedøya",
          "description" => "The Monastery was founded by English Cistercian monks. Abbot Philippus arrived on the island from Kirkstead, Lincolnshire in May of 1147, together with 12 monks and some lay brothers. They found a small church which got extended later.",
          "hour" => 2,
          "price" => 50,
          "image" => "img/norway/tours/2.jpg",
          "city" => "oslo",
        ],
        "nor-akershus-fortress" => [
          "key" => "nor-akershus-fortress",
          "name" => "Akershus Fortress",
          "description" => "Thebuilding of Akershus Castle and Fortress was commenced in 1299 under king HåkonV. The medieval castle, which was completed in the 1300s, had a strategiclocation at the very end of the headland.",
          "hour" => 2,
          "price" => 0,
          "image" => "img/norway/tours/3.jpg",
          "city" => "oslo",
        ],
        "nor-oslo-city-hall" => [
          "key" => "nor-oslo-city-hall",
          "name" => "Guided tour of Oslo City Hall",
          "description" => "A guided tour of Oslo City Hall is a unique opportunity to experience the building's history, art and architecture, as well as some of the political and administrative activity that goes on in there.",
          "hour" => 2,
          "price" => 0,
          "image" => "img/norway/tours/4.jpg",
          "city" => "oslo",
        ],
        "nor-private-tour" => [
          "key" => "nor-private-tour",
          "name" => "Private Tour, Nature Drøbakand Oscarsborg Fortress",
          "description" => "Visit local landmarks such as the Oslo Opera House,the hillside Ekeberg, and enjoy ascenic drive along the fjord. Step aboard a ferry bound for the Oscarsborg Fortress and take a walking tour to learn about its history before lunch and a final stop in Drøbak.",
          "hour" => 6,
          "price" => 7500,
          "image" => "img/norway/tours/5.jpg",
          "city" => "oslo",
        ],
        "nor-trondheim-city-tour" => [
          "key" => "nor-trondheim-city-tour",
          "name" => "Trondheim City Tour",
          "description" => "Discover the city’s history on foot and immerse yourself in Trondheim’s history on a guided walk through the city’s streets. Some famous highlights include the Nidaros Cathedral, Archbishop’s palace, Old Town Bridge and the charming neighborhood of Bakklande.",
          "hour" => 2.5,
          "price" => 350,
          "image" => "img/norway/tours/6.jpg",
          "city" => "trondheim",
        ],
      ],
    ],
    "nor-nature" => [
      "key" => "nor-nature",
      "country" => "norway",
      "name" => "Nature & Parks",
      "description" => "Get a chance to visit and spend  some great moment on a Fjord or hike near Oslo and stare at the amazing Norwegian Wildlife.",
      "descriptionShort" => "Get a chance to visit and spend  some great moment on a Fjord or hike near Oslo and stare at the amazing Norwegian Wildlife.",
      "readmore" => "https://globuzzer.mn.co/posts/discover-mathallen-part-1",
      "image" => "img/norway/nature/0.jpg",
      "imageL" => "img/norway/assistance-L.jpg",
      "imageR" => "img/norway/assistance-R.jpg",
      "tags" => [],
      "choices" => [
        "nor-vigeland-park" => [
          "key" => "nor-vigeland-park",
          "name" => "Vigeland Sculpture Park",
          "description" => "Sculpture park in the Frogner Park with more than 200 sculptures by Gustav Vigeland (1869–1943) in bronze, granite and cast iron, including The Angry Boy, The Monolith and The Wheel of Life .",
          "hour" => 1.5,
          "price" => 0,
          "image" => "img/norway/nature/1.jpg",
          "city" => "oslo",
        ],
        "nor-island-hopping" => [
          "key" => "nor-island-hopping",
          "name" => "Oslo Nature Walks: island hopping ",
          "description" => "Do you love the outdoor life andwant to see the nature of Oslo? Join us for a hike! Oslo Nature Walks, islandhopping, is a 4-hour hike covering three islands in Oslo: Hovedøya, Lindøya,and the beautiful Gressholmen!",
          "hour" => 4,
          "price" => 300,
          "image" => "img/norway/nature/2.jpg",
          "city" => "oslo",
        ],
        "nor-palace-park" => [
          "key" => "nor-palace-park",
          "name" => "Palace Park",
          "description" => "The park that surrounds theRoyal Palace was built during the 1840's. It is characterised by its manymajestic trees, well-kept lawns and beautiful ponds.",
          "hour" => 2,
          "price" => 0,
          "image" => "img/norway/nature/3.jpg",
          "city" => "oslo",
        ],
        "nor-lindoya-island" => [
          "key" => "nor-lindoya-island",
          "name" => "Lindøya island",
          "description" => "The monument you can see ona hill southeast on the island, is the Christiania Meridian from 1850.Southwest there is a swimming stadium from 1949, still in use today. Closeto the east-side ferry pier you can see 'Stamhuset', which was an innfrom around 1750.",
          "hour" => 4,
          "price" => 0,
          "image" => "img/norway/nature/4.jpg",
          "city" => "oslo",
        ],
        "nor-oslo-nature-walk" => [
          "key" => "nor-oslo-nature-walk",
          "name" => "Oslo City and Nature Walks",
          "description" => "​​​​​​​Walk along the beautiful and dramatic river Akerselva, and learn about its significance to the city throughout history. Walk the length of the river from the lake Maridalsvannetto Grønland ( 4 hours) or from Maridalsvannet to Sagene   ( 2 hours).",
          "hour" => 4,
          "price" => 0,
          "image" => "img/norway/nature/5.jpg",
          "city" => "oslo",
        ],
        "nor-sailing-hardangerfjord" => [
          "key" => "nor-sailing-hardangerfjord",
          "name" => "Sailing to hardangerfjord",
          "description" => "The Hardangerfjord is the fourth longest fjord in the world, and the second longest fjord in Norway. The fjord stretches 179 km from the Atlantic Ocean into the mountainous interior of Norway along the Hardangervidda plateau. The innermost point of the fjord reaches the town of Odda.",
          "hour" => 10,
          "price" => 0,
          "image" => "img/norway/nature/6.jpg",
          "city" => "bergen",
        ],
      ],
    ],
    "nor-spa" => [
      "key" => "nor-spa",
      "country" => "norway",
      "name" => "Spa & Sauna",
      "description" => "After a long day full of tours and trips around Oslo and the fjords take some time to relax in a spa for a couple of hours.",
      "descriptionShort" => "After a long day full of tours and trips around Oslo and the fjords take some time to relax in a spa for a couple of hours.",
      "readmore" => "https://globuzzer.mn.co/posts/discover-mathallen-part-1",
      "image" => "img/norway/spa/0.jpg",
      "imageL" => "img/norway/assistance-L.jpg",
      "imageR" => "img/norway/assistance-R.jpg",
      "tags" => [],
      "choices" => [
        "nor-fislet-bath" => [
          "key" => "nor-fislet-bath",
          "name" => "Bislet Bath & Fitness",
          "description" => "Modern spa facility with a swimming pool, Jacuzzi,sauna, lounge area, fitness rooms, kinesis equipment and yoga, pilates and kinesis classes.",
          "hour" => 3,
          "price" => 400,
          "image" => "img/norway/spa/1.jpg",
          "city" => "oslo",
        ],
        "nor-the-well" => [
          "key" => "nor-the-well",
          "name" => "The Well",
          "description" => "Scandinavia's largest spa and bathhouse, with 11 pools, 15 saunas and steam rooms, waterfalls, a Japanese bathhouse with onsen, Oriental hamam, rhassoul, relaxation room, outdoor pool, sauna and Jacuzzi, plus a restaurant and several bars.",
          "hour" => 3,
          "price" => 425,
          "image" => "img/norway/spa/2.jpg",
          "city" => "oslo",
        ],
        "nor-hollmenkollen-spa" => [
          "key" => "nor-hollmenkollen-spa",
          "name" => "Hollmenkollen Spa",
          "description" => "Spa and fitness centre at Scandic Holmenkollen Parkwith a tranquil atmosphere that invites you to relax. The facilities include treatment rooms, spa, swimmingpool, sauna, solarium and an activity room. You can book spa day lunch, skincare, massage treatments or hydrotherapy baths.",
          "hour" => 4,
          "price" => 490,
          "image" => "img/norway/spa/3.jpg",
          "city" => "oslo",
        ],
        "nor-thief-spa" => [
          "key" => "nor-thief-spa",
          "name" => "Thief Spa",
          "description" => "In a relaxing atmosphere inspired by Nordic and Norwegian nature - Thief Spa recreates rituals from Turkish Hammam, Moroccan Rhassoul and German Aufguss. The treatment menu includes the best of spa cultures around the world, including Thief Guss, German spa tradition in a sauna.",
          "hour" => 3,
          "price" => 1500,
          "image" => "img/norway/spa/4.jpg",
          "city" => "oslo",
        ],
        "nor-amber-spa" => [
          "key" => "nor-amber-spa",
          "name" => "Amber Spa",
          "description" => "​​​​​​​Amber SPA is a spa center in Bergen city center that offers body treatments, various types of massage, high quality waxing and many others. The spa center is a quiet place where you can enjoy quality treatments, forget about the hectic everyday life and take care of skin and health.",
          "hour" => 0,
          "price" => 0,
          "image" => "img/norway/spa/5.jpg",
          "city" => "bergen",
        ],
      ],
    ],
    "nor-additional" => [
      "key" => "nor-additional",
      "country" => "norway",
      "name" => "Additional Services",
      "description" => "Need any extra help or do you have any special requests, we offer several extra services that will make your trip go as smoothly as possible. ",
      "descriptionShort" => "Need any extra help or do you have any special requests, we offer several extra services that will make your trip go as smoothly as possible. ",
      "readmore" => "https://globuzzer.mn.co/posts/1264899",
      "image" => "img/finland/additional/0.jpg",
      "imageL" => "img/finland/a-day-away-L.jpg",
      "imageR" => "img/finland/a-day-away-R.jpg",
      "tags" => ["outside"],
      "price" => 338.25,
      "choices" => [
        "den-booking" => [
          "key" => "den-booking",
          "name" => "Booking reservations",
          "description" => "Our local guide will make sure that all bookings for you will be done whether you need a conference room or want a table in a specific restaurant they are on it.",
          "hour" => 0,
          "price" => 0,
          "image" => "img/finland/additional/1.jpg",
        ],
        "den-help-support" => [
          "key" => "den-help-support",
          "name" => "Extra help and support",
          "description" => "If you require extra assistance our local guide will make sure that all activities and services are moderated and catered to your needs. (Please notify the customer service of your special needs before booking to make sure we are able to give you the best experience possible)",
          "hour" => 0,
          "price" => 0,
          "image" => "img/finland/additional/2.jpg",
        ],
        "den-local-guide" => [
          "key" => "den-local-guide",
          "name" => "Local Guide Language",
          "description" => "All our guides speak English, if you would prefer the guide to speak and guide you in another one, please select. We will do our best to find a guide who speaks your preferred language (Globuzzer can not guarantee availability of a guide)",
          "hour" => 0,
          "price" => 0,
          "image" => "img/finland/additional/3.jpg",
        ],
        "den-special-service" => [
          "key" => "den-special-service",
          "name" => "Special Service Request",
          "description" => "Couldn't find a specific service or activity you were looking for? Add this one to your package and we will contact you for more information. ",
          "hour" => 0,
          "price" => 0,
          "image" => "img/finland/additional/4.jpg",
        ],
      ],
    ],
  ];

  $features_data = [
    "customer-support" => [
      "image" => "img/customer-support.svg",
      "text" => "24/7 customer support",
    ],
    "local-guide" => [
      "image" => "img/local-guide.svg",
      "text" => "Local guide",
    ],
    "customized-for-you" => [
      "image" => "img/customized-for-you.svg",
      "text" => "Customized packages",
    ],
    "all-in-one" => [
      "image" => "img/all-in-one.svg",
      "text" => "All in one",
    ],
  ];

  $countries_list = [
    "AF" => [
      "name" => "Afghanistan",
      "iso2" => "AF",
      "code" => "93"
    ],
    "AL" => [
      "name" => "Albania",
      "iso2" => "AL",
      "code" => "355"
    ],
    "DZ" => [
      "name" => "Algeria",
      "iso2" => "DZ",
      "code" => "213"
    ],
    "AS" => [
      "name" => "American Samoa",
      "iso2" => "AS",
      "code" => "1 684"
    ],
    "AD" => [
      "name" => "Andorra",
      "iso2" => "AD",
      "code" => "376"
    ],
    "AO" => [
      "name" => "Angola",
      "iso2" => "AO",
      "code" => "244"
    ],
    "AI" => [
      "name" => "Anguilla",
      "iso2" => "AI",
      "code" => "1 264"
    ],
    "AQ" => [
      "name" => "Antarctica",
      "iso2" => "AQ",
      "code" => "672"
    ],
    "AG" => [
      "name" => "Antigua And Barbuda",
      "iso2" => "AG",
      "code" => "1 268"
    ],
    "AR" => [
      "name" => "Argentina",
      "iso2" => "AR",
      "code" => "54"
    ],
    "AM" => [
      "name" => "Armenia",
      "iso2" => "AM",
      "code" => "374"
    ],
    "AW" => [
      "name" => "Aruba",
      "iso2" => "AW",
      "code" => "297"
    ],
    "AC" => [
      "name" => "Ascension Island",
      "iso2" => "AC",
      "code" => "247"
    ],
    "AU" => [
      "name" => "Australia",
      "iso2" => "AU",
      "code" => "61"
    ],
    "AT" => [
      "name" => "Austria",
      "iso2" => "AT",
      "code" => "43"
    ],
    "AZ" => [
      "name" => "Azerbaijan",
      "iso2" => "AZ",
      "code" => "994"
    ],
    "BS" => [
      "name" => "Bahamas",
      "iso2" => "BS",
      "code" => "1 242"
    ],
    "BH" => [
      "name" => "Bahrain",
      "iso2" => "BH",
      "code" => "973"
    ],
    "BD" => [
      "name" => "Bangladesh",
      "iso2" => "BD",
      "code" => "880"
    ],
    "BB" => [
      "name" => "Barbados",
      "iso2" => "BB",
      "code" => "1 246"
    ],
    "BY" => [
      "name" => "Belarus",
      "iso2" => "BY",
      "code" => "375"
    ],
    "BE" => [
      "name" => "Belgium",
      "iso2" => "BE",
      "code" => "32"
    ],
    "BZ" => [
      "name" => "Belize",
      "iso2" => "BZ",
      "code" => "501"
    ],
    "BJ" => [
      "name" => "Benin",
      "iso2" => "BJ",
      "code" => "229"
    ],
    "BM" => [
      "name" => "Bermuda",
      "iso2" => "BM",
      "code" => "1 441"
    ],
    "BT" => [
      "name" => "Bhutan",
      "iso2" => "BT",
      "code" => "975"
    ],
    "BO" => [
      "name" => "Bolivia, Plurinational State Of",
      "iso2" => "BO",
      "code" => "591"
    ],
    "BQ" => [
      "name" => "Bonaire, Saint Eustatius And Saba",
      "iso2" => "BQ",
      "code" => "599"
    ],
    "BA" => [
      "name" => "Bosnia & Herzegovina",
      "iso2" => "BA",
      "code" => "387"
    ],
    "BW" => [
      "name" => "Botswana",
      "iso2" => "BW",
      "code" => "267"
    ],
    "BV" => [
      "name" => "Bouvet Island",
      "iso2" => "BV",
      "code" => ""
    ],
    "BR" => [
      "name" => "Brazil",
      "iso2" => "BR",
      "code" => "55"
    ],
    "IO" => [
      "name" => "British Indian Ocean Territory",
      "iso2" => "IO",
      "code" => "246"
    ],
    "BN" => [
      "name" => "Brunei Darussalam",
      "iso2" => "BN",
      "code" => "673"
    ],
    "BG" => [
      "name" => "Bulgaria",
      "iso2" => "BG",
      "code" => "359"
    ],
    "BF" => [
      "name" => "Burkina Faso",
      "iso2" => "BF",
      "code" => "226"
    ],
    "BI" => [
      "name" => "Burundi",
      "iso2" => "BI",
      "code" => "257"
    ],
    "KH" => [
      "name" => "Cambodia",
      "iso2" => "KH",
      "code" => "855"
    ],
    "CM" => [
      "name" => "Cameroon",
      "iso2" => "CM",
      "code" => "237"
    ],
    "CA" => [
      "name" => "Canada",
      "iso2" => "CA",
      "code" => "1"
    ],
    "IC" => [
      "name" => "Canary Islands",
      "iso2" => "IC",
      "code" => ""
    ],
    "CV" => [
      "name" => "Cape Verde",
      "iso2" => "CV",
      "code" => "238"
    ],
    "KY" => [
      "name" => "Cayman Islands",
      "iso2" => "KY",
      "code" => "1 345"
    ],
    "CF" => [
      "name" => "Central African Republic",
      "iso2" => "CF",
      "code" => "236"
    ],
    "EA" => [
      "name" => "Ceuta, Mulilla",
      "iso2" => "EA",
      "code" => ""
    ],
    "TD" => [
      "name" => "Chad",
      "iso2" => "TD",
      "code" => "235"
    ],
    "CL" => [
      "name" => "Chile",
      "iso2" => "CL",
      "code" => "56"
    ],
    "CN" => [
      "name" => "China",
      "iso2" => "CN",
      "code" => "86"
    ],
    "CX" => [
      "name" => "Christmas Island",
      "iso2" => "CX",
      "code" => "61"
    ],
    "CP" => [
      "name" => "Clipperton Island",
      "iso2" => "CP",
      "code" => ""
    ],
    "CC" => [
      "name" => "Cocos (Keeling) Islands",
      "iso2" => "CC",
      "code" => "61"
    ],
    "CO" => [
      "name" => "Colombia",
      "iso2" => "CO",
      "code" => "57"
    ],
    "KM" => [
      "name" => "Comoros",
      "iso2" => "KM",
      "code" => "269"
    ],
    "CK" => [
      "name" => "Cook Islands",
      "iso2" => "CK",
      "code" => "682"
    ],
    "CR" => [
      "name" => "Costa Rica",
      "iso2" => "CR",
      "code" => "506"
    ],
    "CI" => [
      "name" => "Cote d'Ivoire",
      "iso2" => "CI",
      "code" => "225"
    ],
    "HR" => [
      "name" => "Croatia",
      "iso2" => "HR",
      "code" => "385"
    ],
    "CU" => [
      "name" => "Cuba",
      "iso2" => "CU",
      "code" => "53"
    ],
    "CW" => [
      "name" => "Curacao",
      "iso2" => "CW",
      "code" => "599"
    ],
    "CY" => [
      "name" => "Cyprus",
      "iso2" => "CY",
      "code" => "357"
    ],
    "CZ" => [
      "name" => "Czech Republic",
      "iso2" => "CZ",
      "code" => "420"
    ],
    "CD" => [
      "name" => "Democratic Republic Of Congo",
      "iso2" => "CD",
      "code" => "243"
    ],
    "DK" => [
      "name" => "Denmark",
      "iso2" => "DK",
      "code" => "45"
    ],
    "DG" => [
      "name" => "Diego Garcia",
      "iso2" => "DG",
      "code" => ""
    ],
    "DJ" => [
      "name" => "Djibouti",
      "iso2" => "DJ",
      "code" => "253"
    ],
    "DM" => [
      "name" => "Dominica",
      "iso2" => "DM",
      "code" => "1 767"
    ],
    "DO" => [
      "name" => "Dominican Republic",
      "iso2" => "DO",
      "code" => "1 809"
    ],
    "TL" => [
      "name" => "East Timor",
      "iso2" => "TL",
      "code" => "670"
    ],
    "EC" => [
      "name" => "Ecuador",
      "iso2" => "EC",
      "code" => "593"
    ],
    "EG" => [
      "name" => "Egypt",
      "iso2" => "EG",
      "code" => "20"
    ],
    "SV" => [
      "name" => "El Salvador",
      "iso2" => "SV",
      "code" => "503"
    ],
    "GQ" => [
      "name" => "Equatorial Guinea",
      "iso2" => "GQ",
      "code" => "240"
    ],
    "ER" => [
      "name" => "Eritrea",
      "iso2" => "ER",
      "code" => "291"
    ],
    "EE" => [
      "name" => "Estonia",
      "iso2" => "EE",
      "code" => "372"
    ],
    "ET" => [
      "name" => "Ethiopia",
      "iso2" => "ET",
      "code" => "251"
    ],
    "EU" => [
      "name" => "European Union",
      "iso2" => "EU",
      "code" => "388"
    ],
    "FK" => [
      "name" => "Falkland Islands",
      "iso2" => "FK",
      "code" => "500"
    ],
    "FO" => [
      "name" => "Faroe Islands",
      "iso2" => "FO",
      "code" => "298"
    ],
    "FJ" => [
      "name" => "Fiji",
      "iso2" => "FJ",
      "code" => "679"
    ],
    "FI" => [
      "name" => "Finland",
      "iso2" => "FI",
      "code" => "358"
    ],
    "FR" => [
      "name" => "France",
      "iso2" => "FR",
      "code" => "33"
    ],
    "FX" => [
      "name" => "France, Metropolitan",
      "iso2" => "FX",
      "code" => "241"
    ],
    "GF" => [
      "name" => "French Guiana",
      "iso2" => "GF",
      "code" => "44"
    ],
    "PF" => [
      "name" => "French Polynesia",
      "iso2" => "PF",
      "code" => "689"
    ],
    "TF" => [
      "name" => "French Southern Territories",
      "iso2" => "TF",
      "code" => ""
    ],
    "GA" => [
      "name" => "Gabon",
      "iso2" => "GA",
      "code" => "44"
    ],
    "GM" => [
      "name" => "Gambia",
      "iso2" => "GM",
      "code" => "220"
    ],
    "GE" => [
      "name" => "Georgia",
      "iso2" => "GE",
      "code" => "594"
    ],
    "DE" => [
      "name" => "Germany",
      "iso2" => "DE",
      "code" => "49"
    ],
    "GH" => [
      "name" => "Ghana",
      "iso2" => "GH",
      "code" => "233"
    ],
    "GI" => [
      "name" => "Gibraltar",
      "iso2" => "GI",
      "code" => "350"
    ],
    "GR" => [
      "name" => "Greece",
      "iso2" => "GR",
      "code" => "30"
    ],
    "GL" => [
      "name" => "Greenland",
      "iso2" => "GL",
      "code" => "299"
    ],
    "GD" => [
      "name" => "Grenada",
      "iso2" => "GD",
      "code" => "995"
    ],
    "GP" => [
      "name" => "Guadeloupe",
      "iso2" => "GP",
      "code" => "590"
    ],
    "GU" => [
      "name" => "Guam",
      "iso2" => "GU",
      "code" => "1 671"
    ],
    "GT" => [
      "name" => "Guatemala",
      "iso2" => "GT",
      "code" => "502"
    ],
    "GG" => [
      "name" => "Guernsey",
      "iso2" => "GG",
      "code" => ""
    ],
    "GN" => [
      "name" => "Guinea",
      "iso2" => "GN",
      "code" => "224"
    ],
    "GW" => [
      "name" => "Guinea-bissau",
      "iso2" => "GW",
      "code" => "245"
    ],
    "GY" => [
      "name" => "Guyana",
      "iso2" => "GY",
      "code" => "592"
    ],
    "HT" => [
      "name" => "Haiti",
      "iso2" => "HT",
      "code" => "509"
    ],
    "HM" => [
      "name" => "Heard Island And McDonald Islands",
      "iso2" => "HM",
      "code" => ""
    ],
    "HN" => [
      "name" => "Honduras",
      "iso2" => "HN",
      "code" => "504"
    ],
    "HK" => [
      "name" => "Hong Kong",
      "iso2" => "HK",
      "code" => "852"
    ],
    "HU" => [
      "name" => "Hungary",
      "iso2" => "HU",
      "code" => "36"
    ],
    "IS" => [
      "name" => "Iceland",
      "iso2" => "IS",
      "code" => "354"
    ],
    "IN" => [
      "name" => "India",
      "iso2" => "IN",
      "code" => "91"
    ],
    "ID" => [
      "name" => "Indonesia",
      "iso2" => "ID",
      "code" => "62"
    ],
    "IR" => [
      "name" => "Iran, Islamic Republic Of",
      "iso2" => "IR",
      "code" => "98"
    ],
    "IQ" => [
      "name" => "Iraq",
      "iso2" => "IQ",
      "code" => "964"
    ],
    "IE" => [
      "name" => "Ireland",
      "iso2" => "IE",
      "code" => "353"
    ],
    "IM" => [
      "name" => "Isle Of Man",
      "iso2" => "IM",
      "code" => "44"
    ],
    "IL" => [
      "name" => "Israel",
      "iso2" => "IL",
      "code" => "972"
    ],
    "IT" => [
      "name" => "Italy",
      "iso2" => "IT",
      "code" => "39"
    ],
    "JM" => [
      "name" => "Jamaica",
      "iso2" => "JM",
      "code" => "1 876"
    ],
    "JP" => [
      "name" => "Japan",
      "iso2" => "JP",
      "code" => "81"
    ],
    "JE" => [
      "name" => "Jersey",
      "iso2" => "JE",
      "code" => "44"
    ],
    "JO" => [
      "name" => "Jordan",
      "iso2" => "JO",
      "code" => "962"
    ],
    "KZ" => [
      "name" => "Kazakhstan",
      "iso2" => "KZ",
      "code" => "7"
    ],
    "KE" => [
      "name" => "Kenya",
      "iso2" => "KE",
      "code" => "254"
    ],
    "KI" => [
      "name" => "Kiribati",
      "iso2" => "KI",
      "code" => "686"
    ],
    "KP" => [
      "name" => "Korea, Democratic People's Republic Of",
      "iso2" => "KP",
      "code" => "850"
    ],
    "KR" => [
      "name" => "Korea, Republic Of",
      "iso2" => "KR",
      "code" => "82"
    ],
    "KW" => [
      "name" => "Kuwait",
      "iso2" => "KW",
      "code" => "965"
    ],
    "KG" => [
      "name" => "Kyrgyzstan",
      "iso2" => "KG",
      "code" => "996"
    ],
    "LA" => [
      "name" => "Lao People's Democratic Republic",
      "iso2" => "LA",
      "code" => "856"
    ],
    "LV" => [
      "name" => "Latvia",
      "iso2" => "LV",
      "code" => "371"
    ],
    "LB" => [
      "name" => "Lebanon",
      "iso2" => "LB",
      "code" => "961"
    ],
    "LS" => [
      "name" => "Lesotho",
      "iso2" => "LS",
      "code" => "266"
    ],
    "LR" => [
      "name" => "Liberia",
      "iso2" => "LR",
      "code" => "231"
    ],
    "LY" => [
      "name" => "Libya",
      "iso2" => "LY",
      "code" => "218"
    ],
    "LI" => [
      "name" => "Liechtenstein",
      "iso2" => "LI",
      "code" => "423"
    ],
    "LT" => [
      "name" => "Lithuania",
      "iso2" => "LT",
      "code" => "370"
    ],
    "LU" => [
      "name" => "Luxembourg",
      "iso2" => "LU",
      "code" => "352"
    ],
    "MO" => [
      "name" => "Macao",
      "iso2" => "MO",
      "code" => "853"
    ],
    "MK" => [
      "name" => "Macedonia, The Former Yugoslav Republic Of",
      "iso2" => "MK",
      "code" => "389"
    ],
    "MG" => [
      "name" => "Madagascar",
      "iso2" => "MG",
      "code" => "261"
    ],
    "MW" => [
      "name" => "Malawi",
      "iso2" => "MW",
      "code" => "265"
    ],
    "MY" => [
      "name" => "Malaysia",
      "iso2" => "MY",
      "code" => "60"
    ],
    "MV" => [
      "name" => "Maldives",
      "iso2" => "MV",
      "code" => "960"
    ],
    "ML" => [
      "name" => "Mali",
      "iso2" => "ML",
      "code" => "223"
    ],
    "MT" => [
      "name" => "Malta",
      "iso2" => "MT",
      "code" => "356"
    ],
    "MH" => [
      "name" => "Marshall Islands",
      "iso2" => "MH",
      "code" => "692"
    ],
    "MQ" => [
      "name" => "Martinique",
      "iso2" => "MQ",
      "code" => "596"
    ],
    "MR" => [
      "name" => "Mauritania",
      "iso2" => "MR",
      "code" => "222"
    ],
    "MU" => [
      "name" => "Mauritius",
      "iso2" => "MU",
      "code" => "230"
    ],
    "YT" => [
      "name" => "Mayotte",
      "iso2" => "YT",
      "code" => "262"
    ],
    "MX" => [
      "name" => "Mexico",
      "iso2" => "MX",
      "code" => "52"
    ],
    "FM" => [
      "name" => "Micronesia, Federated States Of",
      "iso2" => "FM",
      "code" => "691"
    ],
    "MD" => [
      "name" => "Moldova",
      "iso2" => "MD",
      "code" => "373"
    ],
    "MC" => [
      "name" => "Monaco",
      "iso2" => "MC",
      "code" => "377"
    ],
    "MN" => [
      "name" => "Mongolia",
      "iso2" => "MN",
      "code" => "976"
    ],
    "ME" => [
      "name" => "Montenegro",
      "iso2" => "ME",
      "code" => "382"
    ],
    "MS" => [
      "name" => "Montserrat",
      "iso2" => "MS",
      "code" => "1 664"
    ],
    "MA" => [
      "name" => "Morocco",
      "iso2" => "MA",
      "code" => "212"
    ],
    "MZ" => [
      "name" => "Mozambique",
      "iso2" => "MZ",
      "code" => "258"
    ],
    "MM" => [
      "name" => "Myanmar",
      "iso2" => "MM",
      "code" => "95"
    ],
    "NA" => [
      "name" => "Namibia",
      "iso2" => "NA",
      "code" => "264"
    ],
    "NR" => [
      "name" => "Nauru",
      "iso2" => "NR",
      "code" => "674"
    ],
    "NP" => [
      "name" => "Nepal",
      "iso2" => "NP",
      "code" => "977"
    ],
    "NL" => [
      "name" => "Netherlands",
      "iso2" => "NL",
      "code" => "31"
    ],
    "NC" => [
      "name" => "New Caledonia",
      "iso2" => "NC",
      "code" => "687"
    ],
    "NZ" => [
      "name" => "New Zealand",
      "iso2" => "NZ",
      "code" => "64"
    ],
    "NI" => [
      "name" => "Nicaragua",
      "iso2" => "NI",
      "code" => "505"
    ],
    "NE" => [
      "name" => "Niger",
      "iso2" => "NE",
      "code" => "227"
    ],
    "NG" => [
      "name" => "Nigeria",
      "iso2" => "NG",
      "code" => "234"
    ],
    "NU" => [
      "name" => "Niue",
      "iso2" => "NU",
      "code" => "683"
    ],
    "NF" => [
      "name" => "Norfolk Island",
      "iso2" => "NF",
      "code" => "672"
    ],
    "MP" => [
      "name" => "Northern Mariana Islands",
      "iso2" => "MP",
      "code" => "1 670"
    ],
    "NO" => [
      "name" => "Norway",
      "iso2" => "NO",
      "code" => "47"
    ],
    "OM" => [
      "name" => "Oman",
      "iso2" => "OM",
      "code" => "968"
    ],
    "PK" => [
      "name" => "Pakistan",
      "iso2" => "PK",
      "code" => "92"
    ],
    "PW" => [
      "name" => "Palau",
      "iso2" => "PW",
      "code" => "680"
    ],
    "PS" => [
      "name" => "Palestinian Territory, Occupied",
      "iso2" => "PS",
      "code" => "970"
    ],
    "PA" => [
      "name" => "Panama",
      "iso2" => "PA",
      "code" => "507"
    ],
    "PG" => [
      "name" => "Papua New Guinea",
      "iso2" => "PG",
      "code" => "675"
    ],
    "PY" => [
      "name" => "Paraguay",
      "iso2" => "PY",
      "code" => "595"
    ],
    "PE" => [
      "name" => "Peru",
      "iso2" => "PE",
      "code" => "51"
    ],
    "PH" => [
      "name" => "Philippines",
      "iso2" => "PH",
      "code" => "63"
    ],
    "PN" => [
      "name" => "Pitcairn",
      "iso2" => "PN",
      "code" => ""
    ],
    "PL" => [
      "name" => "Poland",
      "iso2" => "PL",
      "code" => "48"
    ],
    "PT" => [
      "name" => "Portugal",
      "iso2" => "PT",
      "code" => "351"
    ],
    "PR" => [
      "name" => "Puerto Rico",
      "iso2" => "PR",
      "code" => "1 787"
    ],
    "QA" => [
      "name" => "Qatar",
      "iso2" => "QA",
      "code" => "974"
    ],
    "CG" => [
      "name" => "Republic Of Congo",
      "iso2" => "CG",
      "code" => "242"
    ],
    "RE" => [
      "name" => "Reunion",
      "iso2" => "RE",
      "code" => "262"
    ],
    "RO" => [
      "name" => "Romania",
      "iso2" => "RO",
      "code" => "40"
    ],
    "RU" => [
      "name" => "Russian Federation",
      "iso2" => "RU",
      "code" => "7"
    ],
    "RW" => [
      "name" => "Rwanda",
      "iso2" => "RW",
      "code" => "250"
    ],
    "BL" => [
      "name" => "Saint Barthélemy",
      "iso2" => "BL",
      "code" => "590"
    ],
    "SH" => [
      "name" => "Saint Helena, Ascension And Tristan Da Cunha",
      "iso2" => "SH",
      "code" => "290"
    ],
    "KN" => [
      "name" => "Saint Kitts And Nevis",
      "iso2" => "KN",
      "code" => "1 869"
    ],
    "LC" => [
      "name" => "Saint Lucia",
      "iso2" => "LC",
      "code" => "1 758"
    ],
    "MF" => [
      "name" => "Saint Martin",
      "iso2" => "MF",
      "code" => "590"
    ],
    "PM" => [
      "name" => "Saint Pierre And Miquelon",
      "iso2" => "PM",
      "code" => "508"
    ],
    "VC" => [
      "name" => "Saint Vincent And The Grenadines",
      "iso2" => "VC",
      "code" => "1 784"
    ],
    "WS" => [
      "name" => "Samoa",
      "iso2" => "WS",
      "code" => "685"
    ],
    "SM" => [
      "name" => "San Marino",
      "iso2" => "SM",
      "code" => "378"
    ],
    "ST" => [
      "name" => "Sao Tome And Principe",
      "iso2" => "ST",
      "code" => "239"
    ],
    "SA" => [
      "name" => "Saudi Arabia",
      "iso2" => "SA",
      "code" => "966"
    ],
    "SN" => [
      "name" => "Senegal",
      "iso2" => "SN",
      "code" => "221"
    ],
    "RS" => [
      "name" => "Serbia",
      "iso2" => "RS",
      "code" => "381"
    ],
    "SC" => [
      "name" => "Seychelles",
      "iso2" => "SC",
      "code" => "248"
    ],
    "SL" => [
      "name" => "Sierra Leone",
      "iso2" => "SL",
      "code" => "232"
    ],
    "SG" => [
      "name" => "Singapore",
      "iso2" => "SG",
      "code" => "65"
    ],
    "SX" => [
      "name" => "Sint Maarten",
      "iso2" => "SX",
      "code" => "1 721"
    ],
    "SK" => [
      "name" => "Slovakia",
      "iso2" => "SK",
      "code" => "421"
    ],
    "SI" => [
      "name" => "Slovenia",
      "iso2" => "SI",
      "code" => "386"
    ],
    "SB" => [
      "name" => "Solomon Islands",
      "iso2" => "SB",
      "code" => "677"
    ],
    "SO" => [
      "name" => "Somalia",
      "iso2" => "SO",
      "code" => "252"
    ],
    "ZA" => [
      "name" => "South Africa",
      "iso2" => "ZA",
      "code" => "27"
    ],
    "GS" => [
      "name" => "South Georgia And The South Sandwich Islands",
      "iso2" => "GS",
      "code" => ""
    ],
    "ES" => [
      "name" => "Spain",
      "iso2" => "ES",
      "code" => "34"
    ],
    "LK" => [
      "name" => "Sri Lanka",
      "iso2" => "LK",
      "code" => "94"
    ],
    "SD" => [
      "name" => "Sudan",
      "iso2" => "SD",
      "code" => "249"
    ],
    "SR" => [
      "name" => "Suriname",
      "iso2" => "SR",
      "code" => "597"
    ],
    "SJ" => [
      "name" => "Svalbard And Jan Mayen",
      "iso2" => "SJ",
      "code" => "47"
    ],
    "SZ" => [
      "name" => "Swaziland",
      "iso2" => "SZ",
      "code" => "268"
    ],
    "SE" => [
      "name" => "Sweden",
      "iso2" => "SE",
      "code" => "46"
    ],
    "CH" => [
      "name" => "Switzerland",
      "iso2" => "CH",
      "code" => "41"
    ],
    "SY" => [
      "name" => "Syrian Arab Republic",
      "iso2" => "SY",
      "code" => "963"
    ],
    "TW" => [
      "name" => "Taiwan, Province Of China",
      "iso2" => "TW",
      "code" => "886"
    ],
    "TJ" => [
      "name" => "Tajikistan",
      "iso2" => "TJ",
      "code" => "992"
    ],
    "TZ" => [
      "name" => "Tanzania, United Republic Of",
      "iso2" => "TZ",
      "code" => "255"
    ],
    "TH" => [
      "name" => "Thailand",
      "iso2" => "TH",
      "code" => "66"
    ],
    "TG" => [
      "name" => "Togo",
      "iso2" => "TG",
      "code" => "228"
    ],
    "TK" => [
      "name" => "Tokelau",
      "iso2" => "TK",
      "code" => "690"
    ],
    "TO" => [
      "name" => "Tonga",
      "iso2" => "TO",
      "code" => "676"
    ],
    "TT" => [
      "name" => "Trinidad And Tobago",
      "iso2" => "TT",
      "code" => "1 868"
    ],
    "TA" => [
      "name" => "Tristan de Cunha",
      "iso2" => "TA",
      "code" => "290"
    ],
    "TN" => [
      "name" => "Tunisia",
      "iso2" => "TN",
      "code" => "216"
    ],
    "TR" => [
      "name" => "Turkey",
      "iso2" => "TR",
      "code" => "90"
    ],
    "TM" => [
      "name" => "Turkmenistan",
      "iso2" => "TM",
      "code" => "993"
    ],
    "TC" => [
      "name" => "Turks And Caicos Islands",
      "iso2" => "TC",
      "code" => "1 649"
    ],
    "TV" => [
      "name" => "Tuvalu",
      "iso2" => "TV",
      "code" => "688"
    ],
    "SU" => [
      "name" => "USSR",
      "iso2" => "SU",
      "code" => ""
    ],
    "UG" => [
      "name" => "Uganda",
      "iso2" => "UG",
      "code" => "256"
    ],
    "UA" => [
      "name" => "Ukraine",
      "iso2" => "UA",
      "code" => "380"
    ],
    "AE" => [
      "name" => "United Arab Emirates",
      "iso2" => "AE",
      "code" => "971"
    ],
    "GB" => [
      "name" => "United Kingdom",
      "iso2" => "GB",
      "code" => "1 473"
    ],
    "UK" => [
      "name" => "United Kingdom",
      "iso2" => "UK",
      "code" => ""
    ],
    "US" => [
      "name" => "United States",
      "iso2" => "US",
      "code" => "1"
    ],
    "UM" => [
      "name" => "United States Minor Outlying Islands",
      "iso2" => "UM",
      "code" => ""
    ],
    "UY" => [
      "name" => "Uruguay",
      "iso2" => "UY",
      "code" => "598"
    ],
    "UZ" => [
      "name" => "Uzbekistan",
      "iso2" => "UZ",
      "code" => "998"
    ],
    "VU" => [
      "name" => "Vanuatu",
      "iso2" => "VU",
      "code" => "678"
    ],
    "VA" => [
      "name" => "Vatican City State",
      "iso2" => "VA",
      "code" => "379"
    ],
    "VE" => [
      "name" => "Venezuela, Bolivarian Republic Of",
      "iso2" => "VE",
      "code" => "58"
    ],
    "VN" => [
      "name" => "Viet Nam",
      "iso2" => "VN",
      "code" => "84"
    ],
    "VG" => [
      "name" => "Virgin Islands (British)",
      "iso2" => "VG",
      "code" => "1 284"
    ],
    "VI" => [
      "name" => "Virgin Islands (US)",
      "iso2" => "VI",
      "code" => "1 340"
    ],
    "WF" => [
      "name" => "Wallis And Futuna",
      "iso2" => "WF",
      "code" => "681"
    ],
    "EH" => [
      "name" => "Western Sahara",
      "iso2" => "EH",
      "code" => "212"
    ],
    "YE" => [
      "name" => "Yemen",
      "iso2" => "YE",
      "code" => "967"
    ],
    "ZM" => [
      "name" => "Zambia",
      "iso2" => "ZM",
      "code" => "260"
    ],
    "ZW" => [
      "name" => "Zimbabwe",
      "iso2" => "ZW",
      "code" => "263"
    ],
  ];
?>
