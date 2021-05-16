<html>
<head>

</head>
<body>
<?php
	$dbconn = pg_connect("host=localhost port=5432
    dbname=ContiEdenProject
    user=postgres password=password") 
    or die('Could not connect: ' . pg_last_error());

        $id = $_POST["IDprodotto"];
        $quantita = $_POST["quantita"];
        $q1 = "update prodotti set quantita = quantita + '$quantita' where id='$id'";
        $data = pg_query($dbconn, $q1);
            if( $data ) {                
                header("Location: /admin/latoaziendale.php");
            }


?>
</body>
</html>