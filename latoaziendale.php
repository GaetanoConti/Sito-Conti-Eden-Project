<?php
session_start();
$dbconn = pg_connect("host=localhost port=5432
dbname=ContiEdenProject
user=postgres password=password") 
or die('Could not connect: ' . pg_last_error());
if (($_SESSION["username"] <> 'contieden@project.it')) {
  header("Location:../index.php"); 
  ?>
<?php
}
else {
  ?>
<!DOCTYPE html>
<html>
<head>
    <title>Gestione Azienda</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css_site/index_style.css" />
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" /> <!-- usa il css di bootstrap -->
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  
</head>
<body>

    <div class="container" style="text-align:center">
        <h1>Benvenuto nel lato aziendale del sito</h1>
        <p><h2>Da questa pagina è possibile gestire gli ordini dei clienti e le disponibilità dei prodotti</h2></p>
  <div class="btn-group btn-group-justified" style="margin-top: 4%;"> 
    <a href="latoaziendaleordini.php" class="btn btn-primary">Gestione ordini</a>
    <a href="latoaziendaleprodotti.php" class="btn btn-primary">Gestione prodotti</a>
   
  </div>
</div>

</body>
</html>
<?php
}
?>