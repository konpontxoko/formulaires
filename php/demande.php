<?php 
require_once("../head.php"); 
?>
<h2>Demander une réparation</h2>
<?php 
require_once("../baiorepar/menubaiorepar.php");
?>

    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                    </div>
                    <p>Demande de réparation</p>
                    <form action="insert.php" method="post" autocomplete="off">
                        <div class="register">
                            <label for "nom"><i class="fas fa-heart-broken"></i>  Désignation de l'objet cassé</label>
                            <input type="text" name="designation" placeholder="désignation" id="designation" class="form-control" required>
                        </div>
                        <div class="form-group">
			    <label><i class="fas fa-object-group"></i>  Catégorie de panne</label>
				<select name="categorie">
					<option>Mecanique </option>
					<option>Electrique</option>
					<option>Electronique</option>
					<option>Je ne sais pas</option>
				</select>
                        </div>
                        <div class="form-group">
                             <label for="pass"><i class="fas fa-lock"></i>  Descriptif détaillé</label>
                            <input type="textarea" name="descriptif" rows="10" cols="40" class="form-control" required>
                        </div>
                            <label for="email"><i class="fas fa-envelope"></i>  Lieu ou se trouve l'objet</label>
				<select name="lieu">
					<option>Chez moi </option>
					<option>Ailleurs 1</option>
					<option>Ailleurs 2</option>
				</select>
                        </div>
			<div>
                        	<label for="email"><i class="fas fa-envelope"></i>  Une photo ?</label>
				<input type="hidden" name="MAX_FILE_SIZE" value="4194304" />
				<input type="file" name="photo" />
                        </div>
                        <div class="form-group">
                        <input type="submit" class="btn btn-primary" name="poster" value="Poster la demande">
                    </form>
                </div>
            </div>        
        </div>
    </div>
<BR>
<HR>
<?php require_once("../rgpd.html"); ?>
<BR>
<HR>
<BR>
<a href="/baiorepar/mailtest2.php">Test 2 : PHPMailer</a>
<BR>
<a href="/baiorepar/mailtest2.php">Test 2 : PHPMailer</a>
<BR>
<a href="/baiorepar/mailtest3.php">Test 3 : PHPMailer</a>
<BR>
<a href="/baiorepar/mailtest4.php">Test 4 : PHPMailer</a>
<BR\>


<?php  require_once("../css/admin.css"); ?>
<?php require_once("../tail.php"); ?>
<formulaire-menu/>
