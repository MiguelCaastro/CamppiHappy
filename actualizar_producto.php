<?php
session_start();
error_reporting(0);
$varsesion = $_SESSION['usuario'];

if ($varsesion == null || $varsesion == '') {
    echo "NO TIENE PERMISO DE ENTRAR";
    die();
}

include "conexion.php"; // Asegúrate de incluir el archivo de conexión

if (isset($_POST['actualizar'])) {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    $categoria = $_POST['categoria'];
    $campo1 = $_POST['campo1'];
    $campo2 = $_POST['campo2'];

    // Prepara la consulta SQL utilizando sentencias preparadas para mayor seguridad
    $query = "UPDATE items SET nombre = ?, descripcion = ?, precio = ?, categoria = ?, campo1 = ?, campo2 = ? WHERE id = ?";
    $stmt = mysqli_prepare($conexion, $query);

    // Vincula las variables a la consulta SQL
    mysqli_stmt_bind_param($stmt, "sssdsdi", $nombre, $descripcion, $precio, $categoria, $campo1, $campo2, $id);

    if (mysqli_stmt_execute($stmt)) {
        mysqli_stmt_close($stmt);
        header("Location: mostrar_productos.php"); // Redirige a la página de lista de productos después de la actualización
    } else {
        echo "Error al actualizar el producto: " . mysqli_error($conexion);
    }
}
?>
