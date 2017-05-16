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
			<ul class="nav navbar-nav list-inline" id="mainNav">
				<li><a href="#convocatoria" id="convocatoriaBtn">Convocatoria</a></li>
				<li><a href="#inscripciones" id="inscripcionesBtn">Inscripciones</a></li>
				<li><a href="#patrocinadores" id="patrocinadoresBtn">Patrocinadores</a></li>
				<li><a href="#cupones-servicios" id="cupones-serviciosBtn">Cupones</a></li>
				<li><a href="#ubicacion" onClick="cargainfo(marker21,'location');" id="ubicacionBtn">Ruta</a></li>
				<li><a href="#galeria" id="galeriaBtn">Galería</a></li>
				<li><a href="#contacto" id="contactoBtn">Contacto</a></li>
				<!-- <li><a href="javascript:void(0);">Tienda</a></li> -->
				<!-- <li><a href="javascript:void(0);">Contacto</a></li> -->
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
				<h3>1- PROGRAMA OFICIAL</h3>
				<p>Programa oficial Medio Maratón &amp; 10K Turístico Riviera Nayarit 2017<br>
				VIERNES 24 NOVIEMBRE: UNICO DÍA<br>
				De 09:00 a 21:30 horas.<br>
				Entrega de números, paquetes e información oficial. En Paradise Plaza.<br>
				Avenida Paseo Cocoteros # 85 Sur.<br>
				<br>
				*Sin excepción, no habrá entrega de Paquetes el día de la carrera.</p>
			</div>
			<div class="item">
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

		<div class="container convocatoriaSlide animated fadeIn" id="slideConvocatoria">
			<div class="item">
				<h3>1- CONSERVIEXPRESS S. A. de C. V.</h3>
				<p>Invita a todos los corredores a participar en el “9° Medio Maratón Riviera Nayarit y 10K 2017”, que se llevará a cabo en los desarrollos turísticos Nuevo Vallarta, Flamingos y campo de golf El Tigre ubicados en la Riviera Nayarit, México.</p>
			</div>
			<div class="item">
				<h3>2- BASES</h3>

				<p>
					<strong>Fecha:</strong> Sábado 25 de noviembre de 2017.<br>
					<strong>Hora:</strong> 7:00 horas. Hora centro de México.<br>
					<strong>Pruebas:</strong> Medio Maratón (21.0975 km). / 10 kilómetros.<br>
					<strong>Ruta:</strong> Medido y certificado por la Asociación Internacional de Maratones y Carreras de Distancia (AIMS).
				</p>
			</div>
			<div class="item">
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
			<div class="item">
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
			<div class="item">
				<h3>5- PRECIO MEDIO MARATÓN Y 10K:</h3>
				<ul>
					<li><strong>Etapa 1:</strong></srt> 02 enero al 30 abril $500.00 pesos M. N. (Quinientos pesos 00/100 M. N.).</li>
					<li><strong>Etapa 2:</strong></srt> 01 mayo al 31 octubre $550.00 pesos M. N. (Quinientos cincuenta pesos 00/100 M. N.)</li> 
					<li><strong>Etapa 3:</strong></srt> 01 noviembre al 19 noviembre $600.00 pesos M. N. (Seiscientos pesos 00/100 M. N.)</li>
				</ul>
				<br>
				<p><strong>Nota:</strong> Por políticas de la empresa operadora, bajo ninguna circunstancia se rembolsará el monto de la inscripción.</p>
			</div>
			<div class="item">
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
			<div class="item">
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
			<a href="javascript:void(0);" class="btn inscripcionesBtn active" id="btnSantander">
				<img src="images/inscripciones/santander_white.png" alt="Santander" class="logo">
			</a>
			<a href="javascript:void(0);" class="btn inscripcionesBtn" id="btnActiveW">
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

		<div id="santanderContent" class="contentInsc animated fadeIn">
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

		<div id="activeContent" style="display:none;" class="contentInsc animated fadeIn">
			<p>Active network<br>
			Visita el siguiente link al portal Active Network y sigue las instrucciones:<br>
			<br>
			<a href="http://www.active.com/bah-a-de-banderas-nayarit/running/distance-running-races/half-marathon-riviera-nayarit-2017?int=" target="_blank" class="btn center-block">ir al portal</a>
			</p>
		</div>

		<div id="innovaContent" style="display:none;" class="contentInsc animated fadeIn">
			<p>Todas las tiendas Innovasport:<br>
			<a href="http://sucursales.innovasport.com" target="_blank" class="btn center-block">Ver Tiendas</a></p>
			<p>Nombre / revisar info</p>
			<p><i class="fa fa-phone" aria-hidden="true"></i><span>Oficina:   01 (33) 3616-6428</span></p>
			
		</div>

		<div id="paypalContent" style="display:none;" class="contentInsc animated fadeIn">
			<p>Paypal</p>
			<!-- FORM sample -->
			<form id="paypalForm">

				<div class="form-group">
				<label for="exampleInputName1">Nombre</label>
				<input type="name" class="form-control" id="exampleInputName" placeholder="Name">
				</div>



			  <div class="form-group">
			    <label for="exampleInputEmail1">Email</label>
			    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">Password</label>
			    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
			  </div>
			  <!-- <div class="form-group">
			    <label for="exampleInputFile">File input</label>
			    <input type="file" id="exampleInputFile">
			    <p class="help-block">Example block-level help text here.</p>
			  </div> -->
			  <div class="checkbox">
			    <label>
			      <input type="checkbox"> Check me out
			    </label>
			  </div>
			  <button type="submit" class="btn btn-default">Submit</button>
			</form>
		</div>

