<?php

include "conexion.php";
$del = $_GET['del'];

if (!empty($_POST)) {
	$codmedicamento = $_POST['codi'];

	$query_borrar = mysqli_query($conexion, "DELETE  FROM user WHERE id_usuario ='$codmedicamento'");
	if ($query_borrar) {
		header("location:mostrar.php");
	}else {
		echo "Error al eliminar";
	}
}

$resultado = mysqli_query($conexion, "SELECT*FROM user WHERE id_usuario ='$del'") or die("Problemas en el Select". mysqli_error($conexion));

while ($row = mysqli_fetch_array($resultado)) {
	$codigo = $row['id_usuario'];
	$nombre = $row['nombre'];
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Eliminar datos</title>
</head>
<body>

	<h2> ¿Está seguro que desea eliminar el registro del medicamento? </h2>


	<?php
	echo " ¿Cuyo código es: " .$codigo." Y el nombre es " .$nombre. "";?>
	
	<br>
	<form method="Post" action="">
		<input type="hidden" name="codi" value="<?php echo "$del"; ?>">
		<input type="submit" name="" value="Aceptar">
		<a href="mostrar.php"><input type="button" name="" value="Cancelar"></a>
	</form>

</body>
</html>
