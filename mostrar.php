<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Mostrar Usuarios </title>
	<link rel="stylesheet" type="text/css" href="css/mostrar.css">
	<link rel="stylesheet" href="responsive_mostrar.css">
</head>
<body>

<style>
        .logo1{
            width: 10px;
            position: relative;
            right: 270px;
        }
        img{
            width: 60px;
        }
    </style>
<header>
        <nav class="navbar">
            <div class="logo">
                <a href="#">CAMPI<span>HAPPY</span></a>
            </div>
            <div class="logo1">
            <img src="img/imagen5.jpg" alt="">
            </div>

            <ul class="menu-items">
             <li><a href="index.html"> Inicio </a></li>
			 <li><a href="pagina_admin.php"> Perfil </a></li>
                
            </ul>

            <!--<div class="search-box">
                <div class="search-icon">
                    <span class="icon-search"></span>
                </div>
                <input type="text" placeholder="Search...">
            </div>-->

            <div class="icon-links">
                <!--<div id="search-btn"><span class="icon-search"></span></div>-->
                <div id="customer-center"><span class="icon-phone-alt"></span></div>
                <div id=""> <a href="login.html"> <span class="icon-user"></a></div>
                <div id="toggle-bar"><span class="toggler"></span></div>
            </div>
        </nav>
    </header>


</head>
<body>


<?php

include "conexion.php"

?>
<table border="1">
	<tr>
		<th>Id_Usuario</th>
		<th>Usuario</th>
		<th>Contraseña</th>
		<th>Tipo</th>
		<th>Correo</th>
		<th>Nombre</th>
		<th>Botones de</th>
		<center><th colspan="2">Acción</th></center>
	</tr>

	<tbody>
		<?php

		$registro = mysqli_query($conexion, "SELECT * FROM user") or die("Problemas en el select". mysql_error($conexion));

		while ($row = mysqli_fetch_array($registro)) {?>
			<tr>
				<td><?php echo $row['id_usuario'];?></td>
				<td><?php echo $row['usuario'];?></td>
				<td><?php echo $row['pass'];?></td>
				<td><?php echo $row['tipo'];?></td>
				<td><?php echo $row['correo'];?></td>
				<td><?php echo $row['nombre'];?></td>
				<td>
					<a href="modificar.php?edit=<?php echo $row['id_usuario'] ?>" class="edit_btn"> Actualizar</a>
				</td>
				<td>
					<a href="eliminar_usuario.php?del=<?php echo $row['id_usuario'];?>" class="del_btn"> Eliminar</a>
				</td>
			</tr>
		<?php } ?>

	</tbody>
</table>


</body>
</html>