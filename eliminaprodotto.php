<?php
session_start();
$dbconn = pg_connect("host=localhost port=5432
dbname=ContiEdenProject
user=postgres password=password") 
or die('Could not connect: ' . pg_last_error());
$nome=$_GET['nome'];
$query = "select nome from prodotti where categoria='$nome';";
$result= pg_query($dbconn, $query);
?>
<html>
<head>
    <h1>Pagina di eliminazione dei prodotti nel db</h1>
</head>
<body>
<form  action="eliminaProdotti.php" method="POST" >
    Nome prodotto:        
<select name="prodotto">
<option value="" selected></option>
<?php 
while ($row = pg_fetch_array($result, null, PGSQL_ASSOC))
{
    echo "<option value=".$row['nome'].">".$row['nome']."</option>";
}
?>        
</select>
<br>
<br>    
<button type="submit" >Elimina </button>
<button type="reset" >Reset </button>

</form>
</body>
</html>