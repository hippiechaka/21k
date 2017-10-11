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
marker31,
marker32,
marker33,
marker34,
marker35,
marker36,
marker37,
marker38,
marker39,
marker40,
marker41,
marker42,
marker43,
marker44,
marker45,
marker46,
marker47,
marker48,
marker49,
marker50,
marker51,
marker52,
marker53,
marker54,
marker55,
marker56,

infowindow,
map;

var MY_MAPTYPE_ID = 'hiphop';

/*
var layers=[];
layers[0] = new  google.maps.KmlLayer("https://www.google.com/maps/d/kml?hl=es-419&mid=1YJF2ZtNMBCUptydLrRidUnklj2o&cid=mp&cv=xsTMQ9t5Loc.es_419.",   
 {preserveViewport: true});

var map;
*/

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
},


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
    "featureType": "poi",
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

/*
{
    "featureType": "administrative.land_parcel",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "featureType": "administrative.neighborhood",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "featureType": "poi",
    "elementType": "labels.text",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "featureType": "road",
    "elementType": "labels",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "featureType": "water",
    "elementType": "labels.text",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  }
*/




];

  /*[
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
  ];*/

  var myLatlng = new google.maps.LatLng(20.715000, -105.296176);
  var mapOptions = {
    zoom: 13,
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
    icon: 'images/map/pin_1k.png'
    });
  google.maps.event.addListener(marker1, 'click', function() {
    cargainfo(marker1,"km1");
    });

/////////////////////////////////////////////////////////////////////////KM2
    marker2 = new google.maps.Marker({
        position: new google.maps.LatLng(20.707403, -105.293420),
        map: map,
        title: 'Kilometro-2',
    icon: 'images/map/pin_2k.png'
    });
  google.maps.event.addListener(marker2, 'click', function() {
    cargainfo(marker2,"km2");
    });

