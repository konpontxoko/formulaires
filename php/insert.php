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

try {
    $pdi = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);



    $sql = "INSERT INTO demandeurs 
	    (nom,prenom,email,mobile,mdp)
	    VALUES ('$nom','$prenom','$email','$mobile','$pass')";

    $q = $pdi->query($sql);
    $q->setFetchMode(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Could not connect to the database $dbname :" . $e->getMessage());
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
