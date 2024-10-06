ymaps.ready(init);
function init() {
    // Create the map.
    var myMap = new ymaps.Map("map", {
    center: [43.233419, 76.867572], // Coordinates for Almaty, Kazakhstan (replace with desired location)
    zoom: 14
});
    // Add a placemark (the blue marker in your image).
    var myPlacemark = new ymaps.Placemark([43.233419, 76.867572], {
    hintContent: 'Pactum Court Location',
    balloonContent: 'This is where the office is located'
});

    // Add the placemark to the map.
    myMap.geoObjects.add(myPlacemark);
}
