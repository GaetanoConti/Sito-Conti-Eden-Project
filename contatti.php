<?php
    session_start();
	$dbconn = pg_connect("host=localhost port=5432
    dbname=ContiEdenProject
    user=postgres password=password") 
    or die('Could not connect: ' . pg_last_error());
    if (!(isset($_POST["submit"]))) {
        header("Location:../azienda.html"); 
    }
    else {
        $nome = $_POST["name"];
        $email = $_POST["email"];
        $commento = $_POST["comments"];
        $q2 = "insert into contattaci values($1,$2,$3)";
        $data = pg_query_params($dbconn, $q2, 
            array($nome, $email, $commento));
        if ($data) {
            header("Location:../azienda.html");
        }
    }


?>
