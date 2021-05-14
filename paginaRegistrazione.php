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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script type="text/javascript" language="javascript" src="js_site/paginaregistrazione.js"></script>
            
    <link rel = "stylesheet" href = "css_site/paginaregistrazione_style.css">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    
    <meta name="viewport" content="width=device−width, initial−scale=1.0" />

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
    <a class="navbar-brand" href=".">Conti Eden Project</a>

      <div class="col">
         
      </div>
      <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="#">
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
<div class="container" style="margin-top: 10%; margin-bottom: 5%; float:left">
    <blockquote class="quote-box">
      <p class="quotation-mark">
        “
      </p>
      <p class="quote-text">
        La pioggia rallenta i lavori agricoli ma tonifica i prati. Il verde rilassa e il marrone attende la mano paziente dell’agricoltore.
      </p>
      <hr>
      <div class="blog-post-actions">
        <p class="blog-post">
          Buona primavera, da Conti Eden Project
        </p>
      </div>
    </blockquote>
</div>
<div class="container" style="margin-top:-35%; float:right">
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
        <label class="custom-control-label" for="customControlInline">Dichiaro di aver letto l'<a data-toggle="modal" data-target="#infoModal" href="#">informativa sulla privacy</a> ai sensi del GDPR e do il consenso al trattamento dei dati personali.</label>
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




    <!-- Modal -->
    <div class="modal fade" id="infoModal" tabindex="-1" role="dialog" aria-labelledby="modal"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Informativa privacy</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
In ottemperanza degli obblighi derivanti dalla normativa nazionale (Codice in materia di protezione dei dati personali) e europea (Regolamento europeo per la protezione dei dati personali), il presente sito rispetta e tutela la riservatezza dei visitatori e degli utenti, ponendo in essere ogni sforzo possibile e proporzionato per non ledere i diritti degli utenti. <br>
Il presente sito non pubblica annunci pubblicitari, non usa dati a fini di invio di pubblicità. 
Si comunica inoltre che il presente sito utilizza cookie al fine poter usufruire di alcune funzionalità, quali la gestione degli ordini e dei carrelli.
Si garantisce inoltre la riservateza dei dati inseriti dall'utente, il cui unico scopo è quello di poter fornire comunicazioni riguardo lo stato dell'ordine, oppure per le consegne a domicilio quello di raggiungere l'indirizzo indicato per la consegna.
I dati richiesti (nome, cognome, indirizzo, telefono...) sono strettamente necessari, non vengono chiesti dati il cui scopo non rientra tra quelli utili al sito per la gestione degli ordini. Si garantisce inoltre che nessun dato verrà mai venduto a parti terze.</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-dismiss="modal">Ho capito</button>
                </div>
            </div>
        </div>
    </div>
      
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