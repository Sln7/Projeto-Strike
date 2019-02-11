var position = { lat: -26.10718684 , lng: -49.80072054 }	

// Map style
var style = [
    {
    "featureType": "administrative.land_parcel",
    "elementType": "labels",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "featureType": "poi.business",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "featureType": "poi.park",
    "elementType": "labels.text",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "featureType": "road.local",
    "elementType": "labels",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  }
]

// Set google map options
var options = {
	center: position,
	zoom: 16,
	mapTypeControl: false,
	streetViewControl: false,
	scrollwheel: false,
	styles: style
}

// Init Map
var map = new google.maps.Map( document.getElementById('map') , options);

// Set map marker
var marker = new google.maps.Marker({
    position: position,
    map: map,
});