</section>
<!-- hoteles -->
<section id="hoteles" class="container-fluid">

	<div class="container">
		<div class="row">
			<h2 class="whiteTxt" align="center">Hoteles</h2>
			<hr class="ultraLight">
			<ul id="hotelesGrid">
				<li>
					<a href="http://www.marival.com.mx/" target="_blank" class="linkHotel">
						<img src="images/hoteles/marival.jpg" alt="Marival Hotel" class="img-responsive">
					</a>
					<!-- <h3 class="label">Marival Resorts</h3> -->
				</li>
				<li>
					<a href="http://es.hrhvallarta.com/" target="_blank" class="linkHotel">
						<img src="images/hoteles/hard_rock.jpg" alt="Hard Rock Hotel" class="img-responsive">
					</a>
					<!-- <h3 class="label">Hard Rock Hotel</h3> -->
				</li>
				<li>
					<a href="http://paradisevillage.com.mx" target="_blank" class="linkHotel">
						<img src="images/hoteles/paradise_village.jpg" alt="Paradise Village Hotel" class="img-responsive">
					</a>
					<!-- <h3 class="label">hotel 3</h3> -->
				</li>
				<li>
					<a href="http://www.hotelvillavaradero.com/esp" target="_blank" class="linkHotel">
						<img src="images/hoteles/villa_varadero.jpg" alt="Villa Varadero Hotel" class="img-responsive">
					</a>
					<!-- <h3 class="label">hotel 4</h3> -->
				</li>
				<li>
					<a href="http://www.belairvallarta.com/" target="_blank" class="linkHotel">
						<img src="images/hoteles/bel_air.jpg" alt="Bel Air Hotel" class="img-responsive">
					</a>
					<!-- <h3 class="label">hotel 5</h3> -->
				</li>
				<li>
					<a href="http://www.villalaestancia.com/riviera-nayarit" target="_blank" class="linkHotel">
						<img src="images/hoteles/la_estancia.jpg" alt="Villa la Estancia Hotel" class="img-responsive">
					</a>
					<!-- <h3 class="label">hotel 6</h3> -->
				</li>
				<li>
					<a href="http://nopall.com" target="_blank" class="linkHotel">
						<img src="images/hoteles/flamingos.jpg" alt="Villa del Palmar Flamingos Hotel" class="img-responsive">
					</a>
					<!-- <h3 class="label">hotel 7</h3> -->
				</li>
				<li>
					<a href="http://www.hiltonhotels.com/es_XM/mexico/" target="_blank" class="linkHotel">
						<img src="images/hoteles/hilton.jpg" alt="Hilton Hotel" class="img-responsive">
					</a>
					<!-- <h3 class="label">hotel 8</h3> -->
				</li>
				<li>
					<a href="http://www.krystalvallartaresort.com/" target="_blank" class="linkHotel">
						<img src="images/hoteles/kristal.jpg" alt="Kristal Hotel" class="img-responsive">
					</a>
					<!-- <h3 class="label">hotel 9</h3> -->
				</li>
				<li>
					<a href="http://www.riu.com/consultar-disponibilidad/" target="_blank" class="linkHotel">
						<img src="images/hoteles/riu_jalisco.jpg" alt="Rie Jalisco Hotel" class="img-responsive">
					</a>
					<!-- <h3 class="label">hotel 9</h3> -->
				</li>
				<li>
					<a href="http://www.riu.com/consultar-disponibilidad/" target="_blank" class="linkHotel">
						<img src="images/hoteles/riu_palace.jpg" alt="Riu Palace Hotel" class="img-responsive">
					</a>
					<!-- <h3 class="label">hotel 9</h3> -->
				</li>
				<li>
					<a href="http://www.riu.com/consultar-disponibilidad/" target="_blank" class="linkHotel">
						<img src="images/hoteles/riu_vallarta.jpg" alt="Riu Vallarta Hotel" class="img-responsive">
					</a>
					<!-- <h3 class="label">hotel 9</h3> -->
				</li>
			</ul>
		</div>
	</div>


