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
			<div id="mainNav" class="navbar-collapse collapse">
				<ul class="nav navbar-nav list-inline">
					<li><a href="#convocatoria" id="convocatoriaBtn">Convocatoria</a></li>
					<li><a href="#inscripciones" id="inscripcionesBtn">Inscripciones</a></li>
					<li><a href="#hoteles" id="hotelesBtn">Hoteles</a></li>
					<li><a href="#patrocinadores" id="patrocinadoresBtn">Patrocinadores</a></li>
					<li><a href="#cupones-servicios" id="cupones-serviciosBtn">Cupones</a></li>
					<li><a href="#ubicacion" onClick="cargainfo(marker21,'location');" id="ubicacionBtn">Ruta</a></li>
					<!-- <li><a href="#galeria" id="galeriaBtn">Galería</a></li> -->
					<li><a href="#contacto" id="contactoBtn">Contacto</a></li>
					<!-- <li><a href="javascript:void(0);">Tienda</a></li> -->
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
	</div>
</nav>
<!-- BLOCK -->
<header class="block">
<div class="container">
	<img src="images/slider/logo_21k_slider.png" alt="logo" id="mainLogo" class="img-responsive animated pulse">	
	<!-- <a href="javascript:void(0);" class="ghostButton" id="llamanosBtn">Llámanos <i class="fa fa-phone" aria-hidden="true"></i></a> -->
	<div class="clearfix"></div>

	<div class="col-md-3 fooCol"></div>
	<div class="col-md-6 center-block">
		<img src="images/slider/riviera_nayarit.png" alt="Riviera Nayarit" class="pull-left hidden-xs animated fadeIn">
		<img src="images/slider/visit_mexico.png" alt="Visit México" class="pull-right hidden-xs animated fadeIn">		
	</div>
	<div class="col-md-3 fooCol"></div>
</div>

	<a href="http://distancerunning.co.uk/races/10000.html" class="pull-right" id="iaaf-aims" target="_blank">
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
			<!-- weather -->
			<div id="weather"></div>
		</div>
	</div>
	<div class="col-md-6 counterBg">
		<div class="widget pull-left" id="CounterWidgetContainer">
			<!--00:00:00-->
			<p>Faltan:</p>
			<h2 id="CounterWidget"></h2>
			<p>
				<small>* días:horas:minutos:segundos</small><br>
				<span>Para el disparo de Salida</span><br>
				<small>25 Noviembre 2017, 7:00 am</small>				
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
				    document.getElementById("CounterWidget").innerHTML = days + ":" + hours + ":"
				    + minutes + ":" + seconds + "*";
				    
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
<!-- convocatoria -->

