<!doctype html>
<html lang="pt-br">
  <head>
  	<title>SEFINTEC - TEMPLATE</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="assets/img/ati.ico" rel="icon">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

	<!-- modal -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	
	<link rel="stylesheet" href="ncss/style2.css">

	</head>
	<!--<body class="img js-fullheight" style="background-image: url(images/bg.jpg);">-->
	<!-- modal mensagem -->
		
	<!-- fim do modal -->
	<body style="background-color:#008080">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<img src="images/logo_pmg.png" width="60%">
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
				  <h2 class="heading-section mb-4 text-center">SIGLA<br>Nome do Sistema</h2>
		      	<form action="#" method="POST" class="signin-form" autocomplete="no">
		      		<div class="form-group">
		      			<input type="text" name="username" class="form-control" placeholder="Username" autocomplete="no" required>
		      		</div>
					<div class="form-group">
						<input id="password-field" type="password" name="password" class="form-control" placeholder="Password" autocomplete="no" required>
						<span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
					</div>
					<?php echo $_SESSION['msg'];?>
					<div class="form-group d-md-flex">
						
					</div>
					
					<div class="form-group">
						<input type="hidden" name="pg" value="<?php echo $_SESSION['pagina_atual'] ;?>">
						<button type="submit" class="form-control btn btn-primary submit px-3">Login</button>
					</div>
	          </form>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="njs/jquery.min.js"></script>
  <script src="njs/popper.js"></script>
  <script src="njs/bootstrap.min.js"></script>
  <script src="njs/main.js"></script>

	</body>
</html>

