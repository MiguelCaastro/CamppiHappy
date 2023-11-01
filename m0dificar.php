<?php
include "conexion.php";

$edit = $_GET['edit'];

echo $edit;
$resultado = mysqli_query($conexion, "SELECT * FROM user WHERE id_usuario = '$edit' ") or die ("Problemas en el Select".mysqli_error($conexion));
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Modificar</title>
</head>
<body>

	<nav>
		<h2> Actualizar Datos Del Medicamento </h2>
	</nav>

	<form method="Post" action="actualizar.php">

	<?php

	while ($row = mysqli_fetch_array($resultado)) {
		echo "<label> Id Usuario </label>";
		echo "<input type='text' name='id_usuario' value='$row[id_usuario]'><br>";

		echo "<label> Nombre </label>";
		echo "<input type='text' name='usuario' value='$row[nombre]'><br>";

		echo "<label> Contraseña </label>";
		echo "<input type='text' name='pass' value='$row[pass]'><br>";

		echo "<label> Tipo </label>";
		echo "<input type='text' name='tipo' value='$row[tipo]'><br>";

		echo "<label> Direccion </label>";
		echo "<input type='text' name='direccion' value='$row[direccion]'><br>";

		echo "<label> Correo </label>";
		echo "<input type='text' name='correo' value='$row[correo]'><br>";
		
		echo "<label> Nombre </label>";
		echo "<input type='text' name='nombre' value='$row[nombre]'><br>";

	}

	?>

	<input type="hidden" name="codigo" value="<?php echo $edit?>">

	<input type="submit" name="" value="Aceptar" class="boton">
	<a href="mostrar.php"> <input type="button" name="" value="Cancelar"></a>

</form>
</body>
</html>