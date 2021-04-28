<?php
session_start();
if (empty($_SESSION['registrationerror'])) {
  ?>
  <html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script type="text/javascript" language="javascript"> 
            function onChange() {
                const password = document.querySelector('input[name=pass]');
                const confirm = document.querySelector('input[name=passconfirm]');
                if (confirm.value === password.value) {
                    confirm.setCustomValidity('');
                } else {
                    confirm.setCustomValidity('Passwords do not match');
                }
                }
            function validaForm() { 
            if (document.registr.pass.value.length < 8) {
                alert("Inserire una password di almeno 8 caratteri"); 
            return false; 
            }
            if (document.registr.nome.value=="") { 
            alert("Inserire nome"); 
            return false; 
            }  
            if (document.registr.cognome.value=="") { 
            alert("Inserire cognome"); 
            return false; 
            }
            if (document.registr.mail.value=="") { 
            alert("Inserire email"); 
            return false; 
            }
            if (document.registr.telefono.value=="") { 
            alert("Inserire numero di telefono"); 
            return false; 
            }
            if (document.registr.telefono.value!="") {
                var v=parseInt(document.registr.telefono.value); 
                if (isNaN(v)) { 
                alert("Il numero di telefono deve essere un numero"); 
                return false; 
                }  
            }
            } 
            </script> 
        <style>
            body,
      html {
            margin: 0;
            padding: 0;
            height: 100%;
            background-image: url('immagini/08.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
			}

      .user_card {
			height: 700px;
			width: 550px;
			margin-top: auto;
			margin-bottom: auto;
			background: #fae9dd;
			position: relative;
			display: flex;
			justify-content: center;
			flex-direction: column;
			padding: 10px;
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			-webkit-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			-moz-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			border-radius: 5px;
            float: right;
            text-align: left;

		}

      .login_btn {
			width: 100%;
			background:#1d4e00 !important;
			color: white !important;
		}

      .brand_logo_container {
			position: absolute;
			height: 170px;
			width: 170px;
			top: -75px;
			border-radius: 50%;
			background: #fae9dd;
			padding: 10px;
			text-align: center;
		}
		.brand_logo {
			height: 150px;
			width: 150px;
			border-radius: 50%;
			border: 2px solid white;
		}

        .input-group-text {
			background: #1d4e00 !important;
			color: white !important;
			border: 0 !important;
			border-radius: 0.25rem 0 0 0.25rem !important;
		}
        .custom-checkbox .custom-control-input:checked~.custom-control-label::before {
			background-color: #1d4e00 !important;
		}
        
blockquote{
    border-left:none
}

.quote-badge{
    background-color: rgba(0, 0, 0, 0.2);   
}

.quote-box{
    
    overflow: hidden;
    margin-top: -50px;
    padding-top: -100px;
    border-radius: 17px;
    background-color: #fae9dd;
    margin-top: 225px;
    color:#000000;
    width: 425px;
    box-shadow: 2px 2px 2px 2px #1d4e00;
    float: left
    
}

.quotation-mark{
    margin-left: 20px;
    margin-top: -10px;
    font-weight: bold;
    font-size:100px;
    color:#1d4e00;
    font-family: "Times New Roman", Georgia, Serif;
    
}

.quote-text{
    margin-left: 20px;
    margin-right: 20px;
    font-size: 20px;
    margin-top: -65px;
}

.blog-post {
    margin-left: 20px;
    font-size: 18px;

}
    </style>
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
		<a class="navbar-brand" href="index3.php">Conti Eden Project</a>
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
	<h4 class="card-title mt-3 text-center">Crea il tuo account</h4>
	<p class="text-center">Registrati per poter effettuare prenotazioni</p>
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
    <?php
  }
else {
  ?>
    <head>
        
        <script type="text/javascript" language="javascript"> 
            function onChange() {
                const password = document.querySelector('input[name=pass]');
                const confirm = document.querySelector('input[name=passconfirm]');
                if (confirm.value === password.value) {
                    confirm.setCustomValidity('');
                } else {
                    confirm.setCustomValidity('Passwords do not match');
                }
                }
            function validaForm() { 
            if (document.registr.pass.value.length < 8) {
                alert("Inserire una password di almeno 8 caratteri"); 
            return false; 
            }
            if (document.registr.nome.value=="") { 
            alert("Inserire nome"); 
            return false; 
            }  
            if (document.registr.cognome.value=="") { 
            alert("Inserire cognome"); 
            return false; 
            }
            if (document.registr.mail.value=="") { 
            alert("Inserire email"); 
            return false; 
            }
            if (document.registr.telefono.value=="") { 
            alert("Inserire numero di telefono"); 
            return false; 
            }
            if (document.registr.telefono.value!="") {
                var v=parseInt(document.registr.telefono.value); 
                if (isNaN(v)) { 
                alert("Il numero di telefono deve essere un numero"); 
                return false; 
                }  
            }
            } 
            </script> 
        <style>
            body,
            html {
			margin: 0;
			padding: 0;
			height: 100%;
            background-image: url('immagini/08.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
			}

            .user_card {
			height: 700px;
			width: 550px;
			margin-top: auto;
			margin-bottom: auto;
			background: #fae9dd;
			position: relative;
			display: flex;
			justify-content: center;
			flex-direction: column;
			padding: 10px;
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			-webkit-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			-moz-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			border-radius: 5px;
            float: right;
            text-align: left;

		}

        .login_btn {
			width: 100%;
			background:#1d4e00 !important;
			color: white !important;
		}

        .brand_logo_container {
			position: absolute;
			height: 170px;
			width: 170px;
			top: -75px;
			border-radius: 50%;
			background: #fae9dd;
			padding: 10px;
			text-align: center;
		}
		.brand_logo {
			height: 150px;
			width: 150px;
			border-radius: 50%;
			border: 2px solid white;
		}

        .input-group-text {
			background: #1d4e00 !important;
			color: white !important;
			border: 0 !important;
			border-radius: 0.25rem 0 0 0.25rem !important;
		}
        .custom-checkbox .custom-control-input:checked~.custom-control-label::before {
			background-color: #1d4e00 !important;
		}
        
blockquote{
    border-left:none
}

.quote-badge{
    background-color: rgba(0, 0, 0, 0.2);   
}

.quote-box{
    
    overflow: hidden;
    margin-top: -50px;
    padding-top: -100px;
    border-radius: 17px;
    background-color: #fae9dd;
    margin-top: 225px;
    color:#000000;
    width: 425px;
    box-shadow: 2px 2px 2px 2px #1d4e00;
    float: left
    
}

.quotation-mark{
    margin-left: 20px;
    margin-top: -10px;
    font-weight: bold;
    font-size:100px;
    color:#1d4e00;
    font-family: "Times New Roman", Georgia, Serif;
    
}

.quote-text{
    margin-left: 20px;
    margin-right: 20px;
    font-size: 20px;
    margin-top: -65px;
}

.blog-post {
    margin-left: 20px;
    font-size: 18px;

}
            </style>
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
    <!--navbar-->
	 <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light ">
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
		  <a class="navbar-brand" href="azienda.html">
			<img src="immagini/home.png" alt="azienda" width="30" height="30" class="d-inline-block align-top" alt="">
			L'azienda
		  </a>
		</nav>
	
		<nav class="navbar navbar-light bg-light">
		  <a class="navbar-brand" href="login.html">
			<img src="immagini/account.png" alt="account" width="30" height="30" class="d-inline-block align-top" alt="">
			Accedi
		  </a>
		  <a class="navbar-brand">
			|
		  </a>
		  <a class="navbar-brand" href="registrazione.html">
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
<br>
<div class="container">
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
<div class="container">
<br>
<hr>
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
	<h4 class="card-title mt-3 text-center">Crea il tuo account</h4>
	<p class="text-center">Registrati per poter effettuare prenotazioni</p>
    <p class="text-center" style="color:red;">Email già esistente! Effettua il <a href="login.html">Login</a> </p> 
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
</form>
</article>
</div> <!-- card.// -->

</div> 
<!--container end.//-->

<br><br>

    </body>
<?php
}
?>