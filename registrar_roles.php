<?php
 include "conexion.php";

 $nombre = $_POST['nombre'];
 $usuario = $_POST['usuario'];
 $clave = $_POST['pass'];
 $tipo = $_POST['tipo'];



 $insertar = "INSERT INTO user(nombre,usuario,pass,tipo) VALUES('$nombre','$usuario','$clave','$tipo')";
 $verificar_usuario = mysqli_query($conexion,"SELECT * FROM user WHERE usuario = '$usuario'");

 if(mysqli_num_rows($verificar_usuario) > 0){
    echo '<script>
    alert("el usuario ya se encuentra verificado");
    window.history.go(-1);
    </script>';

    exit();
 }
 $resultado = mysqli_query($conexion,$insertar);

 if($resultado){
     echo '<script>
     alert("datos insertados correctamente");
     header("location:login.html");
     </script>';
         
 }else{
    echo "Problema al insertar los datos";
 }
 mysqli_close($conexion);

?>


<a href="login.html"> Ingresar al login </a>