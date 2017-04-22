var marker1,
marker2,
marker3,
marker4,
marker5,
marker6,
marker7,
marker8,
marker9,
marker10,
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
        position: new google.maps.LatLng(20.699318, -105.292763),
        map: map,
        title: 'Kilometro-3',
    icon: 'images/map/pin.png'
    });
  google.maps.event.addListener(marker4, 'click', function() {
    cargainfo(marker4,"km3");
    });

  /////////////////////////////////////////////////////////////////////////KM4
    marker5 = new google.maps.Marker({
        position: new google.maps.LatLng(20.691319, -105.288518),
        map: map,
        title: 'Kilometro-4',
    icon: 'images/map/pin.png'
    });
  google.maps.event.addListener(marker5, 'click', function() {
    cargainfo(marker5,"km4");
    });

    /////////////////////////////////////////////////////////////////////////KM5
    marker6 = new google.maps.Marker({
        position: new google.maps.LatLng(20.693908, -105.288611),
        map: map,
        title: 'Kilometro-5',
    icon: 'images/map/pin.png'
    });
  google.maps.event.addListener(marker6, 'click', function() {
    cargainfo(marker6,"km5");
    });

    /////////////////////////////////////////////////////////////////////////KM6
    marker7 = new google.maps.Marker({
        position: new google.maps.LatLng(20.700298, -105.289152),
        map: map,
        title: 'Kilometro-6',
    icon: 'images/map/pin.png'
    });
  google.maps.event.addListener(marker7, 'click', function() {
    cargainfo(marker7,"km6");
    });  

    /////////////////////////////////////////////////////////////////////////KM7
    marker8 = new google.maps.Marker({
        position: new google.maps.LatLng(20.700022, -105.277694),
        map: map,
        title: 'Kilometro-7',
    icon: 'images/map/pin.png'
    });
  google.maps.event.addListener(marker8, 'click', function() {
    cargainfo(marker8,"km7");
    }); 

    /////////////////////////////////////////////////////////////////////////KM8
    marker9 = new google.maps.Marker({
        position: new google.maps.LatLng(20.698195, -105.281926),
        map: map,
        title: 'Kilometro-8',
    icon: 'images/map/pin.png'
    });
  google.maps.event.addListener(marker9, 'click', function() {
    cargainfo(marker9,"km8");
    }); 

    /////////////////////////////////////////////////////////////////////////KM9
    marker10 = new google.maps.Marker({
        position: new google.maps.LatLng(20.699618, -105.291943),
        map: map,
        title: 'Kilometro-9',
    icon: 'images/map/pin.png'
    });
  google.maps.event.addListener(marker10, 'click', function() {
    cargainfo(marker10,"km9");
    }); 

    /////////////////////////////////////////////////////////////////////////KM10
    marker11 = new google.maps.Marker({
        position: new google.maps.LatLng(20.706693, -105.292880),
        map: map,
        title: 'Kilometro-10',
    icon: 'images/map/pin.png'
    });
  google.maps.event.addListener(marker11, 'click', function() {
    cargainfo(marker11,"km10");
    }); 

    /////////////////////////////////////////////////////////////////////////KM11
    marker12 = new google.maps.Marker({
        position: new google.maps.LatLng(20.708881, -105.299993),
        map: map,
        title: 'Kilometro-11',
    icon: 'images/map/pin.png'
    });
  google.maps.event.addListener(marker12, 'click', function() {
    cargainfo(marker12,"km11");
    }); 

    /////////////////////////////////////////////////////////////////////////KM12
    marker13 = new google.maps.Marker({
        position: new google.maps.LatLng(20.718045, -105.303798),
        map: map,
        title: 'Kilometro-12',
    icon: 'images/map/pin.png'
    });
  google.maps.event.addListener(marker13, 'click', function() {
    cargainfo(marker13,"km12");
    });

    /////////////////////////////////////////////////////////////////////////km13
    marker14 = new google.maps.Marker({
        position: new google.maps.LatLng(20.725868, -105.307313),
        map: map,
        title: 'Kilometro-13',
    icon: 'images/map/pin.png'
    });
  google.maps.event.addListener(marker14, 'click', function() {
    cargainfo(marker14,"km13");
    });




}
  
function cargainfo(marcador,classinfo){
	infowindow.setContent($("."+classinfo).html());
	infowindow.open(map,marcador);
}

initialize();