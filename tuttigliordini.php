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
?>
<script>var fileNavbar='navbar_login.php';</script> 

<html>
<head>
    <meta charset="utf-8">
    <title>Profilo</title>
    <link rel="icon" href="immagini/logo.jpg">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://netdna.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel = "stylesheet" href = "css_site/profilo_style.css">
    <link rel="stylesheet" type="text/css" href="css_site/index_style.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


</head>
<body>
<div class="container">
    <div class="main-body">
    <script>

$(function() {
  var includi =$('[data-include]');
  jQuery.each(includi, function(){

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
                    <img src="immagini/logo.jpg" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4><?php echo $rows['nome']; ?> <?php echo $rows['cognome']; ?></h4>
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
                </div>
                
              </div>
              </div>
          </div>
          
          <h3 style="margin-left:35%;">Tutti gli ordini </h3>
          <div class="col-md-8" style="margin-left:33%;">
            <div class="card mb-3">
              <div class="card-body">

    <?php
    $cliente = $_SESSION['username'];
    $query="select ord.id, acc.email, ord.giorno, ord.fasciaoraria, ord.prezzofinale, ord.modalita from ordini ord,accounts acc where acc.email = '$cliente'  and ord.cliente = acc.email order by ord.giorno, ord.fasciaoraria DESC;"; 
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

         <th width="10px"><b><i>Modalità</i> </b></th>
        <th width="10px"><b><i>Giorno</i> </b></th><br>
        <th width="10px"><b><i>Fascia oraria </i></b></th>
        <th width="10px"><b><i>Prezzo finale (in euro) </i></b></th>

        <tr>
        <th width="10px"><?php  print  $row['modalita']  ?></th>
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
    
    
<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script type="text/javascript">
<?php 
  }
?>
</script>
</body>
</html>