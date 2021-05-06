
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
<head>
<base href="index.php">
<link rel="stylesheet" type="text/css" href="css_site/index_style.css" />
<title>Conti Eden Project</title>
<link rel="icon" href="immagini/logo.jpg">
  <meta charset="utf−8" />
  <meta name="viewport" content="width=device−width, initial−scale=1.0" />
  <!--width=device−width rende responsive la pagina     -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" /> <!-- usa il css di bootstrap -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

  
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


<body>
  <div class="container-lg"  style="margin-top:8%; ">
    <div id="carouselExampleIndicators" class="carousel slide  carousel-fade" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>

      <div class="carousel-inner">
        <!--primo elemnto-->

        <div class="carousel-item active">
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
  <div>
    <div class="container-lg" style="margin-bottom: 8%;">
      <h2>I nostri prodotti</h2>
      <br>

      <div class="card-deck">
        <div class="card">
          <img class="card-img-top" src="immagini/frutta.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Frutta</h5>
            <p class="card-text">Non penso sia necessario spiegare cos'è la frutta</p>
            <a href="categoria.php?nome=Frutta" class="btn btn-primary">Vai ai prodotti</a>
          </div>
        </div>
        <div class="card">
          <img class="card-img-top" src="immagini/verdura.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Verdura</h5>
            <p class="card-text">Non penso sia necessario spiegare cos'è la frutta</p>
            <a href="categoria.php?nome=Verdura" class="btn btn-primary">Vai ai prodotti</a>
          </div>
        </div>
        <div class="card">
          <img class="card-img-top" src="immagini/altro.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Altro</h5>
            <p class="card-text">Non penso sia necessario spiegare cos'è la frutta</p>
              <a href="categoria.php?nome=Altro" class="btn btn-primary">Vai ai prodotti</a>

            </div>
        </div>
      </div>
    </div>
  </div>

</body>