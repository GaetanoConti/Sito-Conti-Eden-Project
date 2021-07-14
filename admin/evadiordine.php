<?php
    session_start();
	$dbconn = pg_connect("host=localhost port=5432
    dbname=ContiEdenProject
    user=postgres password=password") 
    or die('Could not connect: ' . pg_last_error());

        $id=$_GET['id'];

        $sql1="select * from ordini_prodotti where id_ordine=$id"; 
        $query1=pg_exec($sql1); 
        while ($row=pg_fetch_array($query1,null, PGSQL_ASSOC)) {
            
            $cliente = $row['cliente'];
            $idprodotto = $row['prodotto'];
            $nomeprodotto = $row['nomeprodotto'];
            $prezzo = $row['prezzo'];
            $quantita = $row['quantita'];
            $subtotal=$row['prezzototale']; 

            $q1 = "insert into archivio_ordini_prodotti(id_ordine,cliente,prodotto,nomeprodotto,prezzo,quantita,prezzototale) values($1,$2,$3,$4,$5,$6,$7)";
            $data1 = pg_query_params($dbconn, $q1, 
                array($id, $cliente, $idprodotto, $nomeprodotto, $prezzo, $quantita, $subtotal));
            }

            $sql2="select * from ordini where id=$id"; 
            $query2=pg_exec($sql2); 
            $row=pg_fetch_array($query2,null, PGSQL_ASSOC);
  
            $cliente = $row['cliente'];
            $telefono = $row['telefono'];
            $giorno = $row['giorno'];
            $fasciaoraria = $row['fasciaoraria'];
            $prezzofinale = $row['prezzofinale'];
            $numprodotti = $row['numprodotti'];

            $q2 = "insert into archivio_ordini(id,cliente,telefono,giorno,fasciaoraria,prezzofinale, numprodotti) values($1,$2,$3,$4,$5,$6,$7)";
            $data2 = pg_query_params($dbconn, $q2, 
                array($id, $cliente, $telefono, $giorno, $fasciaoraria, $prezzofinale, $numprodotti));
            
              
            $q3 = "delete from ordini where id='$id'";
            $data3 = pg_query($dbconn, $q3);

            $q4 = "delete from ordini_prodotti where id_ordine='$id'";
            $data4 = pg_query($dbconn, $q4);

            if ($data4) {
                header("Location: /admin/latoaziendaleordini.php");
                }
?>
