<?php
session_start();
$dbconn = pg_connect("host=localhost port=5432
dbname=ContiEdenProject
user=postgres password=password") 
or die('Could not connect: ' . pg_last_error());
$nome=$_GET['nome'];
$query = "select * from prodotti where categoria='$nome';";
$result= pg_query($dbconn, $query);
?>
<html>
<head>
    <h1>Pagina di aggiornamento della disponibilità dei prodotti nel db</h1>
</head>
<body>
<form  action="aggiornaProdotti.php" method="POST" >
    Nome prodotto:        
<select name="IDprodotto">
        <option value="" selected></option>
        <?php 
        while ($row = pg_fetch_array($result, null, PGSQL_ASSOC))
        {
            echo "<option value=".$row["id"].">".$row["nome"]."</option>";    

        }
        
        ?>        
        </select>
    
        
<br>
<br>    

Quantità da aggiungere:
    <input type="number" min="0.1" step="0.1" name="quantita"
    placeholder="" required autofocus/><br>
    
<button type="submit" >Aggiorna </button>
<button type="reset" >Reset </button>

</form>
</body>
</html>