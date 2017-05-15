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
    //smartSpeed:450,
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
    //autoPlay: 3000, //autoplay n 3 sec.

    autoplay: true,
                autoplayTimeout: 3000,
                autoplayHoverPause: true,
    
    // navText: [
    //     "<i class='fa fa-angle-left' aria-hidden='true'></i>",
    //     "<i class='fa fa-angle-right' aria-hidden='true'></i>"],


    });

    // $(".next").click(function() {
    //     owl.trigger('owl.next');
    // })
    // $(".prev").click(function() {
    //     owl.trigger('owl.prev');
    // })


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


//ScrollMagic!!!!!


// init controller
var controller = new ScrollMagic.Controller({globalSceneOptions: {triggerHook: "onEnter", duration: "200%"}});

/*new ScrollMagic.Scene({triggerElement: "#parallax1"})
        .setTween("#parallax1 > div", {y: "80%", ease: Linear.easeNone})
        .addTo(controller);*/
//Cambio de Clases para menú:
//convocatoria          
new ScrollMagic.Scene({triggerElement: "#convocatoria"})
          .setClassToggle("#convocatoriaBtn", "current") // add class toggle
          .addTo(controller);
//inscripciones          
new ScrollMagic.Scene({triggerElement: "#inscripciones"})
          .setClassToggle("#inscripcionesBtn", "current") // add class toggle
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


// v3.1.0
//Docs at http://simpleweatherjs.com
//$(document).ready(function() {
  $.simpleWeather({
    location: 'Puerto Vallarta, JA, Mexico',
    woeid: '',
    unit: 'c',
    success: function(weather) {
      html = '<h2><i class="icon-'+weather.code+'"></i> '+weather.temp+'&deg;'+weather.units.temp+'</h2>';
      html += '<ul><li>'+weather.city+', '+weather.region+'</li>';
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

// 
// 
// 
// 

$('#btnSantander').click(
  function () {
    $('.inscripcionesBtn').removeClass('active');
    $(this).addClass('active');
    $('.contentInsc').css('display','none');
    $('#santanderContent').css('display','block')
  }
);

$('#btnActiveW').click(
  function () {
    $('.inscripcionesBtn').removeClass('active');
    $(this).addClass('active');
    $('.contentInsc').css('display','none');
    $('#activeContent').css('display','block')
  }
);

$('#btnInnova').click(
  function () {
    $('.inscripcionesBtn').removeClass('active');
    $(this).addClass('active');
    $('.contentInscs').css('display','none');
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

});



