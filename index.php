<!DOCTYPE html>
<html>
<head>
  <script src="/js/article-list-item.js"></script>
  <script src="/js/menu.js"></script>
  <style type="text/css">
    body {
      padding: 50px 10px;
    }
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


  </style>
  <link href="/css/article-list.css" rel="stylesheet">
  <link href="/css/admin.css" rel="stylesheet">
  <script type="text/javascript">
  </script>
 
</head>
 
  <body class="Admin">
    <a class="Admin-new" href="/baiorepar/baiorepar.php">BAIOREPAR</a>
    <a class="Admin-pending" href="/boutik/boutik.php">BOUTIK</a>
    <a class="Admin-archives" href="/boutik/boutik.php">BATTERIES</a>
  </body>


<formulaire-menu/>
</html> 

