<!DOCTYPE html>
<html>
<body>
<head>
  <script src="/js/article-list-item.js"></script>
  <script src="/js/menu.js"></script>
  <style type="text/css">
    body {
      padding: 50px 10px;
    }
  </style>
  <link href="/css/article-list.css" rel="stylesheet">
</head>


<form method="POST" action="/php/mail.php">
  <h2>Titre de la demande de réparation</h2>
<div id="titre">
	<input type="text" name="titre" class="form"  value="Je veux réparer un truc" onkeyup="showHint(this.value)"/>
</div>
<div id="descriptif">
  <H3>Descriptif</H3>
	<input type="text" name="descriptif" class="form"  value="Ca marche pas" onkeyup="showHint(this.value)"/>
</div>

	<input type="submit" value="envoyer la demande à : ">
	<input type="text" style="hidden" name="dest" class="form"  value="baiorepar@framalistes.org" onkeyup="showHint(this.value)"/>
</form>

<br>
<button type="button" onclick="reset()">bouton reset</button>

</body>

<script>

function reset() {
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
    document.getElementById("titre").innerHTML =
    this.responseText;
  }
  xhttp.open("GET", "/static/titreReparation");
  xhttp.send();

}
function testMail(dest) {
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
    document.getElementById("demo").innerHTML =
    this.responseText;
  }
  xhttp.open("GET", "/php/mail.php");
  xhttp.send();
}
</script>

<formulaire-menu/>
</html> 

