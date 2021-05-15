<?php
  session_start(); 
  if (isset($_COOKIE['username']) || isset($_SESSION['username'])) {
    if ((isset($_COOKIE['username']))) {
    $_SESSION['username'] = $_COOKIE['username'];
    }
    if ($_SESSION['username'] == 'contieden@project.it') {
      ?>
      
      
     <script>var fileNavbar='navbar_azienda.html';</script> 
  <?php
      }
      else {
        ?>
        <script>var fileNavbar='navbar_login.php';</script> 
        <?php
      }
      }
else {  ?>
  <script>      var fileNavbar='navbar_registrazione.php';  </script> 
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
  $nRow = pg_numrows($result);
  while($rows=pg_fetch_array($result,null, PGSQL_ASSOC))  {


  ?>
<head>
  <title><?php $rows['nome'] ?></title>
  <link rel="icon" href="immagini/logo3.png">
  <meta charset="utf−8" />
  <meta name="viewport" content="width=device−width, initial−scale=1.0" />
  <link rel="stylesheet" type="text/css" href="css_site/bootstrap.min.css" /> <!-- usa il css di bootstrap -->
  <link rel="stylesheet" type="text/css" href="css_site/index_style.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  <style type="text/css">
    a:link, a:visited , a:visited , a:hover, a:active{
        color: white;
        font-family: “Helvetica Neue”, Helvetica, Arial, sans-serif;
    }
    body {
  min-height: 100%;
  display: grid;
  grid-template-rows: 1fr auto;
}
.footer {
  grid-row-start: 6;
  grid-row-end: 7 ;
}

    </style>

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

<body style="background-color: #F6DAC1">

<br>
  <br>
  <br>
  <br>
  <br>
      <div class="position-static" >
        <div class="container mx-1" style="margin-top:3%;" >
          <div class="btn-group-md" role="group" aria-label="Basic example">
            <a href="categoria.php?nome=Frutta" class="btn btn-success"  style="margin-right: 10;">Frutta</a>
            <a href="categoria.php?nome=Verdura" class="btn btn-success" style="margin-right: 10;">Verdura</a>
            <a href="categoria.php?nome=Altro" class="btn btn-success">Altro</a>
          </div>
        </div>
     </div>
    
  <hr>    



  <div class="container-md my-5 mx-lg-6">  
  <div class="card3">

    <div class="card-body">
        <div class="row">
          <div class="col">
        
            <?php $file="immagini\\";
                  $file .= $rows['fotoprodotto'];?>                
              <img src= <?php echo $file; ?> class="border " width="450px" height="350px">
          </div>


      <div class="col">
        <?php 
          echo "<h2>";echo $rows['nome']; echo "</h2>";
          echo "<h5> In "; echo $rows['categoria']; echo "</h5>";
        ?>
        <p style="font-size:18px"><?php echo $rows['descrizione'];?> </p>
        <label for="example-number-input"><h4>Quantità in     <?php  echo $rows['tipoquantita'];?>:  </h4> </label>
        <form action="transizionecarrello.php?action=add&id=<?php echo $id ?>" method="POST" name="registr">
        <input name ="inputquantita" class="col-2" class="form-control"  type="number" value="" max= <?php echo $rows['quantita'] ?> min="0.1" step="0.1" id="example-number-input" required>
        <?php  echo "<h5>Disponibili: ";  echo  $rows['quantita']; echo ' '; echo $rows['tipoquantita']; echo "</h5>"; ?>

        <?php echo "<h3>"; echo $rows['prezzo']; echo " € a "; echo $rows['tipoquantita']; echo "</h3>";?>

          <?php if ($rows['quantita']>0 ) {
          ?>
            
            <a class='bottone' style='background-color: #007bff; color: white; float: left; width: 199px'> <button type="submit"  style="width:200px" name="bottoneAcquista" class="btn btn-primary">
            <img src="immagini/icona_carrello2x white.png" alt="carrello" width="30" height="30" class="d-inline-block align-top">
            Aggiungi al carrello
            </button></a>
          </form>
            <?php } else {  ?>
              <h4> <span class="badge bg-danger">Al momento non disponibile</span></h4>

            <?php  } ?>

        </div>
          </div>
      </div>

      </div>
      </div>
      </div>
      </div>


    </div>

<?php
 
    $qrandom = "select * from prodotti offset floor(random()*(select count(*) from prodotti)) limit 1;";
    $resRandom= pg_query($dbconn, $qrandom);
    $nRows = pg_numrows($resRandom);
    $stack = array();
      


?>
    <div class="container-md my-5 mx-lg-6">
  
    <div class="card-header" style="background-color: #28a745">
                    <h5 style="text-align: center; color: white ">Prodotti consigliati</h5>
                </div>
  <div class="row row-cols-1 row-cols-md-3 g-4 my-3">

              <?php  if($nRows != 0) {
                    for($i=0;$i<3;$i++){
                      $resRandom= pg_query($dbconn, $qrandom);
                      $nRows = pg_numrows($resRandom);
                      $rowsRandom = pg_fetch_array($resRandom);
                      while ($nRows == 0) {
                        $resRandom= pg_query($dbconn, $qrandom);
                        $nRows = pg_numrows($resRandom);
                      }
                      while ($rowsRandom['id'] == $rows['id'] || in_array($rowsRandom['id'],$stack) || $rowsRandom['quantita'] == 0){
                        $resRandom= pg_query($dbconn, $qrandom);
                        $rowsRandom = pg_fetch_array($resRandom);
                      }
                      array_push($stack, $rowsRandom['id']);
                    
                    $IDprodotto = $rowsRandom['id'] ??= 'default value';    ?>
                    <div class="col my-3">
                       

                        <div class="card h-100">
                            <?php $file="immagini\\";
                                $file .= $rowsRandom['fotoprodotto'] ??= 'default value';?> 
                            <img  src= <?php echo $file; ?> width="350" height="250"  class="card-img-top" alt="...">                  
                            
                            <div class="card-body">
                                <?php
                                    echo "<h4>";  echo $rowsRandom['nome'] ??= 'default value'; echo  "</h4>";     
                                    echo "<h5>"; echo $rowsRandom['prezzo'] ??= 'default value'; echo " € a "; echo $rowsRandom['tipoquantita'] ??= 'default value'; echo "</h5>";            
                                 ?>   
                                    <?php if ($rowsRandom['quantita'] ??= 'default value' >0 ) {
                                 ?>
                                    <div>
                                        <?php  echo "<a href=../scheda_prodotto.php?nome=$IDprodotto class='bottone' style='background-color: #007bff; color: white'> Acquista prodotto </a>"?>                                                       
                                    </div>
                             <?php } else {  ?>
                                <h4> <span class="badge bg-danger">Al momento non disponibile</span></h4>
                                     <div>
                                     <?php  echo "<a href=../scheda_prodotto.php?nome=$IDprodotto class='bottone' style='background-color: #007bff; color: white'> Acquista prodotto </a>"?>                                                       
                                                
                                    </div>
                                <?php  } ?>
                                
                            </div>
                        </div>
                    </div>
    
                    <?php }}}?>



            </div>              
        </div>
      </div>
    </div>
  </div>
  <br>
    <br>
    <br>
    <br>
    <br>
  

    <footer class="bg-success text-center text-white">
  <!-- Grid container -->
  <div class="container p-4 pb-0">
  <h4> Ci trovi anche qui </h4><br>
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a class="btn btn-outline-light btn-floating m-1" href="https://www.facebook.com/Conti-Eden-Project-105988287794834" role="button"
        ><i class="fab fa-facebook-f"></i
      ></a>

      <!-- Instagram -->
      <a class="footer btn btn-outline-light btn-floating m-1" href="https://www.instagram.com/contiedenproject/" role="button"
        ><i class="fab fa-instagram"></i
      ></a>
    </section>
    <!-- Section: Social media -->
    <div class="container p-4 pb-0">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Contatti
          </h6>
          <p><i class="fas fa-home me-3"></i>  Rieti, Lazio, Via Salaria, km 74/500</p>
          <p>
            <i class="fas fa-envelope me-3"></i>
            contiedenpoject@mail.com
          </p>
          <p><i class="fas fa-phone me-3"></i> +39 123456789</p>
          <p><i class="fas fa-print me-3"></i> 0746 234 567</p>
        </div>
        <!-- Grid column -->
      </div>
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2020 Copyright:
    <a class="text-white" href="https://mdbootstrap.com/">Contiedenproject.com</a>
  </div>
  <!-- Copyright -->
</footer>
</body>
</html>