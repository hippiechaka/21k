var marker1,
infowindow,
map;

var MY_MAPTYPE_ID = 'hiphop';

function initialize() {
    
  var stylez = [
    {
      featureType: "all",
      elementType: "all",
      stylers: [
      { "lightness": -10 },
      { "saturation": -60 },
      { "gamma": 0.66 },
      { "hue": "#0066ff" }
    ]
    }	
  ];

  var myLatlng = new google.maps.LatLng(20.698384, -105.296176);
  var mapOptions = {
    zoom: 15,
    center: myLatlng,
    mapTypeControlOptions: {
       mapTypeIds: [google.maps.MapTypeId.ROADMAP, MY_MAPTYPE_ID]
    },
    mapTypeId: MY_MAPTYPE_ID,
	  panControl: false,
	  zoomControl: true,
	  mapTypeControl: false,
	  scaleControl: false,
	  streetViewControl: true,
	  overviewMapControl: false,
    scrollwheel: false 
	
  };

  map = new google.maps.Map(document.getElementById("map_canvas"),
      mapOptions);
      
  var styledMapOptions = {
    name: ""
  };

  var jayzMapType = new google.maps.StyledMapType(stylez, styledMapOptions);
  
  map.mapTypes.set(MY_MAPTYPE_ID, jayzMapType);
        
    infowindow = new google.maps.InfoWindow({maxWidth:600});
/////////////////////////////////////////////////////////////////////////MEXICO
    marker1 = new google.maps.Marker({
        position: new google.maps.LatLng(20.698384, -105.296176),
        map: map,
        title: 'Punto de salida',
		icon: 'images/map/pin.png'
    });
	google.maps.event.addListener(marker1, 'click', function() {
	  cargainfo(marker1,"location");
    });

/////////////////////////////////////////////////////////////////////////KM1
    marker2 = new google.maps.Marker({
        position: new google.maps.LatLng(20.706838, -105.299320),
        map: map,
        title: 'Kilometro-1',
    icon: 'images/map/pin.png'
    });
  google.maps.event.addListener(marker2, 'click', function() {
    cargainfo(marker2,"km1");
    });

/////////////////////////////////////////////////////////////////////////KM2
    marker3 = new google.maps.Marker({
        position: new google.maps.LatLng(20.707403, -105.293420),
        map: map,
        title: 'Kilometro-2',
    icon: 'images/map/pin.png'
    });
  google.maps.event.addListener(marker3, 'click', function() {
    cargainfo(marker3,"km2");
    });

/////////////////////////////////////////////////////////////////////////KM3
    marker4 = new google.maps.Marker({
        position: new google.maps.LatLng(20.699332, -105.292718),
        map: map,
        title: 'Kilometro-3',
    icon: 'images/map/pin.png'
    });
  google.maps.event.addListener(marker4, 'click', function() {
    cargainfo(marker4,"km3");
    });

  /////////////////////////////////////////////////////////////////////////KM4
    marker5 = new google.maps.Marker({
        position: new google.maps.LatLng(20.699332, -105.292718),
        map: map,
        title: 'Kilometro-4',
    icon: 'images/map/pin.png'
    });
  google.maps.event.addListener(marker5, 'click', function() {
    cargainfo(marker5,"km4");
    });







}
  
function cargainfo(marcador,classinfo){
	infowindow.setContent($("."+classinfo).html());
	infowindow.open(map,marcador);
}

initialize();