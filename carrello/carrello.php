<?php
    session_start();
    if (isset($_COOKIE['username']) || isset($_SESSION['username'])) {
        ?>
        <script>var fileNavbar='/navbars/navbar_login.php';</script> 
        <?php 
          }
  else {  ?>
    <script>      var fileNavbar='/navbars/navbar_registrazione.php';  </script> 
    <?php
  }
    $dbconn = pg_connect("host=localhost port=5432
    dbname=ContiEdenProject
    user=postgres password=password") 
    or die('Could not connect: ' . pg_last_error());




  if(isset($_POST['submit'])){
   
      foreach($_POST['quantita'] as $key => $val) { 
          if ($val==0) { 
              unset($_SESSION['cart'][$key]);
              if (empty($_SESSION['cart'])) {
                unset($_SESSION['cart']);
              }
          }
          else{ 
              $_SESSION['cart'][$key]['quantita']=$val; 
          } 
      } 
        
  } 

?>
<?php

    if (isset($_SESSION['cart'])) { 
    ?>
<html>

<head>
  <title>Carrello</title>
  <link rel="icon" href="/immagini/loghi_azienda/logo3.png">
  <meta charset="utf−8" />
  <meta name="viewport" content="width=device−width, initial−scale=1.0" />
  <link rel="stylesheet" type="text/css" href="/css_site/index_style.css" />
  <link rel="stylesheet" type="text/css" href="/css_site/bootstrap.min.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

<script type="text/javascript" lang="javascript">
    function modificaquantita(id) {
        document.getElementById(id).value = 0;
    }

    var valore = null;
    function validaForm() {

            if (document.registr.telefono.value == "") {
                alert("Inserire un numero di telefono!");
                return false;
                }
            var v = parseInt(document.registr.telefono.value);
            if (isNaN(v)) {
                alert("Il telefono deve essere un numero!");
                return false;
                }
            if (document.registr.giorno.value == "") {
                var now = new Date();
                if (document.registr.giorno.value < now) {
                    alert("Inserire una data!");
                    return false;
                    }
                }
            if (document.registr.orario.value=="nessuno") { 
                alert("Inserire fascia oraria"); 
                return false; 
                } 
    
}
    
    </script>
<script>

$(function() {
  var includi =$('[data-include]');
  jQuery.each(includi, function(){

  $(this).load(fileNavbar);
   });
});


</script>

<div data-include="header"></div>

<style>
body {
  min-height: 100%;
  display: grid;
  grid-template-rows: 1fr auto;
}
.footer {
  grid-row-start: 7;
  grid-row-end: 8;
}
</style>
</head>

<body style="background-color: #F6DAC1">
    <br>
    <br>
    <br>
    <br>
    <br>
  <div class="my-5" style="text-align: center">
    <h1>Il tuo carrello</h1>
    <hr>


  </div>
  <form name="registr" method="POST" action="/carrello/carrello.php" > 
  <div class="container-fluid mx-xl-5 my-5">
    <div class="row">
      <div class="col-6">

        <?php 
            $sql="select * from prodotti where id in ("; 
                      
                    foreach($_SESSION['cart'] as $id => $value) { 
                        $sql.=$id.","; 
                    } 
                      
                    $sql=substr($sql, 0, -1).") ORDER BY nome ASC"; 
                    $query=pg_exec($sql); 
                    $totalprice=0; 
                    while($row=pg_fetch_array($query,null, PGSQL_ASSOC)){ 
                        $subtotal=$_SESSION['cart'][$row['id']]['quantita']*$row['prezzo']; 
                        $totalprice+=$subtotal; 
                    ?>

                    <div class="card4">
                            <div class="card-body">
                                <div class="row">
                                <div class="col-6">
                                    <h4 class="card-title"><?php echo $row['nome'] ?></h4>
                                    <h5><?php echo $row['categoria'] ?></h5>
                                    <?php $file="/immagini/prodotti/";
                                $file .= $row['fotoprodotto'];?> 
                            <img  src= <?php echo $file; ?> width="350" height="250"  class="card-img-top" alt="...">  
                                </div>
                                
                               <div class="col">
                                 <br><br><br><br>
                                
                               <h5> Prezzo prodotto: <?php echo $row['prezzo'] ?> €</h5>
                               <h5> Prezzo totale: <?php echo $row['prezzo']  * $_SESSION['cart'][$row['id']]['quantita'] ?> €</h5>
                                    <label for="inputQuantita" >
                                    <h5>Quantità:</h5>
                                    </label>
                            
                                    <input type="number" id="<?php echo $row['id'] ?>" name="quantita[<?php echo $row['id'] ?>]" min=0  step=0.1 value="<?php echo $_SESSION['cart'][$row['id']]['quantita'] ?>", style="width:80px;" />
                                  <br>
                                    
                                    <div class="col-8">
                                    
                                    <button type="submit" name="submit" id="<?php echo $row['id'] ?>"  class="btn btn-primary" onclick="modificaquantita(this.id)" style="margin-left:-12px">
                                        <img src="/immagini/icone_sito/icona_rimuovi_carrello2x_white.png" alt="carrello" width="20" height="20"
                                        class="d-inline-block align-top" >
                                        Rimuovi </button>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                            <br>
                    <?php 
                          
                    } 
                    
        ?> 

                     </div>
      


      <div class="col-5 mx-3">
        <div class="container-fluid mx-lg-5"></div>
        <div class="card4">

          <div class="card-body">



            <h1>Riepilogo </h2>

                    

              <h3>Numero di prodotti: <?php echo count($_SESSION['cart']) ?></h3>
              <h3>Totale <?php echo $totalprice ?> € </h3>
          </div>
        </div>
        <br>

        



        <div class="container-fluid mx-lg-5"></div>
        <div class="card4">

          <div class="card-body">
            <label for="telefono">
              <h5><b>Telefono: </b></h5>
            </label>
            <input name="telefono" id="telefono" size="30" maxlength="16" type="text" style="margin-left: 3%;"  ><br>
            <label for="date">
              <h5><b>Giorno del ritiro:</b></h5>
            </label>
            <input type="date" name="data" id="giorno" min="<?= date('Y-m-d'); ?>"  style="margin-left: 3%;"><br>

            <label for="orario">
              <h5><b>Fascia oraria:</b></h5>
            </label>
            <select name="orario" id="orario" style="margin-left: 3%;">
              <option value="nessuno" selected></option>
              <option value="9-13">9:00-13:00</option>
              <option value="15-18">15:00-18:00</option>
            </select> <br>
            
            <button type="submit" name="submit" formaction="/carrello/ordine.php" class="btn btn-primary" onclick="return validaForm();">Procedi con l'ordine</button>
          </div>
        </div>
      </div>


    </div>
  </div>
  </div>

</form> 

<div align="center" >
                <button   id="toTop"  class="btn btn-secondary">
            <img src="/immagini/icone_sito/arrow_up_white2x.png" alt="topArrow" width="20" height="20" class="d-inline-block align-top">
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
<br>
<br>
<br>
<footer class="footer bg-success text-center text-white" style="">
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

<?php
 }
 else {
  if (isset($_COOKIE['username']) || isset($_SESSION['username'])) {
    ?>
    <script>var fileNavbar='/navbars/navbar_login.php';</script> 
    <?php 
      }
  else {  ?>
  <script>      var fileNavbar='/navbars/navbar_registrazione.php';  </script> 
  <?php
  }
     ?>
     <head>
     <title>Carrello</title>
     <link rel="icon" href="/immagini/loghi_azienda/logo3.png">
    <meta charset="utf−8" />
    <meta name="viewport" content="width=device−width, initial−scale=1.0" />
    <link rel="stylesheet" type="text/css" href="/css_site/carrello.css" />
    <link rel="stylesheet" type="text/css" href="/css_site/bootstrap.min.css" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
     <script>

        $(function() {
        var includi =$('[data-include]');
        jQuery.each(includi, function(){

        $(this).load(fileNavbar);
        });
        });


        </script>
        
        <div data-include="header">
        </div>
      
        <style>
          
body {
  min-height: 100%;
  display: grid;
  grid-template-rows: 1fr auto;
}

</style>
    </head>
    <body style="background-color: #F6DAC1">
        <br>
        <br>
        <br>
        <br> 
        <br>
        <br>
        <br>
        <br>
        <div class="container-fluid mt-100" >
   
       
            <div class="card">
                <div class="card-header">
                    <h5>Il tuo carrello</h5>
                </div>
                <div class="card-body cart">
                    <div class="col-sm-12 empty-cart-cls text-center"> <img src="/immagini/icone_sito/empty-cart.png" width="130" height="130" class="img-fluid mb-4 mr-3">
                        <h3><strong>Il tuo carrello è vuoto</strong></h3>
                        <h4>Inizia ad acquistare i nostri prodotti!</h4> <a href="/index.php" class='btn btn-success'data-abc="true">Continua a fare acquisti</a>
                    </div>
                </div>
                
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
     <?php
 }

?>