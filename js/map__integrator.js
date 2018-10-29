if (document.getElementById('google__map')) {

var json__style = [
	{
		"featureType": "administrative",
		"stylers": [{"color": "#b8d6e8"}]
	},
	{
		"featureType": "administrative.locality",
		"elementType": "labels.text.stroke",
		"stylers": [{
			"color": "#0d3953"
		}]
	},
	{
		"featureType": "landscape",
		"elementType": "geometry",
		"stylers": [{
			"weight": 3.5
		}]
	},
	{
		"featureType": "landscape",
		"elementType": "geometry.fill",
		"stylers": [{
			"weight": 3
		}]
	},
	{
		"featureType": "landscape",
		"elementType": "geometry.stroke",
		"stylers": [{
			"weight": 2.5
		}]
	},
	{
		"featureType": "landscape.man_made",
		"elementType": "geometry.fill",
		"stylers": [{
			"color": "#3189bb"
		}]
	},
	{
		"featureType": "landscape.man_made",
		"elementType": "geometry.stroke",
		"stylers": [
			{"color": "#52bcfa"},
			{"weight": 1}
		]
	},
	{
		"featureType": "landscape.natural",
		"elementType": "geometry",
		"stylers": [{
			"color": "#76b9e4"
		}]
	},
	{
		"featureType": "landscape.natural.terrain",
		"elementType": "geometry.fill",
		"stylers": [{
			"color": "#4192c1"
		}]
	},
	{
		"featureType": "poi.business",
		"elementType": "labels.icon",
		"stylers": [{
			"weight": 6
		}]
	},
	{
		"featureType": "poi.business",
		"elementType": "labels.text.fill",
		"stylers": [{
			"color": "#8fd4ff"
		}]
	},
	{
		"featureType": "poi.business",
		"elementType": "labels.text.stroke",
		"stylers": [{
			"color": "#1c516f"
		}]
	},
	{
		"featureType": "poi.government",
		"elementType": "labels.text",
		"stylers": [{
			"color": "#1c516f"
		}]
	},
	{
		"featureType": "poi.government",
		"elementType": "labels.text.stroke",
		"stylers": [{
			"color": "#52bcfa"
		}]
	},
	{
		"featureType": "poi.park",
		"stylers": [{
			"color": "#53bcfa"
		}]
	},
	{
		"featureType": "poi.park",
		"elementType": "labels.text.fill",
		"stylers": [{
			"color": "#384141"
		}]
	},
	{
		"featureType": "poi.park",
		"elementType": "labels.text.stroke",
		"stylers": [{
			"color": "#dfffff"
		}]
	},
	{
		"featureType": "poi.school",
		"elementType": "labels.text",
		"stylers": [{
			"color": "#1b4d6a"
		}]
	},
	{
		"featureType": "poi.school",
		"elementType": "labels.text.stroke",
		"stylers": [{
			"color": "#8fd4ff"
		}]
	},
	{
		"featureType": "road",
		"elementType": "geometry.fill",
		"stylers": [{
			"color": "#bedcf1"
		}]
	},
	{
		"featureType": "road",
		"elementType": "labels.text.fill",
		"stylers": [{
			"color": "#373f3f"
		}]
	},
	{
		"featureType": "road",
		"elementType": "labels.text.stroke",
		"stylers": [{
			"color": "#ffffff"
		}]
	},
	{
		"featureType": "water",
		"elementType": "geometry",
		"stylers": [{
			"color": "#eceee2"
		}]
	}
];
var styledMap = new google.maps.StyledMapType(json__style, {
	name: "Google"
});
var mapOptions = {
	zoom: 16,
	center: new google.maps.LatLng(56.095745, 54.257062),
	zoomControl: true,
	scrollwheel: true,
	mapTypeControlOptions: {
		mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'map_style']
	},
	gestureHandling: 'greedy',
	disableDefaultUI: true
};
var map = new google.maps.Map(document.getElementById('google__map'), mapOptions);
map.mapTypes.set('map_style', styledMap);
map.setMapTypeId('map_style');

var directionsDisplay = new google.maps.DirectionsRenderer();
var directionsService = new google.maps.DirectionsService();
directionsDisplay.setMap(map);
directionsDisplay.setOptions({
	suppressMarkers: true,
	suppressInfoWindows: true
});
var getMarkerInsert = function (coords, message, icon) {
	var iconBasic = icon;
	var messageIcon = message;
	var latitudeCoords = coords;

	var getMarker = new google.maps.Marker({
		position: new google.maps.LatLng(latitudeCoords[0], latitudeCoords[1]),
		map: map,
		clickable: true,
		tooltipContent: messageIcon
	});
	getMarker.setIcon(iconBasic);

	google.maps.event.addListener(getMarker, 'click', function () {
		
	});
};


getMarkerInsert([56.095169, 54.257353], '', '/images/Map-icons/visota-logo.svg');
getMarkerInsert([56.097407, 54.257235], '', '/images/Map-icons/ost.svg');
getMarkerInsert([56.094865, 54.253705], '', '/images/Map-icons/shkoli.svg');
getMarkerInsert([56.093842, 54.256999], '', '/images/Map-icons/shkoli.svg');
getMarkerInsert([56.093010, 54.258844], '', '/images/Map-icons/shkoli.svg');
getMarkerInsert([56.094147, 54.255615], '', '/images/Map-icons/sadi.svg');
getMarkerInsert([56.092285, 54.265818], '', '/images/Map-icons/magziny.svg');
getMarkerInsert([56.090376, 54.251463], '', '/images/Map-icons/magziny.svg');
getMarkerInsert([56.089759, 54.247215], '', '/images/Map-icons/cafe.svg');
//    getMarkerInsert([56.091855, 54.265764], '', '/images/Map-icons/office.svg');


google.maps.event.addListenerOnce(map, 'idle', function () {
	
});

}