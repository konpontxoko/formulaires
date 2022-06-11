<html>
  <head>

<?php #require_once("../head.php"); ?>
<?php #require_once("./menuboutik.php"); ?>

  <script src="../js/article-list-item.js"></script>
  <script src="../js/menu.js"></script>
  <style type="text/css">
    body {
      padding: 50px 10px;
    }
  </style>
  <link href="../css/article-list.css" rel="stylesheet">

 <?php  require_once("../css/admin.css"); ?>

  <script type="text/javascript">
  </script>
  </head>
  <body class="Admin">
    <a class="Admin-new" href="/boutik/new.html">Nouvel article</a>
    <a class="Admin-pending" href="/boutik/pending.html">Articles en attente</a>
    <a class="Admin-archives" href="/boutik/archives.html">Archives</a>
    <a class="Admin-database" href="/boutik/samples/events.json">Voir le contenu de la base de données</a>
  </body>

<formulaire-menu/>
</html> 

<?php require_once("../tail.php"); ?>

