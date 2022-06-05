<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Baioreapr - Experience</title>
    <link rel=stylesheet type=text/css href="/bootstrap/css/bootstrap.css">
    <link rel=stylesheet type=text/css href="/bootstrap/css/jquery.ui.all.css">

  <script src="/js/article-list-item.js"></script>
  <script src="/js/menu.js"></script>
  <link href="/css/article-list.css" rel="stylesheet">
  <link href="/css/admin.css" rel="stylesheet">

  </head>

  <body>
    <div class="navbar navbar-static-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="brand" href='/index.php'>Accueil</a>
          <ul class="nav">
            <li><a href="/baiorepar/baiorepar.php" title="">Baiorepar</a></li> 
            <li><a href="/boutik/boutik.php" title="">Boutik</a></li> 
            <li class="active"><a href="/baiorepar/demande.php" title="">Demander une réparation</a></li>
            <li><a href="/baiorepar/infos.php" title="Infos sur le serveur">Infos php</a></li> 
          </ul>
	  <ul class="nav pull-right">
	    <?php print("<li><a class='' href='#' title=''><i class='icon-user'></i> ".$nom."</a></li>"); ?>
	  </ul>
        </div>
      </div>
    </div>

    <div class="container">

<header>
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
doprint('./demande.php', $self, "Demande");
doprint('./listedemande.php', $self, "Liste des demandes");
doprint('http://banka.baiorepar.pizzacoca.fr/', $self, "Compta");
?>

</ul>
<br />
<?php // require_once("baiorepar/menu.php"); ?>
</header>