<section id="convocatoria" class="container-fluid">
	<div class="col-md-9">
		<h1 class="whiteTxt">Convocatoria</h1>
		<hr class="ultraLight">
		<div class="group-btns" id="convocatoriaControls">
			<a href="javascript:void(0);" class="btn convocatoriaBtn active" id="btnConvocatoria">Convocatoria</a>
			<a href="javascript:void(0);" class="btn convocatoriaBtn" id="btnPrograma">Programa Oficial</a>
		</div>
		<hr class="ultraLight">

		<div class="container convocatoriaSlide animated fadeIn" id="slidePrograma" style="display:none;">
			<div class="item">
				<div class="short center-block">
					<h3>1- PROGRAMA OFICIAL</h3>
					<p>Programa oficial Medio Maratón &amp; 10K Turístico Riviera Nayarit 2017<br>
					VIERNES 24 NOVIEMBRE: UNICO DÍA<br>
					De 09:00 a 21:30 horas.<br>
					Entrega de números, paquetes e información oficial. En Paradise Plaza.<br>
					Avenida Paseo Cocoteros # 85 Sur.<br>
					<br>
					*Sin excepción, no habrá entrega de Paquetes el día de la carrera.</p>
				</div>
			</div>
			<div class="item">
				<div class="short center-block">
					<h3>2- SÁBADO 25 DE NOVIEMBRE:</h3>
					<p>
					De 5:00 a 14:00 horas.&emsp;Apertura estacionamiento en Centro Empresarial frente Hotel Hard Rock.<br> 
					De 6:15 a 10:15 horas.&emsp;Apertura de guardarropa.<br>
					De 6:15 a 6:45 horas.&emsp;Apertura zona de calentamiento.<br>
					De 6:30 a 6:40 horas.&emsp;Tomar su lugar en la línea de salida.<br>
					De 6:40 a 6:55 horas.&emsp;Honores a la Bandera e Himno Nacional. Banda de guerra de la Marina.<br>
					<br>
					7:00 horas en punto.&emsp;Disparo de salida.<br>
					10:00 horas.&emsp;Cierre de la carrera.<br>
					10:00 horas.&emsp;Inicio de Premiación 10K después premiación 21K<br>
					12:00 horas.&emsp;Cierre del evento.<br>
					</p>
					<p>
					*Por seguridad, no se permitirá terminar la carrera a aquellas personas que no lleguen a la meta en las 3 horas que dura el evento.</p>
				</div>
			</div>
		</div>

		<div class="container convocatoriaSlide animated fadeIn" id="slideConvocatoria">
			<div class="item">
				<div class="short center-block">
					<h3>1- CONSERVIEXPRESS S. A. de C. V.</h3>
					<p>Invita a todos los corredores a participar en el “9° Medio Maratón Riviera Nayarit y 10K 2017”, que se llevará a cabo en los desarrollos turísticos Nuevo Vallarta, Flamingos y campo de golf El Tigre ubicados en la Riviera Nayarit, México.</p>
				</div>
			</div>
			<div class="item">
				<div class="short center-block">
					<h3>2- BASES</h3>
					<p>
						<strong>Fecha:</strong> Sábado 25 de noviembre de 2017.<br>
						<strong>Hora:</strong> 7:00 horas. Hora centro de México.<br>
						<strong>Pruebas:</strong> Medio Maratón (21.0975 km). / 10 kilómetros.<br>
						<strong>Ruta:</strong> Medido y certificado por la Asociación Internacional de Maratones y Carreras de Distancia (AIMS).
					</p>
				</div>
			</div>
			<div class="item">
				<div class="short center-block">
					<h3>3- CATEGORÍAS:</h3>
					<p>
						<strong>10 Kilómetros</strong><br>
						Femenil:&emsp;18-39&emsp;40-44&emsp;45-49&emsp;50-54&emsp;55-59&emsp;60 y +<br>
						Varonil:&emsp;18-39&emsp;40-44&emsp;45-49&emsp;50-54&emsp;55-59&emsp;60-64&emsp;65 y +
					</p>

					<p>
						<strong>MEDIO MARATÓN</strong><br>
						Femenil:&emsp;18-39&emsp;40-44&emsp;45-49&emsp;50-54&emsp;55-59&emsp;60 y +<br>
						Varonil:&emsp;18-39&emsp;40-44&emsp;45-49&emsp;50-54&emsp;55-59&emsp;60-64&emsp;65 y +
					</p>
				</div>
			</div>
			<div class="item">
				<div class="short center-block">
					<h3>4- PREMIACIÓN:</h3>
					<p>Premiación 10K:	Trofeo para los tres primeros lugares de cada rama y categoría.</p>
					<p>Cuota de inscripción de  Medio Maratón y 10K:</p>
					<ul>			  
						<li><strong>Etapa 1:</strong> 02 ene al 30 abr $500.00 pesos M. N. (Quinientos pesos 00/100 M. N.).</li>
						<li><strong>Etapa 2:</strong> 01 may al 31 oct $550.00 pesos M. N. (Quinientos cincuenta pesos 00/100 M. N.)</li> 
						<li><strong>Etapa 3:</strong> 01 nov al 19 nov $600.00 pesos M. N. (Seiscientos pesos 00/100 M. N.)</li>
					</ul>
					<p><strong>Notas:</strong></p>
					<ul>
						<li>Por políticas de la empresa operadora, bajo ninguna circunstancia se rembolsará el monto de la inscripción.</li>
						<li>La inscripción no es transferible.</li>
					</ul>
				</div>			
			</div>
			<div class="item">
				<div class="short center-block">
					<h3>5- PRECIO MEDIO MARATÓN Y 10K:</h3>
					<ul>
						<li><strong>Etapa 1:</strong></srt> 02 enero al 30 abril $500.00 pesos M. N. (Quinientos pesos 00/100 M. N.).</li>
						<li><strong>Etapa 2:</strong></srt> 01 mayo al 31 octubre $550.00 pesos M. N. (Quinientos cincuenta pesos 00/100 M. N.)</li> 
						<li><strong>Etapa 3:</strong></srt> 01 noviembre al 19 noviembre $600.00 pesos M. N. (Seiscientos pesos 00/100 M. N.)</li>
					</ul>
					<br>
					<p><strong>Nota:</strong> Por políticas de la empresa operadora, bajo ninguna circunstancia se rembolsará el monto de la inscripción.</p>
				</div>
			</div>
			<div class="item">
				<div class="short center-block">
					<h3>6- BENEFICIOS POR INSCRIPCIÓN:</h3>
					<ol>
						<li>Playera oficial del evento.</li>
						<li>Medalla conmemorativa a todos los que terminen satisfactoriamente el recorrido.</li>
						<li>Número de Competidor, deberá ser colocado en el pecho de la playera INDISPENSABLE PARA PODER PARTICIPAR.</li>
						<li>Chip. INDISPENSABLE PARA PODER PARTICIPAR.</li>
						<li>Hidratación a lo largo del recorrido.</li>
						<li>Refrigerio en la zona de recuperación.</li>
						<li>Resultados oficiales publicados en nuestra página de internet, a partir de las 13:00 horas.</li>
						<li>Cronometrajes de tiempo parcial en el km. 10 y en la meta, con el sistema ”Time Ipico-sports”.</li>
						<li>Certificado oficial de tiempo vía internet.</li>
					</ol>
				</div>


			</div>
			<div class="item">
				<div class="short center-block">
					<h3>7- ENTREGA DE KITS:</h3>
					<p>Para la entrega de Kits será necesario presentar la siguiente información:</p>
					<ul class="list-group">
						<li>Comprobante de inscripción, (cada corredor recibirá un comprobante una vez que la inscripción se confirme mediante el pago de la misma).</li>
						<li>Formato de autorización de uso de imagen y deslinde de responsabilidad firmado.</li>
						<li>Comprobante de pago.</li>
						<li>Identificación oficial con fotografía que acredite ser el titular de la inscripción, sin excepción.</li>
					</ul>
				</div>				
			</div>
		</div>		  
	</div>
	<div class="col-md-3"></div><!-- empty column -->
	<img src="images/galeria/corredor.png" id="corredor">
	<img src="images/galeria/21k_text.png" id="k21">
	
