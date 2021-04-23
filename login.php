<html>
<head>

</head>
<body>
<?php
$dbconn = pg_connect("host=localhost port=5432
dbname=ContiEdenProject
user=postgres password=password") 
or die('Could not connect: ' . pg_last_error());
if (!(isset($_POST["loginButton"]))) {
    header("Location:../index3.html"); 
}
if (!(isset($_POST["loginButton"]))) {
    header("Location:../index3.html"); 
}
else {
    $message = "Email errata";
    $email = $_POST["mail"];
    $q1 = "select * from accounts where email= $1";
    $result= pg_query_params($dbconn, $q1, array($email));
    if (!($line=pg_fetch_array($result, null, PGSQL_ASSOC))) {
        header("Location:../loginErrato.html");
    }
    else {
        $message = "Password errata";
        $password = md5($_POST["pass"]);
        $q2 = "select * from accounts where email= $1 and password= $2";
        $data = pg_query_params($dbconn, $q2, array($email, $password));
        if (!($line=pg_fetch_array($data, null, PGSQL_ASSOC))) {
            header("Location:../loginErrato.html");
        }
        else {
            header("Location:../index3.html");
        }
    }
}
?>
</body>
</html>