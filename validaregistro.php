<?php

include "conexion.php";


$usuario = $_POST['usuario'];
$pass = $_POST['password'];


$admin = mysqli_query($conexion,"SELECT * FROM usuario WHERE usuario = '$usuario' and  pass='$pass' and tipo = 'admin'");
$user = mysqli_query($conexion,"SELECT * FROM usuario WHERE usuario = '$usuario' and  pass='$pass' and tipo = 'user'");



if (mysqli_num_rows($admin)> 0) {
 $fila = mysqli_fetch_row($admin);
 $ced = $fila[0];
 $nome = $fila[1];
$usuario = $fila[2];
$pass = $fila[3];
$tipo = $fila [4];
session_start();
$_SESSION['id_usuario']="$ced";
$_SESSION['nombre']="name";
$_SESSION['usuario']="usuario";
$_SESSION['pss']="pass";
$_SESSION['tipo']="tipo";

header('location:pagina_admin.php');

}elseif(mysqli_num_rows($user) > 0){
    $fila = mysqli_fetch_row($user);
$name = $fila[1];
$usuario = $fila[2];
$_SESSION['nombre']="name";
    $_SESSION['usuario']="usuario";
    header("location:pagina.php");



}else{
//echo '<script language="javascript">alert("error de autentificacion");window.location.href="login.html"</script>';
}

//mysqli_free_result($resultado);
//mysqli_close($conexion);

?>