</section>
<!-- inscripciones -->
<section id="inscripciones" class="container-fluid">
	
	<img src="images/galeria/10k_text.png" alt="" id="k10">
	<img src="images/galeria/corredora.png" alt="" id="corredora">
	<div class="col-md-3"></div><!-- empty column -->
	<div class="col-md-8 pull-right">
		<h1 class="whiteTxt">Inscripciones</h1>
		<hr class="ultraLight">

		<div class="group-btns" id="inscripcionesControls">
			<a href="javascript:void(0);" class="btn inscripcionesBtn" id="btnSantander">
				<img src="images/inscripciones/santander_white.png" alt="Santander" class="logo">
			</a>
			<a href="http://www.active.com/bah-a-de-banderas-nayarit/running/distance-running-races/half-marathon-riviera-nayarit-2017?int=" target="_blank" class="btn inscripcionesBtn" id="btnActiveW">
				<img src="images/inscripciones/active_white.png" alt="Active" class="logo">
			</a>
			<a href="javascript:void(0);" class="btn inscripcionesBtn" id="btnInnova">
				<img src="images/inscripciones/innova_white.png" alt="Innova" class="logo">
			</a>
			<a href="javascript:void(0);" class="btn inscripcionesBtn" id="btnPaypal">
				<img src="images/inscripciones/paypal_white.png" alt="Paypal" class="logo">
			</a>
		</div>

		<hr class="ultraLight">

		<div id="santanderContent" style="display:none;" class="contentInsc animated fadeIn">
			<div class="short center-block">
				<h3>En banco Santander, depósito o transferencia SPEI:</h3>
				<ul>
					<li>
						Paso 1-  Realiza tu pago en la siguiente cuenta:<br>
						<strong>Banco:</strong> Santander<br>
						<strong>Número de cuenta:</strong> 92001068047<br>
						<strong>Clabe:</strong> 014320920010680473<br> 
						<strong>Sucursal:</strong> 4707 Jardines de Guadalupe.<br>
						<strong>A nombre de:</strong> Conserviexpress, Convenciones y Servicios Express S. A. de C. V.<br>
						<strong>En referencia:</strong> Proporciona tu nombre completo al cajero.
					</li>
					<li>Paso 2-  Llena la ficha de registro Aquí por cada corredor (llena todos los campos) que se inscriba y haz click en enviar.</li>

					<li>Paso 3-  Espera nuestra respuesta por correo electrónico, en la cual te informaremos la confirmación de tú inscripción.</li>
				</ul>
			</div>
		</div>
		<!--Éstes se quitó y va el link directo-->
		<!--
		<div id="activeContent" style="display:none;" class="contentInsc animated fadeIn">
			<div class="short center-block">
				<p>Active network<br>
				Visita el siguiente link al portal Active Network y sigue las instrucciones:<br>
				<br>
				<a href="http://www.active.com/bah-a-de-banderas-nayarit/running/distance-running-races/half-marathon-riviera-nayarit-2017?int=" target="_blank" class="btn center-block">ir al portal</a>
				</p>
			</div>
		</div>
		-->
		<div id="innovaContent" style="display:none;" class="contentInsc animated fadeIn">
			<div class="short center-block" align="center">
				<p>Todas las tiendas Innovasport:<br>
				<a href="http://sucursales.innovasport.com" target="_blank" class="btn center-block">Ver Tiendas</a></p>
				<p>Nombre / revisar info</p>
				<p><i class="fa fa-phone" aria-hidden="true"></i><span>Oficina:   01 (33) 3616-6428</span></p>
			</div>
		</div>

		<div id="paypalContent" style="display:none;" class="contentInsc animated fadeIn">
			<div class="short center-block">
				<p>Paypal</p>
			<!-- FORM sample -->
				<form id="paypalForm">
					<div class="form-group">
						<label for="namePaypal">Nombre</label>
						<input type="name" class="form-control required" id="namePaypal" placeholder="Nombre">
					</div>
					<div class="form-group">
						<label for="mailPaypal">Email</label>
						<input type="email" class="form-control required email" id="mailPaypal" placeholder="Email">
					</div>
					<div class="form-group col-xs-6" style="padding-left:0;">
						<label for="-Paypal">Test</label>
						<input type="-" class="form-control " id="-Paypal" placeholder="Test">
					</div>
					<div class="form-group col-xs-6" style="padding-right:0;">
						<label for="-Paypal">Test</label>
						<input type="-" class="form-control " id="-Paypal" placeholder="Test">
					</div>
					<div class="form-group">
						<label for="-Paypal">Test</label>
						<input type="-" class="form-control " id="-Paypal" placeholder="Test">
					</div>
					<hr class="ultraLight">					
					<div class="checkbox">
						<label>
							<input type="checkbox"> Check me out
						</label>
					</div>
					<hr class="ultraLight">
					<button type="submit" class="btn btn-default" id="submitPaypal">Submit</button>
				</form>
			</div>
		</div>

