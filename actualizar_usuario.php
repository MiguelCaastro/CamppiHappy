<?php
include "conexion.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_usuario = $_POST['id_usuario'];
    $nombre = $_POST['nombre'];
    $usuario = $_POST['usuario'];
    $pass = $_POST['pass'];
    $tipo = $_POST['tipo'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];

    $edit = $_POST['codigo'];

    // Actualiza los datos en la base de datos
    $query = "UPDATE user SET nombre='$nombre', usuario='$usuario', pass='$pass', tipo='$tipo', correo='$correo', telefono='$telefono' WHERE id_usuario = '$edit'";
    $resultado = mysqli_query($conexion, $query) or die("Problemas en la actualización: " . mysqli_error($conexion));
    
    if ($resultado) {
        echo "<script>
        alert('El Cambio Fue Exitoso')
        location.href='mostrar.php';
        </script>";
    }else {
        echo "<script>
        alert('No se ha podido realizar el cambio')
        location.href='mostrar.php';
        </script>";
    
    }
    mysqli_close($conexion);

    // Redirecciona al usuario a la página de mostrar usuarios después de la actualización

}
?>
