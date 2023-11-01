<?php
//iniciar sesion 
session_start();

// validar que solamente pueda ingresar el usuario solo
error_reporting(0);
$var_sesion = $_SESSION['usuario'];

if ($var_sesion == null || $var_sesion = ''){
	echo "Ingreso no autorizado";
	die();
}
 ?>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Cambiar Contraseña </title>
	<style>
  @import url('https://fonts.googleapis.com/css2?family=Lobster+Two:ital@1&family=Raleway:wght@700&display=swap');
</style>
	<link rel="stylesheet" href="css/combiar.css">
</head>
<body>
	
<header class="header">
<div class="container">
	<div class="logo">
               <h1> Cambiar Contraseña</h1>
           </div>
	<nav class="menu">
		<ul>
            <li><a href="pagina_administrador.php">Inicio</a></li>
            <li><a href=""> PERFIL </a>
               <ul class="submenu">
               	 <li> <a href="formulario_admin.php"> Ingresar usuarios </a></li>
                 <li> <a href="mostrar_usuario.php"> Mostrar usuarios </a></li>

			     <li> <a href="Buscar_usuario.php"> Buscar usuario </a></li>
			     <li> <a href="login.php"> CERRAR SESION </a></li>
		     	</ul>
		    </li> 	
		</ul>
 </nav>

</div>
</header>	

<div class="main">
<div class="containercastrolamama">
<div class="pepe">
	<form action="cambiarpass1.php" method="post">
		
		<h2 class="text1" > Ingrese la clave actual </h2>
        <input type="text" name="clavo1" placeholder="Ingrese la contraseña actual" required="required">
        <br>
        <br><br>	
        <br>
        <h2> Ingrese la contraseña nueva</h2>
        <input type="text" name="clavo" placeholder="Introduce tu Nueva Contraseña" required="required"><br>
        <br><br>
        <br>
        <h2> ingrese de nuevo la contraseña</h2>
        <input type="text" name="clavo2" placeholder="Confirma tu Contraseña" required="required"><br>
		<br><br>

		<input type="submit" name="buscador" value="Cambiar" class="boton">	
	</form>
</div>
</div>
</div>

</body>
</html>

