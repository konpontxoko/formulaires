<?php 
require_once("../head.php"); 
?>
<h2>Inscription</h2>
<?php
require_once("../baiorepar/menubaiorepar.php");
require_once("../db/db.php"); 

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    echo "Connected to $dbname at $host successfully.<BR>";
} catch (PDOException $pe) {
    die("Could not connect to the database $dbname :<BR>" . $pe->getMessage());
}

     $nom = $_POST['nom'];
     $prenom = $_POST['prenom'];
     $email = $_POST['email'];
     $mobile = $_POST['mobile'];
     $pass = $_POST['pass'];

     // Vérification des champs
if (!isset($_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['mobile'], $_POST['pass'])) {
	// Could not get the data that should have been sent.
	exit('Le formulaire est incomplet');
}
// Make sure the submitted registration values are not empty.
if (empty($_POST['nom']) || empty($_POST['prenom']) || empty($_POST['email']) || empty($_POST['mobile']) || empty($_POST['pass'])) {
	// One or more values are empty.
	exit('Le formulaire est incomplet');
}

// vérification du champ nom
if (preg_match('/^[a-zA-Z0-9]+$/', $_POST['nom']) == 0) {
    exit('Votre nom est vraiment hors normes!');
}

// vérification du champ prenom
if (preg_match('/^[a-zA-Z0-9]+$/', $_POST['prenom']) == 0) {
    exit('Votre prenom est vraiment hors normes!');
}
// vérification du numero de telephone
// a revoir !!!
if(preg_match('/^\d{10}$/',$mobile)) // phone number is valid
    {
      $mobile = '0' . $mobile;

      // your other code here
    }

// vérification du mot de passe
if (strlen($_POST['pass']) > 20 || strlen($_POST['pass']) < 5) {
	exit('Votre mot de passe doit etre composé de 5 à 20 caractères.');
}

// vérification du champ mail
if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
	exit('Email non valide !');
}

#try {
#    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
#    echo "Connected to $dbname at $host successfully.<BR>";
#
#try {
#    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

#$pdi = new PDO("mysql:host=localhost;dbname=database;","root","");
#$b=$pdi->prepare("UPDATE `users` SET user='$var'");
#$b->execute();

#try {
#    $pdi = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

#$stmt = $pdi->prepare("INSERT INTO demandeurs 
#	    (nom,prenom,email,mobile,mdp)
#	    VALUES (:nom, :prenom, :email, :mobile, :pass)";
#$stmt->bindParam(':nom', $nom, PDO::PARAM_STR);
#$stmt->bindParam(':prenom', $prenom, PDO::PARAM_STR);
#$stmt->bindParam(':email', $email, PDO::PARAM_STR);
#$stmt->bindParam(':mobile', $mobile, PDO::PARAM_INT);
#$stmt->bindParam(':pass', $pass, PDO::PARAM_STR);
#$stmt->execute();
#
#    $q = $pdi->query($stmt);
#    $q->setFetchMode(PDO::FETCH_ASSOC);
#

#################################### 
# En attendant de mettre ne place une vraie solution
function mysql_escape_mimic($inp) {
    if(is_array($inp))
        return array_map(__METHOD__, $inp);

    if(!empty($inp) && is_string($inp)) {
        return str_replace(array('\\', "\0", "\n", "\r", "'", '"', "\x1a"), array('\\\\', '\\0', '\\n', '\\r', "\\'", '\\"', '\\Z'), $inp);
    }

    return $inp;
} 

$s_nom = mysql_escape_mimic( $nom );
$s_prenom = mysql_escape_mimic( $prenom );
$s_email = mysql_escape_mimic( $email );
$s_pass = mysql_escape_mimic( $pass );

#$s_nom = mysqli_real_escape_string( $nom, $pdi );
#$s_nom = mysql_real_escape_string( $nom );
#################################### 

try {


    $pdi = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $sql = "INSERT INTO demandeurs 
	    (nom,prenom,email,mobile,mdp)
	    VALUES ('$s_nom','$s_prenom','$s_email','$mobile','$s_pass')";
    $stmt = $pdi->prepare( $sql );
    $stmt->execute(array("\xbf\x27 OR 1=1 /*"));


#    $pdi = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
#
#    $sql = "INSERT INTO demandeurs 
#	    (nom,prenom,email,mobile,mdp)
#	    VALUES ('$s_nom','$s_prenom','$s_email','$mobile','$s_pass')";
#    
#    $q = $pdi->query($sql);
#    $q->setFetchMode(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Impossible de se connecter à la base de données $dbname :" . $e->getMessage());
}
#
#     if (mysqli_query($conn, $sql)) {
#        echo "Enregistrement réalisé !";
#        print "Enregistrement réalisé !";
#     }
#    } catch (PDOException $pe) {
#    die("Could not connect to the database $dbname :<BR>" . $pe->getMessage());
#}

#
#     else {
#        echo "Error: " . $sql . ":-" . mysqli_error($conn);
#     }
?>
<?php mysqli_close($conn); ?>

<?php require_once("../tail.php"); ?>
