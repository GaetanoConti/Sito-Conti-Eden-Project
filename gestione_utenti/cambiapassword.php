<?php
    session_start();
	$dbconn = pg_connect("host=localhost port=5432
    dbname=ContiEdenProject
    user=postgres password=password") 
    or die('Could not connect: ' . pg_last_error());
    if (isset($_COOKIE['username'])) {
        $mail = $_COOKIE['username'];
        }
        if (isset($_SESSION['username'])) {
          $mail = $_SESSION['username'];
        }

    $oldpass = $_POST["oldpass"];
    $newpass = $_POST["newpass"];
    $newpass = md5($newpass);

    $q1 = "select password from accounts where email= '$mail'";
    $res= pg_exec($q1);
    $result= pg_result($res,null,null);
   
    if ($result==md5($oldpass)) {
        $q1 = "update accounts set password = '$newpass' where email='$mail'";
        $data = pg_query($dbconn, $q1);
            if( $data ) {                
                $_SESSION['errpass'] = 2;
                header("Location: /gestione_utenti/profilo.php");
            }
    }
    else {
        $_SESSION['errpass'] = 1;
        header("Location: /gestione_utenti/profilo.php");
    }
    