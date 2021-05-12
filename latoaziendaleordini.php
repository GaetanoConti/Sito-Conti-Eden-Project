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
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>

    <div class="container" style="text-align:center">
        <h1>Gestione ordini</h1>
        <p><h2>Da questa pagina è possibile visualizzare gli ordini</h2></p>
        <hr style="height:1px;border:none;color:#333;background-color:#333;">
        <br>
        <br>

        <form action="visualizzaOrdini.php" method="POST">
        <div>
            <h2>Filtra gli ordini per: </h2>
        <label for="date">
              <h5><b>Giorno di inizio:</b></h5>
            </label>
            <input type="date" name="datainizio" id="giorno"  style="margin-left: 3%;" required><br>

        <label for="date">
              <h5><b>Giorno di fine:</b></h5>
            </label>
            <input type="date" name="datafine" id="giorno" style="margin-left: 4%;" required><br>
        </div>
        <div class="form-group row">
                <div class="col">
                  <div>
                    <h5><b>Metodo di acquisto</b></h5>
                    <input type="radio" id="ritira" name="tipoVendita" value="Ritira in negozio" onClick="valore=this.value;" required>
                    <label for="ritira" style="margin-right:100px;">
                      <h4>Ritira</h4>
                    </label>

                    <input type="radio" id="domicilio" name="tipoVendita" value="Domicilio" onClick="valore=this.value;">
                    <label for="ritira"  style="margin-right:100px;">
                      <h4>A domicilio</h4>
                    </label>

                    <input type="radio" id="tutti" name="tipoVendita" value="tutti" onClick="valore=this.value;">
                    <label for="ritira">
                      <h4>Tutti</h4>
                    </label>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary" >Visualizza </button>
              </div>
        </form>

        </body>
</html>
<?php
}
?>