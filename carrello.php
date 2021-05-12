<?php
    session_start();
    
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
if (isset($_COOKIE['username']) || isset($_SESSION['username'])) {
    if (isset($_SESSION['cart'])) { 
    ?>
<html>

<head>
  <title>Carrello</title>
  <meta charset="utf−8" />
  <meta name="viewport" content="width=device−width, initial−scale=1.0" />
  <link rel="stylesheet" type="text/css" href="css_site/index_style.css" />
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script>var fileNavbar='navbar_login.php';</script> 
  <script>
      $(document).ready(function(){

  
        $('[id="domicilio"]').on('change', function() {
        $('#indirizzo').toggle(this.checked);
        }).change();

        $('[id="ritira"]').on('change', function() {
        $('#indirizzo').hide(this.checked);
        }).change();

});
    </script>

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
            
            if (valore == null) {
            alert("Selezionare un metodo di consegna");
            return false;
            }

            if (document.registr.domicilio.checked && document.registr.indirizzo.value=="") {
                alert("Per la consegna a domicilio è necessario inserire un indirizzo!");
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
</head>

<body>
    <br>
    <br>
    <br>
    <br>
    <br>
  <div class="my-5" style="text-align: center">
    <h1>Il tuo carrello</h1>
    <hr>


  </div>
  <form name="registr" method="POST" action="carrello.php" > 
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

                    <div class="card">
                            <div class="card-body">
                                <div class="row">
                                <div class="col-6">
                                    <h4 class="card-title"><?php echo $row['nome'] ?></h4>
                                    <h5><?php echo $row['categoria'] ?></h5>
                                    <?php $file="immagini\\";
                                $file .= $row['fotoprodotto'];?> 
                            <img  src= <?php echo $file; ?> width="350" height="250"  class="card-img-top" alt="...">  
                                </div>
                                
                               <div class="col">
                               <h5> Prezzo prodotto: <?php echo $row['prezzo'] ?> €</h5>
                               <h5> Prezzo totale: <?php echo $row['prezzo']  * $_SESSION['cart'][$row['id']]['quantita'] ?> €</h5>
                                    <label for="inputQuantita" class="col-8 col-form-label">
                                    <h5>Quantità:</h5>
                                    </label>
                                    <div class="col-5">
                                    <input type="number" id="<?php echo $row['id'] ?>" name="quantita[<?php echo $row['id'] ?>]" size="5"  value="<?php echo $_SESSION['cart'][$row['id']]['quantita'] ?>" />
                                    </div> <br>
                                    
                                    <div class="col-8">
                                    
                                    <button type="submit" name="submit" id="<?php echo $row['id'] ?>"  class="btn btn-primary" onclick="modificaquantita(this.id)">
                                        <img src="immagini/icona_rimuovi_carrello2x_white.png" alt="carrello" width="20" height="20"
                                        class="d-inline-block align-top">
                                        Rimuovi </button>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                    <?php 
                          
                    } 
        ?> 
                     </div>
      


      <div class="col-5 mx-3">
        <div class="container-fluid mx-lg-5"></div>
        <div class="card">

          <div class="card-body">



            <h1>Riepilogo </h2>

                    

              <h3>Numero di prodotti: <?php echo count($_SESSION['cart']) ?></h3>
              <h3>Totale <?php echo $totalprice ?> € </h3>
              <div class="form-group row">
                <div class="col">
                  <div>

                    <h4>Seleziona un metodo di acquisto</h4>
                    <input type="radio" id="ritira" name="tipoVendita" value="Ritira in negozio" onClick="valore=this.value;">
                    <label for="ritira" style="margin-right:100px;">
                      <h4>Ritira</h4>
                    </label>

                    <input type="radio" id="domicilio" name="tipoVendita" value="Domicilio" onClick="valore=this.value;">
                    <label for="ritira">
                      <h4>A domicilio</h4>
                    </label>
                    <input name="indirizzo" id="indirizzo" placeholder="Indirizzo" size="30" type="text" style="margin-left: 32%;" ><br>
                  </div>


                </div>
              </div>
          </div>
        </div>

        <br>



        <div class="container-fluid mx-lg-5"></div>
        <div class="card">

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
            
            <button type="submit" name="submit" formaction="ordine.php" class="btn btn-primary" onclick="return validaForm();">Procedi con l'ordine</button>
          </div>
        </div>
      </div>


    </div>
  </div>
  </div>

</form> 
</body>

</html>

<?php
 }
 else {
     ?>
     <head>
     <title>Carrello</title>
    <meta charset="utf−8" />
    <meta name="viewport" content="width=device−width, initial−scale=1.0" />
    <link rel="stylesheet" type="text/css" href="css_site/index_style.css" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script>var fileNavbar='navbar_login.php';</script> 
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
        <br>
        <br>
        <br>
        <br> 
        <br>
        <br>
        <br>
        <br>
        <div class="container-fluid mt-100">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5>Il tuo carrello</h5>
                </div>
                <div class="card-body cart">
                    <div class="col-sm-12 empty-cart-cls text-center"> <img src="immagini/empty-cart.png" width="130" height="130" class="img-fluid mb-4 mr-3">
                        <h3><strong>Il tuo carrello è vuoto</strong></h3>
                        <h4>Inizia ad acquistare i nostri prodotti!</h4> <a href="index.php" class="btn btn-primary cart-btn-transform m-3" data-abc="true">Continua a fare acquisti</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    </body> 
     <?php
 }
} 
?>