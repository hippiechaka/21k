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
marker11,
marker12,
marker13,
marker14,
marker15,
marker16,
marker17,
marker18,
marker19,
marker20,
marker21,
marker22,
marker23,
marker24,
marker25,
marker26,
marker27,
marker28,
marker29,
marker30,
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

  var myLatlng = new google.maps.LatLng(20.715000, -105.296176);
  var mapOptions = {
    zoom: 14,
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

/////////////////////////////////////////////////////////////////////////KM1
    marker1 = new google.maps.Marker({
        position: new google.maps.LatLng(20.706838, -105.299320),
        map: map,
        title: 'Kilometro-1',
    icon: 'images/map/pin-km.png'
    });
  google.maps.event.addListener(marker1, 'click', function() {
    cargainfo(marker1,"km1");
    });

/////////////////////////////////////////////////////////////////////////KM2
    marker2 = new google.maps.Marker({
        position: new google.maps.LatLng(20.707403, -105.293420),
        map: map,
        title: 'Kilometro-2',
    icon: 'images/map/pin-km.png'
    });
  google.maps.event.addListener(marker2, 'click', function() {
    cargainfo(marker2,"km2");
    });

/////////////////////////////////////////////////////////////////////////KM3
    marker3 = new google.maps.Marker({
        position: new google.maps.LatLng(20.699318, -105.292763),
        map: map,
        title: 'Kilometro-3',
    icon: 'images/map/pin-km.png'
    });
  google.maps.event.addListener(marker3, 'click', function() {
    cargainfo(marker3,"km3");
    });

  /////////////////////////////////////////////////////////////////////////KM4
    marker4 = new google.maps.Marker({
        position: new google.maps.LatLng(20.691319, -105.288518),
        map: map,
        title: 'Kilometro-4',
    icon: 'images/map/pin-km.png'
    });
  google.maps.event.addListener(marker4, 'click', function() {
    cargainfo(marker4,"km4");
    });

    /////////////////////////////////////////////////////////////////////////KM5
    marker5 = new google.maps.Marker({
        position: new google.maps.LatLng(20.693908, -105.288611),
        map: map,
        title: 'Kilometro-5',
    icon: 'images/map/pin-km.png'
    });
  google.maps.event.addListener(marker5, 'click', function() {
    cargainfo(marker5,"km5");
    });

    /////////////////////////////////////////////////////////////////////////KM6
    marker6 = new google.maps.Marker({
        position: new google.maps.LatLng(20.700298, -105.289152),
        map: map,
        title: 'Kilometro-6',
    icon: 'images/map/pin-km.png'
    });
  google.maps.event.addListener(marker6, 'click', function() {
    cargainfo(marker6,"km6");
    });  

    /////////////////////////////////////////////////////////////////////////KM7
    marker7 = new google.maps.Marker({
        position: new google.maps.LatLng(20.700022, -105.277694),
        map: map,
        title: 'Kilometro-7',
    icon: 'images/map/pin-km.png'
    });
  google.maps.event.addListener(marker7, 'click', function() {
    cargainfo(marker7,"km7");
    }); 

    /////////////////////////////////////////////////////////////////////////KM8
    marker8 = new google.maps.Marker({
        position: new google.maps.LatLng(20.698195, -105.281926),
        map: map,
        title: 'Kilometro-8',
    icon: 'images/map/pin-km.png'
    });
  google.maps.event.addListener(marker8, 'click', function() {
    cargainfo(marker8,"km8");
    }); 

    /////////////////////////////////////////////////////////////////////////KM9
    marker9 = new google.maps.Marker({
        position: new google.maps.LatLng(20.699618, -105.291943),
        map: map,
        title: 'Kilometro-9',
    icon: 'images/map/pin-km.png'
    });
  google.maps.event.addListener(marker9, 'click', function() {
    cargainfo(marker9,"km9");
    }); 

    /////////////////////////////////////////////////////////////////////////KM10
    marker10 = new google.maps.Marker({
        position: new google.maps.LatLng(20.706693, -105.292880),
        map: map,
        title: 'Kilometro-10',
    icon: 'images/map/pin-km.png'
    });
  google.maps.event.addListener(marker10, 'click', function() {
    cargainfo(marker10,"km10");
    }); 

    /////////////////////////////////////////////////////////////////////////KM11
    marker11 = new google.maps.Marker({
        position: new google.maps.LatLng(20.708881, -105.299993),
        map: map,
        title: 'Kilometro-11',
    icon: 'images/map/pin-km.png'
    });
  google.maps.event.addListener(marker11, 'click', function() {
    cargainfo(marker11,"km11");
    }); 

    /////////////////////////////////////////////////////////////////////////KM12
    marker12 = new google.maps.Marker({
        position: new google.maps.LatLng(20.718045, -105.303798),
        map: map,
        title: 'Kilometro-12',
    icon: 'images/map/pin-km.png'
    });
  google.maps.event.addListener(marker12, 'click', function() {
    cargainfo(marker12,"km12");
    });

    /////////////////////////////////////////////////////////////////////////km13
    marker13 = new google.maps.Marker({
        position: new google.maps.LatLng(20.725868, -105.307313),
        map: map,
        title: 'Kilometro-13',
    icon: 'images/map/pin-km.png'
    });
  google.maps.event.addListener(marker13, 'click', function() {
    cargainfo(marker13,"km13");
    });

    /////////////////////////////////////////////////////////////////////////km14
    marker14 = new google.maps.Marker({
        position: new google.maps.LatLng(20.735852, -105.313512),
        map: map,
        title: 'Kilometro-14',
    icon: 'images/map/pin-km.png'
    });
  google.maps.event.addListener(marker14, 'click', function() {
    cargainfo(marker14,"km14");
    });

    /////////////////////////////////////////////////////////////////////////km15
    marker15 = new google.maps.Marker({
        position: new google.maps.LatLng(20.740773, -105.319668),
        map: map,
        title: 'Kilometro-15',
    icon: 'images/map/pin-km.png'
    });
  google.maps.event.addListener(marker15, 'click', function() {
    cargainfo(marker15,"km15");
    });

    /////////////////////////////////////////////////////////////////////////km16
    marker16 = new google.maps.Marker({
        position: new google.maps.LatLng(20.738409, -105.317855),
        map: map,
        title: 'Kilometro-16',
    icon: 'images/map/pin-km.png'
    });
  google.maps.event.addListener(marker16, 'click', function() {
    cargainfo(marker16,"km16");
    });

    /////////////////////////////////////////////////////////////////////////km17
    marker17 = new google.maps.Marker({
        position: new google.maps.LatLng(20.735046, -105.313158),
        map: map,
        title: 'Kilometro-17',
    icon: 'images/map/pin-km.png'
    });
  google.maps.event.addListener(marker17, 'click', function() {
    cargainfo(marker17,"km17");
    });

    /////////////////////////////////////////////////////////////////////////km18
    marker18 = new google.maps.Marker({
        position: new google.maps.LatLng(20.724112, -105.306819),
        map: map,
        title: 'Kilometro-18',
    icon: 'images/map/pin-km.png'
    });
  google.maps.event.addListener(marker18, 'click', function() {
    cargainfo(marker18,"km18");
    });

    /////////////////////////////////////////////////////////////////////////km19
    marker19 = new google.maps.Marker({
        position: new google.maps.LatLng(20.716199, -105.303326),
        map: map,
        title: 'Kilometro-19',
    icon: 'images/map/pin-km.png'
    });
  google.maps.event.addListener(marker19, 'click', function() {
    cargainfo(marker19,"km19");
    });

    /////////////////////////////////////////////////////////////////////////km20
    marker20 = new google.maps.Marker({
        position: new google.maps.LatLng(20.707165, -105.299637),
        map: map,
        title: 'Kilometro-20',
    icon: 'images/map/pin-km.png'
    });
  google.maps.event.addListener(marker20, 'click', function() {
    cargainfo(marker20,"km20");
    });
/*
=================================================================
SALIDA/META (OJO)
=================================================================
*/

/////////////////////////////////////////////////////////////////////////SALIDA/META 
    marker21 = new google.maps.Marker({
        position: new google.maps.LatLng(20.698384, -105.296176),
        map: map,
        title: 'Salida/Meta',
        icon: 'images/map/pin.png'
    });
    google.maps.event.addListener(marker21, 'click', function() {
      cargainfo(marker21,"location");
    });  

/*
=================================================================
SEÑALÉTICA
=================================================================
*/

//Vuelta a la Derecha
marker22 = new google.maps.Marker({
    position: new google.maps.LatLng(20.708621, -105.299873),
    map: map,
    title: 'Vuelta a la Derecha',
icon: 'images/map/pin-right.png'
});
google.maps.event.addListener(marker22, 'click', function() {
cargainfo(marker22,"vuelta-derecha");
});

//Vuelta a la Derecha 2
marker23 = new google.maps.Marker({
    position: new google.maps.LatLng(20.709368, -105.294348),
    map: map,
    title: 'Vuelta a la Derecha',
icon: 'images/map/pin-right.png'
});
google.maps.event.addListener(marker23, 'click', function() {
cargainfo(marker23,"vuelta-derecha");
});

//Vuelta U Izquierda
marker24 = new google.maps.Marker({
    position: new google.maps.LatLng(20.689126, -105.286731),
    map: map,
    title: 'Vuelta en U (izq) ',
icon: 'images/map/pin-u-izq.png'
});
google.maps.event.addListener(marker24, 'click', function() {
cargainfo(marker24,"vuelta-u");
});

//Vuelta a la Derecha 3
marker25 = new google.maps.Marker({
    position: new google.maps.LatLng(20.699085, -105.291872),
    map: map,
    title: 'Vuelta a la Derecha',
icon: 'images/map/pin-right.png'
});
google.maps.event.addListener(marker25, 'click', function() {
cargainfo(marker25,"vuelta-derecha");
});

//Vuelta U Izquierda 2
marker26 = new google.maps.Marker({
    position: new google.maps.LatLng(20.700029, -105.277181),
    map: map,
    title: 'Vuelta en U (izq)',
icon: 'images/map/pin-u-izq.png'
});
google.maps.event.addListener(marker26, 'click', function() {
cargainfo(marker26,"vuelta-u");
});

//Vuelta a la Derecha 4
marker27 = new google.maps.Marker({
    position: new google.maps.LatLng(20.699337, -105.292322),
    map: map,
    title: 'Vuelta a la Derecha',
icon: 'images/map/pin-right.png'
});
google.maps.event.addListener(marker27, 'click', function() {
cargainfo(marker27,"vuelta-derecha");
});

//Vuelta U Izquierda 3
marker28 = new google.maps.Marker({
    position: new google.maps.LatLng(20.709323, -105.293942),
    map: map,
    title: 'Vuelta en U (izq)',
icon: 'images/map/pin-u-izq.png'
});
google.maps.event.addListener(marker28, 'click', function() {
cargainfo(marker28,"vuelta-glorieta");
});

//Vuelta a la Derecha 5
marker29 = new google.maps.Marker({
    position: new google.maps.LatLng(20.708846, -105.299972),
    map: map,
    title: 'Vuelta a la Derecha',
icon: 'images/map/pin-right.png'
});
google.maps.event.addListener(marker29, 'click', function() {
cargainfo(marker29,"vuelta-derecha");
});

    /////////////////////////////////////////////////////////////////////////RETORNO
    marker30 = new google.maps.Marker({
        position: new google.maps.LatLng(20.741876, -105.321472),
        map: map,
        title: 'Retorno',
    icon: 'images/map/pin-u-izq.png'
    });
  google.maps.event.addListener(marker30, 'click', function() {
    cargainfo(marker30,"retorno");
    });

}
  
function cargainfo(marcador,classinfo){
	infowindow.setContent($("."+classinfo).html());
	infowindow.open(map,marcador);
}

//initialize();