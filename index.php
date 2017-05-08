<?php
  if(!empty($_SESSION['lang'])){
        if ($_SESSION['lang']=="es" || $_SESSION['lang']=="en"){
            $lang=$_SESSION['lang'];
        } else {
            $lang="es";
        }
    }

    if(!empty($_REQUEST['lang'])){
        if ($_REQUEST['lang']=="es" || $_REQUEST['lang']=="en"){
            $lang=$_SESSION['lang']=$_REQUEST['lang'];
        } else {
        }
    }

    if(empty($lang)){
        $lang="es";
        $_SESSION['lang']=$lang;
    } 
?>

<?php
//require "includes/connect.php";//Quitar comments para conectar
$msg = '';
if($_POST['email']){
    // Requested with AJAX:
    $ajax = ($_SERVER['HTTP_X_REQUESTED_WITH']  == 'XMLHttpRequest');   
    try{
        if(!filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL)){
            throw new Exception('Email no válido, intenta de nuevo');
        }
        $mysqli->query("INSERT INTO coming_soon_emails
                        SET email='".$mysqli->real_escape_string($_POST['email'])."'");
        if($mysqli->affected_rows != 1){
            throw new Exception('Ese email ya lo tenemos (gracias).');
        }
        if($ajax){
            die('{"status":1}');
        }
        $msg = "Gracias!";
    }
    catch (Exception $e){
        if($ajax){
            die(json_encode(array('error'=>$e->getMessage())));
        }
        $msg = $e->getMessage();        
    }
}
?>
<!DOCTYPE html>
<html lang="<?php echo $lang;?>">
  <?php require_once "sections_".$lang."/head".".php"; ?>
  <body data-spy="scroll" data-target=".navbar" data-offset="50">
      <?php require_once "sections_".$lang."/content".".php"; ?>
      <?php require_once "sections_".$lang."/end".".php"; ?>
  </body>
</html>