/////////////////////////////////////////////////////////////////////////KM3
    marker3 = new google.maps.Marker({
        position: new google.maps.LatLng(20.699318, -105.292763),
        map: map,
        title: 'Kilometro-3',
    icon: 'images/map/pin_3k.png'
    });
  google.maps.event.addListener(marker3, 'click', function() {
    cargainfo(marker3,"km3");
    });

  /////////////////////////////////////////////////////////////////////////KM4
    marker4 = new google.maps.Marker({
        position: new google.maps.LatLng(20.691319, -105.288518),
        map: map,
        title: 'Kilometro-4',
    icon: 'images/map/pin_4k.png'
    });
  google.maps.event.addListener(marker4, 'click', function() {
    cargainfo(marker4,"km4");
    });

    /////////////////////////////////////////////////////////////////////////KM5
    marker5 = new google.maps.Marker({
        position: new google.maps.LatLng(20.693908, -105.288611),
        map: map,
        title: 'Kilometro-5',
    icon: 'images/map/pin_5k.png'
    });
  google.maps.event.addListener(marker5, 'click', function() {
    cargainfo(marker5,"km5");
    });

    /////////////////////////////////////////////////////////////////////////KM6
    marker6 = new google.maps.Marker({
        position: new google.maps.LatLng(20.700298, -105.289152),
        map: map,
        title: 'Kilometro-6',
    icon: 'images/map/pin_6k.png'
    });
  google.maps.event.addListener(marker6, 'click', function() {
    cargainfo(marker6,"km6");
    });  

    /////////////////////////////////////////////////////////////////////////KM7
    marker7 = new google.maps.Marker({
        position: new google.maps.LatLng(20.700022, -105.277694),
        map: map,
        title: 'Kilometro-7',
    icon: 'images/map/pin_7k.png'
    });
  google.maps.event.addListener(marker7, 'click', function() {
    cargainfo(marker7,"km7");
    }); 

    /////////////////////////////////////////////////////////////////////////KM8
    marker8 = new google.maps.Marker({
        position: new google.maps.LatLng(20.698195, -105.281926),
        map: map,
        title: 'Kilometro-8',
    icon: 'images/map/pin_8k.png',
    zIndex:999
    });
  google.maps.event.addListener(marker8, 'click', function() {
    cargainfo(marker8,"km8");
    }); 

    /////////////////////////////////////////////////////////////////////////KM9
    marker9 = new google.maps.Marker({
        position: new google.maps.LatLng(20.699618, -105.291943),
        map: map,
        title: 'Kilometro-9',
    icon: 'images/map/pin_9k.png'
    });
  google.maps.event.addListener(marker9, 'click', function() {
    cargainfo(marker9,"km9");
    }); 

    /////////////////////////////////////////////////////////////////////////KM10
    marker10 = new google.maps.Marker({
        position: new google.maps.LatLng(20.706693, -105.292880),
        map: map,
        title: 'Kilometro-10',
    icon: 'images/map/pin_10k.png'
    });
  google.maps.event.addListener(marker10, 'click', function() {
    cargainfo(marker10,"km10");
    }); 

    /////////////////////////////////////////////////////////////////////////KM11
    marker11 = new google.maps.Marker({
        position: new google.maps.LatLng(20.708881, -105.299993),
        map: map,
        title: 'Kilometro-11',
    icon: 'images/map/pin_11k.png'
    });
  google.maps.event.addListener(marker11, 'click', function() {
    cargainfo(marker11,"km11");
    }); 

    /////////////////////////////////////////////////////////////////////////KM12
    marker12 = new google.maps.Marker({
        position: new google.maps.LatLng(20.718045, -105.303798),
        map: map,
        title: 'Kilometro-12',
    icon: 'images/map/pin_12k.png'
    });
  google.maps.event.addListener(marker12, 'click', function() {
    cargainfo(marker12,"km12");
    });

    /////////////////////////////////////////////////////////////////////////km13
    marker13 = new google.maps.Marker({
        position: new google.maps.LatLng(20.725868, -105.307313),
        map: map,
        title: 'Kilometro-13',
    icon: 'images/map/pin_13k.png'
    });
  google.maps.event.addListener(marker13, 'click', function() {
    cargainfo(marker13,"km13");
    });

    /////////////////////////////////////////////////////////////////////////km14
    marker14 = new google.maps.Marker({
        position: new google.maps.LatLng(20.735852, -105.313512),
        map: map,
        title: 'Kilometro-14',
    icon: 'images/map/pin_14k.png'
    });
  google.maps.event.addListener(marker14, 'click', function() {
    cargainfo(marker14,"km14");
    });

    /////////////////////////////////////////////////////////////////////////km15
    marker15 = new google.maps.Marker({
        position: new google.maps.LatLng(20.740773, -105.319668),
        map: map,
        title: 'Kilometro-15',
    icon: 'images/map/pin_15k.png'
    });
  google.maps.event.addListener(marker15, 'click', function() {
    cargainfo(marker15,"km15");
    });

    /////////////////////////////////////////////////////////////////////////km16
    marker16 = new google.maps.Marker({
        position: new google.maps.LatLng(20.738409, -105.317855),
        map: map,
        title: 'Kilometro-16',
    icon: 'images/map/pin_16k.png'
    });
  google.maps.event.addListener(marker16, 'click', function() {
    cargainfo(marker16,"km16");
    });

    /////////////////////////////////////////////////////////////////////////km17
    marker17 = new google.maps.Marker({
        position: new google.maps.LatLng(20.735046, -105.313158),
        map: map,
        title: 'Kilometro-17',
    icon: 'images/map/pin_17k.png'
    });
  google.maps.event.addListener(marker17, 'click', function() {
    cargainfo(marker17,"km17");
    });

    /////////////////////////////////////////////////////////////////////////km18
    marker18 = new google.maps.Marker({
        position: new google.maps.LatLng(20.724112, -105.306819),
        map: map,
        title: 'Kilometro-18',
    icon: 'images/map/pin_18k.png'
    });
  google.maps.event.addListener(marker18, 'click', function() {
    cargainfo(marker18,"km18");
    });

    /////////////////////////////////////////////////////////////////////////km19
    marker19 = new google.maps.Marker({
        position: new google.maps.LatLng(20.716199, -105.303326),
        map: map,
        title: 'Kilometro-19',
    icon: 'images/map/pin_19k.png'
    });
  google.maps.event.addListener(marker19, 'click', function() {
    cargainfo(marker19,"km19");
    });

    /////////////////////////////////////////////////////////////////////////km20
    marker20 = new google.maps.Marker({
        position: new google.maps.LatLng(20.707165, -105.299637),
        map: map,
        title: 'Kilometro-20',
    icon: 'images/map/pin_20k.png'
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
    position: new google.maps.LatLng(20.708486, -105.299919),
    map: map,
    title: 'Vuelta a la Derecha',
icon: 'images/map/s1.png'
});
google.maps.event.addListener(marker22, 'click', function() {
cargainfo(marker22,"vuelta-derecha");
});

