<?php
  session_start();
  if (empty($_SESSION['cart'])) {
    $num = 0;
  }
  else {
    $num = count($_SESSION['cart']);
  }
  ?>

<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-success" style="max-height: 80px; border-radius: 0%; position:fixed">
    <a class="navbar-brand" href="." style="color:white; width: 350px; margin-top: -1%; margin-left: -1%; font-size: 20px">Conti Eden Project </a>  
    <img src="/immagini/logobianco.png"  width="50" height="50" style="margin-left:-10%; margin-top: -1% " >

      <div class="col">
         
      </div>
      <nav class="navbar navbar-light bg-success">
      <span class='badge badge-warning' id='lblCartCount' style="display:inline-block;padding:.25em .4em;font-size:75%;font-weight:700;line-height:1;text-align:center;white-space:nowrap;vertical-align:baseline;border-radius:.25rem;transition:color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out; width:20px; height:20px; background-color: #ffc107; font-size: 14px; color: black; margin-right:-7%; font-family: arial"><?php echo $num ?></span>
      <img src="/immagini/carrello.png" alt="carrello" width="30" height="30" class="d-inline-block align-top"
      style="margin-left: 10%">
        <a class="navbar-brand" href="carrello.php" style="color:white; margin-top: 2%; margin-left: -10%; font-size: 20px">
          Carrello
        </a>
      </nav>
      <nav class="navbar navbar-light bg-success">
      <img src="/immagini/azienda.png" alt="azienda" width="30" height="30" class="d-inline-block align-top" style="margin-left: 10%">
        <a class="navbar-brand" href="azienda.php" style="color:white;  margin-top: 2%; margin-left: -10%; font-size: 20px">
          
          Azienda
        </a>
      </nav>
    
        <nav class="navbar navbar-light bg-success">
        <img src="/immagini/account2.png" alt="account" width="30" height="30" class="d-inline-block align-top" style="margin-left: 8%">
            <a class="navbar-brand" href="paginaLogin.php" style="color:white;  margin-top: 1%; margin-left: -4%; margin-right: -4% ; font-size: 20px">
               
                Accedi
              </a>
              <a class="navbar-brand" style="color:white; margin-top: 1%; margin-left: -4%; font-size: 20px">
                |
              </a>
              <a class="navbar-brand" href="paginaRegistrazione.php" style="color:white; margin-top: 1%; margin-left: -10%; font-size: 20px">
                Registrati
              </a>
        </nav>
        </div>
      </nav>