</section>
<!-- sponsors -->
<section id="patrocinadores" class="container-fluid">
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
			<a href="javascript:void(0);" class="ghostButtonHome redBtn">
				<i class="fa fa-file-pdf-o" aria-hidden="true"></i> Cuponera 2017
			</a>
		</div>
	</div>
</section>
<!-- ubicacion -->
<section id="ubicacion" class="container-fluid">
	<div id="sidebarMap" class="col-md-3 hidden-xs">
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

<!-- LENGUAJES -->

<section id="lenguajes" class="container-fluid">
	<div class="col-md-6 interlingua">
		<a href="" class="pull-right">
			<img src="http://placehold.it/600x300" alt="" class="img-responsive" id="logo-interlingua">
		</a>
	</div>
	<div class="col-md-6 alianzaFr">
		<a href="" class="pull-left">
			<img src="http://placehold.it/600x300" alt="" class="img-responsive" id="logo-alianzaFr">
		</a>
	</div>
</section>

<!-- contacto -->
<section id="contacto" class="container-fluid">
	<div class="container">
		<form>
		  <div class="form-group">
		    <label for="exampleInputEmail1">Email address</label>
		    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputPassword1">Password</label>
		    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
		  </div>
		  <div class="checkbox">
		    <label>
		      <input type="checkbox"> Check me out
		    </label>
		  </div>
		  <button type="submit" class="btn btn-default">Submit</button>
		</form>
	</div>
	<!-- magia emmet (botones Gigantes): 
	div.bigBtns>(a-link.bigBTN#facebookBtn[target="_blank"]{facebook})+(a-link.bigBTN#instagramBtn[target="_blank"]{instagram})+(a-link.bigBTN#youtubeBtn[target="_blank"]{youtube})
	-->
	<div class="bigBtns">
		<a href="https://facebook.com/21KRivieraNayarit" class="bigBTN" id="facebookBtn" target="_blank">facebook</a>
		<a href="https://instagram.com/Mediomaratonrivieranayarit" class="bigBTN" id="instagramBtn" target="_blank">instagram</a>
		<a href="https://www.youtube.com/channel/UCI1cK7BHlh_3PTa0MspJF4A" class="bigBTN" id="youtubeBtn" target="_blank">youtube</a>
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
