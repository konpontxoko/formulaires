<?php
require_once("../head.php");
?>
<h2>Inscription</h2>
<?php
require_once("../menu.php");
?>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                    </div>
                    <p>Remplir ce formulaire pour s'inscrire.</p>
                    <form action="/php/insert.php" method="post" autocomplete="off">
                        <div class="register">
                            <label for "nom"><i class="fas fa-user"></i>  Nom</label>
                            <input type="text" name="nom" placeholder="nom" id="nom" class="form-control" value="test" required>
                            <label for="prenom">  Prénom</label>
                            <input type="text" name="prenom" placeholder="prenom" id="prenom" class="form-control"  value="test" required>
                        </div>
                        <div class="form-group">
                            <label for="email"><i class="fas fa-envelope"></i>  Email</label>
                            <input type="email" name="email" placeholder="titi@grominet.org" class="form-control" value="test@test.fr" required>
                        </div>
                        <div class="form-group">
                            <label><i class="fas fa-phone"></i>  Mobile</label>
                            <input type="mobile" name="mobile" placeholder="0123456789" class="form-control" value="01234456789"required>
                        </div>
                        <div class="form-group">
                             <label for="pass"><i class="fas fa-lock"></i>  Mot de passe</label>
                            <input type="password" name="pass" class="form-control" value="eeeeeee" required>
                        </div>
                        <input type="submit" class="btn btn-primary" name="submit" value="S'inscrire">
                    </form>
                </div>
            </div>        
        </div>
    </div>

<?php  require_once("../css/admin.css"); ?>
<?php require_once("../tail.php"); ?>
<formulaire-menu/>
