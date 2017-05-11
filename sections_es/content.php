<div class="clearfix" id="top"></div><!-- ALTO DE NAVBAR-->
<!-- navbar -->
<nav class="navbar navbar-inverse navbar-fixed-top">
	<div class="container-fluid">
		<div class="container">
			<div class="navbar-header">
				<a href="#top" class="navbar-brand">
					<img src="images/slider/logo_21k_menu.png" alt="LOGO">
				</a>
			</div>
			<button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#mainNav" aria-expanded="true">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<ul class="nav navbar-nav list-inline" id="mainNav" data-spy="affix">
				<li><a href="#convocatoria21k" id="convocatoriaBtn">Convocatoria</a></li>
				<li><a href="#inscripciones">Inscripciones</a></li>
				<li><a href="#sponsors">Patrocinadores</a></li>
				<li><a href="#cupones-servicios">Cupones</a></li>
				<li><a href="#ubicacion" onClick="cargainfo(marker21,'location');" id="ubicacionBtn">Ruta</a></li>
				<li><a href="#galeria">Galería</a></li>
				<li><a href="#contacto">Contacto</a></li>
				<!-- <li><a href="javascript:void(0);">Tienda</a></li> -->
				<!-- <li><a href="javascript:void(0);">Contacto</a></li> -->

				<!-- <li class="divider pull-right"></li> -->
			</ul>
			<ul class="nav navbar-nav navbar-right">

				<!-- Idioma -->

				<li class="idioma">
					<a href="javascript:void(0);" class="flagIdioma" id="espanol">
						<img src="images/menu/lang_mx.png" alt="Español">
					</a>
				</li>
				<li class="idioma">
					<a href="javascript:void(0);" class="flagIdioma" id="ingles">
						<img src="images/menu/lang_eng.png" alt="Inglés">
					</a>
				</li>
				<li class="idioma">
					<a href="javascript:void(0);" class="flagIdioma" id="portugues">
						<img src="images/menu/lang_port.png" alt="Portugués">
					</a>
				</li>

				<!-- Redes -->

				<!-- <li class="redesBtn">
					<a href="javascript:void(0);" class="redesIcon" id="facebook">
						<i class="fa fa-facebook" aria-hidden="true"></i>
					</a>
				</li>
				<li class="redesBtn">
					<a href="javascript:void(0);" class="redesIcon" id="instagram">
						<i class="fa fa-instagram" aria-hidden="true"></i>
					</a>
				</li>
				<li class="redesBtn">
					<a href="javascript:void(0);" class="redesIcon" id="youtube">
						<i class="fa fa-youtube" aria-hidden="true"></i>
					</a>
				</li> -->

				<!-- KCHINK -->

				<!-- <li id="kchink-menu">
					<a href="javascript:void(0);">
						<img src="http://placehold.it/30x30?text=K" alt="k-chink">
					</a>
				</li> -->

			</ul>
		</div>
	</div>
</nav>
<!-- BLOCK -->
<header class="block">
<div class="container">
	<img src="images/slider/logo_21k_slider.png" alt="logo" id="mainLogo" class="img-responsive">	
	<!-- <a href="javascript:void(0);" class="ghostButton" id="llamanosBtn">Llámanos <i class="fa fa-phone" aria-hidden="true"></i></a> -->
	<div class="clearfix"></div>

	<div class="col-md-3 fooCol"></div>
	<div class="col-md-6 center-block">
		<img src="images/slider/riviera_nayarit.png" alt="Riviera Nayarit" class="pull-left hidden-xs">
		<img src="images/slider/visit_mexico.png" alt="Visit México" class="pull-right hidden-xs">		
	</div>
	<div class="col-md-3 fooCol"></div>
</div>

	<a href="javascript:void(0);" class="pull-right" id="iaaf-aims" target="_blank">
		<img src="images/slider/iaaf_aims.png" alt="IAAF/AIMS">
	</a>

