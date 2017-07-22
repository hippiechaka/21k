$(document).ready(function() {

// magnificPopup  http://dimsemenov.com/plugins/magnific-popup/documentation.html
  $('.home').magnificPopup({type:'iframe'});

	$(function() {
	  $('a[href*="#"]:not([href="#"])').click(function() {
	    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
	      var target = $(this.hash);
	      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
	      if (target.length) {
	        $('html, body').animate({
	          scrollTop: target.offset().top
	        }, 1000, 'easeInOutExpo');
	        return false;
	      }
	    }
	  });
	});

  $('.gallery').each(function() { // the containers for all your galleries
      $(this).magnificPopup({
          delegate: 'a', // the selector for gallery item
          type: 'image',
          gallery: {
            enabled:true
          }
      });
  });


$(".convocatoriaSlide").owlCarousel({
      navigation : true, // Show next and prev buttons
      slideSpeed : 300,
      paginationSpeed : 400,
      nav: true,
      controls: true,
      items : 1,
      itemsMobile : true,
      loop:true,
      autoplay: true,
      autoplayTimeout: 5000,
      autoplayHoverPause: true,
      navText: ["<i class='fa fa-angle-left' aria-hidden='true'></i>", "<i class='fa fa-angle-right' aria-hidden='true'></i>"]
 
  });

$('#mainslideshow').owlCarousel({
    animateOut: 'fadeOut',
    animateIn: 'fadeIn',
    singleItem: true,
    pagination: false,
    loop: true,
    margin: 0,
    nav: false,
    controls: false,
    items: 1,
    slideSpeed: 300,
    paginationSpeed: 400,
    autoplay: true,
                autoplayTimeout: 3000,
                autoplayHoverPause: true,
    
    });

$(".hotels").owlCarousel({
 
      navigation : true, // Show next and prev buttons
      slideSpeed : 300,
      paginationSpeed : 400,
      nav: true,
      controls: true,
      items : 4,
      itemsMobile : true,
      loop:true,
      autoplay: true,
      autoplayTimeout: 3000,
      autoplayHoverPause: true,
      responsiveClass:true,
      responsive:{
          0:{
              items:1,
              nav:true
          },
          600:{
              items:3,
              nav:true
          },
          1000:{
              items:4,
              nav:true,
              loop:true
          }
      },
      navText: ["<i class='fa fa-angle-left' aria-hidden='true'></i>", "<i class='fa fa-angle-right' aria-hidden='true'></i>"]
 
  });

$(".logos").owlCarousel({
 
      navigation : true, // Show next and prev buttons
      slideSpeed : 300,
      paginationSpeed : 400,
      nav: true,
      controls: true,
      items : 5,
      itemsMobile : true,
      loop:true,
      autoplay: true,
      autoplayTimeout: 3000,
      autoplayHoverPause: true,
      responsiveClass:true,
      responsive:{
          0:{
              items:1,
              nav:true
          },
          600:{
              items:3,
              nav:true
          },
          1000:{
              items:5,
              nav:true,
              loop:true
          }
      },
      navText: ["<i class='fa fa-angle-left' aria-hidden='true'></i>", "<i class='fa fa-angle-right' aria-hidden='true'></i>"]
 
  });

/* 
===============================================================================
GRID ROTATOR
===============================================================================
*/

$( '#ri-grid' ).gridrotator( {
          rows : 3,
          columns : 5,
          maxStep : 2,
          interval : 2000,
          w1024 : {
            rows : 3,
            columns : 5
          },
          w768 : {
            rows : 3,
            columns : 3
          },
          w480 : {
            rows : 3,
            columns : 3
          },
          w320 : {
            rows : 4,
            columns : 2
          },
          w240 : {
            rows : 4,
            columns : 1
          },
        } );



// ===============================================================================
//ScrollMagic!!!!!
// ===============================================================================
//Parallax
/*new ScrollMagic.Scene({triggerElement: "#parallax1"})
        .setTween("#parallax1 > div", {y: "80%", ease: Linear.easeNone})
        .addTo(controller);*/
//Cambio de Clases para menú:
// init controller
var controller = new ScrollMagic.Controller({globalSceneOptions: {triggerHook: "onEnter", duration: "200%"}});
//convocatoria          
new ScrollMagic.Scene({triggerElement: "#convocatoria"})
          .setClassToggle("#convocatoriaBtn", "current") // add class toggle
          .addTo(controller);
//inscripciones          
new ScrollMagic.Scene({triggerElement: "#inscripciones"})
          .setClassToggle("#inscripcionesBtn", "current") // add class toggle
          .addTo(controller);
//hoteles          
new ScrollMagic.Scene({triggerElement: "#hoteles"})
          .setClassToggle("#hotelesBtn", "current") // add class toggle
          .addTo(controller);
//patrocinadores          
new ScrollMagic.Scene({triggerElement: "#patrocinadores"})
          .setClassToggle("#patrocinadoresBtn", "current") // add class toggle
          .addTo(controller);
//cupones-servicios          
new ScrollMagic.Scene({triggerElement: "#cupones-servicios"})
          .setClassToggle("#cupones-serviciosBtn", "current") // add class toggle
          .addTo(controller);
//ubicacion
new ScrollMagic.Scene({triggerElement: "#ubicacion"})
          .setClassToggle("#ubicacionBtn", "current") // add class toggle
          .addTo(controller);
//galeria
new ScrollMagic.Scene({triggerElement: "#galeria"})
          .setClassToggle("#galeriaBtn", "current") // add class toggle
          .addTo(controller);
//contacto
new ScrollMagic.Scene({triggerElement: "#contacto"})
          .setClassToggle("#contactoBtn", "current") // add class toggle
          .addTo(controller);

//CUSTOM animations

/* tomtom */

var controller = new ScrollMagic.Controller();
var tween = TweenMax.staggerFromTo("#tomtomImg", 3, {right: -800}, {right: 0, ease: Expo.easeOut}, 0.15);
var scene = new ScrollMagic.Scene({triggerElement: "#top", duration: 1750})
        .setTween(tween)
        .addTo(controller);          

/* corredor */

var controller = new ScrollMagic.Controller();
var tween = TweenMax.staggerFromTo("#corredor", 3, {right: 700}, {right: 0, ease: Back.easeOut}, 0.15);
var scene = new ScrollMagic.Scene({triggerElement: "#convocatoria", duration: 1000})
        .setTween(tween)
        .addTo(controller);

/* corredora */

var controller = new ScrollMagic.Controller();
var tween = TweenMax.staggerFromTo("#corredora", 3, {left: -300}, {left: -90, ease: Back.easeOut}, 0.15);
var scene = new ScrollMagic.Scene({triggerElement: "#inscripciones", duration: 750})
        .setTween(tween)
        .addTo(controller);


// v3.1.0
//Docs at http://simpleweatherjs.com
//$(document).ready(function() {
  $.simpleWeather({
    location: 'Puerto Vallarta, JA, Mexico',
    woeid: '',
    unit: 'c',
    success: function(weather) {
      html = '<h2><i class="icon-'+weather.code+'"></i> '+weather.temp+'&deg;'+weather.units.temp+'</h2>';
      //html += '<ul><li>'+weather.city+', '+weather.region+'</li>';
      html += '<ul><li>Riviera Nayarit</li>';
      html += '<li class="currently">'+weather.currently+'</li>';
      html += '<li>'+weather.wind.direction+' '+weather.wind.speed+' '+weather.units.speed+'</li></ul>';
  
      $("#weather").html(html);
    },
    error: function(error) {
      $("#weather").html('<p>'+error+'</p>');
    }
  });
//});

//CONVOCATORIA

$('#btnConvocatoria').click(
  function () {
    $('.convocatoriaBtn').removeClass('active');
    $(this).addClass('active');
    $('#slidePrograma').css('display','none');
    $('#slideConvocatoria').css('display','block')
  }
);
$('#btnPrograma').click(
  function () {
    $('.convocatoriaBtn').removeClass('active');
    $(this).addClass('active');
    $('#slidePrograma').css('display','block');
    $('#slideConvocatoria').css('display','none')
  }
);

//INSCRIPCIONES

$('#btnSantander').click(
  function () {
    $('.inscripcionesBtn').removeClass('active');
    $(this).addClass('active');
    $('.contentInsc').css('display','none');
    $('#santanderContent').css('display','block')
  }
);
/*
$('#btnActiveW').click(
  function () {
    $('.inscripcionesBtn').removeClass('active');
    $(this).addClass('active');
    $('.contentInsc').css('display','none');
    $('#activeContent').css('display','block')
  }
);
*/
$('#btnInnova').click(
  function () {
    $('.inscripcionesBtn').removeClass('active');
    $(this).addClass('active');
    $('.contentInsc').css('display','none');
    $('#innovaContent').css('display','block')
  }
);

$('#btnPaypal').click(
  function () {
    $('.inscripcionesBtn').removeClass('active');
    $(this).addClass('active');
    $('.contentInsc').css('display','none');
    $('#paypalContent').css('display','block')
  }
);

//botones Mapa

$('#hidrataBtn').click(function() {
  map.setZoom(17);
  map.setCenter(new google.maps.LatLng(20.698195, -105.281926));
    infowindow.close();
});
$('#servMedBtn').click(function() {
  map.setZoom(14);
  map.setCenter(new google.maps.LatLng(20.698384, -105.296176));
    infowindow.close();
});


$(document).ready(function(){
    $("#santander-btn").click(function(){
        $("#myModal").modal();
    });
});

});

// cupones

$(function() {
  var $container = $('#container');
  $container.mixItUp();
  $("button.nofloat").click(function() {
    $container.find(".mix").css({
      "float": "none",
      "margin": "0 0 4px 0"
    });
    $container.find(".clear").css("clear", "none");
  });
  $("button.float").click(function() {
    $container.find(".mix").css({
      "float": "left",
      "margin": "0 4px 4px 0"
    });
    $container.find(".clear").css(
      "clear", "both");
  });
});


