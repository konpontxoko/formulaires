<?php #require_once("../head.php"); ?>
<?php #require_once("./menuboutik.php"); ?>


<?php require_once("../css/article-details.css"); ?>

    <a class="ArticleDetail-back" href="./pending.html">&lt;- Retour à la liste des articles</a>
    <h1 class="ArticleDetail-title">Aspirateur Rowenta 800W</h1>
      <section class="ArticleDetail-infos">
        <p>Prix : <span class="ArticleDetail-price"/>
        </p>
      </section>
      <section class="ArticleDetail-photo">
        <img src="https://www.rowenta.fr/medias/?context=bWFzdGVyfGltYWdlc3w0MDIzMHxpbWFnZS9qcGVnfGltYWdlcy9oMDIvaGY3LzE0NjgxMDAxMjk1OTAyLmpwZ3w1NDQwYjQ3ZGQ1MTRlZjdiYjU2YTgzM2JhYTI5OWRjMjQwZWMxZDgzN2E5Nzg0ZjYwZjM1YjA2OGYyMWRkNjE4" style="display: block; max-height: 400px">
      </section>
      <section class="ArticleDetail-description">
        <p>
          Alliant performance et confort, Silence Force Cyclonic 5★ offre une expérience de nettoyage inégalée. Cet aspirateur sans sac haute performance est d'abord muni d'une tête d'aspiration à 2 positions pour un dépoussiérage impeccable. Equipé également des accessoires Animal Care et de la technologie Cyclonic, Silence Force Cyclonic 5★ vous assure une efficacité de nettoyage ultime.
        </p>
      </section>
      <section class="ArticleDetail-reservation">
        <form class="ArticleDetail-form">
          <fieldset>
            <legend>Réserver cette article</legend>
            <p>
              Vous pouvez ici réserver cet article et venir le chercher dans les 7 jours.<br>
              Passé ce délai, l'article sera remis en vente.<br>
              Pour toute question, annulation ou renseignement n'hésitez pas à nous contacter au 06.98.96.01.85 du lundi au samedi de 10h à 12h et de 14h à 18h.
            </p>
            <p>Les réglements s'effectuent sur place.<br>
              Nous acceptons les paiements par Eusko, Euskopay, Euro, CB (via Helloasso) et chèques à l'ordre de Konpon Txoko.
            </p>
            <p><label for="name">Nom* : <input type="text" name="name" required></label></p>
            <p><label for="phone">Téléphone* : <input type="tel" name="phone"></label></p>
            <p><label for="email">Adresse email* : <input type="email" name="email"></label></p>
            <p>(* champs obligatoires)</p>
            <input type="submit">
          </fieldset>
        </form>
      </section>
  <script type="text/javascript">
    const price = document.getElementsByClassName('ArticleDetail-price')[0];
    price.textContent = 'libre';
  </script>
<?php
require_once("../tail.php");
?>
