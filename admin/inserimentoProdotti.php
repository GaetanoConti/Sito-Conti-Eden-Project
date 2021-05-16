<html>
<head>

</head>
<body>
<?php
	$dbconn = pg_connect("host=localhost port=5432
    dbname=ContiEdenProject
    user=postgres password=password") 
    or die('Could not connect: ' . pg_last_error());

{
        $nome = $_POST["inputProdotto"];
        $categoria = $_POST["categoria"];
        $prezzo = $_POST["prezzo"];
        $tipoquantita = $_POST["tipoQuantita"];
        $quantita = $_POST["quantita"];
        $fotoprodotto=$_POST['fotoProdotto'];
        $descrizione=$_POST["descrizione"];
        $q1 = "insert into prodotti (nome,categoria,prezzo,tipoquantita,quantita,fotoprodotto,descrizione) values($1,$2,$3,$4,$5,$6,$7)";
        $data = pg_query_params($dbconn, $q1, 
            array($nome, $categoria, $prezzo, $tipoquantita, $quantita, $fotoprodotto,  $descrizione));
            if( $data ) {                
                header("Location: /admin/latoaziendale.php");
                }
}

?>
</body>
</html>