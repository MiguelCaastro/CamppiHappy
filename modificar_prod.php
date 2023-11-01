<?php
include "conexion.php";

$edit = $_GET['edit'];

echo $edit;
$resultado = mysqli_query($conexion, "SELECT * FROM items WHERE id = '$edit' ") or die ("Problemas en el Select".mysqli_error($conexion));
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/modificar.css">
	  <style>
        @import url('https://fonts.googleapis.com/css2?family=Raleway:wght@800&display=swap');
        </style>

	<title>Modificar</title>
</head>
<body>

<header class="header">
<div class="container">
	<div class="logo">
               <h1> Actualizar Datos</h1>
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

<div class="tabla">
	<form method="Post" action="actualizar_prod.php">
<br><br><br>
	<?php

	while ($row = mysqli_fetch_array($resultado)) {
		echo "<label> Id </label>";
		echo "<input type='text' name='id_usuario' value='$row[id]'><br><br>";

		echo "<label> Nombre </label>";
		echo "<input type='text' name='usuario' value='$row[nombre]'><br><br>";

		echo "<label> Descripcion </label>";
		echo "<input type='text' name='pass' value='$row[descripcion]'><br><br>";

		echo "<label> Precio </label>";
		echo "<input type='text' name='tipo' value='$row[precio]'><br><br>";

		echo "<label> Categoria </label>";
		echo "<input type='text' name='correo' value='$row[categoria]'><br><br>";
		
		echo "<label> Facebook </label>";
		echo "<input type='text' name='nombre' value='$row[campo1]'><br><br>";

        echo "<label>  </label>";
		echo "<input type='text' name='nombre' value='$row[campo2]'><br><br>";

    
    
    }

	?>

	<input type="hidden" name="codigo" value="<?php echo $edit?>">

	<input type="submit" name="" value="Aceptar" class="boton">
	<a href="mostrar.php"> <input type="button" class="boton" name="" value="Cancelar"></a>
</div>

</form>
</body>
</html>