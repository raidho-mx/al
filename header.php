<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	<meta name="viewport" content="width=device-width" />

	<link rel="stylesheet" href="css/font-awesome.css" />
	<link rel="stylesheet" href="css/reset.css" />
	<link rel="stylesheet" href="css/style.css" />

	<script src="//code.jquery.com/jquery-1.10.2.js"></script>
	<script type="text/javascript" src="js/jquery.tagsinput.js"></script>
 	<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
 	<script src="js/sketch.js"></script>
	<title>Almirant</title>

	<script>
		// ADD TAGS
		$(function() {
			$('.tags_1').tagsInput({width:'auto'});
		});
	</script>
</head>
<body>
	<div class="main-wrapper">
	<header>
		<div class="logo">
			<a href="index.php">
				<img src="img/logo.svg" alt="Almirant">
			</a>
		</div>
		<div class="navigation">
			<div class="search">
				<input type="search" placeholder="buscar">
			</div>
			<a href="nuevo_contrato_cliente.php" class="create-contract">
				<div class="helper">Crear Contrato</div>
			</a>
			<div class="perfil" style="background-image: url('img/elena.jpg');" onclick="location.href='perfil.php'">
				<div>
					<ul>
						<li class="user"><p>Elena Daniela</p></li>
						<li><a href="perfil.php">Mi perfil</a></li>
						<li><a href="contratos.php">Mis contratos</a></li>
						<li><a href="nuevo_contrato_cliente.php">Personas</a></li>
						<li><a href="historial.php">Historial</a></li>
						<li><a href="#">Cerrar Sesión</a></li>
					</ul>
				</div>
			</div>
			
			<div class="perfil_movil" style="background-image: url('img/elena.jpg');">
				<div>
					<ul>
						<li class="user"><p>Elena Daniela</p></li>
						<li><a href="perfil.php">Mi perfil</a></li>
						<li><a href="contratos.php">Mis contratos</a></li>
						<li><a href="nuevo_contrato_cliente.php">Personas</a></li>
						<li><a href="historial.php">Historial</a></li>
						<li><a href="#">Cerrar Sesión</a></li>
					</ul>
				</div>
			</div>
		</div>
	</header>
