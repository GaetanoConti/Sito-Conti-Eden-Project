
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

  <script>var fileNavbar='navbar_registrazione.html';  </script> 
  <?php
    
}
    ?>
<head>
<base href="index.php">
<link rel="stylesheet" type="text/css" href="css_site/index_style.css" />


<title>Conti Eden Project</title>
<link rel="icon" href="immagini/logo3.png">
  <meta charset="utf−8" />
  <meta name="viewport" content="width=device−width, initial−scale=1.0" />
  <!--width=device−width rende responsive la pagina     -->
  <link rel="stylesheet" type="text/css" href="css_site/bootstrap.min.css" /> <!-- usa il css di bootstrap -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  <link rel="stylesheet" type="text/css" href="css_site/index_style.css" />
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
  <div class="container-lg"  style="margin-top:8%; ">
    <div id="carouselExampleIndicators" class="carousel slide  carousel-fade" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
      </ol>

      <div class="carousel-inner">
        <!--primo elemnto-->

        <div class="carousel-item active">
          <a href="azienda.php"> <img class="d-block w-100 h-50" src="immagini/logo1.jpg" alt="Zero slide" ></a>
          <div class= "carousel-caption d-none d-md-block">
         </div>
        </div>

        <div class="carousel-item">
          <a href="scheda_prodotto.php?nome=6"> <img class="d-block w-100 h-50" src="immagini/mieleevidenza.jpeg" alt="First slide" ></a>
          <div class= "carousel-caption d-none d-md-block">
            <h3 style=" font-weight:bold;">Miele di agrumi dei monti Iblei</h3>
            <p style=" font-style:italic;"> Direttamente dall'azienda Pagliaro di Sorino (Siracusa) </p>
         </div>
        </div>
        <!-- problema se si mette la dimensioen dell'immagine a d-block w-75 h-50
          e si toglie il ridiemnsioamento fatto dopo l'allineamento viene formattato meglio ma i tatsti 
        non sranno sull'immagine ma lateralmente -->


        <div class="carousel-item">
          <!--secondo elemnto-->
          <a href="scheda_prodotto.php?nome=8"><img class="d-block w-100 h-50" src="immagini/ribes.jpeg" alt="Second slide"></a>
          <div class= "carousel-caption d-none d-md-block">
            <h3 style="font-weight:bold;">Ribes rossi</h3>
            <p style="font-style:italic;"> Li userete per una panna cotta o per una marmellata? </p>
         </div>
        </div>


        <div class="carousel-item">
          <!--terzo elemnto-->
          <a href="scheda_prodotto.php?nome=9"><img class="d-block w-100 h-50" src="immagini/melanzane.jpeg" alt="Second slide"></a>
          <div class= "carousel-caption d-none d-md-block">
            <h3 style="font-weight:bold;">Melanzane</h3>
            <p style="font-style:italic;">Direttamente dai nostri campi melanzane ovali nere e tonde bianche </p>
         </div>
        </div>

        <!--gestione pulsanti avanti e indietro per denug metetre i pulsanti scuri aggiungendo alla classe carousel control
          bg-dark -->
        <a class="carousel-control-prev " href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a> <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
      <!--chiusura carosello-->
    </div>
    <!--chiusura allinemaneto-->
  </div>
  <!--chiusura container-->
  <br>
  <br>
  <br>
  <br>
    <div class="container-lg" style="margin-bottom: 8%;">
      <h2 >I nostri prodotti</h2>
      <br>
      <div class="card-deck">
        <div class="card">
          <img class="card-img-top" src="immagini/frutta.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Frutta</h5>
            <p class="card-text">Assapora la nostra deliziosa frutta, ti sorprenderemo </p>
            <a href="categoria.php?nome=Frutta" class="bottone" style="background-color: #007bff; color: white; ">Vai ai prodotti</a>
          </div>
        </div>
        <div class="card">
          <img class="card-img-top" src="immagini/verdura.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Verdura</h5>
            <p class="card-text">Gusta il sapore autentico della verdura dei nostri campi</p>
            <a href="categoria.php?nome=Verdura" class="bottone" style="background-color: #007bff; color: white;">Vai ai prodotti</a>
          </div>
        </div>
        <div class="card">
          <img class="card-img-top" src="immagini/altro.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Altro</h5>
            <p class="card-text">Uova, farina, miele, scopri tutti i nostri prodotti</p>
              <a href="categoria.php?nome=Altro" class="bottone" style="background-color: #007bff; color: white">Vai ai prodotti</a>
            </div>
        </div>
      </div>
    </div>
  

  <footer class="footer bg-success text-center text-white">
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
      <a class="btn btn-outline-light btn-floating m-1" href="https://www.instagram.com/contiedenproject/" role="button"
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