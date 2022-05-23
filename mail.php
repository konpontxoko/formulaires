 <?php
    $titre = $_POST['titre'];
    $descriptif = $_POST['descriptif'];
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = "baiorepar@framalistes.org";
    $to = "baiorepar@framalistes.org";
    $subject = "$titre";
    $message = "$descriptif";
    $headers = "De :" . $from;
    mail($to,$subject,$message, $headers);
    echo '<A href="javascript:history.back()">Retour au formulaire</A>';
    echo "<br>";
    echo "L'email a été envoyé à <b>$dest</b>.";
?>

