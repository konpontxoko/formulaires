<?php
require_once("../head.php"); 
require_once("./menubaiorepar.php");
?>
<?php
use PHPMailer\PHPMailer\PHPMailer;
#require 'path/to/composer/vendor/autoload.php';
$mail->isSMTP();
$mail->Host = 'smtp.mail.com';
$mail->SMTPAuth = true;
$mail->Username = 'baiorepar@mail.com';
$mail->Password = 'T02GqkYCpg82ixY';
$mail->SMTPSecure = 'tls';
$mail->Port = 585;

$mail->setFrom('baiorepar@mail.com', 'First Last');
$mail->addReplyTo('baiorepar@framalistes.org', 'baiorepar';

$mail->isHTML(true);

$mail->Subject = "PHPMailer SMTP test";
$mail->addEmbeddedImage('path/to/image_file.jpg', 'image_cid');
$mail->Body = '<img src="https://www.tranz-eko.eu/media/cache/project_img_list/uploads/images/1563876655_konpon-txoko.png"> <BR>Blabla';
$mail->AltBody = 'Version texte';

if(!$mail->send()){
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}else{
    echo 'Message has been sent';
?>
