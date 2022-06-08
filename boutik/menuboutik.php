<ul class="nav nav-tabs">
<?php
$self = $_SERVER['PHP_SELF'];

function doprint($page, $self, $title) {
	if ($page == $self)
	      print("<li class='active'><a href=\"$page\" title=\"$title\">$title</a></li>");
	else
	      print("<li><a href=\"$page\" title=\"$title\">$title</a></li>");
}

doprint('./new.html', $self, "Nouvel article");
doprint('./pending.html', $self, "Articles en attente");
doprint('./archives.html', $self, "Archives");
doprint('./admin.php', $self, "Admin Boutik");
doprint('./detail.php', $self, "Details");
doprint('./samples/events.json', $self, "Contenu BDD");
doprint('./admin.html', $self, "Admin boutik");
doprint('./infos.php', $self, "Infos PHP");
?>
</ul>
<br />
</header>

