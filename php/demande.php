<?php 
require_once("../head.php"); 
?>
<h2>Demander une réparation</h2>
<?php 
require_once("./menubaiorepar.php");
?>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                    </div>
                    <p>Remplir ce formulaire pour s'inscrire.</p>
                    <form action="insert.php" method="post" autocomplete="off">
                        <div class="register">
                            <label for "nom"><i class="fas fa-user"></i>  Nom</label>
                            <input type="text" name="nom" placeholder="nom" id="nom" class="form-control" required>
                            <label for="prenom">  Prénom</label>
                            <input type="text" name="prenom" placeholder="prenom" id="prenom" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="email"><i class="fas fa-envelope"></i>  Email</label>
                            <input type="email" name="email" placeholder="titi@grominet.org" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label><i class="fas fa-phone"></i>  Mobile</label>
                            <input type="mobile" name="mobile" placeholder="0123456789" class="form-control" required>
                        </div>
                        <div class="form-group">
                             <label for="pass"><i class="fas fa-lock"></i>  Mot de passe</label>
                            <input type="password" name="pass" class="form-control" required>
                        </div>
                        <input type="submit" class="btn btn-primary" name="submit" value="Submit">
                    </form>
                </div>
            </div>        
        </div>
    </div>

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
<H3><a href="/baiorepar/mailtest2.php">Test 2 : PHPMailer</a></H3>
<HR>
<H3><a href="/baiorepar/mailtest3.php">Test 3 : PHPMailer</a></H3>
<HR>
<H3><a href="/baiorepar/mailtest4.php">Test 4 : PHPMailer</a></H3>
<HR>


<?php require_once("../rgpd.html"); ?>
<?php require_once("../tail.php"); ?>
