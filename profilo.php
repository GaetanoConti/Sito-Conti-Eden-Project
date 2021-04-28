<?php
  session_start();
  $dbconn = pg_connect("host=localhost port=5432
  dbname=ContiEdenProject
  user=postgres password=password") 
  or die('Could not connect: ' . pg_last_error());
  $mail = $_COOKIE['username'];
  $q1 = "select * from accounts where email= $1";
  $result= pg_query_params($dbconn, $q1, array($mail));
  while($rows=pg_fetch_array($result,null, PGSQL_ASSOC))  {
?>

<html>
<head>
    <meta charset="utf-8">
    <title>Profilo</title>
    <link rel="icon" href="immagini/logo.jpg">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://netdna.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
    	body{
    margin-top:20px;
    color: #1a202c;
    text-align: left;
    background-color: #fae9dd;    
}
.main-body {
    padding: 15px;
}
.card {
    box-shadow: 0 1px 3px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.06);
}

.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid rgba(0,0,0,.125);
    border-radius: .25rem;
}

.card-body {
    flex: 1 1 auto;
    min-height: 1px;
    padding: 1rem;
}

.gutters-sm {
    margin-right: -8px;
    margin-left: -8px;
}

.gutters-sm>.col, .gutters-sm>[class*=col-] {
    padding-right: 8px;
    padding-left: 8px;
}
.mb-3, .my-3 {
    margin-bottom: 1rem!important;
}

.bg-gray-300 {
    background-color: #e2e8f0;
}
.h-100 {
    height: 100%!important;
}
.shadow-none {
    box-shadow: none!important;
}
br {
   line-height: 80%;
}
  .inline {
  display: inline;
}

.navbar-brand {
  background: none;
  border: none;
}
.link-button {
  background: none;
  border: none;
  color: black;
  cursor: pointer;
  font-size: 1em;
  font-family: serif;
}
.link-button:focus {
  outline: none;
}
.link-button:active {
  color:red;
}

    </style>
</head>
<body>
<div class="container">
    <div class="main-body">
    
        <!--navbar-->
  <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light ">
    <a class="navbar-brand" href="index3.php">Conti Eden</a>


    <div class="col">
      <!--form di ricerca-->
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Cerca" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Cerca</button>
      </form>
    </div>
    <nav class="navbar navbar-light bg-light">
      <a class="navbar-brand" href="profilo.php">
        <img src="immagini/icona_carrello2x.png" alt="carrello" width="30" height="30" class="d-inline-block align-top"
          alt="">
        Carrello
      </a>
    </nav>



    <nav class="navbar navbar-light bg-light">
      <a class="navbar-brand" href="azienda.html">
        <img src="immagini/home.png" alt="azienda" width="30" height="30" class="d-inline-block align-top" alt="">
        L'azienda
      </a>
    </nav>

    <nav class="navbar navbar-light bg-light">
    <img src="immagini/account.png" alt="account" width="30" height="30" class="d-inline-block align-top" alt="">
    <form action="logout.php" method="POST">
    <input type="hidden" name="extra_submit_param" value="extra_submit_value">
    <br>
    <button type="submit" name="submit_param" value="submit_value" class="navbar-brand">
      Logout
    </button>  
    </form>
    </nav>
    </div>
  </nav>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <!-- /Breadcrumb -->
    
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="immagini/logo.jpg" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4><?php echo $rows['nome']; ?> <?php echo $rows['cognome']; ?></h4>
                      <button class="btn btn-primary">Ordini</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card mt-3">
              </div>
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Nome</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $rows['nome']; ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Cognome</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $rows['cognome']; ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $_COOKIE['username']; ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Telefono</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $rows['telefono']; ?>
                    </div>
                  </div>
                </div>
              </div>
          </div>
        </div>
    </div>
<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script type="text/javascript">
<?php 
  }
?>
</script>
</body>
</html>