//Vuelta a la Derecha 2
marker23 = new google.maps.Marker({
    position: new google.maps.LatLng(20.709368, -105.294348),//misma coordenada
    map: map,
    title: 'Vuelta a la Derecha',
icon: 'images/map/s2.png'
});
google.maps.event.addListener(marker23, 'click', function() {
cargainfo(marker23,"vuelta-derecha");
});

//Vuelta U Izquierda
marker24 = new google.maps.Marker({
    position: new google.maps.LatLng(20.689126, -105.286731),
    map: map,
    title: 'Vuelta en U (izq) ',
icon: 'images/map/s3.png'
});
google.maps.event.addListener(marker24, 'click', function() {
cargainfo(marker24,"vuelta-u");
});

//Vuelta a la Derecha 3
marker25 = new google.maps.Marker({
    position: new google.maps.LatLng(20.699085, -105.291872),
    map: map,
    title: 'Vuelta a la Derecha',
icon: 'images/map/s4.png'
});
google.maps.event.addListener(marker25, 'click', function() {
cargainfo(marker25,"vuelta-derecha");
});

//Vuelta U Izquierda 2
marker26 = new google.maps.Marker({
    position: new google.maps.LatLng(20.700029, -105.277181),
    map: map,
    title: 'Vuelta en U (izq)',
icon: 'images/map/s5.png'
});
google.maps.event.addListener(marker26, 'click', function() {
cargainfo(marker26,"vuelta-u");
});

//Vuelta a la Derecha 4
marker27 = new google.maps.Marker({
    position: new google.maps.LatLng(20.699337, -105.292322),
    map: map,
    title: 'Vuelta a la Derecha',
icon: 'images/map/s6.png'
});
google.maps.event.addListener(marker27, 'click', function() {
cargainfo(marker27,"vuelta-derecha");
});

//Vuelta U Izquierda 3
marker28 = new google.maps.Marker({
    position: new google.maps.LatLng(20.709323, -105.293942),
    map: map,
    title: 'Vuelta en U (izq)',
icon: 'images/map/s7.png'
});
google.maps.event.addListener(marker28, 'click', function() {
cargainfo(marker28,"vuelta-glorieta");
});

//Vuelta a la Derecha 5
marker29 = new google.maps.Marker({
    position: new google.maps.LatLng(20.708846, -105.299972),
    map: map,
    title: 'Vuelta a la Derecha',
icon: 'images/map/s8.png'
});
google.maps.event.addListener(marker29, 'click', function() {
cargainfo(marker29,"vuelta-derecha");
});

    /////////////////////////////////////////////////////////////////////////RETORNO
    marker30 = new google.maps.Marker({
        position: new google.maps.LatLng(20.741820, -105.321369),
        map: map,
        title: 'Retorno',
    icon: 'images/map/s9.png'
    });
  google.maps.event.addListener(marker30, 'click', function() {
    cargainfo(marker30,"retorno");
    });

/*
=================================================================
NUEVOS
=================================================================
*/

marker31 = new google.maps.Marker({
    position: new google.maps.LatLng(20.698884, -105.292664),
    map: map,
    title: 'Vuelta a la Derecha',
icon: 'images/map/n1.png'
});
google.maps.event.addListener(marker31, 'click', function() {
cargainfo(marker31,"vuelta-derecha");
});
marker32 = new google.maps.Marker({
    position: new google.maps.LatLng(20.698727, -105.292181),
    map: map,
    title: 'Vuelta a la Derecha',
icon: 'images/map/n2.png'
});
google.maps.event.addListener(marker32, 'click', function() {
cargainfo(marker32,"vuelta-derecha");
});
marker33 = new google.maps.Marker({
    position: new google.maps.LatLng(20.709600, -105.294345),
    map: map,
    title: 'Vuelta a la Derecha',
icon: 'images/map/n3.png'
});
google.maps.event.addListener(marker33, 'click', function() {
cargainfo(marker33,"vuelta-derecha");
});
marker34 = new google.maps.Marker({
    position: new google.maps.LatLng(20.738757, -105.317831),
    map: map,
    title: 'Vuelta a la Derecha',
icon: 'images/map/n4.png'
});
google.maps.event.addListener(marker34, 'click', function() {
cargainfo(marker34,"vuelta-derecha");
});
marker35 = new google.maps.Marker({
    position: new google.maps.LatLng(20.738960, -105.318352),
    map: map,
    title: 'Vuelta a la Derecha',
icon: 'images/map/n5.png'
});
google.maps.event.addListener(marker35, 'click', function() {
cargainfo(marker35,"vuelta-derecha");
});
marker36 = new google.maps.Marker({
    position: new google.maps.LatLng(20.708784, -105.300458),
    map: map,
    title: 'Vuelta a la Derecha',
icon: 'images/map/n6.png'
});
google.maps.event.addListener(marker36, 'click', function() {
cargainfo(marker36,"vuelta-derecha");
});

