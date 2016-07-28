<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="icon" href="<?php echo asset('img/Logo.ico')?>" type="image/x-icon" />
	<link rel="shortcut icon" href="<?php echo asset('img/Logo.ico')?>" type="image/x-icon" />
	<link rel="stylesheet" href="<?php echo asset('css/login.css')?>" type="text/css"> 
	<script  src="<?php echo asset('js/presentacion.js')?>" type="text/javascript"></script>
	<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimun-scale=1" />		
	<title>GESTIÓN DE ACTIVO FIJO E INVENTARIO</title>
</head>
<body onload="javaSlideShow()">
	<div id="contenedor">
		<header id="titulo">
			<img src="img/Odontologia.png">
			<h1>FACULTAD DE ODONTOLOGIA</h1>
			<h2>UNIVERSIDAD DE EL SALVADOR</h2>
		</header>
		<div id="tema">
			<h2>GESTIÓN DE ACTIVO FIJO E INVENTARIO</h2>
		</div>
		<section id="datos">
			<h3>INICIAR SESIÓN</h3>
			<label class="etiquetas">USUARIO:</label>
			<input type="text" name="usuario" class="textfield" pattern=" " title=" " required></input>
			<label class="etiquetas" style="margin-top:8%;">CONTRASEÑA:</label>
			<input type="password" name="contraseña" class="textfield" pattern=" " title= " " required style="margin-top:8%;"></input>
			<input type="submit" value="Ingresar" id="btnIngresar"></input>
		</section>
		<section id="imagenes">
			<img src="img/UES.png" name='SlideShow'>
		</section>
	</div>
</body>
</html>