</header>
<!-- mainslideshow -->
<section id="mainslideshow" class="container-fluid owl-corousel">
	<div>
        <img src="images/slider/01.jpg" alt="" class="visible-lg-block">
        <img src="images/slider/01s.jpg" alt="" class="hidden-lg"> 	
    </div>
    <div>
        <img src="images/slider/02.jpg" alt="" class="visible-lg-block">
        <img src="images/slider/02s.jpg" alt="" class="hidden-lg"> 	
    </div>
    <div>
        <img src="images/slider/03.jpg" alt="" class="visible-lg-block">
        <img src="images/slider/03s.jpg" alt="" class="hidden-lg"> 	
    </div>
    <div>
        <img src="images/slider/04.jpg" alt="" class="visible-lg-block">
        <img src="images/slider/04s.jpg" alt="" class="hidden-lg"> 	
    </div>
    <div>
        <img src="images/slider/05.jpg" alt="" class="visible-lg-block">
        <img src="images/slider/05s.jpg" alt="" class="hidden-lg"> 	
    </div>
</section>

<!-- widgets -->
<section id="widgets" class="container-fluid">
	<div class="col-md-6 weatherBg">
		<div class="widget pull-right" id="weatherWidget">
			<!-- Weather Channel -->
			<div id="weather"></div>
		</div>
	</div>
	<div class="col-md-6 counterBg">
		<div class="widget pull-left" id="CounterWidgetContainer">
			<!--00:00:00-->
			<p>Faltan:</p>
			<h2 id="CounterWidget"></h2>
			<p>
				<span>Para el disparo de Salida</span><br>
				<small>Fecha: 25 Noviembre 2017, 7:00 am</small><br>
				<small style="opacity:0.5;">*días:horas:minutos:segundos</small>
			</p>

			<script>
				// Set the date we're counting down to
				var countDownDate = new Date("Nov 25, 2017 07:00:00").getTime();

				// Update the count down every 1 second
				var x = setInterval(function() {

				    // Get todays date and time
				    var now = new Date().getTime();
				    
				    // Find the distance between now an the count down date
				    var distance = countDownDate - now;
				    
				    // Time calculations for days, hours, minutes and seconds
				    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
				    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
				    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
				    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
				    
				    // Output the result in an element with id="CounterWidget"
				    // document.getElementById("CounterWidget").innerHTML = days + "d " + hours + "h "
				    // + minutes + "m " + seconds + "s ";
				    document.getElementById("CounterWidget").innerHTML = days + "d:" + hours + "h:"
				    + minutes + "m:" + seconds + "s";
				    
				    // If the count down is over, write some text 
				    if (distance < 0) {
				        clearInterval(x);
				        document.getElementById("CounterWidget").innerHTML = "EXPIRED";
				    }
				}, 1000);
			</script>
			<img src="images/tomtom.png" alt="tom tom" id="tomtomImg" class="img-responsive center-block">
		</div>
	</div>
</section>

<!-- suscribe -->
<section id="suscribe" style="padding-top:30px;">
  <img src="images/fitness.png" class="img-responsive center-block" id="fitness_logo" alt="anytime fitness">
  <h1>Solicita información de: Paquetes, Hoteles, Tours.<br>
  <small>No spam.</small></h1>
  <hr class="dividerB">
  <hr class="dividerW">
  <form method="post" action="#suscribeSection" id="suscribeForm">
    <input type="text" id="email" name="email" value="<?php echo $msg?>" placeholder="Solicita información con tu e-mail aquí" />
    <button type="submit" class="btn btn-4 btn-4c icon-arrow-right" id="submitButton">Enviar</button>
  </form>
</section>

<!-- mainVideo -->
<section id="mainVideo" class="container-fluid">
  <div class="cover">
    <div class="hi">
      <span><i class="fa fa-volume-down" aria-hidden="true"></i></span>
      <em></em>
      <span><i class="fa fa-refresh" aria-hidden="true"></i></span>
      (<em>0</em>&nbsp;de&nbsp;<em>0</em>)
    </div>
  </div>
  <div class="tv">
    <div class="screen mute" id="tv"></div>
  </div>
</section>
<!-- convocatoria21k -->
<section id="convocatoria21k" class="container-fluid">
	<div class="col-md-8">




		<div class="container convocatoriaSlide">
			<div class="item">
1- PROGRAMA OFICIAL
Programa oficial Medio Maratón &amp; 10K Turístico Riviera Nayarit 2017
VIERNES 24 NOVIEMBRE: UNICO DÍA
De 09:00 a 21:30 horas.
Entrega de números, paquetes e información oficial. En Paradise Plaza. 
Avenida Paseo Cocoteros # 85 Sur.

