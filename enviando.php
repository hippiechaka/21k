  <?
  $enviado = 0;
  if(!empty($_REQUEST['nombre'])){
    $body2 = "
    Nombre: ".$_REQUEST['nombre']."<br />
    E-mail: ".$_REQUEST['email']."<br />
    City: ".$_REQUEST['city']."<br />
    Activity: ".$_REQUEST['activity']."<br />
    Mensaje: ".nl2br($_REQUEST['mensaje']);

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
    $to     = "ruth@conserviexpress.com, hippiechaka@gmail.com";
    $subject  = "Medio Maratón Riviera Nayarit - Comentario de ".$_REQUEST['nombre'];

    @mail($to , $subject, $body2, $headers);

    $enviado = 'OK';
  }
    ?>