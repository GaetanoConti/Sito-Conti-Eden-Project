
<html>

<head>
<title>Elenco ordini</title>
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
//$modalita=$_POST['tipoVendita'];
$datainizio=$_POST['datainizio'];
$datafine=$_POST['datafine'];

// if ($modalita <> 'tutti') {
    $query="select ord.id, acc.nome, acc.cognome, ord.telefono, ord.giorno, ord.fasciaoraria, ord.prezzofinale from ordini ord,accounts acc where ord.giorno >= '$datainizio' and ord.giorno <= '$datafine' and ord.cliente = acc.email order by ord.giorno, ord.fasciaoraria DESC;"; 
    $res = pg_exec($query);
    $nrows = pg_numrows($res);?>
    
    <h1>Elenco ordini:</h1>
    <hr style="height:1px;border:none;color:#333;background-color:#333;">
    <?php
    if($nrows != 0) { 
        ?>
        
    <?php
      for($i=0;$i<$nrows;$i++)
      {
        $row = pg_fetch_array($res); ?>
        <h2 style="text-align: center;">Ordine #<?php echo $row['id'] ?></h2>
        <table style="width:100%">
        <th width="10px"><b><i>Nome </i></b></th>
        <th width="10px"><b><i>Cognome </i></b></th>
        <th width="10px"><b><i>Telefono </i></b></th>
        <th width="10px"><b><i>Giorno</i> </b></th><br>
        <th width="10px"><b><i>Fascia oraria </i></b></th>
        <th width="10px"><b><i>Prezzo finale (in euro) </i></b></th>
     
        <tr>
       <th width="10px"><?php  print  $row['nome']  ?></th>
        <th width="10px"> <?php print $row['cognome'] ?></th>
        <th width="10px"><?php print $row['telefono'] ?></th>
        <th width="10px"> <?php print $row['giorno'] ?></th>
        <th width="10px"><?php print $row['fasciaoraria'] ?></th>
        <th width="10px"><?php print $row['prezzofinale'] ?>€</th>
        </tr>
      </table>
      
      <table style="width:60%;  margin-left: auto; margin-right: auto;">
      <h2 style="text-align: center;">Prodotti dell'ordine:</h2>
        
        <th width="10px"><b><i>Prodotto </i></b></th>
        <th width="10px"><b><i>Quantità</i></b></th>
        <th width="10px"><b><i>Prezzo totale (in euro) </i></b></th>
       
    
      <?php
        $id = $row['id'];
        $query2="select o.id,o.nomeprodotto,o.quantita,o.prezzototale,p.tipoquantita from ordini_prodotti o, prodotti p where id_ordine='$id' and p.id=o.prodotto";
        $res2 = pg_exec($query2);
        $nrows2 = pg_numrows($res2);
    
        for($j=0;$j<$nrows2;$j++)
        {
            $rows = pg_fetch_array($res2); ?>
            
            <tr>
        <th width="10px"><?php  print  $rows['nomeprodotto']  ?></th>
            <th width="10px"> <?php print $rows['quantita'] ?> <?php print $rows['tipoquantita'] ?></th>
            <th width="10px"><?php print $rows['prezzototale'] ?>€</th>
            </tr> 
            
    <?php
                }
                ?>
                </table>
                <br>
                <br>
                <br>
                <br>
                <br>
                <form  method="POST" action="/admin/evadiordine.php?id=<?php echo $id; ?>">
    <input type="submit" class="btn btn-primary" value="Evadi ordine"  style="height:50px; width:250px; background-color:yellow;margin:auto;display:block" />
      </form>
                <hr style="height:1px;border:none;color:#333;background-color:#333;">
                
                <?php
            }
        }
        else {
            ?>
            <h2>Nessun ordine esistente con i parametri selezionati</h2>
            <?php
        }  
// }
/*
else {
    $query="select ord.id, acc.nome, acc.cognome, ord.telefono, ord.giorno, ord.fasciaoraria, ord.prezzofinale, ord.modalita from ordini ord,accounts acc where ord.giorno >= '$datainizio' and ord.giorno <= '$datafine' and ord.cliente = acc.email order by ord.giorno, ord.fasciaoraria DESC;"; 
    $res = pg_exec($query);
    $nrows = pg_numrows($res);?>
    
    <h1>Elenco ordini:</h1>
    <hr style="height:1px;border:none;color:#333;background-color:#333;">
    <?php
    if($nrows != 0) { 
        ?>
        
    <?php
      for($i=0;$i<$nrows;$i++)
      {
        $row = pg_fetch_array($res); ?>
        <h2 style="text-align: center;">Ordine #<?php echo $row['id'] ?></h2>
        <table style="width:100%">
        <th width="10px"><b><i>Nome </i></b></th>
        <th width="10px"><b><i>Cognome </i></b></th>
        <th width="10px"><b><i>Telefono </i></b></th>
        <th width="10px"><b><i>Modalità</i> </b></th>
        <th width="10px"><b><i>Giorno</i> </b></th><br>
        <th width="10px"><b><i>Fascia oraria </i></b></th>
        <th width="10px"><b><i>Prezzo finale (in euro) </i></b></th>
     
        <tr>
       <th width="10px"><?php  print  $row['nome']  ?></th>
        <th width="10px"> <?php print $row['cognome'] ?></th>
        <th width="10px"><?php print $row['telefono'] ?></th>
        <th width="10px"><?php  print  $row['modalita']  ?></th>
        <th width="10px"> <?php print $row['giorno'] ?></th>
        <th width="10px"><?php print $row['fasciaoraria'] ?></th>
        <th width="10px"><?php print $row['prezzofinale'] ?>€</th>
        </tr>
      </table>
      
      <table style="width:60%;  margin-left: auto; margin-right: auto;">
      <h2 style="text-align: center;">Prodotti dell'ordine:</h2>
        
        <th width="10px"><b><i>Prodotto </i></b></th>
        <th width="10px"><b><i>Quantità</i></b></th>
        <th width="10px"><b><i>Prezzo totale (in euro) </i></b></th>
       
    
      <?php
        $id = $row['id'];
        $query2="select o.id,o.nomeprodotto,o.quantita,o.prezzototale,p.tipoquantita from ordini_prodotti o, prodotti p where id_ordine='$id' and p.id=o.prodotto";
        $res2 = pg_exec($query2);
        $nrows2 = pg_numrows($res2);
    
        for($j=0;$j<$nrows2;$j++)
        {
            $rows = pg_fetch_array($res2); ?>
            
            <tr>
        <th width="10px"><?php  print  $rows['nomeprodotto']  ?></th>
            <th width="10px"> <?php print $rows['quantita'] ?>  <?php print $rows['tipoquantita'] ?></th>
            <th width="10px"><?php print $rows['prezzototale'] ?>€</th>
            </tr> 
            
    <?php
                }
                ?>
                </table>
                <br>
                <br>
                <br>
                <br>
                <br>
                <hr style="height:1px;border:none;color:#333;background-color:#333;">
                <?php
            }
        } 
        else {
            ?>
            <h2>Nessun ordine esistente con i parametri selezionati</h2>
            <?php
        }   
    }
    */

?>
</body>
</html>