*Sin excepción, no habrá entrega de Paquetes el día de la carrera.
				
			</div>
			<div class="item">

2- SÁBADO 25 DE NOVIEMBRE:
De 5:00 a 14:00 horas.	 Apertura estacionamiento en Centro Empresarial frente Hotel Hard Rock. 
De 6:15 a 10:15 horas.	Apertura de guardarropa.
De 6:15 a 6:45 horas.	Apertura zona de calentamiento.
De 6:30 a 6:40 horas.	Tomar su lugar en la línea de salida.
De 6:40 a 6:55 horas.	Honores a la Bandera e Himno Nacional. Banda de guerra de la Marina.
 
7:00 horas en punto.	Disparo de salida.
10:00 horas.			Cierre de la carrera.
10:00 horas.			Inicio de Premiación 10K después premiación 21K
12:00 horas.	 		Cierre del evento.

*Por seguridad, no se permitirá terminar la carrera a aquellas personas que no lleguen a la meta en las 3 horas que dura el evento.


			</div>
			</div>

<div class="container convocatoriaSlide">
				<div class="item">
					1- CONSERVIEXPRESS S. A. de C. V.

Invita a todos los corredores a participar en el “9° Medio Maratón Riviera Nayarit y 10K 2017”, que se llevará a cabo en los desarrollos turísticos Nuevo Vallarta, Flamingos y campo de golf El Tigre ubicados en la Riviera Nayarit, México.
				</div>
				<div class="item">
					2- BASES

Fecha: Sábado 25 de noviembre de 2017.
Hora: 7:00 horas. Hora centro de México.
Pruebas: Medio Maratón (21.0975 km). / 10 kilómetros.
Ruta: Medido y certificado por la Asociación Internacional de Maratones y Carreras de Distancia (AIMS).
				</div>
				<div class="item">
					3- CATEGORÍAS:

10 Kilómetros
Femenil: 18-39	40-44	45-49	50-54	55-59	60 y +
Varonil:  18-39	40-44	45-49	50-54	55-59	60-64	65 y +
 	 
MEDIO MARATÓN
Femenil: 18-39	40-44	45-49	50-54	55-59	60 y +
Varonil:  18-39	40-44	45-49	50-54	55-59	60-64	65 y +
				</div>
				<div class="item">
					4- PREMIACIÓN:
Premiación 10K:	 
Trofeo para los tres primeros lugares de cada rama y categoría.

Cuota de inscripción de  Medio Maratón y 10K:  
Etapa 1: 02 ene al 30 abr $500.00 pesos M. N. (Quinientos pesos 00/100 M. N.).
Etapa 2: 01 may al 31 oct $550.00 pesos M. N. (Quinientos cincuenta pesos 00/100 M. N.) 
Etapa 3: 01 nov al 19 nov $600.00 pesos M. N. (Seiscientos pesos 00/100 M. N.)

Notas: 
Por políticas de la empresa operadora, bajo ninguna circunstancia se rembolsará el monto de la inscripción.
La inscripción no es transferible.
				</div>
				<div class="item">
5- PRECIO MEDIO MARATÓN Y 10K:
Etapa 1: 02 enero al 30 abril $500.00 pesos M. N. (Quinientos pesos 00/100 M. N.).
Etapa 2: 01 mayo al 31 octubre $550.00 pesos M. N. (Quinientos cincuenta pesos 00/100 M. N.) 
Etapa 3: 01 noviembre al 19 noviembre $600.00 pesos M. N. (Seiscientos pesos 00/100 M. N.)

Nota: 
Por políticas de la empresa operadora, bajo ninguna circunstancia se rembolsará el monto de la inscripción.
				</div>
				<div class="item">
6- BENEFICIOS POR INSCRIPCIÓN:
1- Playera oficial del evento.
2- Medalla conmemorativa a todos los que terminen satisfactoriamente el recorrido.
3- Número de Competidor, deberá ser colocado en el pecho de la playera INDISPENSABLE PARA PODER PARTICIPAR.
4- Chip. INDISPENSABLE PARA PODER PARTICIPAR.
5- Hidratación a lo largo del recorrido.
6- Refrigerio en la zona de recuperación.
7- Resultados oficiales publicados en nuestra página de internet, a partir de las 13:00 horas.
8- Cronometrajes de tiempo parcial en el km. 10 y en la meta, con el sistema
”Time Ipico-sports”.
9- Certificado oficial de tiempo vía internet.


				</div>
				<div class="item">
