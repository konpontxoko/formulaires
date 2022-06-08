<?php 
require_once("../head.php"); 
require_once("./menubaiorepar.php");
?>

<H3>Test 1 : Formulaire</H3>
<form method="POST" action="/baiorepar/mail.php">
<H4>Titre de la demande de réparation</H4>
    <div id="titre">
  	  <input type="text" name="titre" class="form"  value="Je veux faire une demande à" onkeyup="showHint(this.value)"/>
  	  <input type="label" style="hidden" name="dest" class="form"  value="coucou@pizzacoca.fr" onkeyup="showHint(this.value)"/>
	  <BR>
      <button type="button" onclick="reset()">bouton reset</button>
    </div>
    <div id="descriptif">
      <H3>Descriptif</H3>
  	  <input type="text" name="descriptif" class="form"  value="Ca marche pas" onkeyup="showHint(this.value)"/>
    </div>

  	<input type="submit" value="envoyer la demande">
  </form>
  
<HR>
<H3><a href="/php/mailtest2.php">Test 2 : PHPMailer</a></H3>
<HR>
<H3><a href="/php/mailtest3.php">Test 3 : PHPMailer</a></H3>
<HR>
<H3><a href="/php/mailtest4.php">Test 4 : PHPMailer</a></H3>
<HR>

<?php require_once("../tail.php"); ?>
