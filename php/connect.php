<?php 
require_once("../head.php"); 
require_once("../baiorepar/menubaiorepar.php");
require_once("../sql/db.php"); 
?>
<?php 
#    
#$email = $_POST['email'];
#$pass = $_POST['pass'];
#  
#// Vérification des champs
#if (!isset($_POST['email'], $_POST['pass'])) {
#  // Could not get the data that should have been sent.
#  exit('Le formulaire est incomplet');
#}
#// Make sure the submitted registration values are not empty.
#if (empty($_POST['email']) empty($_POST['pass'])) {
#	// One or more values are empty.
#	exit('Le formulaire est incomplet');
#}
#
#
#// vérification du numero de telephone
#// a revoir !!!
#if(preg_match('/^\d{10}$/',$mobile)) // phone number is valid
#    {
#      $mobile = '0' . $mobile;
#
#      // your other code here
#    }
#
#
#// vérificaiton du champ mail
#if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
#	exit('Email non valide !');
#}
#
##if (isset($_GET['email'], $_GET['pass'])) {
##	if ($stmt = $con->prepare('SELECT * FROM demandeurs WHERE email = ? AND pass = ?')) {
##		$stmt->bind_param('ss', $_GET['email'], $_GET['pass']);
##		$stmt->execute();
##		// Store the result so we can check if the account exists in the database.
##		$stmt->store_result();
##		if ($stmt->num_rows > 0) {
##			echo('/php/connexion.php', $self, "Connexion");
##			// Account exists with the requested email and code.
##/*			if ($stmt = $con->prepare('UPDATE accounts SET activation_code = ? WHERE email = ? AND activation_code = ?')) {
##				// Set the new activation code to 'activated', this is how we can check if the user has activated their account.
##				$newcode = 'activated';
##				$stmt->bind_param('sss', $newcode, $_GET['email'], $_GET['code']);
##				$stmt->execute();
##				echo 'Your account is now activated! You can now <a href="index.html">login</a>!';
##			}
## */
##			} else {
##				echo 'Erreur de connection ';
##			}
##		}
#	
##     mysqli_close($conn);
#
#?>

<?php require_once("../tail.php"); ?>