7- ENTREGA DE KITS:
Para la entrega de Kits será necesario presentar la siguiente información:
• Comprobante de inscripción, (cada corredor recibirá un comprobante una vez que la inscripción se confirme mediante el pago de la misma).
• Formato de autorización de uso de imagen y deslinde de responsabilidad firmado.
• Comprobante de pago.
• Identificación oficial con fotografía que acredite ser el titular de la inscripción, sin excepción.
				</div>
</div>




		  
		</div>

	</div>
	<div class="col-md-4"></div><!-- empty column -->
	<img src="images/galeria/corredor.png" alt="" id="corredor">
	<img src="images/galeria/21k_text.png" alt="" id="k21">
	
</section>
<!-- inscripciones -->
<section id="inscripciones" class="container-fluid">
	
	<img src="images/galeria/10k_text.png" alt="" id="k10">
	<img src="images/galeria/corredora.png" alt="" id="corredora">
	<div class="col-md-4"></div><!-- empty column -->
	<div class="col-md-8">
		<h1>Inscripciones</h1>
		<hr class="ultraLight">
		<a href="http://google.com" target="_blank"><img src="images/inscripciones/santander_white.png" alt="Santander" class="logo"></a>
		<a href="javascript:void(0);" target="_blank"><img src="images/inscripciones/active_white.png" alt="Active" class="logo"></a>
		<a href="javascript:void(0);" target="_blank"><img src="images/inscripciones/innova_white.png" alt="Innova" class="logo"></a>
		<a href="javascript:void(0);" target="_blank"><img src="images/inscripciones/paypal_white.png" alt="Paypal" class="logo"></a>

		<hr class="ultraLight">

		

<div id="santanderContent">En banco Santander, depósito o transferencia SPEI:

Paso 1-  Realiza tu pago en la siguiente cuenta:
Banco: Santander 
Número de cuenta: 92001068047
Clabe: 014320920010680473 
Sucursal: 4707 Jardines de Guadalupe.
A nombre de: Conserviexpress, Convenciones y Servicios Express S. A. de C. V.
En referencia: Proporciona tu nombre completo al cajero.

Paso 2-  Llena la ficha de registro  Aquí   por cada corredor (llena todos los campos) que se inscriba y haz click en enviar.

Paso 3-  Espera nuestra respuesta por correo electrónico, en la cual te informaremos la confirmación de tú inscripción.
</div>

<div id="activeContent">
Active network

Visita e portal:  http://www.active.com

<a href="http://www.active.com/bah-a-de-banderas-nayarit/running/distance-running-races/half-marathon-riviera-nayarit-2017?int=" target="_blank">ir al portal</a>

</div>

<div id="innovaContent">
	
-Todas las tiendas Innovasport
http://sucursales.innovasport.com

Nombre / revisar info
Oficina:   01 (33) 3616-6428

</div>
<p>Paypal</p>
		<form action=""></form>


		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquid ex ea commodi consequat.</p>
		<p>Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint obcaecat cupiditat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	</div>
