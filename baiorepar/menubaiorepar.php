<h2 class"page-header">Baiorepar</h2>
<br />
<ul class="nav nav-tabs">
<?php
$self = $_SERVER['PHP_SELF'];

function doprint($page, $self, $title) {
	if ($page == $self)
	      print("<li class='active'><a href=\"$page\" title=\"$title\">$title</a></li>");
	else
	      print("<li><a href=\"$page\" title=\"$title\">$title</a></li>");
}

doprint('/index.php', $self, "Accueil");
doprint('./demande.php', $self, "Demander une réparation");
doprint('./listedemandes.php', $self, "Liste des demandes");
doprint('./infos.php', $self, "Infos PHP");
?>

</ul>
<br />
</header>