</section>
<!-- hoteles -->
<section id="hoteles" class="container-fluid">

	<div class="container">
		<div class="row">
			<h2 class="whiteTxt" align="center">Hoteles</h2>
			<hr class="ultraLight">
			<ul id="hotelesGrid">
				<li class="hotel item">
					<a href="http://www.marival.com.mx/" target="_blank" class="linkHotel">
						<img src="images/hoteles/marival.jpg" alt="Marival Hotel" class="img-responsive">
						<h4 class="codigo-hotel" align="center"><small>Código:</small><br> [pendiente] </h4>
					</a>
					
				</li>
				<li class="hotel item">
					<a href="http://es.hrhvallarta.com/" target="_blank" class="linkHotel">
						<img src="images/hoteles/hard_rock.jpg" alt="Hard Rock Hotel" class="img-responsive">
						<h4 class="codigo-hotel" align="center"><small>Código:</small><br> [pendiente] </h4>
					</a>
					
				</li>
				<li class="hotel item">
					<a href="http://paradisevillage.com.mx" target="_blank" class="linkHotel">
						<img src="images/hoteles/paradise_village.jpg" alt="Paradise Village Hotel" class="img-responsive">
						<h4 class="codigo-hotel" align="center"><small>Código:</small><br> [pendiente] </h4>
					</a>
					
				</li>
				<li class="hotel item">
					<a href="http://www.hotelvillavaradero.com/esp" target="_blank" class="linkHotel">
						<img src="images/hoteles/villa_varadero.jpg" alt="Villa Varadero Hotel" class="img-responsive">
						<h4 class="codigo-hotel" align="center"><small>Código:</small><br> [pendiente] </h4>
					</a>
					
				</li>
				<li class="hotel item">
					<a href="http://www.belairvallarta.com/" target="_blank" class="linkHotel">
						<img src="images/hoteles/bel_air.jpg" alt="Bel Air Hotel" class="img-responsive">
						<h4 class="codigo-hotel" align="center"><small>Código:</small><br> [pendiente] </h4>
					</a>
					
				</li>
				<li class="hotel item">
					<a href="http://www.villalaestancia.com/riviera-nayarit" target="_blank" class="linkHotel">
						<img src="images/hoteles/la_estancia.jpg" alt="Villa la Estancia Hotel" class="img-responsive">
						<h4 class="codigo-hotel" align="center"><small>Código:</small><br> [pendiente] </h4>
					</a>
					
				</li>
				<li class="hotel item">
					<a href="http://nopall.com" target="_blank" class="linkHotel">
						<img src="images/hoteles/flamingos.jpg" alt="Villa del Palmar Flamingos Hotel" class="img-responsive">
						<h4 class="codigo-hotel" align="center"><small>Código:</small><br> [pendiente] </h4>
					</a>
					
				</li>
				<li class="hotel item">
					<a href="http://www.hiltonhotels.com/es_XM/mexico/" target="_blank" class="linkHotel">
						<img src="images/hoteles/hilton.jpg" alt="Hilton Hotel" class="img-responsive">
						<h4 class="codigo-hotel" align="center"><small>Código:</small><br> [pendiente] </h4>
					</a>
					
				</li>
				<li class="hotel item">
					<a href="http://www.krystalvallartaresort.com/" target="_blank" class="linkHotel">
						<img src="images/hoteles/kristal.jpg" alt="Kristal Hotel" class="img-responsive">
						<h4 class="codigo-hotel" align="center"><small>Código:</small><br> [pendiente] </h4>
					</a>
					
				</li>
				<li class="hotel item">
					<a href="http://www.riu.com/consultar-disponibilidad/" target="_blank" class="linkHotel">
						<img src="images/hoteles/riu_jalisco.jpg" alt="Rie Jalisco Hotel" class="img-responsive">
						<h4 class="codigo-hotel" align="center"><small>Código:</small><br> [pendiente] </h4>
					</a>
					
				</li>
				<li class="hotel item">
					<a href="http://www.riu.com/consultar-disponibilidad/" target="_blank" class="linkHotel">
						<img src="images/hoteles/riu_palace.jpg" alt="Riu Palace Hotel" class="img-responsive">
						<h4 class="codigo-hotel" align="center"><small>Código:</small><br> [pendiente] </h4>
					</a>
					
				</li>
				<li class="hotel item">
					<a href="http://www.riu.com/consultar-disponibilidad/" target="_blank" class="linkHotel">
						<img src="images/hoteles/riu_vallarta.jpg" alt="Riu Vallarta Hotel" class="img-responsive">
						<h4 class="codigo-hotel" align="center"><small>Código:</small><br> [pendiente] </h4>
					</a>
					
				</li>
			</ul>
		</div>
	</div>


