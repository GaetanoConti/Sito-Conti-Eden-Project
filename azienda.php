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
<script>var fileNavbar='navbar_registrazione.html';</script> 
 
  <?php
    
}
    ?>
<!DOCTYPE html>
<html>
<head>
  <script>
    function ringraziamento() {
          alert("Grazie per il tuo commento!");
    }
  </script>
  <title>Chi siamo</title>
  <link rel="icon" href="immagini/logo.jpg">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel = "stylesheet" href = "css_site/azienda_style.css">
  <link rel = "stylesheet" href = "css_site/index_style.css">
  <link rel="stylesheet" type="text/css" href="css_site/azienda.css" />
  <link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>  
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

<div class="container-lg">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="5"></li>
        <li data-target="#myCarousel" data-slide-to="6"></li>
        <li data-target="#myCarousel" data-slide-to="7"></li>
        <li data-target="#myCarousel" data-slide-to="8"></li>
        <li data-target="#myCarousel" data-slide-to="9"></li>
        <li data-target="#myCarousel" data-slide-to="10"></li>
        <li data-target="#myCarousel" data-slide-to="11"></li>
        <li data-target="#myCarousel" data-slide-to="12"></li>
      </ol>

      
    
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="immagini/foto11.jpeg" alt="New York" width="1200" height="700">
        <div class="carousel-caption">
          <h3>La nostra azienda</h3>
          <p>Un bellissimo campo di insalate Conti Eden Project</p>
        </div>      
      </div>

      <div class="item">
        <img src="immagini/foto1.jpeg" alt="Chicago" width="1200" height="700">
        <div class="carousel-caption">
          <h3>La nostra azienda</h3>
          <p>Zappo a vigna</p>
        </div>      
      </div>
    
      <div class="item">
        <img src="immagini/foto2.jpeg" alt="Los Angeles" width="1200" height="700">
        <div class="carousel-caption">
          <h3>La nostra azienda</h3>
          <p>Magnate sta bella mela</p>
        </div>      
      </div>

      <div class="item">
        <img src="immagini/foto3.jpeg" alt="Chicago" width="1200" height="700">
        <div class="carousel-caption">
          <h3>La nostra azienda</h3>
          <p>Zappo a vigna</p>
        </div>      
      </div>

      <div class="item">
        <img src="immagini/foto4.jpeg" alt="Chicago" width="1200" height="700">
        <div class="carousel-caption">
          <h3>La nostra azienda</h3>
          <p>Zappo a vigna</p>
        </div>      
      </div>

      <div class="item">
        <img src="immagini/foto5.jpeg" alt="Chicago" width="1200" height="700">
        <div class="carousel-caption">
          <h3>La nostra azienda</h3>
          <p>Zappo a vigna</p>
        </div>      
      </div>

      <div class="item">
        <img src="immagini/foto6.jpeg" alt="Chicago" width="1200" height="700">
        <div class="carousel-caption">
          <h3>La nostra azienda</h3>
          <p>Zappo a vigna</p>
        </div>      
      </div>

      <div class="item">
        <img src="immagini/foto7.jpeg" alt="Chicago" width="1200" height="700">
        <div class="carousel-caption">
          <h3>La nostra azienda</h3>
          <p>Zappo a vigna</p>
        </div>      
      </div>

      <div class="item">
        <img src="immagini/foto8.jpeg" alt="Chicago" width="1200" height="700">
        <div class="carousel-caption">
          <h3>La nostra azienda</h3>
          <p>Zappo a vigna</p>
        </div>      
      </div>

      <div class="item">
        <img src="immagini/foto9.jpeg" alt="Chicago" width="1200" height="700">
        <div class="carousel-caption">
          <h3>La nostra azienda</h3>
          <p>Zappo a vigna</p>
        </div>      
      </div>

      <div class="item">
        <img src="immagini/foto10.jpeg" alt="Chicago" width="1200" height="700">
        <div class="carousel-caption">
          <h3>La nostra azienda</h3>
          <p>Zappo a vigna</p>
        </div>      
      </div>

      <div class="item">
        <img src="immagini/foto13.jpeg" alt="Chicago" width="1200" height="700">
        <div class="carousel-caption">
          <h3>La nostra azienda</h3>
          <p>Zappo a vigna</p>
        </div>      
      </div>

      <div class="item">
        <img src="immagini/foto12.jpeg" alt="Chicago" width="1200" height="700">
        <div class="carousel-caption">
          <h3>La nostra azienda</h3>
          <p>Zappo a vigna</p>
        </div>      
      </div>
   

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
      </div>
