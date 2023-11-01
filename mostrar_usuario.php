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
	<title>Mostrar Usuarios </title>
	<link rel="stylesheet" href="css/estilo11.css">
</head>
<body>
	
<header class="header">
<div class="container">
	<div class="logo">
               <h1>MOSTRAR USUARIOS</h1>
           </div>
	<nav class="menu">
		<ul>
            <li><a href="pagina_admin.php">Inicio</a></li>
			<li><a href=""> PERFIL </a>
               <ul class="submenu">
               	 <li> <a href="cambiar.php"> Cambiar contraseña  </a></li>
			     <li> <a href="formulario_admin.php"> Ingresar usuarios </a></li>
			     <li> <a href="Buscar_usuario.php"> Buscar usuario </a></li>
			     <li> <a href="cerrar_sesion.php"> CERRAR SESION </a></li>
		     	</ul>
		    </li> 	
		</ul>
 </nav>

</div>
</header>	


<div class="container-table">

    <table border="1">
        <thead>
            <tr>
                <td>ID_USUARIO</td>
                <td>NOMBRE</td>
                <td>USUARIO</td>
                <td>CONTRASEÑA</td>
                <td>TIPO</td>
            </tr>
        </thead>

    <?php

    include "conexion.php";

    $consulta ="SELECT * FROM usuario";
    $resultado = mysqli_query ($conexion,$consulta);

    while ($mostrar = mysqli_fetch_array($resultado)) {


        
   ?>
   
        <tr> 
            <td><?php echo $mostrar['id_usuario'];?></td>
            <td><?php echo $mostrar['nombre'];?></td>
            <td><?php echo $mostrar['usuario'];?></td>
            <td><?php echo $mostrar['pass'];?></td>
            <td><?php echo $mostrar['tipo'];?></td>
    </tr>


<?php
    }
 ?>
    




</table>
     






</body>
</html>
