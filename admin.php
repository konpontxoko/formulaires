<html>
  <head>
  <script src="./article-list-item.js"></script>
  <script src="./menu.js"></script>
  <style type="text/css">
    body {
      padding: 50px 10px;
    }
  </style>
  <link href="./article-list.css" rel="stylesheet">


  <style>
    .Admin {
      background: #ddd;
      height: 100%;
      display: grid;
      grid-template-rows: 1fr 1fr 1fr;
      grid-template-columns: 1fr 1fr 1fr;
      grid-template-areas: 
      ". . ."
      "new pending archives"
      ". . database";
    }
    .Admin > * {
      display: flex;
      justify-content: center;
      align-items: center;
      text-decoration: none;
      color: black;
      text-transform: uppercase;
    }
    .Admin > *:hover {
      font-weight: bold;
    }
    .Admin-new {
      grid-area: new;
      background: #eee;
    }
    .Admin-pending {
      grid-area: pending;
      background: #ccc;
    }
    .Admin-archives {
      grid-area: archives;
      background: #eee;
    }
    .Admin-database {
      grid-area: database;
      background: #ccc;
    }
  </style>
  <script type="text/javascript">
  </script>
  </head>
  <body class="Admin">
    <a class="Admin-new" href="./new">Nouvel article</a>
    <a class="Admin-pending" href="./pending">Articles en attente</a>
    <a class="Admin-archives" href="./archives">Archives</a>
    <a class="Admin-database" href="./samples/events.json">Voir le contenu de la base de données</a>
  </body>

<formulaire-menu/>
</html>
