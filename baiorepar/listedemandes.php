<?php 
require_once("../head.php");
?>
<h2>Demandes de réparation</h2>
<?php 
require_once("./menubaiorepar.php");
?>
<div class="ArticleList">

<?php
  $articles = array();
  for ($i = 0; $i < 30; $i++) {
    $article = new class{};
    $article->title = 'Aspirateur Rowenta 1000W';
    $article->price = $i;
    $article->photo = 'photo.jpg';
    $articles['A'] = $article;
  }
  foreach($articles as $id => $article) {
    echo <<<ELEMENT
    <a class="ArticleList-item" href="/boutik/detail.php?id=$id">
      <ktrc-article-list-item 
        title="$article->title"
        photo="$article->photo"
      />
    </a>
ELEMENT;
  }
?>
</div>
<?php  require_once("../css/admin.css"); ?>
<?php require_once("../tail.php"); ?>
<formulaire-menu/>
