<!-- <h2 class"page-header">Baiorepar</h2> 
<br /> -->
<ul class="nav nav-tabs">
<?php
$self = $_SERVER['PHP_SELF'];

function doprint($page, $self, $title) {
	if ($page == $self)
	      print("<li class='active'><a href=\"$page\" title=\"$title\">$title</a></li>");
	else
	      print("<li><a href=\"$page\" title=\"$title\">$title</a></li>");
}

doprint('/php/demande.php', $self, "Demander une réparation");
doprint('/baiorepar/listedemandeurs.php', $self, "Demandeurs");
doprint('/baiorepar/listedemandes.php', $self, "Demandes");
doprint('/baiorepar/infos.php', $self, "Infos PHP");
?>

</ul>
<br />
</header>

