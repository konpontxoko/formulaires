
<?php 
require_once("../head.php"); 
require_once("./menubaiorepar.php");
?>
<?php
    $titre = $_POST['titre'];
 $descriptif = $_POST['descriptif'];
 $dest = $_POST['dest'];

    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = "baiorepar@framalistes.org";
    $to = "$dest";
    $subject = "$titre";
    $message = "$descriptif";
    $headers = "De :" . $from;
    mail($to,$subject,$message, $headers);
    echo '<A href="javascript:history.back()">Retour au formulaire</A>';
    echo "<br>";
    echo "L'email a été envoyé à <b>$dest</b>.";
?>

