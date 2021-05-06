<?php
  session_start(); 
  if (isset($_COOKIE['username']) || isset($_SESSION['username'])) {
    if ((isset($_COOKIE['username']))) {
    $_SESSION['username'] = $_COOKIE['username'];
    }
    ?>
   <script>var fileNavbar='navbar_login.html';</script> 
<?php
    }
else {  ?>
  <script>      var fileNavbar='navbar_registrazione.html';  </script> 
  <?php
}
    ?>
<?php

  $dbconn = pg_connect("host=localhost port=5432
  dbname=ContiEdenProject
  user=postgres password=password") 
  or die('Could not connect: ' . pg_last_error());
  $id=$_GET['nome'];
  $q1 = "select * from prodotti where id= '$id'";

  $result= pg_query_params($dbconn, $q1, array());
  while($rows=pg_fetch_array($result,null, PGSQL_ASSOC))  {


  ?>
<head>
  <title><?php $rows['nome'] ?></title>
  <meta charset="utf−8" />
  <meta name="viewport" content="width=device−width, initial−scale=1.0" />
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" /> <!-- usa il css di bootstrap -->
  <link rel="stylesheet" type="text/css" href="css_site/index_style.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


  
<script>

$(function() {
  var includi =$('[data-include]');
  jQuery.each(includi, function(){

  $(this).load(fileNavbar);
   });
});


</script>

<div data-include="header"></div>
</head>
</head>

<body>

  <br>
  <br>
  <br>
  <br>
  <br>



                    
  

      <div class="position-static">
        <div class="container mx-1" style="margin-top:3%; ;">
          <div class="btn-group-md" role="group" aria-label="Basic example">
            <a href="categoria.php?nome=Frutta" class="btn btn-primary" style="margin-right: 10;">Frutta</a>
            <a href="categoria.php?nome=Verdura" class="btn btn-primary" style="margin-right: 10;">Verdura</a>
            <a href="categoria.php?nome=Altro" class="btn btn-primary" style="margin-right: 10;">Altro</a>
          </div>
        </div>
     </div>
    
  <hr>    



  <div class="container-md my-5 mx-lg-5">
   
  
    <div class="row">
      <div class="col">
         <?php $file="immagini\\";
              $file .= $rows['fotoprodotto'];?>                
        <img src= <?php echo $file; ?>  width="450px" height="350px">
      </div>


      <div class="col">
        <?php 
          echo "<h2>";echo $rows['nome']; echo "</h2>";
          echo "<h5> In "; echo $rows['categoria']; echo "</h5>";
        ?>
        <label for="example-number-input"><h4>Quntità in     <?php  echo $rows['tipoquantita'];?>:  </h4> </label>
        <input class="col-2" class="form-control"  type="number" value="" max= <?php echo $rows['quantita'] ?> min="0.0" step="0.1" id="example-number-input">
        <?php  echo "<h5>Disponibili: ";  echo  $rows['quantita']; echo "</h5>"; ?>

        <?php echo "<h3>"; echo $rows['prezzo']; echo " € a "; echo $rows['tipoquantita']; echo "</h3>";?>

          <?php if ($rows['quantita']>0 ) {
          ?>
            <button type="button" name="bottoneAcquista" class="btn btn-primary">
            <img src="immagini/icona_carrello2x white.png" alt="carrello" width="30" height="30" class="d-inline-block align-top">
            Aggiungi al carrello
            
            </button>

            <?php } else {  ?>
              <h4> <span class="badge bg-danger">Al momento non disponibile</span></h4>

            <?php  } ?>

        </div>
          </div>
      </div>



    </div>



    <div class="container-md my-5 mx-lg-5">
      <div class="card text-center">
        <div class="card-header">
          <ul class="nav nav-pills card-header-pills">
            <li class="nav-item">
              <a class="nav-link active" href="#">Informazioni generali</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Dettagli di produzione</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="#" tabindex="-1" aria-disabled="true">Ingredienti</a>
            </li>
          </ul>
        </div>
        <div class="card-body">
          <h5 class="card-title">Special title treatment</h5>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        </div>
      </div>
    </div>
  </div>
<?php 
  }
?>
</body>
</html>