<?php
session_start();
if (empty($_SESSION['registrationerror'])) {
  ?>
 
 <?php
}
else {
 session_destroy();
 ?>
<script>      var errore='erroreregistrazione.html';  </script> 
<?php
}
?>
  <html>
    <head>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script type="text/javascript" language="javascript" src="js_site/paginaregistrazione.js"></script>
            
    <link rel = "stylesheet" href = "css_site/paginaregistrazione_style.css">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">



    <link rel="icon" href="immagini/logo.jpg">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <title>Registrazione</title>
    <link rel="icon" href="immagini/logo.jpg">
     <!--navbar-->
	 <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light ">
		<a class="navbar-brand" href="index.php">Conti Eden Project</a>
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
		  <a class="navbar-brand" href="azienda.html">
			<img src="immagini/home.png" alt="azienda" width="30" height="30" class="d-inline-block align-top" alt="">
			L'azienda
		  </a>
		</nav>
	
		<nav class="navbar navbar-light bg-light">
		  <a class="navbar-brand" href="paginaLogin.php">
			<img src="immagini/account.png" alt="account" width="30" height="30" class="d-inline-block align-top" alt="">
			Accedi
		  </a>
		  <a class="navbar-brand">
			|
		  </a>
		  <a class="navbar-brand" href="paginaRegistrazione.php">
			Registrati
		  </a>
		</nav>
		</div>
	  </nav>
    </head>
    <body>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
<br>
<br>
<br>
<br>
<div class="container" style="margin-top: 8%;">
    <blockquote class="quote-box">
      <p class="quotation-mark">
        “
      </p>
      <p class="quote-text">
        La pioggia rallenta i lavori agricoli ma tonifica i prati. Il verde rilassa e il marrone attende la mano paziente dell’agricoltore.
      </p>
      <hr>
      <div class="blog-post-actions"></div>
        <p class="blog-post">
          Buona primavera, da Conti Eden Project
        </p>
      </div>
    </blockquote>
</div>
<div class="container" style="margin-top: 3%;">
<div class="user_card">
    <div class="d-flex justify-content-center">
        <div class="brand_logo_container">
            <img src="immagini/logo.jpg" class="brand_logo" alt="Logo">
        </div>
    </div>
<article class="card-body mx-auto" style="max-width: 400px;">
    <br>
    <br>
    <br>
    <br>
	<h4 class="card-title mt-3 text-center">Crea il tuo account</h4>
	<p class="text-center">Registrati per poter effettuare prenotazioni</p>
  <script>

					$(function() {
					var includi =$('[data-include]');
					jQuery.each(includi, function(){

					$(this).load(errore);
					});
					});
					</script>

					<div data-include="header"></div>
	<form action="registrazione.php" method="POST" name="registr" onSubmit="return validaForm();">
	<div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input name="nome" class="form-control" placeholder="Nome" type="text">
    </div> <!-- form-group// -->
    <div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input name="cognome" class="form-control" placeholder="Cognome" type="text">
    </div> <!-- form-group// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
		 </div>
        <input name="mail" class="form-control" placeholder="Indirizzo email" type="email">
    </div> <!-- form-group// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
		</div>
    	<input name="telefono" class="form-control" placeholder="Numero di telefono" type="text">
    </div> <!-- form-group// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		</div>
        <input name = "pass" class="form-control" placeholder="Inserisci password" type="password" onChange="onChange()" required>
    </div> <!-- form-group// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		</div>
        <input name = "passconfirm" class="form-control" placeholder="Ripeti password" type="password" onChange="onChange()" required>
    </div> <!-- form-group// -->
    <div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="customControlInline" required>
        <label class="custom-control-label" for="customControlInline">Dichiaro di aver letto l'<a target="_blank" href="#">informativa sulla privacy</a> ai sensi del GDPR e do il consenso al trattamento dei dati personali.</label>
    </div>       
    
    <br>
    <br>                                     
    <div class="form-group">
        <button type="submit"  name="registrationButton" class="btn login_btn"> Registrati  </button>
    </div> <!-- form-group// -->      
    <p class="text-center">Hai già un account? <a href="login.html">Login</a> </p>                                                                 
</form>
</article>
</div> <!-- card.// -->

</div> 
<!--container end.//-->

<br>
<br>

    </body>
    </html>