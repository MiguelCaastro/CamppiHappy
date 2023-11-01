<?php
include "conexion.php";

$edit = $_GET['edit'];

$resultado = mysqli_query($conexion, "SELECT * FROM user WHERE id_usuario = '$edit' ") or die ("Problemas en el Select".mysqli_error($conexion));
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/modificar.css">
	<style>
 		 @import url('https://fonts.googleapis.com/css2?family=Raleway:wght@500;600;800&display=swap');
	</style>

	<title>Modificar</title>
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

		
 </nav>
</div>
</header>	

<div class="tabla">
	<form method="Post" action="actualizar_usuario.php">
<br><br><br>
	<?php

	while ($row = mysqli_fetch_array($resultado)) {
		echo "<label> Id Usuario </label>";
		echo "<input type='text' name='id_usuario' value='$row[id_usuario]'><br><br>";

		echo "<label> Nombre </label>";
		echo "<input type='text' name='nombre' value='$row[usuario]'><br><br>";

		echo "<label> Usuario </label>";
		echo "<input type='text' name='usuario' value='$row[usuario]'><br><br>";

		echo "<label> Contraseña </label>";
		echo "<input type='text' name='pass' value='$row[pass]'><br><br>";

		echo "<label> Tipo </label>";
		echo "<input type='text' name='tipo' value='$row[tipo]'><br><br>";

		echo "<label> Correo </label>";
		echo "<input type='text' name='correo' value='$row[correo]'><br><br>";
		
		echo "<label> Telefono </label>";
		echo "<input type='text' name='telefono' value='$row[nombre]'><br><br>";

	}

	?>

	<input type="hidden" name="codigo" value="<?php echo $edit?>">

	<input type="submit" name="" value="Aceptar" class="boton">
	<a href="mostrar.php"> <input type="button" class="boton" name="" value="Cancelar"></a>
</div>

</form>
</body>
</html>