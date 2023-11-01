<?php 
session_start();
$usuario = $_SESSION['usuario'];
$pass = $_SESSION['pass'];

include "conexion.php";

if (isset($_POST['clavo1']) && isset($_POST['clavo']) && isset($_POST['clavo2']));
$usu = $_POST['clavo1'];
$clave = $_POST['clavo'];
$clave2 = $_POST['clavo2'];

$clave_capturada = "SELECT * FROM user WHERE usu = pass = '$pass'";
$respu = mysqli_query($conexion,$clave_capturada);

    $traer_clave = $fila[4];

if ($respu == false) {
    echo "Error al ejecutar la consulta: ";
    
    if ($clave != $clave2) {
        echo '<script>
           alert("Las contraseñas no coinciden");
           window.history.go(-1);
        </script>';
    } elseif($usu == $traer_clave) {
        $nueva_clave = mysqli_query($conexion,"UPDATE user SET pass ='$clave' WHERE pass ='$usu'");

        echo '<script>
           alert("¡Ya está listo!");
           window.location="pagina_admin.php.php";
        </script>';
    } else {
        echo "Por favor, revisa los datos ingresados.";
        echo "<a href='combiar1.php'>Volver</a>";
    }
} else {
    echo "No se encontró ninguna contraseña en la base de datos.";
    echo "<a href='cambiarpass1.php'>Volver</a>";
}



?>
 
    