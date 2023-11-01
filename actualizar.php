<?php

include "conexion.php";

$codigo =$_POST['codigo'];
$consulta = ("UPDATE user SET id_usuario ='$_POST[id_usuario]',
usuario='$_POST[usuario]',pass='$_POST[pass]',tipo ='$_POST[tipo]',direccion='$_POST[direccion]',correo='$_POST[correo]',nombre='$_POST[nombre]'WHERE id_usuario ='$codigo'");

$resultado = mysqli_query($conexion,$consulta);

if ($resultado) {
    echo "<script>
    alert('El producto se actualizo correctamente')
    location.href='mostrar.php';
    </script>";
}else {
    echo "<script>
    alert('El producto no se actualizo correctamente')
    location.href='mostrar.php';
    </script>";

}
mysqli_close($conexion);




?>