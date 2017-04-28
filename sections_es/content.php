<div class="clearfix" style="height:90px;"></div><!-- ALTO DE NAVBAR-->
<!-- navbar -->
<nav class="navbar navbar-inverse navbar-fixed-top">
	<div class="container-fluid">
		<div class="container">
			<div class="navbar-header">
				<a href="javascript:void(0);" class="navbar-brand">
					<img src="images/slider/logo_21k_menu.png" alt="LOGO">
				</a>
			</div>
			<button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#mainNav" aria-expanded="true">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<ul class="nav navbar-nav list-inline" id="mainNav">
				<li><a href="javascript:void(0);">Convocatoria</a></li>
				<li><a href="javascript:void(0);">Inscripciones</a></li>
				<li><a href="javascript:void(0);">Patrocinadores</a></li>
				<li><a href="javascript:void(0);">Cupones</a></li>
				<li><a href="javascript:void(0);" onClick="cargainfo(marker21,'location');">Ruta</a></li>
				<li><a href="javascript:void(0);">Resultados</a></li>
				<li><a href="javascript:void(0);">Tienda</a></li>
				<li><a href="javascript:void(0);">Contacto</a></li>

				<li class="divider"><!-- ICONS --></li>

				<!-- Idioma -->

				<li class="idioma">
					<a href="javascript:void(0);" class="flagIdioma" id="espanol">
						<img src="http://placehold.it/30x30?text=ES" alt="Español">
					</a>
				</li>
				<li class="idioma">
					<a href="javascript:void(0);" class="flagIdioma" id="ingles">
						<img src="http://placehold.it/30x30?text=EN" alt="Inglés">
					</a>
				</li>
				<li class="idioma">
					<a href="javascript:void(0);" class="flagIdioma" id="portugues">
						<img src="http://placehold.it/30x30?text=PO" alt="Portugués">
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
		<img src="images/slider/riviera_nayarit.png" alt="Riviera Nayarit" class="pull-left">
		<img src="images/slider/visit_mexico.png" alt="Visit México" class="pull-right">		
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
		<div class="widget pull-right" id="weatherWidget">Weather Channel</div>
	</div>
	<div class="col-md-6 counterBg">
		<div class="widget pull-left" id="CounterWidget">00:00:00</div>
	</div>
</section>
<!-- suscribe -->
<section id="suscribe">
  <a name="suscribeSection" id="suscribeSection"></a>
  <h1 id="titulo">Solicita información de: Paquetes, Hoteles, Tours.<br>
  <small> No spam.</small></h1>
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
		<ul class="nav nav-tabs">
			<li class="active"><a href="#link1" data-toggle="tab">Link 1</a></li>
			<li><a href="#link2" data-toggle="tab">Link 2</a></li>
			<li><a href="#link3" data-toggle="tab">Link 3</a></li>
		</ul>
		<div class="tab-content">
			<div id="link1" class="tab-pane fade active">
				<h3>Link 1</h3>
				<p>somecontent</p>
			</div>
			<div id="link2" class="tab-pane fade">
				<h3>Link 2</h3>
				<p>somecontent</p>
			</div>
			<div id="link3" class="tab-pane fade">
				<h3>Link 3</h3>
				<p>somecontent</p>
			</div>
		</div>
	</div>
	<div class="col-md-4">
		<img src="images/galeria/corredor.png" alt="" id="corredor">
		<img src="images/galeria/21k_text.png" alt="" id="k21">
	</div>
</section>
<!-- convocatoria10k -->
<section id="convocatoria10k" class="container-fluid">
	<div class="col-md-4">
		<img src="images/galeria/10k_text.png" alt="" id="k10">
		<img src="images/galeria/corredora.png" alt="" id="corredora">
	</div>
	<div class="col-md-8">
		<h1>Inscripciones</h1>
		<hr class="ultraLight">
		<a href="javascript:void(0);"><img src="http://www.placehold.it/180x60" alt="" class="logo"></a>
		<a href="javascript:void(0);"><img src="http://www.placehold.it/180x60" alt="" class="logo"></a>
		<a href="javascript:void(0);"><img src="http://www.placehold.it/180x60" alt="" class="logo"></a>
		<a href="javascript:void(0);"><img src="http://www.placehold.it/180x60" alt="" class="logo"></a>
		<hr class="ultraLight">
		<p>Contenido..</p>
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
			<ul class="sort list-inline" id="filters">
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
	<div id="sidebarMap" class="col-md-3">
		<h3>Ruta</h3>
		<hr class="ultraLight">
		<img src="images/map/powerade.png" alt="Tu Logo AQUÍ" class="center-block">
		<hr class="ultraLight">
		<a href="javascript:void(0);" class="sideBarMapBtn">Salida/Meta</a>
		<a href="javascript:void(0);" class="sideBarMapBtn">Puntos de Hidratación</a>
		<a href="javascript:void(0);" class="sideBarMapBtn">Servicios Médicos</a>
		<hr class="ultraLight">
		<a href="javascript:void(0);" class="ghostButtonHome">Ver en Google Maps</a>
		<!-- <a href="javascript:void(0);">link 4</a> -->
	</div>
	<div id="contemap" class="col-md-9">
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
</section>
<!-- altimetria -->
<section id="altimetria" class="container-fluid">
<img src="images/altimetria/altimetria.jpg" alt="" id="altimetriaImg" class="img-responsive">
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
(div.descripcionoculta.vuelta-derecha{Vuelta a la derecha})+(div.descripcionoculta.vuelta-glorieta{Vuelta a la glorieta})+(div.descripcionoculta.vuelta-u{Vuelta en U})
-->
<div class="descripcionoculta vuelta-derecha">Vuelta a la derecha</div>
<div class="descripcionoculta vuelta-glorieta">Vuelta a la glorieta</div>
<div class="descripcionoculta vuelta-u">Vuelta en U</div>
