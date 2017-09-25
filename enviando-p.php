<?
  $enviado = 0;
  if(!empty($_REQUEST['name-p'])){
    $body2 = "
    Nombre: ".$_REQUEST['name-p']."<br />
    Fecha de Nacimiento: ".$_REQUEST['fecha-p']."<br />
    Sexo: ".$_REQUEST['sexo-p']."<br />
    Club: ".$_REQUEST['club-p']."<br />
    Categoria: ".$_REQUEST['categoria-p']."<br />
    Distancia: ".$_REQUEST['distancia-p']."<br />
    E-mail: ".$_REQUEST['email-p']."<br />
    Teléfono: ".$_REQUEST['telefono-p']."<br />
    Ciudad/Estado/País/CP: ".$_REQUEST['lugar-p']."<br />
    Talla: ".nl2br($_REQUEST['talla-p']);

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
    $to     = "inscripciones@mediomaratonrivieranayarit.com, ruth@conserviexpress.com, hippiechaka@gmail.com";
    $subject  = "Medio Maratón Riviera Nayarit - Registro Paypal ".$_REQUEST['name-p'];

    @mail($to , $subject, $body2, $headers);

    $enviado = 'OK';
  }
    ?>