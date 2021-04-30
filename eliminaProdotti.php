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
        $q1 = "delete from prodotti where nome='$nome'";
        $data = pg_query($dbconn, $q1);
            if( $data ) {                
                header("Location: ../latoaziendale.php");
            }


?>
</body>
</html>