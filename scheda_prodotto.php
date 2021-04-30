<?php

  $dbconn = pg_connect("host=localhost port=5432
  dbname=ContiEdenProject
  user=postgres password=password") 
  or die('Could not connect: ' . pg_last_error());
$nome=$_GET['nome'];
  $q1 = "select * from prodotti where nome= '$nome'";

  $result= pg_query_params($dbconn, $q1, array());
  while($rows=pg_fetch_array($result,null, PGSQL_ASSOC))  {


  ?>
<head>
  <title><?php $rows['nome'] ?></title>
  <meta charset="utf−8" />
  <meta name="viewport" content="width=device−width, initial−scale=1.0" />
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" /> <!-- usa il css di bootstrap -->


  <!--navbar-->
  <div class="position-absolute"></div>
  <nav class="navbar fixed-top  navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Conti Eden</a>


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
      <a class="navbar-brand" href="#">
        <img src="immagini/home.png" alt="azienda" width="30" height="30" class="d-inline-block align-top" alt="">
        L'azienda
      </a>
    </nav>

    <nav class="navbar navbar-light bg-light">
      <a class="navbar-brand" href="#">
        <img src="immagini/account.png" alt="account" width="30" height="30" class="d-inline-block align-top" alt="">
        Accedi|Registrati
      </a>
    </nav>
    </div>
  </nav>
  </div>

</head>

<body>

  <br>
  <br>




                    
  

      <div class="position-static">
        <div class="container mx-1" style="margin-top:3%; ;">
          <div class="btn-group-md" role="group" aria-label="Basic example">
            <a href="categoria.php" class="btn btn-primary" style="margin-right: 10;">Frutta</a>
            <a href="categoria.php" class="btn btn-primary" style="margin-right: 10;">Verdura</a>
            <a href="categoria.php" class="btn btn-primary" style="margin-right: 10;">Altro</a>
          </div>
        </div>
     </div>
    
  <hr>    



  <div class="container-md my-5 mx-lg-5">
   
  
    <div class="row">
      <div class="col">
         <?php $file="immagini\\";
              $file .= $rows['fotoprodotto'];?>                
        <img <img  src= <?php echo $file; ?>  width="450px" height="350px">
      </div>


      <div class="col">
        <?php 
          $nome=$_GET['nome'];
          echo "<h2>";echo $nome; echo "</h2>";
          echo "<h5> In "; echo $rows['categoria']; echo "</h5>";
        ?>
        <label for="example-number-input"><h4>Quntità in     <?php  echo $rows['tipoquantita'];?>:  </h4> </label>
        <input class="col-2" class="form-control"  type="number" value="" max= <?php echo  $rows['quantita'] ?> min="0.1" step="0.1" id="example-number-input">
        <?php  echo "<h5>Disponibili: ";  echo  $rows['quantita']; echo "</h5>"; ?>

        <?php echo "<h3>"; echo $rows['prezzo']; echo " € a "; echo $rows['tipoquantita']; echo "</h3>";?>

          <?php if ($rows['quantita']>0 ) {
          ?>
            <button type="button" name="bottoneAcquista" class="btn btn-primary">
            <img src="immagini/icona_carrello2x white.png" alt="carrello" width="30" height="30" class="d-inline-block align-top">
            Aggiungi al carrello
            
            </button>

            <?php } else {  ?>
              <h4> <span class="badge bg-danger">Al momento non disponibile</span></h4>

            <?php  } ?>

        </div>
          </div>
      </div>



    </div>



    <div class="container-md my-5 mx-lg-5">
      <div class="card text-center">
        <div class="card-header">
          <ul class="nav nav-pills card-header-pills">
            <li class="nav-item">
              <a class="nav-link active" href="#">Informaizoni generali</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Dettagli di produzione</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="#" tabindex="-1" aria-disabled="true">Ingredienti</a>
            </li>
          </ul>
        </div>
        <div class="card-body">
          <h5 class="card-title">Special title treatment</h5>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        </div>
      </div>
    </div>
  </div>
<?php 
  }
?>
</body>
</html>