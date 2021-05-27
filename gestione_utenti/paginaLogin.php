<?php
session_start();
if (empty($_SESSION['loginerror'])) {
  ?>
 
  <?php
}
else {
	session_destroy();
	?>
 <script>      var errore='/gestione_utenti/errorelogin.html';  </script> 
<?php
}
?>
<html>
    
<head>	
	
	<link rel = "stylesheet" href = "/css_site/paginalogin_style.css">

    <script type="text/javascript" language="javascript" src="/js_site/paginalogin.js">         </script> 
		<style>
			
			body {
  min-height: 100%;
  display: grid;
  grid-template-rows: 1fr auto;
}
.footer {
  grid-row-start: 6;
  grid-row-end: 7 ;
}
		</style>
     <link rel="icon" href="/immagini/logo.jpg">
	<title>Login</title>
  <link rel="icon" href="/immagini/logo3.png">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
	 <!--navbar-->
	 <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-success ">
   <a class="navbar-brand" href="../../index.php" style="color:white">Conti Eden Project  <img src="/immagini/logobianco.png"  width="50" height="50" style="margin-left: 10px" ></a>

      <div class="col">
         
      </div>
      <nav class="navbar navbar-light bg-success">
        <a class="navbar-brand" href="/gestione_utenti/paginaLogin.php" style="color:white">
          <img src="/immagini/carrello.png" alt="carrello" width="30" height="30" class="d-inline-block align-top"
            alt="">
          Carrello
        </a>
      </nav>
      <nav class="navbar navbar-light bg-success">
        <a class="navbar-brand" href="/azienda/azienda.php" style="color:white">
          <img src="/immagini/azienda.png" alt="azienda" width="30" height="30" class="d-inline-block align-top" alt="">
          Azienda
        </a>
      </nav>
    
        <nav class="navbar navbar-light bg-success">
            <a class="navbar-brand" href="/gestione_utenti/paginaLogin.php" style="color:white">
                <img src="/immagini/account2.png" alt="account" width="30" height="30" class="d-inline-block align-top" alt="">
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
</head>
<!--Coded with love by Mutiullah Samim-->
<body>
	<div class="container h-100" style="margin-top: 10%;">
		<div class="d-flex justify-content-center h-100">
			<div class="user_card">
				<div class="d-flex justify-content-center">
					<div class="brand_logo_container">
						<img src="/immagini/logo.jpg" class="brand_logo" alt="Logo">
					</div>
				</div>
				<div class="d-flex justify-content-center form_container">
					<form action="/gestione_utenti/login.php" method="POST" name="registr" onSubmit="return validaForm();">
					<script>

					$(function() {
					var includi =$('[data-include]');
					jQuery.each(includi, function(){

					$(this).load(errore);
					});
					});
					</script>

					<div data-include="header"></div>
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="email" name="mail" class="form-control input_user" value="" placeholder="Inserisci email">
						</div>
						<div class="input-group mb-2">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" name="pass" class="form-control input_pass" value="" placeholder="Inserisci password">
						</div>
						<div class="form-group">
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="customControlInline">
								<label class="custom-control-label" for="customControlInline">Ricordami</label>
							</div>
						</div>
							<div class="d-flex justify-content-center mt-3 login_container">
				 	<button type="submit" name="loginButton" class="btn login_btn">Login</button>
				   </div>
					</form>
				</div>
		
				<div class="mt-4">
					<div class="d-flex justify-content-center links">
						Non hai un account? <a href="/gestione_utenti/paginaRegistrazione.php" class="ml-2">Registrati</a>
					</div>
					<div class="d-flex justify-content-center links">
						<a href="#">Hai dimenticato la password?</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<footer class="bg-success text-center text-white">
  <!-- Grid container -->
  <div class="container p-4 pb-0">
  <h4> Ci trovi anche qui </h4><br>
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a class="btn btn-outline-light btn-floating m-1" href="https://www.facebook.com/Conti-Eden-Project-105988287794834" role="button"
        ><i class="fab fa-facebook-f"></i
      ></a>

      <!-- Instagram -->
      <a class="footer btn btn-outline-light btn-floating m-1" href="https://www.instagram.com/contiedenproject/" role="button"
        ><i class="fab fa-instagram"></i
      ></a>
    </section>
    <!-- Section: Social media -->
    <div class="container p-4 pb-0">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Contatti
          </h6>
          <p><i class="fas fa-home me-3"></i>  Rieti, Lazio, Via Salaria, km 74/500</p>
          <p>
            <i class="fas fa-envelope me-3"></i>
            contiedenpoject@mail.com
          </p>
          <p><i class="fas fa-phone me-3"></i> +39 123456789</p>
          <p><i class="fas fa-print me-3"></i> 0746 234 567</p>
        </div>
        <!-- Grid column -->
      </div>
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2020 Copyright:
    <a class="text-white" href="https://mdbootstrap.com/">Contiedenproject.com</a>
  </div>
  <!-- Copyright -->
</footer>
</body>
</html>