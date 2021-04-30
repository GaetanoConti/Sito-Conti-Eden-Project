
<html>

<head>
<title>Elenco prodotti</title>
<style>
table, th, td {
  border: 1px solid ;
  border-collapse: collapse;
}
th, td {
  padding: 1px;
  text-align: left;
}
#t01 {
  width: 100%;    
}



</style>
</head>
<body>

<?php
$dbconn = pg_connect("host=localhost port=5432
dbname=ContiEdenProject
user=postgres password=password") 
or die('Could not connect: ' . pg_last_error());
$nome=$_GET['nome'];
if ($nome <> 'Tutti') {
$query="select * from prodotti where categoria = '$nome';"; 

$res = pg_exec($query);

$nrows = pg_numrows($res);?>

<h2>Elenco prodotti in  <?php echo $nome; ?></h2>
<?php
if($nrows != 0)
{ ?>
    <table style="width:100%">
 
    <th width="10px"><b><i>Nome </i></b></th>
    <th width="10px"><b><i>Prezzo (in euro)</i> </b></th>
    <th width="10px"><b><i>Quantita disponibile</i> </b></th><br>
<?php
  for($i=0;$i<$nrows;$i++)
  {
    $row = pg_fetch_array($res); ?>


     <tr>
   <th width="10px"><?php  print  $row['nome']  ?></th>
    <th width="10px"> <?php print $row['prezzo'] ?></th>
    <th width="10px"><?php print $row['quantita'] ?></th>
  </tr>
  
  

<?php
  }
}
}
else {
    $query="select * from prodotti;"; 

$res = pg_exec($query);

$nrows = pg_numrows($res);?>

<h2>Elenco prodotti in  <?php echo $nome; ?></h2>
<?php
if($nrows != 0)
{ ?>
    <table style="width:100%">
 
    <th width="10px"><b><i>Nome </i></b></th>
    <th width="10px"><b><i>Categoria</i> </b></th>
    <th width="10px"><b><i>Prezzo (in euro)</i> </b></th>
    <th width="10px"><b><i>Quantita disponibile</i> </b></th><br>
<?php
  for($i=0;$i<$nrows;$i++)
  {
    $row = pg_fetch_array($res); ?>


     <tr>
   <th width="10px"><?php  print  $row['nome']  ?></th>
   <th width="10px"><?php  print  $row['categoria']  ?></th>
    <th width="10px"> <?php print $row['prezzo'] ?></th>
    <th width="10px"><?php print $row['quantita'] ?></th>
  </tr>
  
  

<?php
  }
}
}

?>
</body>
</html>