/*
=================================================================
Puntos de hidratación
=================================================================
*/

//CIEL

////////////////////////////////////////////////////////////////KM3
marker37 = new google.maps.Marker({
    position: new google.maps.LatLng(20.699540, -105.292976),
    map: map,
    title: 'Punto de Hidratación Ciel',
icon: 'images/map/ciel_3k.png'
});
google.maps.event.addListener(marker37, 'click', function() {
cargainfo(marker37,"punto-hidratacion-ciel");
});
////////////////////////////////////////////////////////////////km6
marker38 = new google.maps.Marker({
    position: new google.maps.LatLng(20.700297, -105.289320),
    map: map,
    title: 'Punto de Hidratación Ciel',
icon: 'images/map/ciel_3k.png'
});
google.maps.event.addListener(marker38, 'click', function() {
cargainfo(marker38,"punto-hidratacion-ciel");
});
////////////////////////////////////////////////////////////////km8
marker39 = new google.maps.Marker({
    position: new google.maps.LatLng(20.698183, -105.281939),
    map: map,
    title: 'Punto de Hidratación Ciel',
icon: 'images/map/ciel_3k.png'
});
google.maps.event.addListener(marker39, 'click', function() {
cargainfo(marker39,"punto-hidratacion-ciel");
});
////////////////////////////////////////////////////////////////km10
marker40 = new google.maps.Marker({
    position: new google.maps.LatLng(20.706788, -105.292909),
    map: map,
    title: 'Punto de Hidratación Ciel',
icon: 'images/map/ciel_3k.png'
});
google.maps.event.addListener(marker40, 'click', function() {
cargainfo(marker40,"punto-hidratacion-ciel");
});
////////////////////////////////////////////////////////////////km12
marker41 = new google.maps.Marker({
    position: new google.maps.LatLng(20.718116, -105.303817),
    map: map,
    title: 'Punto de Hidratación Ciel',
icon: 'images/map/ciel_3k.png'
});
google.maps.event.addListener(marker41, 'click', function() {
cargainfo(marker41,"punto-hidratacion-ciel");
});
////////////////////////////////////////////////////////////////km14
marker42 = new google.maps.Marker({
    position: new google.maps.LatLng(20.736037, -105.313652),
    map: map,
    title: 'Punto de Hidratación Ciel',
icon: 'images/map/ciel_3k.png'
});
google.maps.event.addListener(marker42, 'click', function() {
cargainfo(marker42,"punto-hidratacion-ciel");
});
////////////////////////////////////////////////////////////////km16
marker43 = new google.maps.Marker({
    position: new google.maps.LatLng(20.738517, -105.317938),
    map: map,
    title: 'Punto de Hidratación Ciel',
icon: 'images/map/ciel_3k.png'
});
google.maps.event.addListener(marker43, 'click', function() {
cargainfo(marker43,"punto-hidratacion-ciel");
});
////////////////////////////////////////////////////////////////km18
marker44 = new google.maps.Marker({
    position: new google.maps.LatLng(20.724203, -105.306846),
    map: map,
    title: 'Punto de Hidratación Ciel',
icon: 'images/map/ciel_3k.png'
});
google.maps.event.addListener(marker44, 'click', function() {
cargainfo(marker44,"punto-hidratacion-ciel");
});
////////////////////////////////////////////////////////////////km20
marker45 = new google.maps.Marker({
    position: new google.maps.LatLng(20.707238, -105.299669),
    map: map,
    title: 'Punto de Hidratación Ciel',
icon: 'images/map/ciel_3k.png'
});
google.maps.event.addListener(marker45, 'click', function() {
cargainfo(marker45,"punto-hidratacion-ciel");
}); 

// POWERADE