</section>
<!-- hoteles -->
<section id="hoteles" class="container-fluid">
<div class="parallaxParent" id="parallax1">
<div style="background-image: url(images/example_parallax_bg1.png);"></div>
</div>
	
	<div class="container">
		<div class="row">
			<ul id="hotelesGrid">
				<li>
					<img src="images/hoteles/marival.png" alt="" class="img-responsive hotel">
					<!-- <h3 class="label">Marival Resorts</h3> -->
				</li>
				<li>
					<img src="images/hoteles/hard_rock.png" alt="" class="img-responsive hotel">
					<!-- <h3 class="label">Hard Rock Hotel</h3> -->
				</li>
				<li>
					<img src="images/hoteles/paradise_village.png" alt="" class="img-responsive hotel">
					<!-- <h3 class="label">hotel 3</h3> -->
				</li>
				<li>
					<img src="images/hoteles/villa_varadero.png" alt="" class="img-responsive hotel">
					<!-- <h3 class="label">hotel 4</h3> -->
				</li>
				<li>
					<img src="images/hoteles/bel_air.png" alt="" class="img-responsive hotel">
					<!-- <h3 class="label">hotel 5</h3> -->
				</li>
				<li>
					<img src="images/hoteles/la_estancia.png" alt="" class="img-responsive hotel">
					<!-- <h3 class="label">hotel 6</h3> -->
				</li>
				<li>
					<img src="images/hoteles/flamingos.png" alt="" class="img-responsive hotel">
					<!-- <h3 class="label">hotel 7</h3> -->
				</li>
				<li>
					<img src="images/hoteles/hilton.png" alt="" class="img-responsive hotel">
					<!-- <h3 class="label">hotel 8</h3> -->
				</li>
				<li>
					<img src="images/hoteles/riu.png" alt="" class="img-responsive hotel">
					<!-- <h3 class="label">hotel 9</h3> -->
				</li>
			</ul>
		</div>
	</div>
</section>
<!-- sponsors -->
<section id="sponsors" class="container-fluid">
	<div class="container">
		<div class="row">
			<ul id="sponsorsGrid">
				<li>
					<img src="images/sponsors/powerade.jpg" alt="" class="img-responsive sponsor">
					<!-- <h3 class="label">Muestra</h3> -->
				</li>
				<li>
					<img src="images/sponsors/innova.jpg" alt="" class="img-responsive sponsor">
					<!-- <h3 class="label">sponsor 2</h3> -->
				</li>
				<li>
					<img src="images/sponsors/frogs.jpg" alt="" class="img-responsive sponsor">
					<!-- <h3 class="label">sponsor 3</h3> -->
				</li>
				<li>
					<img src="images/sponsors/anytime_fitness.jpg" alt="" class="img-responsive sponsor">
					<!-- <h3 class="label">sponsor 4</h3> -->
				</li>
				<li>
					<img src="images/sponsors/tomtom.jpg" alt="" class="img-responsive sponsor">
					<!-- <h3 class="label">sponsor 5</h3> -->
				</li>
				<li>
					<img src="images/sponsors/ciel.jpg" alt="" class="img-responsive sponsor">
					<!-- <h3 class="label">sponsor 6</h3> -->
				</li>
				<li>
					<img src="images/sponsors/paradise_village_convention.jpg" alt="" class="img-responsive sponsor">
					<!-- <h3 class="label">sponsor 7</h3> -->
				</li>
				<li>
					<img src="images/sponsors/paradise_village_plaza.jpg" alt="" class="img-responsive sponsor">
					<!-- <h3 class="label">sponsor 8</h3> -->
				</li>
				<li>
					<img src="images/sponsors/la_moderna.jpg" alt="" class="img-responsive sponsor">
					<!-- <h3 class="label">sponsor 9</h3> -->
				</li>
				<li>
					<img src="images/sponsors/vallarta_adventures.jpg" alt="" class="img-responsive sponsor">
					<!-- <h3 class="label">sponsor 10</h3> -->
				</li>
				<li>
					<img src="images/sponsors/centro_empresarial.jpg" alt="" class="img-responsive sponsor">
					<!-- <h3 <!-- class="label">sponsor 11</h3> -->
				</li>
				<li>
					<img src="images/sponsors/el_tigre_club_de_golf.jpg" alt="" class="img-responsive sponsor">
					<!-- <h3 class="label">sponsor 12</h3> -->
				</li>
				<li>
					<img src="http://placehold.it/600x600?text=tu+logo+AQUÍ" alt="" class="img-responsive sponsor">
					<h3 class="label">sponsor 13</h3>
				</li>
				<li>
					<img src="http://placehold.it/600x600?text=tu+logo+AQUÍ" alt="" class="img-responsive sponsor">
					<h3 class="label">sponsor 14</h3>
				</li>
				<li>
					<img src="http://placehold.it/600x600?text=tu+logo+AQUÍ" alt="" class="img-responsive sponsor">
					<h3 class="label">sponsor 15</h3>
				</li>
			</ul>
		</div>
	</div>
