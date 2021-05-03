<html>
<head>

</head>
<body>
<?php
	$dbconn = pg_connect("host=localhost port=5432
    dbname=ContiEdenProject
    user=postgres password=password") 
    or die('Could not connect: ' . pg_last_error());

        $id= $_POST["IDprodotto"];
        $q1 = "delete from prodotti where id='$id'";
        $data = pg_query($dbconn, $q1);
            if( $data ) {                
                header("Location: ../latoaziendale.php");
            }
?>
</body>
</html>