</div>



<!-- Container (The Band Section) -->
<div id="band" class="container text-center">
  <h3>L'AZIENDA</h3>
  <p><em>Conti Eden Project</em></p>
  <p> Mi chiamo Davide Conti, sono un imprenditore agricolo, da più di dieci anni ho coltivato piante ornamentali nell’azienda di famiglia, ora finalmente ho coronato il mio sogno di mettermi in proprio. Conti Eden Project è una piccola azienda di produzione e vendita di ortaggi e frutta appena raccolti. La fertilità dei terreni sulle rive del Torano permette la crescita in maniera naturale e l’amore che nutro per tutto ciò che cresce mi spinge ad impegnarmi con tutto me stesso su quello che voglio fare per il resto della mia vita.</p>
  <br>
  <br>
  <div class="row">
    <div class="col-sm-4">
      <p class="text-center"><strong>Davide</strong></p><br>
        <img src="immagini/davide.jpg" class="img-circle person" alt="Davide" width="255" height="255">
      <div>
        <p>Fondatore dell'azienda</p>
        <p>Amante della natura</p>
        <p>Prima operaio presso Conti Piante SRL</p>
      </div>
    </div>
    <div class="col-sm-4">
      <p class="text-center"><strong>Altra persona 1</strong></p><br>
        <img src="immagini/davide.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
      <div>
        <p>Drummer</p>
        <p>Loves drummin'</p>
        <p>Member since 1988</p>
      </div>
    </div>
    <div class="col-sm-4">
      <p class="text-center"><strong>Altra persona 2</strong></p><br>
        <img src="immagini/davide.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
      <div>
        <p>Bass player</p>
        <p>Loves math</p>
        <p>Member since 2005</p>
      </div>
    </div>
  </div>
</div>

<!-- Container (Contact Section) -->
<div id="contact" class="container">
  <!--Google map-->
  <div class="text-center">
      <h3>Ci trovi qui!</h3>
  <div id="map-container-google-1" class="z-depth-1-half map-container" style="height: 500px">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2740.233351181591!2d12.860402637246466!3d42.38183475461475!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDLCsDIyJzU1LjgiTiAxMsKwNTEnMzQuMyJF!5e1!3m2!1sit!2sit!4v1619090555786!5m2!1sit!2sit" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      style="border:0" allowfullscreen></iframe>
  </div>
  <!--Google Maps-->
</div>
<br>
<h3 class="text-center">Contattaci</h3>
  <p class="text-center"><em>Siamo sempre aperti a suggerimenti</em></p>
  <div class="row">
    <div class="col-md-4">
      <p>Vieni a trovarci</p>
      <p><span class="glyphicon glyphicon-map-marker"></span>
        Rieti, Lazio, Via Salaria, km 74/500</p>
      <p><span class="glyphicon glyphicon-phone"></span>Telefono: +39 123456789</p>
      <p><span class="glyphicon glyphicon-envelope"></span>Email: contiedenpoject@mail.com</p>
      <div>
      <a class = "btn btn-social-icon btn-facebook" href = "https://www.facebook.com/Conti-Eden-Project-105988287794834">
        <span class = "fa fa-facebook"></span>
     </a>    
     <a class = "btn btn-social-icon btn-instagram" href = "https://www.instagram.com/contiedenproject/">
      <span class = "fa fa-instagram"></span>
   </a>   
  </div>    
    </div>
    <form action="contatti.php" method="POST" name="registr" onsubmit="return ringraziamento();">
    <div class="col-md-8">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Nome" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Commento" rows="5" required></textarea>
      <br>
      <div class="row">
        <div class="col-md-12 form-group">
          <button class="btn pull-right" name="submit" type="submit">Invia</button>
        </div>
      </div>
    </div>
  </form>
  </div>

<br>
  <h3 class="text-center">Sviluppatori del sito</h3>  
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Gaetano</a></li>
    <li><a data-toggle="tab" href="#menu1">Lorenzo</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h2>Gaetano Conti</h2>
      <p>Studente presso l'Università degli studi La Sapienza, fratello di Davide Conti</p>
    </div>
    <div id="menu1" class="tab-pane fade">
      <h2>Lorenzo Camilli</h2>
      <p>Studente presso l'Università degli studi La Sapienza, ha preso 30 e lode a python</p>
    </div>
  </div>
</div>
</body>
</html>