</section>
<!-- cupones-servicios -->
<section id="cupones-servicios" class="container-fluid">
	<div class="bigRedTitle">
		<h2 class="sr-only">Cupones y Servicios</h2>
		<img src="images/cupones/head.jpg" alt="Cupones y Servicios" class="img-responsive">
	</div>
	<div class="container">
		<div class="row">
			<ul class="sort list-inline center-block" id="filters">
				<li><a href="javascript:void(0);" class="categoria" id="cat1">Tours</a>&nbsp;|&nbsp;</li>
				<li><a href="javascript:void(0);" class="categoria" id="cat2">Restaurantes</a>&nbsp;|&nbsp;</li>
				<li><a href="javascript:void(0);" class="categoria" id="cat3">Renta de Autos</a>&nbsp;|&nbsp;</li>
				<li><a href="javascript:void(0);" class="categoria" id="cat4">Transportación</a><!-- &nbsp;|&nbsp; --></li>
			</ul>
			<hr class="ultraLight">
			<ul id="cupones-serviciosGrid">
				<li><img src="images/cupones/sample.jpg" alt="" class="img-responsive cupon"></li>
				<li><img src="http://placehold.it/600x600/ffffff/cccccc?text=cupon+2" alt="" class="img-responsive cupon"></li>
				<li><img src="http://placehold.it/600x600/ffffff/cccccc?text=cupon+3" alt="" class="img-responsive cupon"></li>
				<li><img src="http://placehold.it/600x600/ffffff/cccccc?text=cupon+4" alt="" class="img-responsive cupon"></li>
				<li><img src="http://placehold.it/600x600/ffffff/cccccc?text=cupon+5" alt="" class="img-responsive cupon"></li>
				<li><img src="http://placehold.it/600x600/ffffff/cccccc?text=cupon+6" alt="" class="img-responsive cupon"></li>
				<li><img src="http://placehold.it/600x600/ffffff/cccccc?text=cupon+7" alt="" class="img-responsive cupon"></li>
				<li><img src="http://placehold.it/600x600/ffffff/cccccc?text=cupon+8" alt="" class="img-responsive cupon"></li>
				<li><img src="http://placehold.it/600x600/ffffff/cccccc?text=cupon+9" alt="" class="img-responsive cupon"></li>
				<li><img src="http://placehold.it/600x600/ffffff/cccccc?text=cupon+10" alt="" class="img-responsive cupon"></li>
				<li><img src="http://placehold.it/600x600/ffffff/cccccc?text=cupon+11" alt="" class="img-responsive cupon"></li>
				<li><img src="http://placehold.it/600x600/ffffff/cccccc?text=cupon+12" alt="" class="img-responsive cupon"></li>
				<li><img src="http://placehold.it/600x600/ffffff/cccccc?text=cupon+13" alt="" class="img-responsive cupon"></li>
				<li><img src="http://placehold.it/600x600/ffffff/cccccc?text=cupon+14" alt="" class="img-responsive cupon"></li>
				<li><img src="http://placehold.it/600x600/ffffff/cccccc?text=cupon+15" alt="" class="img-responsive cupon"></li>
				<li><img src="http://placehold.it/600x600/ffffff/cccccc?text=cupon+16" alt="" class="img-responsive cupon"></li>
				<li><img src="http://placehold.it/600x600/ffffff/cccccc?text=cupon+17" alt="" class="img-responsive cupon"></li>
				<li><img src="http://placehold.it/600x600/ffffff/cccccc?text=cupon+18" alt="" class="img-responsive cupon"></li>
			</ul>
			<a href="javascript:void(0);" class="ghostButtonHome redBtn">
				<i class="fa fa-file-pdf-o" aria-hidden="true"></i> Cuponera 2017
			</a>
		</div>
	</div>
</section>
<!-- ubicacion -->
<section id="ubicacion" class="container-fluid">
	<div id="sidebarMap" class="col-md-3 hidden-sm">
		<h3 class="center-block">Ruta</h3>
		<hr class="ultraLight">
		<img src="images/map/powerade.png" alt="Tu Logo AQUÍ" class="center-block">
		<hr class="ultraLight">
		<a href="javascript:void(0);" onClick="cargainfo(marker21,'location');" class="sideBarMapBtn">Salida/Meta</a>
		<a href="javascript:void(0);" class="sideBarMapBtn">Puntos de Hidratación</a>
		<a href="javascript:void(0);" class="sideBarMapBtn">Servicios Médicos</a>
		<hr class="ultraLight">
		<a href="javascript:void(0);" class="ghostButtonHome">Ver en Google Maps</a>
		<!-- <a href="javascript:void(0);">link 4</a> -->
	</div>
	<div id="contemap" class="col-md-9 col-xs-12">
		<div id="map_canvas"></div>
	</div>
	<hr class="ultralight clearfix">
		

