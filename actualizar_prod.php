<?php

include "conexion.php";

$codigo =$_POST['codigo'];
$consulta = ("UPDATE items SET id ='$_POST[id]',
nombre='$_POST[nombre]',descripcion='$_POST[descripcion]',precio ='$_POST[precio]',categoria='$_POST[categoria]',campo1='$_POST[campo1]',campo2='$_POST[campo2]'WHERE id ='$codigo'");

$resultado = mysqli_query($conexion,$consulta);

if ($resultado) {
    echo "<script>
    alert('El producto se actualizo correctamente')
    location.href='mostrar_productos.php';
    </script>";
}else {
    echo "<script>
    alert('El producto no se actualizo correctamente')
    location.href='mostrar_productos.php';
    </script>";

}
mysqli_close($conexion);




?>