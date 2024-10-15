ymaps.ready(init);

function init() {
    var myMap = new ymaps.Map("map", {
        center: [43.233419, 76.867572],
        zoom: 14,
        controls: ["zoomControl", "fullscreenControl"]
    });

    var myPlacemark = new ymaps.Placemark([43.233419, 76.867572], {
        hintContent: 'Pactum Court Location',
        balloonContent: 'This is where the office is located'
    });

    myMap.geoObjects.add(myPlacemark);

    // Resize map correctly on window resize to prevent rendering issues
    window.addEventListener('resize', function () {
        myMap.container.fitToViewport();
    });
}
