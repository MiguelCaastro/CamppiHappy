<?php
 include "conexion.php";

 $nombre = $_POST['nombre'];
 $usuario = $_POST['usuario'];
 $pass = $_POST['pass'];
 $correo = $_POST['correo'];
 $tipo = 'user';



 $insertar = "INSERT INTO user(nombre,usuario,pass,correo,tipo) VALUES('$nombre','$usuario','$pass','$correo','$tipo')";
 $verificar_usuario = mysqli_query($conexion,"SELECT * FROM user WHERE usuario = '$usuario'");

 if(mysqli_num_rows($verificar_usuario) > 0){
    echo '<script>
    alert("el usuario ya se encuentra registrado");
    window.history.go(-2);
    </script>';

    exit();
 }
 $resultado = mysqli_query($conexion,$insertar);

 if($resultado){
     echo '<script>
     alert("datos insertados correctamente");
     window.history.go(-2);
     </script>';
         
 }else{
    echo "Problema al insertar los datos";
 }
 mysqli_close($conexion);

?>

