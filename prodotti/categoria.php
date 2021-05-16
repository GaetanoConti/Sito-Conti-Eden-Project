<?php
  session_start(); 
  if (isset($_COOKIE['username']) || isset($_SESSION['username'])) {
    if ((isset($_COOKIE['username']))) {
    $_SESSION['username'] = $_COOKIE['username'];
    }
    if ($_SESSION['username'] == 'contieden@project.it') {
        ?>
        
        
       <script>var fileNavbar='/navbars/navbar_azienda.html';</script> 
    <?php
        }
        else {
          ?>
          <script>var fileNavbar='/navbars/navbar_login.php';</script> 
          <?php
        }
        }
else {  ?>
  <script>      var fileNavbar='/navbars/navbar_registrazione.php';  </script> 
  <?php
}
    ?>

<?php
$dbconn = pg_connect("host=localhost port=5432
dbname=ContiEdenProject
user=postgres password=password") 
or die('Could not connect: ' . pg_last_error());

$nome=$_GET['nome'];
$query="select * from prodotti where categoria = '$nome'"; 
$res = pg_exec($query);
$nrows = pg_numrows($res);

?>

<head>
    
<title>Categoria </title>
<link rel="icon" href="/immagini/logo3.png">
    <meta charset="utf−8" />
    <meta name="viewport" content="width=device−width, initial−scale=1.0" />
    <link rel="stylesheet" type="text/css" href="/css_site/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="/css_site/index_style.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" lang="javascript" src="/js_site/scheda_prodotto.js"></script>
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
  grid-row-start: 7;
  grid-row-end: 8;
}
.card:hover{
     transform: scale(1.05);
  box-shadow: 0 10px 20px rgba(0,0,0,.12), 0 4px 8px rgba(0,0,0,.06);
}

.card-1{
  background-image: url(https://ionicframework.com/img/getting-started/ionic-native-card.png);
      background-repeat: no-repeat;
    background-position: right;
    background-size: 80px;
}


@media(max-width: 990px){
  .card{
    margin: 20px;
  }
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


    <div class="position-static">

        <div class="container mx-1" style="margin-top:3%; ;">
            <div class="btn-group-md" role="group" aria-label="Basic example">
                <a href="/prodotti/categoria.php?nome=Frutta" class="btn btn-success" style="margin-right: 10;">Frutta</a>
                <a href="/prodotti/categoria.php?nome=Verdura" class="btn btn-success" style="margin-right: 10;">Verdura</a>
                <a href="/prodotti/categoria.php?nome=Altro" class="btn btn-success" style="margin-right: 10;">Altro</a>
            </div>
        </div>
        <hr>
        <div align=center>
            <h1><?php echo $nome ?></h1>
        </div>

        <br>
        <div class="container-sm" >
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    
              <?php  if($nrows != 0) {
                    for($i=0;$i<$nrows;$i++){
                    $row = pg_fetch_array($res);
                    $IDprodotto = $row['id'];    ?>
                    <div class="col my-3">
                       

                        <div class="card h-100"         >
                            <?php $file="/immagini\\";
                                $file .= $row['fotoprodotto'];?> 
                            <img  src= <?php echo $file; ?> width="350" height=250"  class="card-img-top" alt="...">                  
                            
                            <div class="card-body">
                                <?php
                                    echo "<h4>";  echo $row['nome']; echo  "</h4>";     
                                    echo "<h5>"; echo $row['prezzo']; echo " € a "; echo $row['tipoquantita']; echo "</h5>";            
                                 ?>   
                                    <?php if ($row['quantita']>0 ) {
                                 ?>
                                    <div>
                                        <?php  echo "<a href=/prodotti/scheda_prodotto.php?nome=$IDprodotto class='bottone' style='background-color: #007bff; color: white; margin-top:19%'> Acquista prodotto </a>"?>                                                       
                                    </div>
                             <?php } else {  ?>
                                <h4> <span class="badge bg-danger">Al momento non disponibile</span></h4>
                                     <div >
                                        <?php  echo "<a href=/prodotti//scheda_prodotto.php?nome=$IDprodotto class='bottone' style='background-color: #007bff; color: white'> Acquista prodotto </a>"?>                                                       
                                    </div>
                                <?php  } ?>
                                
                            </div>
                        </div>
                    </div>
                    <?php }} ?>



                    
                </div>
            </div>
            </div>
            <br>
            <br>
            <br>
            <br>
                <div align="center" >
                <button   id="toTop"  class="btn btn-secondary">
            <img src="/immagini/arrow_up_white2x.png" alt="topArrow" width="20" height="20" class="d-inline-block align-top">
            Torna all'inizio
            </button>
                </div>

<script>

  (window).scroll(function() {
    if ($(this).scrollTop()) {
        $('#toTop').fadeIn();
    } else {
        $('#toTop').fadeOut();
    }
});

$("#toTop").click(function() {
    $("html, body").animate({scrollTop: 0}, 500);
 });
 </script>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

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

</html>