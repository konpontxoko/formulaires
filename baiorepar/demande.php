<?php require_once("../head.php"); ?>


  <H2>Test 1 : Formulaire</H2>
  <form method="POST" action="/baiorepar/mail.php">
    <h2>Titre de la demande de réparation</h2>
    <div id="titre">
  	  <input type="text" name="titre" class="form"  value="Je veux faire une demande à" onkeyup="showHint(this.value)"/>
  	  <input type="label" style="hidden" name="dest" class="form"  value="baiorepar@framalistes.org" onkeyup="showHint(this.value)"/>
	  <BR>
      <button type="button" onclick="reset()">bouton reset</button>
    </div>
    <div id="descriptif">
      <H3>Descriptif</H3>
  	  <input type="text" name="descriptif" class="form"  value="Ca marche pas" onkeyup="showHint(this.value)"/>
    </div>

  	<input type="submit" value="envoyer la demande">
  </form>
  
  
  <hr>
  <H2>Test 2 : PHPMailer</H2>
 
  <button onclick="window.location.href='/baiorepar/phpmailer.php'">Demander une réparation</button>
  <?php
    // Création de la classe PHPMailer
    use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
    
    // Initialisation de PHPMailer
    require '/php/PHPMailer/src/Exception.php';
    require '/php/PHPMailer/src/PHPMailer.php';
    require '/php/PHPMailer/src/SMTP.php';
    
    
    // On crée un objet PHPMailer
    $mail = new PHPMailer();
    
    // Configuration SMTP
    $mail->isSMTP();
    $mail->Host = 'smtp.mail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'baiorepar@mail.com'; 
    $mail->Password = 'T02GqkYCpg82ixY' ;
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;
    
    // Spécification des headers
    $mail->setFrom('baiorepar@mail.com', 'Baiorepar');
    $mail->addReplyTo('baiorepar@mail.com', 'Baiorepar');
    $mail->addAddress('coucou@pizzacoca.fr', 'pizzacoca');
    $mail->addCC('coucou@pizzacoca.fr', 'pizzacoca');
    $mail->addBCC('contact@pizzacoca.fr', 'contact');
    
    // Sujet
    $mail->Subject = 'Test Email via mail.com SMTP using PHPMailer';
    
    // Format du mail
    $mail->isHTML(true);
    
    // Contenu du mail
    $mailContent = "<h1>Send HTML Email using SMTP in PHP</h1>
        <p>This is a test email I’m sending using SMTP mail server with PHPMailer.</p>";
    $mail->Body = $mailContent;

    if(!$mail->send()){
      echo 'Message could not be sent.';
      echo 'Mailer Error: ' . $mail->ErrorInfo;
	}
	else{
       echo 'Message has been sent'; 
	 }
	// Set mailer with this method
	//$mailer->isSendmail();
	$mailer->isQmail();
	$mail->SMTPDebug = 2;
    // And send mail as usual
    $mailer->send();
  ?>
  		<formulaire-menu/>
  		
  <script>
    function reset() {
      const xhttp = new XMLHttpRequest();
      xhttp.onload = function() {
        document.getElementById("titre").innerHTML =
        this.responseText;
      }
      xhttp.open("GET", "/static/titreReparation");
      xhttp.send();
    
    }
    function testMail(dest) {
      const xhttp = new XMLHttpRequest();
      xhttp.onload = function() {
        document.getElementById("demo").innerHTML =
        this.responseText;
      }
      xhttp.open("GET", "/phpServer/mail.php");
      xhttp.send();
    }
  </script>

<?php require_once("../tail.php"); ?>
