<?php 
require_once("../head.php");
?>
<h2>Connexion</h2>
<?php 
require_once("../menu.php");
?>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                    </div>
                    <form action="./connect.php" method="post" autocomplete="on">
                        <div class="form-group">
                            <label for="email"><i class="fas fa-envelope"></i>  Votre email</label>
                            <input type="email" name="email" placeholder="titi@grominet.org" class="form-control" required>
                        </div>
                        <div class="form-group">
                             <label for="pass"><i class="fas fa-lock"></i>  Mot de passe</label>
                            <input type="password" name="pass" placeholder="Oh non ! encore un mot de passe !"  class="form-control" required>
                        </div>
                        <input type="submit" class="btn btn-primary" name="submit" value="Se connecter">
                    </form>
                    <form action="rappelmdp.php" method="post" autocomplete="on">
                        <div class="form-group">
                            <input type="email" name="email" placeholder="titi@grominet.org" class="form-control" required>
                        </div>
                        <input type="submit" class="btn btn-primary" name="submit" value="Renvoyer le mot de passe">
                </div>
            </div>        
        </div>

<?php  require_once("../css/admin.css"); ?>
<?php require_once("../tail.php"); ?>
<formulaire-menu/>
