<?php
    session_start();
     if ($_SERVER['REQUEST_METHOD']=="POST") {
        unset($_SESSION['username']);
        setcookie("username", "", time() -3600);
        session_destroy();
        header("Location: index.php" );
    }
?>