<?php
  session_start(); 
  if (isset($_COOKIE['username']) || isset($_SESSION['username'])) {
    if ((isset($_COOKIE['username']))) {
    $_SESSION['username'] = $_COOKIE['username'];
    }
    ?>
<head>
<base href="index3.php">
<style>
  br {
   line-height: 100%;
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
.container-lg {
  height: 500px;
}
.carousel-item img{
    min-height: 500px;
}
</style>
<title>Conti Eden Project</title>
<link rel="icon" href="immagini/logo.jpg">
  <meta charset="utf−8" />
  <meta name="viewport" content="width=device−width, initial−scale=1.0" />
  <!--width=device−width rende responsive la pagina     -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" /> <!-- usa il css di bootstrap -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>


  <div>
  <!--navbar-->
  <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light ">
    <a class="navbar-brand" href="#">Conti Eden Project</a>


    <div class="col">
      <!--form di ricerca-->
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Cerca" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Cerca</button>
      </form>
    </div>
    <nav class="navbar navbar-light bg-light">
      <a class="navbar-brand" href="#">
        <img src="immagini/icona_carrello2x.png" alt="carrello" width="30" height="30" class="d-inline-block align-top"
          alt="">
        Carrello
      </a>
    </nav>
    <nav class="navbar navbar-light bg-light">
      <a class="navbar-brand" href="azienda.php">
        <img src="immagini/home.png" alt="azienda" width="30" height="30" class="d-inline-block align-top" alt="">
        L'azienda
      </a>
    </nav>

    <nav class="navbar navbar-light bg-light">
    <a class="navbar-brand" href="profilo.php">
    <img src="immagini/account.png" alt="account" width="30" height="30" class="d-inline-block align-top" alt="">
    Profilo
    </a>
    <a class="navbar-brand">
      |
    </a>
    </a>
    <form action="logout.php" method="POST">
    <input type="hidden" name="extra_submit_param" value="extra_submit_value">
    <br>
    <button type="submit" name="submit_param" value="submit_value" class="navbar-brand">
      Logout
    </button>  
    </form>
    </nav>
  </nav>
</div>
</head>






<body>
  <div class="container-lg"  style="margin-top:8%; ">
    <div align="center"></div>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>

      <div class="carousel-inner">
        <!--primo elemnto-->

        <div class="carousel-item active">
          <img class="d-block w-100 h-50" src="immagini/logo.jpg" alt="First slide">
        </div>
        <!-- problema se si mette la dimensioen dell'immagine a d-block w-75 h-50
          e si toglie il ridiemnsioamento fatto dopo l'allineamento viene formattato meglio ma i tatsti 
        non sranno sull'immagine ma lateralmente -->


        <div class="carousel-item">
          <!--secondo elemnto-->
          <img class="d-block w-100 h-50" src="immagini/prova2.jpg" alt="Second slide">
        </div>


        <div class="carousel-item">
          <!--terzo elemnto-->
          <img class="d-block w-100 h-50" src="immagini/prova3.jpg" alt="Second slide">
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
<?php
  }
else {
?>

<head>
  <base href="index3.php">
  <title>Conti Eden Project</title>
  <link rel="icon" href="immagini/logo.jpg">
  <meta charset="utf−8" />
  <meta name="viewport" content="width=device−width, initial−scale=1.0" />
  <!--width=device−width rende responsive la pagina     -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" /> <!-- usa il css di bootstrap -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

  <style>
    
  br {
   line-height: 100%;
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
.container-lg {
  height: 500px;
}
.carousel-item img{
    min-height: 500px;
}
</style>

  <!--navbar-->
  <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light ">
    <a class="navbar-brand" href="#">Conti Eden Project</a>


    <div class="col">
      <!--form di ricerca-->
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Cerca" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Cerca</button>
      </form>
    </div>
    <nav class="navbar navbar-light bg-light">
      <a class="navbar-brand" href="#">
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
        <a class="navbar-brand" href="paginaLogin.php">
            <img src="immagini/account.png" alt="account" width="30" height="30" class="d-inline-block align-top" alt="">
            Accedi
          </a>
          <a class="navbar-brand">
            |
          </a>
          <a class="navbar-brand" href="paginaRegistrazione.php">
            Registrati
          </a>
    </nav>
    </div>
  </nav>



</head>






<body>



  <!---->
  <!--allineamento del carousel al centro-->
  <!--  <div class="w-75 h-50 p-3">-->
  <!-- dimensione carosusel-->

  <!--componente carousel-->

  <div class="container-lg"  style="margin-top:8%;">
    <div align="center"></div>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>

      <div class="carousel-inner">
        <!--primo elemnto-->

        <div class="carousel-item active">
          <img class="d-block w-100 h-50" src="immagini/logo.jpg" alt="First slide">
        </div>
        <!-- problema se si mette la dimensioen dell'immagine a d-block w-75 h-50
          e si toglie il ridiemnsioamento fatto dopo l'allineamento viene formattato meglio ma i tatsti 
        non sranno sull'immagine ma lateralmente -->


        <div class="carousel-item">
          <!--secondo elemnto-->
          <img class="d-block w-100 h-50" src="immagini/prova2.jpg" alt="Second slide">
        </div>


        <div class="carousel-item">
          <!--terzo elemnto-->
          <img class="d-block w-100 h-50" src="immagini/prova3.jpg" alt="Second slide">
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
    <div class="container-lg">
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
<?php
	}
?>