////////////////////////////////////////////////////////////////KM6
marker46 = new google.maps.Marker({
    position: new google.maps.LatLng(20.700314, -105.289444),
    map: map,
    title: 'Punto de Hidratación Powerade',
icon: 'images/map/powerade_6k.png'
});
google.maps.event.addListener(marker46, 'click', function() {
cargainfo(marker46,"punto-hidratacion-powerade");
});
////////////////////////////////////////////////////////////////km10
marker47 = new google.maps.Marker({
    position: new google.maps.LatLng(20.706849, -105.292986),
    map: map,
    title: 'Punto de Hidratación Powerade',
icon: 'images/map/powerade_6k.png'
});
google.maps.event.addListener(marker47, 'click', function() {
cargainfo(marker47,"punto-hidratacion-powerade");
});
////////////////////////////////////////////////////////////////km12
marker48 = new google.maps.Marker({
    position: new google.maps.LatLng(20.718116, -105.303817),
    map: map,
    title: 'Punto de Hidratación Powerade',
icon: 'images/map/powerade_6k.png'
});
google.maps.event.addListener(marker48, 'click', function() {
cargainfo(marker48,"punto-hidratacion-powerade");
});
////////////////////////////////////////////////////////////////km14
marker49 = new google.maps.Marker({
    position: new google.maps.LatLng(20.736130, -105.313759),
    map: map,
    title: 'Punto de Hidratación Powerade',
icon: 'images/map/powerade_6k.png'
});
google.maps.event.addListener(marker49, 'click', function() {
cargainfo(marker49,"punto-hidratacion-powerade");
});
////////////////////////////////////////////////////////////////km16
marker50 = new google.maps.Marker({
    position: new google.maps.LatLng(20.738563, -105.317963),
    map: map,
    title: 'Punto de Hidratación Powerade',
icon: 'images/map/powerade_6k.png'
});
google.maps.event.addListener(marker50, 'click', function() {
cargainfo(marker50,"punto-hidratacion-powerade");
});
////////////////////////////////////////////////////////////////km18
marker51 = new google.maps.Marker({
    position: new google.maps.LatLng(20.724395, -105.306933),
    map: map,
    title: 'Punto de Hidratación Powerade',
icon: 'images/map/powerade_6k.png'
});
google.maps.event.addListener(marker51, 'click', function() {
cargainfo(marker51,"punto-hidratacion-powerade");
});
////////////////////////////////////////////////////////////////km20
marker52 = new google.maps.Marker({
    position: new google.maps.LatLng(20.707276, -105.299675),
    map: map,
    title: 'Punto de Hidratación Powerade',
icon: 'images/map/powerade_6k.png'
});
google.maps.event.addListener(marker52, 'click', function() {
cargainfo(marker52,"punto-hidratacion-powerade");
});

/*
=================================================================
Servicios Médicos
=================================================================
*/

//////////////////////////////////////////////////////////////// 1
marker53 = new google.maps.Marker({
    position: new google.maps.LatLng(20.698624, -105.296453),
    map: map,
    title: 'servicios Médicos',
icon: 'images/map/servicios_medicos.png'
});
google.maps.event.addListener(marker53, 'click', function() {
cargainfo(marker53,"servicios-medicos");
});
//////////////////////////////////////////////////////////////// 2
marker54 = new google.maps.Marker({
    position: new google.maps.LatLng(20.699058, -105.292352),
    map: map,
    title: 'servicios Médicos',
icon: 'images/map/servicios_medicos.png'
});
google.maps.event.addListener(marker54, 'click', function() {
cargainfo(marker54,"servicios-medicos");
});
//////////////////////////////////////////////////////////////// 3
marker55 = new google.maps.Marker({
    position: new google.maps.LatLng(20.738868, -105.318111),
    map: map,
    title: 'servicios Médicos',
icon: 'images/map/servicios_medicos.png'
});
google.maps.event.addListener(marker55, 'click', function() {
cargainfo(marker55,"servicios-medicos");
});
//////////////////////////////////////////////////////////////// 4
marker56 = new google.maps.Marker({
    position: new google.maps.LatLng(20.719002, -105.304117),
    map: map,
    title: 'Servicios Médicos',
icon: 'images/map/servicios_medicos.png'
});
google.maps.event.addListener(marker56, 'click', function() {
cargainfo(marker56,"servicios-medicos");
});


}
/*
function toggleLayers(i)
{
        
  if(layers[i].getMap()==null) {
    layers[i].setMap(map);
  }
  else {
    layers[i].setMap(null);
  }
  document.getElementById('status').innerHTML += "toggleLayers("+i+") [setMap("+layers[i].getMap()+"] returns status: "+layers[i].getStatus()+"<br>";
}
*/
function cargainfo(marcador,classinfo){
	infowindow.setContent($("."+classinfo).html());
	infowindow.open(map,marcador);
}

//initialize();