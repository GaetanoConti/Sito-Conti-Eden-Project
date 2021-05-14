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
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-success">
        <a class="navbar-brand" href="." style="color:white">Conti Eden Project  <img src="immagini/logobianco.png"  width="70" height="70" style="margin-left: 10px" ></a>
    
        <div class="col">
         
        </div>
        <nav class="navbar navbar-light bg-success">
          <a class="navbar-brand" href="carrello.php" style="color:white">
            <span class='badge badge-warning' id='lblCartCount'><?php echo $num ?></span>
            <img src="immagini/carrello.png" alt="carrello" width="30" height="30" class="d-inline-block align-top"
              alt="">
            Carrello
          </a>
        </nav>
        <nav class="navbar navbar-light bg-success">
          <a class="navbar-brand" href="azienda.php" style="color:white">
            <img src="immagini/azienda.png" alt="azienda" width="30" height="30" class="d-inline-block align-top" alt="">
            L'azienda
          </a>
        </nav>
    
        <nav class="navbar navbar-light bg-success">
        <a class="navbar-brand" href="profilo.php" style="color:white">
        <img src="immagini/account2.png" alt="account" width="30" height="30" class="d-inline-block align-top" alt="">
        Profilo
        </a>
        <a class="navbar-brand" style="color:white">
          |
        </a>
        </a>
        <form action="logout.php" method="POST">
        <input type="hidden" name="extra_submit_param" value="extra_submit_value">
        <br>
        <button type="submit" name="submit_param" value="submit_value" class="navbar-brand" style="color:white">
          Logout
        </button>  
        </form>
        </nav>
      </nav>
    </div>
    </head>

</html>