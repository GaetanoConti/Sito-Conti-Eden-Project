<?php
    session_start();
	$dbconn = pg_connect("host=localhost port=5432
    dbname=ContiEdenProject
    user=postgres password=password") 
    or die('Could not connect: ' . pg_last_error());
if (!(isset($_POST["registrationButton"]))) {
    header("Location:../index.php"); 
}
else {
    $email = $_POST["mail"];
    $q1 = "select * from accounts where email= $1";
    $result= pg_query_params($dbconn, $q1, array($email));
    if ($line=pg_fetch_array($result, null, PGSQL_ASSOC)) {
        $_SESSION['registrationerror'] = 1;
        header("Location:../paginaRegistrazione.php");
    }
    else {
        $nome = $_POST["nome"];
        $cognome = $_POST["cognome"];
        $telefono = $_POST["telefono"];
        $password = md5($_POST["pass"]);
        $q2 = "insert into accounts values($1,$2,$3,$4,$5)";
        $data = pg_query_params($dbconn, $q2, 
            array($email, $password, $nome, $cognome, $telefono));
        if ($data) {
            header("Location:../paginaLogin.php");
        }
    }
}

?>
