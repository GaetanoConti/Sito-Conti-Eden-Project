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
  <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-success ">
    <a class="navbar-brand" href="/index.php" style="color:white">Conti Eden Project</a>

      <div class="col">
         
      </div>
      <nav class="navbar navbar-light bg-success">
        <a class="navbar-brand" href="/carrello/carrello.php" style="color:white">
        <span class='badge badge-warning' id='lblCartCount'><?php echo $num ?></span>
          <img src="/immagini/icone_sito/carrello.png" alt="carrello" width="30" height="30" class="d-inline-block align-top"
            alt="">
          Carrello
        </a>
      </nav>
      <nav class="navbar navbar-light bg-success">
        <a class="navbar-brand" href="/azienda/azienda.php" style="color:white">
          <img src="/immagini/icone_sito/azienda.png" alt="azienda" width="30" height="30" class="d-inline-block align-top" alt="">
          Azienda
        </a>
      </nav>
    
        <nav class="navbar navbar-light bg-success">
            <a class="navbar-brand" href="/gestione_utenti/paginaLogin.php" style="color:white">
                <img src="/immagini/icone_sito/account2.png" alt="account" width="30" height="30" class="d-inline-block align-top" alt="">
                Accedi
              </a>
              <a class="navbar-brand" style="color:white">
                |
              </a>
              <a class="navbar-brand" href="/gestione_utenti/paginaRegistrazione.php" style="color:white">
                Registrati
              </a>
        </nav>
        </div>
      </nav>


      




    


  </html>