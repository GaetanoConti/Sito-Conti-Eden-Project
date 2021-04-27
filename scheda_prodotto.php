<?php

  $dbconn = pg_connect("host=localhost port=5432
  dbname=conti_eden
  user=postgres password=password") 
  or die('Could not connect: ' . pg_last_error());
$nome=$_GET['nome'];
  $q1 = "select * from prodotti where nome= '$nome'";

  $result= pg_query_params($dbconn, $q1, array());
  while($rows=pg_fetch_array($result,null, PGSQL_ASSOC))  {
?>

  }
<head>
  <title>Nome prodotto</title>
  <meta charset="utf−8" />
  <meta name="viewport" content="width=device−width, initial−scale=1.0" />
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" /> <!-- usa il css di bootstrap -->
  <script type="text/javascript" lang="javascript" src="js/scheda_prodotto.js"></script>


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
        <a href="categoria.html" class="btn btn-primary"style="margin-right: 10;">Frutta</a>
        <a href="categoria.html" class="btn btn-primary"style="margin-right: 10;">Verdura</a>
        <a href="categoria.html" class="btn btn-primary"style="margin-right: 10;">Altro</a>
      </div>
    </div>
    <hr>


    <!--ESEMPIO:
        https://mdbootstrap.com/previews/ecommerce-demo/examples/pages/basic/product.html
        https://www.carrefour.it/p/sant-anna-sorgente-rebruant-1950-m-naturale-6-x-15-l/8020141810001.html -->

    


      



    <div class="container-md my-5 mx-lg-5">
      <div class="row">
        <div class="col">
          <img src="immagini/fragole_gallery4.jpg" width="450px" height="350px">
        </div>
        <div class="col">
          <?php 
            $nome=$_GET['nome'];
            echo "<h2>";echo $nome; echo "</h2>";
            echo "<h3> In "; echo $rows['categoria']; echo "</h3>";
          ?>

          <p>Questa è una breve descrizione del prodotto, Lorem Ipsum is simply dummy text of the printing and
            typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when
            an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
          <div class="form-group row">
            <label for="example-number-input" class="col-4 col-form-label">Quntità in chilogrammi:</label>
            <div class="col-3">
              <input class="form-control" type="number" value="<?php echo  $rows['quantita'] ?>" min="0.50" step="0.50" id="example-number-input">
            </div>
            <div class="col">
              <?php  
              echo "<h4>"; echo $rows['prezzo']; echo " € a "; echo $rows['tipoquantita']; echo "</h4>";
            
            
              ?>
              </div>
          </div>

          <button type="button" class="btn btn-primary">Aggiungi al carrello</button>

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