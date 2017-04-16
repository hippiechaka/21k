
<?php
  $titulo     = '';
  $descripcion  = '';
  $keywords     = '';
  $fb_img     = '';
  $url     = '';
?>

<?php
$enviado = 0;
if(!empty($_REQUEST['nombre'])){
    $remitente = '[MAIL]' ;
    $nombre = utf8_decode(empty($_POST['nombre']) ? 0 : $_POST['nombre']);
    $email = empty($_POST['email']) ? 0 : $_POST['email'];
    $comentarios = utf8_decode(empty($_POST['comentarios']) ? 0 : $_POST['comentarios']);
    $asunto = 'Contacto web';
    $destino = '[MAIL]';
    $para      = '[MAIL]';
    $titulo    = 'Contacto web';
    $mensaje = '
    <div style="font-size: 18px; color: #242424; margin:0 auto; max-width:600px;">
      <div style="font-size: 18px; background-color: #000; color: #fff; width: 100%; padding:15px; text-align:center;">
        <img style:"text-align:center; margin:0 auto; left:0; right:0; width:100%; height:auto;"  src="<?php echo($fb_img); ?>" />
      </div>
        <br />
      <div style="color: #242424; font-size:25px;">
        Tienes un comentario </div><br />
        <strong>Nombre: </strong>'.$nombre.'<br />
        <strong>E-mail: </strong>'.$email.'<br />
        <strong>Comentarios: </strong>'.$comentarios.'<br /><br/>
      </div>
    </div>';
    // Cabecera que especifica que es un HMTL
    $cabeceras  = 'MIME-Version: 1.0' . "\r\n";
    $cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $cabeceras .= 'From: Contacto web <?php echo($url); ?>' . "\r\n";
    mail($para, $titulo, $mensaje, $cabeceras);
    $enviado = 1;
}?>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="icon" href="favicon.png">
	<link rel="apple-touch-icon" href="apple-touch-icon.png">

	<title><?php echo($titulo); ?></title>
	<meta name="description" content="<?php echo($descripcion); ?>">
	<meta name="keywords" content="<?php echo($keywords); ?>">
	<!-- <meta name="copyright" content=""> -->
	<meta name="author" content="@hippiechaka" />
	<meta name="robots" content="index, follow">
	<meta name="googlebot" content="index, follow">
	<meta http-equiv="content-language" content="ES">
	<meta name="Rating" content="General">

	<!--OpenGraph-->
	<meta property="og:title" content="<?php echo($titulo); ?>">
	<meta property="og:type" content="website">
	<meta property="og:url" content="<?php echo($url); ?>">
	<meta property="og:image" content="<?php echo($fb_img); ?>"/>
	<meta property="og:image:type" content="image/jpeg" />
	<meta property="og:image:width" content="1200">
	<meta property="og:image:height" content="630">
	<meta property="og:description" content="<?php echo($descripcion); ?>">
	<!-- Fin de OpenGraph-->


	<!--Twitter Card-->
	<meta name="twitter:card" content="summary">
	<meta name="twitter:site" content="">
	<meta name="twitter:title" content="<?php echo($titulo); ?>">
	<meta name="twitter:description" content="<?php echo($descripcion); ?>">
	<meta name="twitter:image:src" content="<?php echo($fb_img); ?>">
	<!--Fin de Twitter Card-->

	<!-- Bootstrap core CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/normalize.css" rel="stylesheet">
	<link href="css/animate.css" rel="stylesheet">
	<link href="fonts/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" />
	<link href="css/owl.carousel.css" rel="stylesheet" />
	
	<!-- custom -->
	<link href="css/popup.css" rel="stylesheet">    
	<link href="css/style.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style2.css" />

	<link rel="stylesheet" href="css/main.css" />
	<script type="text/javascript" src="js/modernizr.custom.26633.js"></script>
	<noscript>
	  <link rel="stylesheet" type="text/css" href="css/fallback.css" />
	</noscript>
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>