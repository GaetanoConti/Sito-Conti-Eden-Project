<?php
session_start();
$dbconn = pg_connect("host=localhost port=5432
dbname=ContiEdenProject
user=postgres password=password") 
or die('Could not connect: ' . pg_last_error());
if (($_SESSION["username"] <> 'contieden@project.it')) {
  header("Location: /index.php"); 
  ?>
<?php
}
else {
  ?>
<!DOCTYPE html>
<html>
<head>
    <title>Gestione prodotti</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>

    <div class="container" style="text-align:center">
        <h1>Gestione prodotti</h1>
        <p><h2>Da questa pagina è possibile gestire le disponibilità dei prodotti</h2></p>
  <div class="btn-group btn-group-justified" style="margin-top: 4%;"> 
    <a href="inserimentoprodotto.html" class="btn btn-primary">Inserisci nuovo prodotto</a>
    <div class="btn-group btn-group-justified">
        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
            Modifica disponibilità prodotto <span class="caret"></span></button>
        <ul class="dropdown-menu" role="menu">
          <li><a href="aggiornaprodotto.php?nome=Frutta">Frutta</a></li>
          <li><a href="aggiornaprodotto.php?nome=Verdura">Verdura</a></li>
          <li><a href="aggiornaprodotto.php?nome=Altro">Altro</a></li>
        </ul>
      </div>
    <div class="btn-group btn-group-justified">
      <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
        Elimina prodotto <span class="caret"></span></button>
      <ul class="dropdown-menu" role="menu">
          <li><a href="eliminaprodotto.php?nome=Frutta">Frutta</a></li>
          <li><a href="eliminaprodotto.php?nome=Verdura">Verdura</a></li>
          <li><a href="eliminaprodotto.php?nome=Altro">Altro</a></li>
      </ul>
    </div>
    <div class="btn-group btn-group-justified">
        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
            Visualizza prodotti <span class="caret"></span></button>
        <ul class="dropdown-menu" role="menu">
        <li><a href="/admin/visualizzaProdotti.php?nome=Tutti">Tutti</a></li>
          <li><a href="/admin/visualizzaProdotti.php?nome=Frutta">Frutta</a></li>
          <li><a href="/admin/visualizzaProdotti.php?nome=Verdura">Verdura</a></li>
          <li><a href="/admin/visualizzaProdotti.php?nome=Altro">Altro</a></li>
        </ul>
      </div>
  </div>
</div>

</body>
</html>
<?php
}
?>