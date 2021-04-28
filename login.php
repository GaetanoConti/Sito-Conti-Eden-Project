<?php
session_start();
$dbconn = pg_connect("host=localhost port=5432
dbname=ContiEdenProject
user=postgres password=password") 
or die('Could not connect: ' . pg_last_error());
if (!(isset($_POST["loginButton"]))) {
    header("Location:../index3.php"); 
}
if (!(isset($_POST["loginButton"]))) {
    header("Location:../index3.php"); 
}
else {
    $message = "Email errata";
    $email = $_POST["mail"];
    $q1 = "select * from accounts where email= $1";
    $result= pg_query_params($dbconn, $q1, array($email));
    if (!($line=pg_fetch_array($result, null, PGSQL_ASSOC))) {
        $_SESSION['loginerror'] = 1;
        header("Location:../paginaLogin.php");
    }
    else {
        $password = md5($_POST["pass"]);
        $q2 = "select * from accounts where email= $1 and password= $2";
        $data = pg_query_params($dbconn, $q2, array($email, $password));
        if (!($line=pg_fetch_array($data, null, PGSQL_ASSOC))) {
            $_SESSION['loginerror'] = 1;
            header("Location:../paginaLogin.php");
        }
        else {
            setcookie("username", $email, time()+86400 *365, "/");
            $_SESSION['username'] = $_COOKIE['username'];
            header("Location: index3.php");
        }
    }
}
?>