</section>
<!-- sponsors -->
<section id="patrocinadores" class="container-fluid">
	<div style="padding:30px 0;background-color:#00aeff">
		<!-- <h2 class="sr-only">Cupones y Servicios</h2>
		<img src="images/cupones/head.jpg" alt="Cupones y Servicios" class="img-responsive"> -->
		<h3 class="whiteTxt" align="center">Patrocinadores</h3>
	</div>
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
					<!-- <h3 class="label">sponsor 11</h3> -->
				</li>
				<li>
					<img src="images/sponsors/el_tigre_club_de_golf.jpg" alt="" class="img-responsive sponsor">
					<!-- <h3 class="label">sponsor 12</h3> -->
				</li>
				<li>
					<img src="images/sponsors/ut.jpg" alt="" class="img-responsive sponsor">
					<!-- <h3 class="label">sponsor 13</h3> -->
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
	<div class="bigRedTitle" style="padding:30px 0;">
		<!-- <h2 class="sr-only">Cupones y Servicios</h2>
		<img src="images/cupones/head.jpg" alt="Cupones y Servicios" class="img-responsive"> -->
		<h3 class="whiteTxt" align="center">Cupones y Servicios</h3>
	</div>
	
	<hr class="ultraLight">
	<div class="container">
		<div class="row">
			<ul class="sort list-inline center-block" id="filters">
				<li><a href="javascript:void(0);" class="categoria" id="cat0" class="current">Todos</a></li>&nbsp;|&nbsp;
				<li><a href="javascript:void(0);" class="categoria" id="cat1">Tours</a></li>&nbsp;|&nbsp;
				<li><a href="javascript:void(0);" class="categoria" id="cat2">Restaurantes</a></li>&nbsp;|&nbsp;
				<li><a href="javascript:void(0);" class="categoria" id="cat3">Renta de Autos</a></li>&nbsp;|&nbsp;
				<li><a href="javascript:void(0);" class="categoria" id="cat4">Transportación</a></li>
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
			<a href="pdf/21k_cupones_descuentos.pdf" target="_blank" class="ghostButtonHome redBtn">
				<i class="fa fa-file-pdf-o" aria-hidden="true"></i> Cuponera 2017
			</a>
		</div>
	</div>
