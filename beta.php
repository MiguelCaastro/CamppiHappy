<?php

require 'config/conexion';
$db = new Database();
$con = $db-> conectar();



?>



<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/formulario.css">
	<script src="js/app.js" defer></script>
	<title>Subir imagenes</title>
</head>
<body>
	
<div class="container-box">
	<form action="insertar_imagenes.php" method="post" enctype="multipart/form-data" class="form">
		
	<CENTER><h1>INGRESA TUS IMAGENES</h1></CENTER>

		<!-- INPUT NOMBRE -->
		<div class="input-container">
        <input type="text" name="nombre" placeholder="Nombre" class="input-mail" required="">
		<span></span>
		</div>

	

		<br>
				<!-- INPUT PARA SUBIR ARCHIVO -->
		<div class="container-input">
			<input type="file" name="archivo" id="file-1" class="inputfile inputfile-1" data-multiple-caption="{count} archivos seleccionados" multiple />
			<label for="file-1">
			<svg xmlns="http://www.w3.org/2000/svg" class="iborrainputfile" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"></path></svg>
			<span class="iborrainputfile">Seleccionar archivo</span>
			</label>
		</div>

		 <br>
		 		<!-- INPUT SUBMIT -->
		<button type="submit" class="submit" name="subir">
			<span class="sign-text"> Subir</span>
		</button>
		<br>

				<!-- ICONO EXPLORADOR DE ARCHIVOS -->
		<center>
		<button class="button">
	
			<div class="container">
			  <div class="folder folder_one"></div>
			  <div class="folder folder_two"></div>
			  <div class="folder folder_three"></div>
			  <div class="folder folder_four"></div>
			</div>

		</button>
		</center>

				<!-- VER LOS ARCHIVOS DESCARGADOS -->
		  <p class="signup-link">
			Subiste archivos?
			<a href="listar_imagenes.php" class="up">Miralos</a>
		  </p>

	</form>
</div>





</body>
</html>