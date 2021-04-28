<?php
session_start();
if (empty($_SESSION['loginerror'])) {
  ?>
<html>
    
<head>
    <script type="text/javascript" language="javascript"> 
    function validaForm() { 
        if (document.registr.mail.value=="") { 
            alert("Inserire indirizzo email!"); 
        return false; 
        } 
        if (document.registr.pass.value == "") {
            alert("Inserire la password!"); 
        return false; 
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
			height: 400px;
			width: 350px;
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
		.form_container {
			margin-top: 100px;
		}
		.login_btn {
			width: 100%;
			background:#1d4e00 !important;
			color: white !important;
		}
		.login_btn:focus {
			box-shadow: none !important;
			outline: 0px !important;
		}
		.login_container {
			padding: 0 2rem;
		}
		.input-group-text {
			background: #1d4e00 !important;
			color: white !important;
			border: 0 !important;
			border-radius: 0.25rem 0 0 0.25rem !important;
		}
		.input_user,
		.input_pass:focus {
			box-shadow: none !important;
			outline: 0px !important;
		}
		.custom-checkbox .custom-control-input:checked~.custom-control-label::before {
			background-color: #1d4e00 !important;
		}
    </style>
     <link rel="icon" href="immagini/logo.jpg">
	<title>Login</title>
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
<!--Coded with love by Mutiullah Samim-->
<body>
	<div class="container h-100" style="margin-top: 4%;">
		<div class="d-flex justify-content-center h-100">
			<div class="user_card">
				<div class="d-flex justify-content-center">
					<div class="brand_logo_container">
						<img src="immagini/logo.jpg" class="brand_logo" alt="Logo">
					</div>
				</div>
				<div class="d-flex justify-content-center form_container">
					<form action="login.php" method="POST" name="registr" onSubmit="return validaForm();">
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
						Non hai un account? <a href="paginaRegistrazione.php" class="ml-2">Registrati</a>
					</div>
					<div class="d-flex justify-content-center links">
						<a href="#">Hai dimenticato la password?</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
<?php
}
else {
	?>
	
    
	<head>
		<script type="text/javascript" language="javascript"> 
		function validaForm() { 
			if (document.registr.mail.value=="") { 
				alert("Inserire indirizzo email!"); 
			return false; 
			} 
			if (document.registr.pass.value == "") {
				alert("Inserire la password!"); 
			return false; 
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
				height: 400px;
				width: 350px;
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
			.form_container {
				margin-top: 100px;
			}
			.login_btn {
				width: 100%;
				background:#1d4e00 !important;
				color: white !important;
			}
			.login_btn:focus {
				box-shadow: none !important;
				outline: 0px !important;
			}
			.login_container {
				padding: 0 2rem;
			}
			.input-group-text {
				background: #1d4e00 !important;
				color: white !important;
				border: 0 !important;
				border-radius: 0.25rem 0 0 0.25rem !important;
			}
			.input_user,
			.input_pass:focus {
				box-shadow: none !important;
				outline: 0px !important;
			}
			.custom-checkbox .custom-control-input:checked~.custom-control-label::before {
				background-color: #1d4e00 !important;
			}
		</style>
		 <link rel="icon" href="immagini/logo.jpg">
		<title>Login</title>
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<!------ Include the above in your HEAD tag ---------->
	
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
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
	<!--Coded with love by Mutiullah Samim-->
	<body>
		<div class="container h-100">
			<div class="d-flex justify-content-center h-100">
				<div class="user_card">
					<div class="d-flex justify-content-center">
						<div class="brand_logo_container">
							<img src="immagini/logo.jpg" class="brand_logo" alt="Logo">
						</div>
					</div>
					<div class="d-flex justify-content-center form_container">
						<form action="login.php" method="POST" name="registr" onSubmit="return validaForm();">
							<p style="color:red;">Email o password errata, riprova</p>
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
							Non hai un account? <a href="registrazione.html" class="ml-2">Registrati</a>
						</div>
						<div class="d-flex justify-content-center links">
							<a href="#">Hai dimenticato la password?</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
	
<?php	
}
?>