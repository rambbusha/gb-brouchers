function Package(id, name, desc, imgURL, brochureImg) {
    this.id = id;
    this.name = name;
    this.desc = desc;
    this.imgURL = imgURL;
    this.brochureImg = brochureImg;
    this.imgData = '';
}

Package.prototype.getBrochureImg = function() {
    return this.brochureImg;
};

Package.prototype.getName = function() {
    return this.name;
};

Package.prototype.getDesc = function() {
    return this.desc;
};

Package.prototype.getImgURL = function() {
    return this.imgURL;
};

Package.prototype.setImgData = function(data) {
    this.imgData = data;
};

Package.prototype.getImgData = function() {
    return this.imgData;
};

var service9 = new Package('service9', 'Transportation', 'There are many ways to travel around Helsinki, the main options are public transport, taxi or by car.', '../img/finland/Transportation-joakim-honkasalo-440124-unsplash.jpg', '../img/finland/Transportation-joakim-honkasalo-440124-unsplash.jpg');
var service10 = new Package('service10', 'Private Walking/Bicycle Tour', 'A nice tour around the city discovering Helsinki’s history and most famous sights.', '../img/finland/viktor-kern-65943-unsplash.jpg', '../img/finland/viktor-kern-65943-unsplash.jpg');
var service11 = new Package('service11', 'Museums', 'Perfect places to experience and enjoy art.', '../img/finland/Museum-joshua-earle-233782-unsplash.jpg', '../img/finland/Museum-joshua-earle-233782-unsplash.jpg');
var service12 = new Package('service12', 'Suomenlinna', 'Explore “The Fortress of Finland” and travel through some Finnish history.', '../img/finland/Fortress-kevin-tadema-559770-unsplash.jpg', '../img/finland/Fortress-kevin-tadema-559770-unsplash.jpg');
var service13 = new Package('service13', 'Korkeasaari Zoo', 'Explore the Nordic wildlife at one of the oldests zoos in the world.', '../img/finland/Zoo.jpg', '../img/finland/Zoo.jpg');
var service14 = new Package('service14', 'Cosy Cafés', 'Cafés in Helsinki to relax or recharge.', '../img/finland/Cafe-patrick-tomasso-499112-unsplash.jpg', '../img/finland/Cafe-patrick-tomasso-499112-unsplash.jpg');
var service15 = new Package('service15', 'Time to relax', 'Take a dive or enjoy the warmth of a Finnish sauna.', '../img/finland/Time%20to%20relax-mika-r-596825-unsplash.jpg', '../img/finland/Time%20to%20relax-mika-r-596825-unsplash.jpg');
var service16 = new Package('service16', 'Helsinki\'s Cuisine', 'Taste some great Finnish, Lappish or international food.', '../img/finland/Food-anise-aroma-art-277253.jpg', '../img/finland/Food-anise-aroma-art-277253.jpg');
var service17 = new Package('service17', 'Nature', 'Enjoy the outdoors and discover the Finnish nature.','../img/finland/Nature-joakim-honkasalo-418781-unsplash.jpg', '../img/finland/Nature-joakim-honkasalo-418781-unsplash.jpg');
var service18 = new Package('service18', 'A day away', 'Discover one of Finland’s most charming little places and feel like you go back in time.', '../img/finland/A%20Day%20away-alexandr-bormotin-607753-unsplash.jpg', '../img/finland/A%20Day%20away-alexandr-bormotin-607753-unsplash.jpg');

// create image data for pdf
getDataUri(service9.getImgURL(), function(dataUri) {
    service9.setImgData(dataUri);
});
getDataUri(service10.getImgURL(), function(dataUri) {
    service10.setImgData(dataUri);
});
getDataUri(service11.getImgURL(), function(dataUri) {
    service11.setImgData(dataUri);
});
getDataUri(service12.getImgURL(), function(dataUri) {
    service12.setImgData(dataUri);
});
getDataUri(service13.getImgURL(), function(dataUri) {
    service13.setImgData(dataUri);
});
getDataUri(service14.getImgURL(), function(dataUri) {
    service14.setImgData(dataUri);
});
getDataUri(service15.getImgURL(), function(dataUri) {
    service15.setImgData(dataUri);
});
getDataUri(service16.getImgURL(), function(dataUri) {
    service16.setImgData(dataUri);
});
getDataUri(service17.getImgURL(), function(dataUri) {
    service17.setImgData(dataUri);
});
getDataUri(service18.getImgURL(), function(dataUri) {
    service18.setImgData(dataUri);
});

var services = [];
services.push(service9);
services.push(service10);
services.push(service11);
services.push(service12);
services.push(service13);
services.push(service14);
services.push(service15);
services.push(service16);
services.push(service17);
services.push(service18);

function getDataUri(url, callback) {
    var image = new Image();

    image.onload = function () {
        var canvas = document.createElement('canvas');
        canvas.width = this.naturalWidth; // or 'width' if you want a special/scaled size
        canvas.height = this.naturalHeight; // or 'height' if you want a special/scaled size

        canvas.getContext('2d').drawImage(this, 0, 0);

        // Get raw image data
        callback(canvas.toDataURL('image/png').replace(/^data:image\/(png|jpg);base64,/, ''));

        // ... or get as Data URI
        callback(canvas.toDataURL('image/png'));
    };

    image.src = url;
}