</section>
<!-- galeria -->
<section id="galeria" class="container-fluid">
	<div class="container">
		<div class="gallery">
			<div id="ri-grid" class="ri-grid ri-grid-size-3">
				<img src="http://www.placehold.it/" alt="" class="ri-loading-image">
				<ul class="gallery">
					<li><a href="images/galeria/sample.jpg"><img src="images/galeria/sample-thumb.jpg" alt=""></a></li>
					<li><a href="images/galeria/sample.jpg"><img src="http://placehold.it/600x600" alt=""></a></li>
					<li><a href="images/galeria/sample.jpg"><img src="http://placehold.it/600x600" alt=""></a></li>
					<li><a href="images/galeria/sample.jpg"><img src="http://placehold.it/600x600" alt=""></a></li>
					<li><a href="images/galeria/sample.jpg"><img src="http://placehold.it/600x600" alt=""></a></li>
					<li><a href="images/galeria/sample.jpg"><img src="http://placehold.it/600x600" alt=""></a></li>
					<li><a href="images/galeria/sample.jpg"><img src="http://placehold.it/600x600" alt=""></a></li>
					<li><a href="images/galeria/sample.jpg"><img src="http://placehold.it/600x600" alt=""></a></li>
					<li><a href="images/galeria/sample.jpg"><img src="http://placehold.it/600x600" alt=""></a></li>
					<li><a href="images/galeria/sample.jpg"><img src="http://placehold.it/600x600" alt=""></a></li>
					<li><a href="images/galeria/sample.jpg"><img src="http://placehold.it/600x600" alt=""></a></li>
					<li><a href="images/galeria/sample.jpg"><img src="http://placehold.it/600x600" alt=""></a></li>
					<li><a href="images/galeria/sample.jpg"><img src="http://placehold.it/600x600" alt=""></a></li>
					<li><a href="images/galeria/sample.jpg"><img src="http://placehold.it/600x600" alt=""></a></li>
					<li><a href="images/galeria/sample.jpg"><img src="http://placehold.it/600x600" alt=""></a></li>
					<li><a href="images/galeria/sample.jpg"><img src="http://placehold.it/600x600" alt=""></a></li>
					<li><a href="images/galeria/sample.jpg"><img src="http://placehold.it/600x600" alt=""></a></li>
					<li><a href="images/galeria/sample.jpg"><img src="http://placehold.it/600x600" alt=""></a></li>
					<li><a href="images/galeria/sample.jpg"><img src="http://placehold.it/600x600" alt=""></a></li>
					<li><a href="images/galeria/sample.jpg"><img src="http://placehold.it/600x600" alt=""></a></li>
					<li><a href="images/galeria/sample.jpg"><img src="http://placehold.it/600x600" alt=""></a></li>
					<li><a href="images/galeria/sample.jpg"><img src="http://placehold.it/600x600" alt=""></a></li>
					<li><a href="images/galeria/sample.jpg"><img src="http://placehold.it/600x600" alt=""></a></li>
					<li><a href="images/galeria/sample.jpg"><img src="http://placehold.it/600x600" alt=""></a></li>
					<li><a href="images/galeria/sample.jpg"><img src="http://placehold.it/600x600" alt=""></a></li>
				</ul>
			</div>
		</div>
	</div>
<!-- altimetria -->
<img src="images/pirma_water.png" alt="" id="altimetriaImg" class="img-responsive">





</section>

<!-- KCHINK -->
<section id="kchinkContainer">
	<div id="kchink" class="iframe"><!-- contenido de k-chink --></div>
</section>

