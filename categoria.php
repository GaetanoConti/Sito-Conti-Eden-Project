<?php
$dbconn = pg_connect("host=localhost port=5432
dbname=conti_eden
user=postgres password=password") 
or die('Could not connect: ' . pg_last_error());
$nome=$_GET['nome'];
$q1 = "select * from prodotti ";
$result= pg_query_params($dbconn, $q1, array());
while($rows=pg_fetch_array($result,null, PGSQL_ASSOC))  {
?>
<?php } ?>

<head>
    
<title>Categoria </title>
    <meta charset="utf−8" />
    <meta name="viewport" content="width=device−width, initial−scale=1.0" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" /> <!-- usa il css di bootstrap -->
    <script type="text/javascript" lang="javascript" src="js/scheda_prodotto.js"></script>
    <!--navbar-->
    <style type="text/css">
    a:link, a:visited , a:visited , a:hover, a:active{
        color: white;
        font-family: “Helvetica Neue”, Helvetica, Arial, sans-serif;
    }
    </style>


    <div class="position-absolute"></div>
        <nav class="navbar fixed-top  navbar-expand-lg navbar-light bg-light">
             <a class="navbar-brand" href="#">Conti Eden</a>
            <div class="col">
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Cerca" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Cerca</button>
                </form>
            </div>
            <nav class="navbar navbar-light bg-light">
                <a class="navbar-brand" href="#">
                    <img src="immagini/icona_carrello2x.png" alt="carrello" width="30" height="30"
                        class="d-inline-block align-top" alt=""> Carrello
                </a>
            </nav>


            <nav class="navbar navbar-light bg-light">
                <a class="navbar-brand" href="#">
                    <img src="immagini/home.png" alt="azienda" width="30" height="30" class="d-inline-block align-top"
                        alt="">  L'azienda
                </a>
             </nav>

        <nav class="navbar navbar-light bg-light">
            <a class="navbar-brand" href="#">
                <img src="immagini/account.png" alt="account" width="30" height="30" class="d-inline-block align-top"
                    alt=""> Accedi|Registrati
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
                <a href="categoria.html" class="btn btn-primary" style="margin-right: 10;">Frutta</a>
                <a href="categoria.html" class="btn btn-primary" style="margin-right: 10;">Verdura</a>
                <a href="categoria.html" class="btn btn-primary" style="margin-right: 10;">Altro</a>
            </div>
        </div>
        <hr>
        <div align=center>
            <h1>Nome ctageoria</h1>
        </div>

        <br>
        <div class="container-sm">
                <div class="row row-cols-1 row-cols-md-3 g-4">

                    <div class="col my-3">
                        <?php $nome="Miele";  
                            $q1 = "select * from prodotti where nome='$nome'";
                            $result= pg_query_params($dbconn, $q1, array());
                            while($rows=pg_fetch_array($result,null, PGSQL_ASSOC))  {
                        ?>

                        <div class="card h-100">
                            <?php $file="immagini\\";
                                $file .= $rows['fotoprodotto'];?> 
                            <img  src= <?php echo $file; ?> width="350" height=250"  class="card-img-top" alt="...">                  
                            
                            <div class="card-body">
                                <?php
                                    echo "<h2> $nome </h2>";     
                                    echo "<h4>"; echo $rows['prezzo']; echo " € a "; echo $rows['tipoquantita']; echo "</h4>";            
                                } ?>   
                                <div  class="btn btn-primary">
                                    <?php  echo "<a href=../scheda_prodotto.php?nome=$nome> Acquista prodotto </a>"?>                                                       
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col my-3">
                        <?php $nome="Farina";  
                            $q1 = "select * from prodotti where nome='$nome'";
                            $result= pg_query_params($dbconn, $q1, array());
                            while($rows=pg_fetch_array($result,null, PGSQL_ASSOC))  {
                        ?>

                        <div class="card h-100">
                            <?php $file="immagini\\";
                                $file .= $rows['fotoprodotto'];?> 
                            <img  src= <?php echo $file; ?> width="350" height=250"  class="card-img-top" alt="...">                  
                            
                            <div class="card-body">
                                <?php
                                    echo "<h2> $nome </h2>";     
                                    echo "<h4>"; echo $rows['prezzo']; echo " € a "; echo $rows['tipoquantita']; echo "</h4>";            
                                } ?>   
                                <div  class="btn btn-primary">
                                    <?php  echo "<a href=../scheda_prodotto.php?nome=$nome> Acquista prodotto </a>"?>                                                       
                                </div>
                            </div>
                        </div>
                    </div>
            
                    <div class="col my-3">
                        <?php $nome="Arancie";  
                            $q1 = "select * from prodotti where nome='$nome'";
                            $result= pg_query_params($dbconn, $q1, array());
                            while($rows=pg_fetch_array($result,null, PGSQL_ASSOC))  {
                        ?>

                        <div class="card h-100">
                            <?php $file="immagini\\";
                                $file .= $rows['fotoprodotto'];?> 
                            <img  src= <?php echo $file; ?> width="350" height=250"  class="card-img-top" alt="...">                  
                            
                            <div class="card-body">
                                <?php
                                    echo "<h2> $nome </h2>";     
                                    echo "<h4>"; echo $rows['prezzo']; echo " € a "; echo $rows['tipoquantita']; echo "</h4>";            
                                } ?>   
                                <div  class="btn btn-primary">
                                    <?php  echo "<a href=../scheda_prodotto.php?nome=$nome> Acquista prodotto </a>"?>                                                       
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col my-3">
                            <?php $nome="Melanzane";  
                                $q1 = "select * from prodotti where nome='$nome'";
                                $result= pg_query_params($dbconn, $q1, array());
                                while($rows=pg_fetch_array($result,null, PGSQL_ASSOC))  {
                        ?>

                        <div class="card h-100">
                            <?php $file="immagini\\";
                                $file .= $rows['fotoprodotto'];?> 
                            <img  src= <?php echo $file; ?> width="350" height=250"  class="card-img-top" alt="...">                  
                            
                            <div class="card-body">
                                <?php
                                    echo "<h2> $nome </h2>";     
                                    echo "<h4>"; echo $rows['prezzo']; echo " € a "; echo $rows['tipoquantita']; echo "</h4>";            
                                } ?>   
                                <div  class="btn btn-primary">
                                    <?php  echo "<a href=../scheda_prodotto.php?nome=$nome> Acquista prodotto </a>"?>                                                       
                                </div>
                            </div>
                        </div>
                    </div>
                
                    <div class="col my-3">
                                <?php $nome="Miele";  
                                    $q1 = "select * from prodotti where nome='$nome'";
                                    $result= pg_query_params($dbconn, $q1, array());
                                    while($rows=pg_fetch_array($result,null, PGSQL_ASSOC))  {
                                ?>

                        <div class="card h-100">
                            <?php $file="immagini\\";
                                $file .= $rows['fotoprodotto'];?> 
                            <img  src= <?php echo $file; ?> width="350" height=250"  class="card-img-top" alt="...">                  
                                
                            <div class="card-body">
                                <?php
                                    echo "<h2> $nome </h2>";     
                                    echo "<h4>"; echo $rows['prezzo']; echo " € a "; echo $rows['tipoquantita']; echo "</h4>";            
                                } ?>   
                                <div  class="btn btn-primary">
                                    <?php  echo "<a href=../scheda_prodotto.php?nome=$nome> Acquista prodotto </a>"?>                                                       
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col my-3">
                        <?php $nome="Farina";  
                            $q1 = "select * from prodotti where nome='$nome'";
                            $result= pg_query_params($dbconn, $q1, array());
                            while($rows=pg_fetch_array($result,null, PGSQL_ASSOC))  {
                        ?>

                        <div class="card h-100">
                            <?php $file="immagini\\";
                                 $file .= $rows['fotoprodotto'];?> 
                            <img  src= <?php echo $file; ?> width="350" height=250"  class="card-img-top" alt="...">                  
                                
                            <div class="card-body">
                                <?php
                                    echo "<h2> $nome </h2>";     
                                    echo "<h4>"; echo $rows['prezzo']; echo " € a "; echo $rows['tipoquantita']; echo "</h4>";            
                                } ?>   
                                <div  class="btn btn-primary">
                                    <?php  echo "<a href=../scheda_prodotto.php?nome=$nome> Acquista prodotto </a>"?>                                                       
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col my-3">
                        <?php $nome="Arancie";  
                            $q1 = "select * from prodotti where nome='$nome'";
                            $result= pg_query_params($dbconn, $q1, array());
                            while($rows=pg_fetch_array($result,null, PGSQL_ASSOC))  {
                        ?>

                        <div class="card h-100">
                            <?php $file="immagini\\";
                                 $file .= $rows['fotoprodotto'];?> 
                            <img  src= <?php echo $file; ?> width="350" height=250"  class="card-img-top" alt="...">                  
                                
                            <div class="card-body">
                                    <?php
                                        echo "<h2> $nome </h2>";     
                                        echo "<h4>"; echo $rows['prezzo']; echo " € a "; echo $rows['tipoquantita']; echo "</h4>";            
                                    } ?>   
                                <div  class="btn btn-primary">
                                    <?php  echo "<a href=../scheda_prodotto.php?nome=$nome> Acquista prodotto </a>"?>                                                       
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col my-3">
                        <?php $nome="Melanzane";  
                            $q1 = "select * from prodotti where nome='$nome'";
                            $result= pg_query_params($dbconn, $q1, array());
                            while($rows=pg_fetch_array($result,null, PGSQL_ASSOC))  {
                        ?>

                        <div class="card h-100">
                            <?php $file="immagini\\";
                              $file .= $rows['fotoprodotto'];?> 
                            <img  src= <?php echo $file; ?> width="350" height=250"  class="card-img-top" alt="...">                  
                    
                            <div class="card-body">
                            <?php
                                echo "<h2> $nome </h2>";     
                                echo "<h4>"; echo $rows['prezzo']; echo " € a "; echo $rows['tipoquantita']; echo "</h4>";            
                            } ?>   
                            <div  class="btn btn-primary">
                                <?php  echo "<a href=../scheda_prodotto.php?nome=$nome> Acquista prodotto </a>"?>                                                       
                            </div>
                        </div>
                    </div>



                    
                </div>
            </div>
        </div>
    </div>
</body>

</html>