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
  $q1 = "select * from accounts where email= $1";
  $result= pg_query_params($dbconn, $q1, array($mail));
  while($rows=pg_fetch_array($result,null, PGSQL_ASSOC))  {
?>
<script>var fileNavbar='navbar_login.html';</script> 

<html>
<head>
    <meta charset="utf-8">
    <title>Profilo</title>
    <link rel="icon" href="immagini/logo.jpg">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://netdna.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel = "stylesheet" href = "css_site/profilo_style.css">
    <link rel="stylesheet" type="text/css" href="css_site/index_style.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


</head>
<body>
<div class="container">
    <div class="main-body">
    <script>

$(function() {
  var includi =$('[data-include]');
  jQuery.each(includi, function(){

  $(this).load(fileNavbar);
   });
});


</script>

<div data-include="header"></div>
    </div>
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
                    <?php echo $rows['email']; ?>
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