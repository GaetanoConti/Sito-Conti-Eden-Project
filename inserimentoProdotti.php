<html>
<head>

</head>
<body>
<?php
	$dbconn = pg_connect("host=localhost port=5432
    dbname=conti_eden
    user=postgres password=password") 
    or die('Could not connect: ' . pg_last_error());

{
        $nome = $_POST["inputProdotto"];
        $categoria = $_POST["categoria"];
        $prezzo = $_POST["prezzo"];
        $tipoQauntita = $_POST["tipoQauntita"];
        $quantita = $_POST["quantita"];
        $fotoProdotto=$_POST['fotoProdotto'];
        $descrizione=$_POST["descrizione"];
        $q1 = "insert into prodotti values($1,$2,$3,$4,$5, $6,$7)";
        $data = pg_query_params($dbconn, $q1, 
            array($nome, $categoria, $prezzo, $tipoQauntita, $quantita,$fotoProdotto,  $descrizione));
            if( $data ) {                
                echo "<h1>Prodotto isnerito correttamente
                 <br/></h1>" ;
                echo "<a href=admin.html>Premi qui
                </a>per inserire un altro prodotto " ;
                }
}

?>
</body>
</html>