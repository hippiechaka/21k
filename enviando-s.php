  <?
  $enviado = 0;
  if(!empty($_REQUEST['name-s'])){
    $body2 = "
    Nombre: ".$_REQUEST['name-s']." ".$_REQUEST['apellidoP-s']." ".$_REQUEST['apellidoM-s']."<br />
    Sexo: ".$_REQUEST['sexo-s']."<br />
    Fecha de Nacimiento: ".$_REQUEST['fecha-s']."<br />
    Club: ".$_REQUEST['club-s']."<br />
    Categoria: ".$_REQUEST['categoria-s']."<br />
    Distancia: ".$_REQUEST['distancia-s']."<br />
    E-mail: ".$_REQUEST['email-s']."<br />
    Pais: ".$_REQUEST['pais-s']."<br />
    Ciudad: ".$_REQUEST['ciudad-s']."<br />
    Código Postal: ".$_REQUEST['codigoP-s']."<br />
    Teléfono: ".$_REQUEST['telefono-s']."<br />
    Celular: ".$_REQUEST['celular']."<br />
    Talla: ".nl2br($_REQUEST['talla']);

    $headers = "From: Medio Maratón Riviera Nayarit <no-reply@mediomaratonrivieranayarit.com>\n";
    $headers .= "Reply-To: Medio Maratón Riviera Nayarit <no-reply@mediomaratonrivieranayarit.com>\n";
    $headers .= 'Content-Type: text/html;';
    $headers .= "MIME-Version: 1.0\n";
    $headers .= "Content-Transfer-Encoding: 8bit\n";
    $headers .= "X-Priority: 1\n";
    $headers .= "X-Mailer: PHPMailer [version 1.72]\n";
    $headers .= "X-AntiAbuse: This header was added to track abuse, please include it with any abuse report\n";
    $headers .= "X-AntiAbuse: Primary Hostname - mediomaratonrivieranayarit.com\n";
    $headers .= "X-AntiAbuse: Original Domain - mediomaratonrivieranayarit.com\n";
    $headers .= "X-AntiAbuse: Originator/Caller UID/GID - [99 99] / [47 12]\n";
    $headers .= "X-AntiAbuse: Sender Address Domain - mediomaratonrivieranayarit.com\n";
    $headers .= "X-Source: \n";
    $headers .= "X-Source-Args: \n";
    $headers .= "X-Source-Dir: \n";

    $from   = "Medio Maratón Riviera Nayarit <no-reply@mediomaratonrivieranayarit.com>";
    $to     = "hippiechaka@gmail.com";
    $subject  = "Medio Maratón Riviera Nayarit - Registro Santander ".$_REQUEST['name-s'];

    @mail($to , $subject, $body2, $headers);

    $enviado = 'OK';
  }
    ?>