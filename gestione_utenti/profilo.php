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
    if (isset($_SESSION['errpass'])) {
      if ($_SESSION['errpass']==1) {
      $_SESSION['errpass'] = 0;
      echo '<script>alert("La password inserita non è corretta!")</script>';
      }
      else if ($_SESSION['errpass']==2) {
        $_SESSION['errpass'] = 0;
      echo '<script>alert("Password aggiornata correttamente!")</script>';
      }
    }
?>
<script>var fileNavbar='/navbars/navbar_login.php';</script>
<script>
function onChange() {
                const password = document.querySelector('input[name=newpass]');
                const confirm = document.querySelector('input[name=newpass2]');
                if (confirm.value === password.value) {
                    confirm.setCustomValidity('');
                } else {
                    confirm.setCustomValidity('Le due password non corrispondono');
                }
                }
</script> 

<html>
<head>
    <meta charset="utf-8">
    <title>Profilo</title>
    <link rel="icon" href="/immagini/loghi_azienda/logo3.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://netdna.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel = "stylesheet" href = "/css_site/profilo_style.css">
    <link rel="stylesheet" type="text/css" href="/css_site/carrello.css" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <style>
body {
  min-height: 100%;
  display: grid;
  grid-template-rows: 1fr auto;
}
.footer {
  grid-row-start: 5;
  grid-row-end: 6;
}
</style>
</head>
<body>
<div class="container">
    <div class="main-body">
    <script>
$(function() {
  var includi2 =$('[data-include]');
  jQuery.each(includi2, function(){

  $(this).load(fileNavbar);
   });
});
</script>

<div data-include="header"></div>
   
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
                    <img src="/immagini/loghi_azienda/logo.jpg" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4><?php echo $rows['nome']; ?> <?php echo $rows['cognome']; ?></h4>
                      <a href="/gestione_utenti/archivioOrdiniUtente.php"> <button class="btn btn-success">Ordini passati</button></a>
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
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Password</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    ********
                    <label  for="customControlInline" style="float:right"><a data-toggle="modal" data-target="#infoModal" href="#">Modifica password</a></label>
				
                  </div>
                  </div>
                </div>
                
              </div>
              </div>
          </div>
          
          <h3> Ordini in corso </h3>
          <div class="col-md-8">
            <div class="card mb-3">
              <div class="card-body">

    <?php
    $cliente = $_SESSION['username'];
    $dataoggi=date("Y/m/d");
    $query="select ord.id, acc.email, ord.giorno, ord.fasciaoraria, ord.prezzofinale from ordini ord,accounts acc where acc.email = '$cliente'  and ord.cliente = acc.email and ord.giorno >= '$dataoggi' order by ord.giorno, ord.fasciaoraria DESC;"; 
    $res = pg_exec($query);
    $nrows = pg_numrows($res);?>
    
    <?php
    if($nrows != 0) { 
        ?>
        
    <?php
      for($i=0;$i<$nrows;$i++)
      {
        $row = pg_fetch_array($res); ?>
        <h3 style="text-align: center;">Ordine #<?php echo $row['id'] ?></h3>
        <table style="width:100%">

        <th width="10px"><b><i>Giorno</i> </b></th><br>
        <th width="10px"><b><i>Fascia oraria </i></b></th>
        <th width="10px"><b><i>Prezzo finale (in euro) </i></b></th>

        <tr>
        <th width="10px"> <?php print $row['giorno'] ?></th>
        <th width="10px"><?php print $row['fasciaoraria'] ?></th>
        <th width="10px"><?php print $row['prezzofinale'] ?>€</th>
        </tr>
      </table>
      <br>
      <br>          
      <br>
      <table style="width:60%;  margin-left: auto; margin-right: auto;">
      <h4 style="text-align: center;">Prodotti dell'ordine:</h4>
        
        <th width="10px"><b><i>Prodotto </i></b></th>
        <th width="10px"><b><i>Quantità</i></b></th>
        <th width="10px"><b><i>Prezzo totale (in euro) </i></b></th>
       
    
      <?php
        $id = $row['id'];
        $query2="select o.id,o.nomeprodotto,o.quantita,o.prezzototale,p.tipoquantita from ordini_prodotti o, prodotti p where id_ordine='$id' and p.id=o.prodotto";
        $res2 = pg_exec($query2);
        $nrows2 = pg_numrows($res2);
    
        for($j=0;$j<$nrows2;$j++)
        {
            $rows = pg_fetch_array($res2); ?>
            
            <tr>
        <th width="10px"><?php  print  $rows['nomeprodotto']  ?></th>
            <th width="10px"> <?php print $rows['quantita'] ?> <?php print $rows['tipoquantita'] ?></th>
            <th width="10px"><?php print $rows['prezzototale'] ?>€</th>
            </tr>
           
        <?php  
        }
        ?>
        </table>
        <br>
        <br>
        <br>
        <br>
        <br>
        <hr style="height:1px;border:none;color:#333;background-color:#333;"> 
        <?php
      }
    }
        ?>
                 
               
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
<br>
<br>
<div class="modal fade" id="infoModal" tabindex="-1" role="dialog" aria-labelledby="modal"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Modifica password</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                  <form action="/gestione_utenti/cambiapassword.php" method="POST" name="registr">
                <div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		 </div>
        <input name="oldpass" class="form-control" placeholder="Vecchia password" type="password"   required>
    </div> <!-- form-group// -->
    <div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock-alt"></i> </span>
		 </div>
        <input name="newpass" class="form-control" placeholder="Nuova password" type="password" onChange="onChange()" required>
    </div> <!-- form-group// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock-alt"></i> </span>
		 </div>
        <input name="newpass2" class="form-control" placeholder="Ripeti nuova password" type="password" onChange="onChange()" required>
    </div> <!-- form-group// --></div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Conferma</button>
                </div>
              </form>
            </div>
        </div>
    </div>
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