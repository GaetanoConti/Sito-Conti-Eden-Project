<?php
  session_start();
  if (empty($_SESSION['cart'])) {
    $num = 0;
  }
  else {
    $num = count($_SESSION['cart']);
  }
  ?>
<html>
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light ">
        <a class="navbar-brand" href=".">Conti Eden Project</a>
    
    
        <div class="col">
         
        </div>
        <nav class="navbar navbar-light bg-light">
          <a class="navbar-brand" href="carrello.php">
            <span class='badge badge-warning' id='lblCartCount'><?php echo $num ?></span>
            <img src="immagini/icona_carrello2x.png" alt="carrello" width="30" height="30" class="d-inline-block align-top"
              alt="">
            Carrello
          </a>
        </nav>
        <nav class="navbar navbar-light bg-light">
          <a class="navbar-brand" href="azienda.php">
            <img src="immagini/home.png" alt="azienda" width="30" height="30" class="d-inline-block align-top" alt="">
            L'azienda
          </a>
        </nav>
    
        <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="profilo.php">
        <img src="immagini/account.png" alt="account" width="30" height="30" class="d-inline-block align-top" alt="">
        Profilo
        </a>
        <a class="navbar-brand">
          |
        </a>
        </a>
        <form action="logout.php" method="POST">
        <input type="hidden" name="extra_submit_param" value="extra_submit_value">
        <br>
        <button type="submit" name="submit_param" value="submit_value" class="navbar-brand">
          Logout
        </button>  
        </form>
        </nav>
      </nav>
    </div>
    </head>

</html>