</section>
<!-- ubicacion -->
<section id="ubicacion" class="container-fluid">
	<div id="sidebarMap" class="col-md-3 hidden-xs">
		<h3 class="whiteTxt" align="center">Ruta</h3>
		<hr class="ultraLight">
		<img src="images/map/powerade.png" alt="Tu Logo AQUÍ" class="center-block">
		<hr class="ultraLight">
		<a href="javascript:void(0);" onClick="cargainfo(marker21,'location');" class="sideBarMapBtn">Salida/Meta</a>
		<a href="javascript:void(0);" class="sideBarMapBtn" id="hidrataBtn">Puntos de Hidratación</a>
		<a href="javascript:void(0);" class="sideBarMapBtn" id="servMedBtn">Servicios Médicos</a>
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

		<h3 class="whiteTxt" align="center">Galería</h3>
		<hr class="ultraLight">
		
		<div class="gallery">
			<div id="ri-grid" class="ri-grid ri-grid-size-3">
				<img src="" alt="" class="ri-loading-image">
				<ul class="gallery">
					<li><a href="images/galeria/sample1.jpg"><img src="images/galeria/sample-thumb1.jpg" alt=""></a></li>
					<li><a href="images/galeria/sample2.jpg"><img src="images/galeria/sample-thumb2.jpg" alt=""></a></li>
					<li><a href="images/galeria/sample3.jpg"><img src="images/galeria/sample-thumb3.jpg" alt=""></a></li>
					<li><a href="images/galeria/sample4.jpg"><img src="images/galeria/sample-thumb4.jpg" alt=""></a></li>
					<li><a href="images/galeria/sample5.jpg"><img src="images/galeria/sample-thumb5.jpg" alt=""></a></li>
					<li><a href="images/galeria/sample6.jpg"><img src="images/galeria/sample-thumb6.jpg" alt=""></a></li>
					<li><a href="images/galeria/sample7.jpg"><img src="images/galeria/sample-thumb7.jpg" alt=""></a></li>
					<li><a href="images/galeria/sample8.jpg"><img src="images/galeria/sample-thumb8.jpg" alt=""></a></li>
					<li><a href="images/galeria/sample9.jpg"><img src="images/galeria/sample-thumb9.jpg" alt=""></a></li>
					<li><a href="images/galeria/sample10.jpg"><img src="images/galeria/sample-thumb10.jpg" alt=""></a></li>
					<li><a href="images/galeria/sample11.jpg"><img src="images/galeria/sample-thumb11.jpg" alt=""></a></li>
					<li><a href="images/galeria/sample12.jpg"><img src="images/galeria/sample-thumb12.jpg" alt=""></a></li>
					<li><a href="images/galeria/sample13.jpg"><img src="images/galeria/sample-thumb13.jpg" alt=""></a></li>
					<li><a href="images/galeria/sample14.jpg"><img src="images/galeria/sample-thumb14.jpg" alt=""></a></li>
					<li><a href="images/galeria/sample15.jpg"><img src="images/galeria/sample-thumb15.jpg" alt=""></a></li>
					<li><a href="images/galeria/sample16.jpg"><img src="images/galeria/sample-thumb16.jpg" alt=""></a></li>
					<li><a href="images/galeria/sample17.jpg"><img src="images/galeria/sample-thumb17.jpg" alt=""></a></li>
					<li><a href="images/galeria/sample18.jpg"><img src="images/galeria/sample-thumb18.jpg" alt=""></a></li>
					<li><a href="images/galeria/sample19.jpg"><img src="images/galeria/sample-thumb19.jpg" alt=""></a></li>
					<li><a href="images/galeria/sample20.jpg"><img src="images/galeria/sample-thumb20.jpg" alt=""></a></li>
					<li><a href="images/galeria/sample21.jpg"><img src="images/galeria/sample-thumb21.jpg" alt=""></a></li>
					<li><a href="images/galeria/sample22.jpg"><img src="images/galeria/sample-thumb22.jpg" alt=""></a></li>
					<li><a href="images/galeria/sample23.jpg"><img src="images/galeria/sample-thumb23.jpg" alt=""></a></li>
					<li><a href="images/galeria/sample24.jpg"><img src="images/galeria/sample-thumb24.jpg" alt=""></a></li>
					<li><a href="images/galeria/sample25.jpg"><img src="images/galeria/sample-thumb25.jpg" alt=""></a></li>
				</ul>
			</div>
		</div>
	</div>
<!-- altimetria -->
<h3 class="whiteTxt" align="center">Altimetría</h3>
<hr class="ultraLight">

<img src="images/pirma_water.png" alt="" id="altimetriaImg" class="img-responsive">

</section>

<!-- LENGUAJES -->

<section id="lenguajes" class="container-fluid">
	<div class="col-md-6 interlingua">
		<a href="http://www.interlingua.com.mx/" target="_blank" class="center-block">
			<img src="images/interlingua.png" alt="" class="img-responsive" id="logo-interlingua">
		</a>
	</div>
	<div class="col-md-6 alianzaFr">
		<a href="http://alianzafrancesagdl.mx/" target="_blank" class="center-block">
			<img src="images/alianzafr.png" alt="" class="img-responsive" id="logo-alianzaFr">
		</a>
	</div>
</section>

<!-- KCHINK -->
<section id="kchinkContainer" class="container-fluid">
	<!-- <div id="kchink" class="iframe">contenido de k-chink</div> -->
	<!-- <img src="images/sample-kichink.jpg" alt="muestra kichink" class="img-responsive"> -->
	<!-- <iframe src="https://www.kichink.com/stores/id/72509" width="100%" height="100%" frameborder="0"></iframe> -->
<iframe src="https://www.kichink.com/stores/id/72509" width="100%" height="100%" frameborder="0">
<div style="width:300px; margin:40% auto; font-size:20px;"> Si puedes ver éste mensaje, es porque tu navegador no permite mostrar la tienda en esta área; clic <a href="https://www.kichink.com/stores/id/72509" target="_blank">aquí</a>para abrirla en una nueva ventana.</div> </iframe>

