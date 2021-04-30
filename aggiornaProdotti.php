<html>
<head>

</head>
<body>
<?php
	$dbconn = pg_connect("host=localhost port=5432
    dbname=ContiEdenProject
    user=postgres password=password") 
    or die('Could not connect: ' . pg_last_error());

        $nome = $_POST["prodotto"];
        $quantita = $_POST["quantita"];
        $q1 = "update prodotti set quantita = quantita + '$quantita' where nome='$nome'";
        $data = pg_query($dbconn, $q1);
            if( $data ) {                
                echo "<h1>Prodotto modificato correttamente
                 <br/></h1>" ;
                header("Location: ../latoaziendale.php");
            }


?>
</body>
</html>