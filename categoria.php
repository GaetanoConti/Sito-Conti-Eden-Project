<?php
  session_start(); 
  if (isset($_COOKIE['username']) || isset($_SESSION['username'])) {
    if ((isset($_COOKIE['username']))) {
    $_SESSION['username'] = $_COOKIE['username'];
    }
    if ($_SESSION['username'] == 'contieden@project.it') {
        ?>
        
        
       <script>var fileNavbar='navbar_azienda.html';</script> 
    <?php
        }
        else {
          ?>
          <script>var fileNavbar='navbar_login.php';</script> 
          <?php
        }
        }
else {  ?>
  <script>      var fileNavbar='navbar_registrazione.html';  </script> 
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
    <meta charset="utf−8" />
    <meta name="viewport" content="width=device−width, initial−scale=1.0" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css_site/index_style.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" lang="javascript" src="js/scheda_prodotto.js"></script>
    <style type="text/css">
    a:link, a:visited , a:visited , a:hover, a:active{
        color: white;
        font-family: “Helvetica Neue”, Helvetica, Arial, sans-serif;
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

<body>

    <br>
    <br>
    <br>
    <br>
    <br>


    <div class="position-static">

        <div class="container mx-1" style="margin-top:3%; ;">
            <div class="btn-group-md" role="group" aria-label="Basic example">
                <a href="categoria.php?nome=Frutta" class="btn btn-primary" style="margin-right: 10;">Frutta</a>
                <a href="categoria.php?nome=Verdura" class="btn btn-primary" style="margin-right: 10;">Verdura</a>
                <a href="categoria.php?nome=Altro" class="btn btn-primary" style="margin-right: 10;">Altro</a>
            </div>
        </div>
        <hr>
        <div align=center>
            <h1><?php echo $nome ?></h1>
        </div>

        <br>
        <div class="container-sm">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    
              <?php  if($nrows != 0) {
                    for($i=0;$i<$nrows;$i++){
                    $row = pg_fetch_array($res);
                    $IDprodotto = $row['id'];    ?>
                    <div class="col my-3">
                       

                        <div class="card h-100">
                            <?php $file="immagini\\";
                                $file .= $row['fotoprodotto'];?> 
                            <img  src= <?php echo $file; ?> width="350" height=250"  class="card-img-top" alt="...">                  
                            
                            <div class="card-body">
                                <?php
                                    echo "<h2>";  echo $row['nome']; echo  "</h2>";     
                                    echo "<h4>"; echo $row['prezzo']; echo " € a "; echo $row['tipoquantita']; echo "</h4>";            
                                 ?>   
                                    <?php if ($row['quantita']>0 ) {
                                 ?>
                                    <div  class="btn btn-primary">
                                        <?php  echo "<a href=../scheda_prodotto.php?nome=$IDprodotto> Acquista prodotto </a>"?>                                                       
                                    </div>
                             <?php } else {  ?>
                                <h4> <span class="badge bg-danger">Al momento non disponibile</span></h4>
                                     <div  class="btn btn-primary">
                                        <?php  echo "<a href=../scheda_prodotto.php?nome=$IDprodotto> Acquista prodotto </a>"?>                                                       
                                    </div>
                                <?php  } ?>
                                
                            </div>
                        </div>
                    </div>
                    <?php }} ?>



                    
                </div>
            </div>
        </div>
    </div>
</body>

</html>