<?php
    session_start();
	$dbconn = pg_connect("host=localhost port=5432
    dbname=ContiEdenProject
    user=postgres password=password") 
    or die('Could not connect: ' . pg_last_error());

if (!(isset($_POST["submit"]))) {
    header("Location: /index.php"); 
}
else {
    if (isset($_COOKIE['username']) || isset($_SESSION['username'])) {
        $newgid = rand(0, 99999);

        $sql="select * from prodotti where id in ("; 
                        
        foreach($_SESSION['cart'] as $id => $value) { 
            $sql.=$id.","; 
        } 
        
        $sql=substr($sql, 0, -1).") ORDER BY nome ASC"; 
        $query=pg_exec($sql); 
        $totalprice=0; 
        while ($row=pg_fetch_array($query,null, PGSQL_ASSOC)) {
            
            $subtotal=$_SESSION['cart'][$row['id']]['quantita']*$row['prezzo']; 
            
            $cliente = $_SESSION['username'];
            $idprodotto = $row['id'];
            $nomeprodotto = $row['nome'];
            $prezzo = $row['prezzo'];
            $quantita = $_SESSION['cart'][$row['id']]['quantita'];

            $totalprice+=$subtotal; 

            $q1 = "insert into ordini_prodotti(id_ordine,cliente,prodotto,nomeprodotto,prezzo,quantita,prezzototale) values($1,$2,$3,$4,$5,$6,$7)";
            $data = pg_query_params($dbconn, $q1, 
                array($newgid, $cliente, $idprodotto, $nomeprodotto, $prezzo, $quantita, $subtotal));
            
            $q3 = "update prodotti set quantita = quantita - '$quantita' where id='$idprodotto'";
            $data = pg_query($dbconn, $q3);
            }

        
            $telefono = $_POST["telefono"];
            $data = $_POST["data"];
            $orario = $_POST["orario"];
            $numprodotti = count($_SESSION['cart']);

            $q2 = "insert into ordini(id,cliente,telefono,giorno,fasciaoraria,prezzofinale, numprodotti) values($1,$2,$3,$4,$5,$6,$7)";
            $data = pg_query_params($dbconn, $q2, 
                array($newgid,$cliente, $telefono, $data, $orario, $totalprice, $numprodotti));


            if ($data) {
                unset($_SESSION['cart']);
                header("Location: /index.php");
            }
    }
    else {
        header("Location: /gestione_utenti/paginaLogin.php"); 
    }
}

?>