<!-- score -->
<section id="score" class="container-fluid">
	<div class="container">
		<div class="col-md-6">
			<a href="javascript:void(0);" class="scoreLink">
				<img src="http://www.placehold.it/600x600?text=Score+2016" alt="" class="center-block scoreLogo img-responsive">
				<!-- <h3 class="label">Label 1</h3> -->
			</a>
		</div>
		<div class="col-md-6">
			<a href="javascript:void(0);" class="scoreLink">
				<img src="http://www.placehold.it/600x600?text=Score+2017" alt="" class="center-block scoreLogo img-responsive">
				<!-- <h3 class="label">Label 2</h3> -->
			</a>
		</div>
	</div>
</section>
<!-- contacto -->
<section id="contacto" class="container-fluid">
	<div class="container">
		<form action="" id="contactForm">
			<div class="field"><input type="text" placehold="Nombre"></div>
			<div class="field"><input type="text" placehold="e-mail"></div>
			<div class="field">
				<text-area placehold="comments"></text-area>
			</div>
		</form>
	</div>
	<!-- magia emmet (botones Gigantes): 
	div.bigBtns>(a-link.bigBTN#facebookBtn[target="_blank"]{facebook})+(a-link.bigBTN#instagramBtn[target="_blank"]{instagram})+(a-link.bigBTN#youtubeBtn[target="_blank"]{youtube})
	-->
	<div class="bigBtns">
		<a href="https://facebook.com/21KRivieraNayarit" class="bigBTN" id="facebookBtn" target="_blank">facebook</a>
		<a href="https://instagram.com/Mediomaratonrivieranayarit" class="bigBTN" id="instagramBtn" target="_blank">instagram</a>
		<a href="http://" class="bigBTN" id="youtubeBtn" target="_blank">youtube</a>
	</div>
</section>

<!-- Descripciones para el MAPA -->
<!-- SALIDA / META -->
<div class="location descripcionoculta">
    <div class="ventanidahtml">
        <div class="imagenventanitahtml">
          <img src="images/map/small_logo.jpg" style="max-width:300px;height:auto;" class="img-responsive center-block" />
        </div>
        <hr class="dividerB center-block">
  		<hr class="dividerW center-block">
        <div class="textoventanitahtml">
          <h3 class="rojo" align="center">SALIDA / META</h3>
          <p><?php echo($descripcion); ?></p>
    	</div>
 	</div> 
</div>
<!-- magia emmet (descripción de kilómetros):
(div.descripcionoculta.km-${kilómetro-$})*21
-->
<div class="descripcionoculta km1">kilómetro-1</div>
<div class="descripcionoculta km2">kilómetro-2</div>
<div class="descripcionoculta km3">kilómetro-3</div>
<div class="descripcionoculta km4">kilómetro-4</div>
<div class="descripcionoculta km5">kilómetro-5</div>
<div class="descripcionoculta km6">kilómetro-6</div>
<div class="descripcionoculta km7">kilómetro-7</div>
<div class="descripcionoculta km8">kilómetro-8</div>
<div class="descripcionoculta km9">kilómetro-9</div>
<div class="descripcionoculta km10">kilómetro-10</div>
<div class="descripcionoculta km11">kilómetro-11</div>
<div class="descripcionoculta km12">kilómetro-12</div>
<div class="descripcionoculta km13">kilómetro-13</div>
<div class="descripcionoculta km14">kilómetro-14</div>
<div class="descripcionoculta km15">kilómetro-15</div>
<div class="descripcionoculta km16">kilómetro-16</div>
<div class="descripcionoculta km17">kilómetro-17</div>
<div class="descripcionoculta km18">kilómetro-18</div>
<div class="descripcionoculta km19">kilómetro-19</div>
<div class="descripcionoculta km20">kilómetro-20</div>
<div class="descripcionoculta km21">kilómetro-21</div>
<!-- magia emmet (señalética):
(div.descripcionoculta.vuelta-derecha{Vuelta a la derecha})+(div.descripcionoculta.vuelta-glorieta{Vuelta a la glorieta})+(div.descripcionoculta.vuelta-u{Vuelta en U})+(div.descripcionoculta.retorno{Retorno})
-->
<div class="descripcionoculta vuelta-derecha">Vuelta a la derecha</div>
<div class="descripcionoculta vuelta-glorieta">Vuelta a la glorieta</div>
<div class="descripcionoculta vuelta-u">Vuelta en U</div>
<div class="descripcionoculta retorno">Retorno</div>
