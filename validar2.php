<?php

include "conexion.php";

$usuario = $_POST['usuario'];
$pass=  $_POST['password'];


$admin = mysqli_query($conexion, "SELECT * FROM user WHERE usuario = '$usuario' and pass='$pass' and Tipo = 'admin'");
$user = mysqli_query($conexion, "SELECT * FROM user WHERE usuario = '$usuario' and pass='$pass' and Tipo = 'user'");

if (mysqli_num_rows($admin)>0) {

    $fila = mysqli_fetch_row($admin);
    $ced = $fila[0];
    $name = $fila[6];
    $usuario = $fila[2];
    $pass = $fila[3];
    $tipo = $fila[4];
    $correo = $fila[5];

    session_start();
    $_SESSION['id_usuario']="$ced";
    $_SESSION['nombre']="$name";
    $_SESSION['usuario']="$usuario";
    $_SESSION['pass']="$pass";
    $_SESSION['tipo']="$tipo";
    $_SESSION['correo']="$correo";
    $_SESSION['time'] = time();


    header ('location:pagina_admin.php');
}elseif(mysqli_num_rows($user) > 0) {

    $fila = mysqli_fetch_row($user); 
    $usuario = $fila[1];
    $pass= $fila[2];

   
session_start();
    
    $_SESSION['usuario']="$usuario";
    $_SESSION['pass']="$pass";

    header('location:pagina_user.php');
    
}else {
    echo '<script language="javascript">alert("Error de autentificacion");
    window.location.href="index.html"</script>';
}

mysqli_close($conexion);
