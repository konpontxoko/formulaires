<?php
if ($account['activation_code'] == 'activated') {
	// account is activated
	// Display home page etc
} else {
	// account is not activated
	// redirect user or display an error
	  header('Location: http://flo.baiorepar.pizzacoca.fr');
	or die();
	  exit();
}
?>