</section>
<section class="container-fluid" id="botonzotes">
<!-- magia emmet (botones Gigantes): 
	div.bigBtns>(a-link.bigBTN#facebookBtn[target="_blank"]{facebook})+(a-link.bigBTN#instagramBtn[target="_blank"]{instagram})+(a-link.bigBTN#youtubeBtn[target="_blank"]{youtube})
	-->
	<div class="bigBtns">
		<a href="https://facebook.com/21KRivieraNayarit" class="bigBTN" id="facebookBtn" target="_blank">facebook</a>
		<a href="https://instagram.com/Mediomaratonrivieranayarit" class="bigBTN" id="instagramBtn" target="_blank">instagram</a>
		<a href="https://www.youtube.com/channel/UCI1cK7BHlh_3PTa0MspJF4A" class="bigBTN" id="youtubeBtn" target="_blank">youtube</a>
	</div>
</section>

<!-- contacto -->
<section id="contacto" class="container-fluid">
	<div class="col-md-6" id="resultado">
		<div class="short center-block">
			<h2 class="whiteTxt">Resultados</h2>
			<hr class="ultraLight">
			<p align="center"><a href="http://www.time-mx.com/resultados/eventov.php?idevento=450" target="_blank" class="scoreLink">2016</a><span class="hidden-sm hidden-xs">&nbsp;/&nbsp;</span>
			<a href="javascript:void(0);" class="scoreLink disabled" title="Se activará una vez terminada la carrera">2017</a></p>
		</div>
	</div>
	<div class="col-md-6" id="contactForm">
		<div class="short center-block">
			<h2 class="whiteTxt">Contacto</h2>
			<hr class="ultraLight">
			<form id="formaContacto">
			  <div class="form-group">
			    <label for="Inputname">Nombre</label>
			    <input type="name" class="form-control" id="Inputname" placeholder="Nombre">
			  </div>
			  <div class="form-group">
			    <label for="Inputplace">Ciudad/País</label>
			    <input type="place" class="form-control" id="Inputplace" placeholder="Ciudad/País">
			  </div>
			  <div class="form-group">
			    <label for="InputTel">Teléfono</label>
			    <input type="tel" class="form-control" id="InputTel" placeholder="Teléfono">
			  </div>
			  <div class="form-group">
			    <label for="InputMessage">Mensaje</label>
			    <textarea type="message" class="form-control" id="InputMessage" placeholder="Mensaje"></textarea>
			  </div>
			  <div class="checkbox">
			    <label>
			      <input type="checkbox"> Check me out
			    </label>
			  </div>
			  <button type="submit" class="btn btn-default">Submit</button>
			</form>
		</div>
	</div>
	<div class="clearfix"></div>
</section>

<section class="container-fluid" id="faqSection">
	<div class="container">
		<div class="col-md-3"></div>
		<div class="col-md-9">

			<h1 class="whiteTxt">Preguntas Frecuentes (faq)</h1>
			<hr class="ultraLight">

			<div class="convocatoriaSlide" id="faqPreguntas">

				<div class="item">
					<p><strong>1- ¿Cómo me puedo inscribir?</strong></p>
					<ul>
						<li>A) En línea dos opciones: 1- PayPal  2- ACTIVE network *</li>
						<li>B) Banco Santander, depósito o transferencia SPEI *</li>
						<li>C) Todas las <a href="http://sucursales.innovaspot.com" target="_blank">tiendas “Innovasport”</a></li>
						<li>D) Personalmente: El viernes 24 de noviembre, 2017 de acuerdo a disponibilidad.</li>
					</ul>
					<p>* Más información en el menú “INSCRIPCIONES” &uarr;</p>
					<p><strong>2- ¿Cuánto cuesta la inscripción al Medio Maratón y 10K? </strong></p>
					<p>La inscripción tanto para el Medio Maratón como para el 10k es de:</p>
					<ul>
						<li>Etapa 1: 02 enero al 30 abril $500.00 pesos M. N. (Quinientos pesos 00/100 M. N.).</li>
						<li>Etapa 2: 01 mayo al 31 octubre $550.00 pesos M. N. (Quinientos cincuenta pesos 00/100 M. N.)</li> 
						<li>Etapa 3: 01 noviembre al 19 noviembre $600.00 pesos M. N. (Seiscientos pesos 00/100 M. N.)</li>
					</ul>
				</div>
				<div class="item">
					<p><strong>3- ¿Cuántos participantes habrá en la carrera?</strong></p>
					<p>El evento está limitado a 1,500 corredores.</p>
					<p><strong>4- ¿En cuál categoría me inscribo si cumplo años en el mes de Noviembre?</strong></p>
					<p>En la que corresponda a la edad que tengas el día de la carrera. (Sábado 25 de noviembre de 2017).</p>
					<p><strong>5- ¿Dónde me entregan mi número de competencia y qué necesito para que me lo entreguen?</strong></p>
					<p>La entrega de números y paquetes se llevará a cabo en la Paradise Plaza Av. Paseo Cocoteros # 85 sur el viernes 24 de noviembre 2017, de 09:30 a 21:30 horas.<br>
					Para que te entreguen tú paquete, deberás presentar impresa la confirmación que se te envió por correo electrónico, (el original de la ficha de depósito) y una identificación con fotografía.<br>
					NOTA IMPORTANTE: No habrá entrega de números el día de la carrera.</p>
				</div>
				<div class="item">
					<p><strong>6- ¿Puede recoger otra persona mi paquete?</strong></p>
					<p>Si puede recogerlo, deberá presentar los mismos documentos y copia de tu identificación.</p>
					<p><strong>7- ¿A qué hora inicia la carrera?</strong></p>
					<p>La carrera inicia en punto de las 7:00 horas. Hora centro de México. Por lo que te recomendamos que estés en la zona de salida por lo menos 45 minutos antes para realizar estiramientos y calentamiento previo y tengas un mejor desempeño.</p>
					<p><strong>8- ¿Dónde está el estacionamiento?</strong></p>
					<p>Desde las 5:00 a.m. estará abierto el estacionamiento del centro empresarial frente al hotel Hard Rock. </p>
					<p><strong>9- ¿Dónde puedo dejar mi ropa y pertenencias durante el evento?</strong></p>
					<p>Desde las 6:15 a.m. te podrán recibir tu ropa y pertenencias en el “Guardarropa”. Ubicado dentro del estacionamiento del Centro Empresarial. (Consulta el mapa que viene en el boletín del corredor, éste se te enviará por correo electrónico).</p>
				</div>
				<div class="item">
					<p><strong>10) ¿Cómo me debo colocar el número de competencia?</strong></p>
					<p>El número lo debes colocar al frente en el torso con los seguros que se te entregaron en tu paquete de inscripción.<br>
					Nota: Recuerda que es intransferible, es requisito traerlo puesto para poder entrar al corral de salida. No debe sufrir alteraciones o modificaciones.</p>
					<p><strong>11) ¿Dónde me coloco a la hora del disparo de salida?</strong></p>
					<p>De acuerdo a tu tiempo probable declarado en la ficha de inscripción. (Menos de 1:30, menos de 1:45, menos de 2:00 horas,  más de 2:00 horas.</p>
					<p><strong>12) ¿Qué bebidas habrá en los puestos de hidratación?</strong></p>
					<p>Agua y Powerade (10 estaciones de hidratación). En los Km.: 3, 6, 8, 10, 12, 14, 16, 18, 20 y Zona de recuperación.</p>
					<p><strong>13) ¿Qué sistema de medición se utiliza?</strong></p>
					<p>Se utiliza el sistema: “Time Ipico-sports”</p> 
				</div>
				<div class="item">
					<p><strong>14) ¿Dónde puedo consultar mí tiempo oficial?</strong></p>
					<p>A partir de las 15:00 horas del mismo sábado podrás: Consultar tu tiempo oficial. www.mediomaratonrivieranayarit.com/resultados</p> 
					<p><strong>15) ¿Habrá tarifas especiales en hoteles cercanos a la zona de salida y meta, para los que participemos en el evento?</strong></p>
					<p>Sí, tenemos dos Hoteles, sede y subsede respectivamente, además de otros hoteles con tarifas preferentes para los participantes. Solicita la información con el comité organizador. ruth@conserviexpress.com<br>
					<strong>Hotel Sede:</strong> Village Paradise<br>
					<strong>Hotel Sub Sede:</strong> Hotel Hard Rock</p>
					<p><strong>16) ¿Habrá carga de carbohidratos el día previo?</strong></p>
					<p>En esta ocasión no habrá comida de carbohidratos.</p>
				</div>
				<div class="item">
					<p><strong>17) ¿Cuáles son las condiciones climáticas en Riviera Nayarit para esas fechas?</strong></p>
					<p>La temperatura fluctúa entre 20 ºC y 28 ºC en la fecha y hora en que se lleva a cabo la carrera. (De 7 a.m. a 10 a.m.) Y generalmente se encuentra soleado con escasas posibilidades de lluvia.</p>
					<p><strong>18) ¿Es un recorrido rápido?</strong></p>
					<p>Debido a la altitud de la zona (nivel del mar) y a las condiciones del terreno (plano en su mayoría) es un recorrido rápido. Debiendo ser muy cuidadosos con la temperatura ambiente y la humedad. Recomendamos se hidraten con frecuencia durante el recorrido.</p>
					<p><strong>19) ¿Es un recorrido escénico</strong>?</p>
					<p>El recorrido está diseñado para disfrutar de los lugares, avenidas sombreadas, hoteles y Campo de Golf más representativos de los desarrollos turísticos Nuevo Vallarta y Flamingos.</p>
				</div>
				<div class="item">
					<p><strong>20) ¿Habrá rembolso de la inscripción en caso de que no pudiera asistir?</strong></p>
					<p>Por políticas de la empresa operadora, bajo ninguna circunstancia se rembolsará el monto de la inscripción.</p>
					<p><strong>21) ¿Cómo llego a Nuevo Vallarta?</strong></p>
					<p>Por tierra: Si vienes de la Ciudad de Guadalajara por la autopista (México 200), la primera entrada a Nuevo Vallarta está a 8 Km. de Bucerías.</p>
					<p>Por aire: Llegas al Aeropuerto Internacional “Lic. Gustavo Díaz Ordaz” de la Ciudad de Puerto Vallarta. De ahí a la entrada al desarrollo turístico Nuevo Vallarta son 7 Km.</p>
				</div>

			</div>
		</div>
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
