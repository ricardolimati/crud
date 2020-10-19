<?php
@session_start();
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<!-- Titulo e Icone - HEAD -->
	<title>CRUD - CADASTRO DE CLIENTES</title>
	<link rel="shortcut icon" href="images/icon.png" type="image/x-icon">
	<!-- CDN's -->
	<!-- Bootstrap 4 -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<!-- Fontawesome 5 -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
	<!-- GoogleFonts - OpenSans -->
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700;900&display=swap" rel="stylesheet">
	<!-- Folha de Estilo(CSS) - Direta -->
	<style type="text/css">
		body {
			margin: 0;
			background-color: #ffffff;
		}

		* {
			font-family: 'Montserrat', sans-serif;
		}

		h2 {
			font-family: 'Montserrat', sans-serif;
		}

		.thead {
			background-color: #f7f7f7;
		}
	</style>
	<!-- CDN's - JQuery e JQueryMask - Caso Seja Necessário, incluir na Página.
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script> 
-->
</head>

<body>
	<header>
		<div class="container">
			<div class="row">
				<div class="col-md-2 pt-3 pb-3">
					<a href="/crud/view/page_listclient.php">
						<img style="width: 100%; height: auto;" src="/crud/assest/img/logo-crud.jpg" alt="">
					</a>
				</div>
				<div class="col-md-9 pt-3 pb-3 text-center align-middle">
					<h5>TESTE / CRUD - RICARDO RODRIGUES DE LIMA (PHP Orientado a Objetos / Aquitetura MVC / PDO / MySql / )</h5>
				</div>
				<div class="col-md-1 pt-3 pb-3 text-center align-middle">
					<a href="/crud/index.php">
						<button class="btn btn-danger btn-xs">
							<i class="fas fa-times-circle"></i>
						</button>
					</a>
				</div>
			</div>
		</div>
	</header>