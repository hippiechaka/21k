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

  var myLatlng = new google.maps.LatLng(20.3489262,-103.1930628);
  var mapOptions = {
    zoom: 11,
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
        position: new google.maps.LatLng(20.3489262,-103.1930628),
        map: map,
        title: 'Punto de salida',
		icon: 'images/map/pin.png'
    });
	google.maps.event.addListener(marker1, 'click', function() {
	  cargainfo(marker1,"location");
    });

}
  
function cargainfo(marcador,classinfo){
	infowindow.setContent($("."+classinfo).html());
	infowindow.open(map,marcador);
}

initialize();