<?php
session_start(); 

    $dbconn = pg_connect("host=localhost port=5432
    dbname=ContiEdenProject
    user=postgres password=password") 
    or die('Could not connect: ' . pg_last_error());


    if(isset($_GET['action']) && $_GET['action']=="add"){ 
          
        $id=$_GET['id']; 
          
        if(isset($_SESSION['cart'][$id])){ 
              
            $_SESSION['cart'][$id]['quantita']+=$_POST['inputquantita'];
            header("Location: scheda_prodotto.php?nome=$id"); 
              
        }
        else{ 
              
            $sql_s="select * from prodotti where id=$id"; 
            $query_s=pg_exec($sql_s); 
            if(pg_numrows($query_s)!=0){ 
                $row_s=pg_fetch_array($query_s,null, PGSQL_ASSOC); 
                  
                $_SESSION['cart'][$id]=array( 
                        "quantita" => $_POST['inputquantita'], 
                        "prezzo" => $row_s['prezzo'] 
                    ); 
                    header("Location: scheda_prodotto.php?nome=$id"); 
                  
            }else{ 
                  
                $message="This product id it's invalid!"; 
                header("Location: scheda_prodotto.php?nome=$id"); 
            } 
              
        } 
          
    } 



?>