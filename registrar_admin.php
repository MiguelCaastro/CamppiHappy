<?php
 include "conexion.php";

 $usuario = $_POST['usuario'];
 $pass = $_POST['pass'];
 $correo = $_POST['correo'];
 $telefono = $_POST['telefono'];
 $tipo = 'admin';
 



 $insertar = "INSERT INTO user(usuario,pass,correo,telefono,tipo) VALUES('$usuario','$pass','$correo','$telefono','$tipo')";
 $verificar_usuario = mysqli_query($conexion,"SELECT * FROM user WHERE usuario = '$usuario'");

 if(mysqli_num_rows($verificar_usuario) > 0){
    echo '<script>
    alert("el usuario ya se encuentra registrado");
    window.history.go(-1);
    </script>';

    exit();
 }
 $resultado = mysqli_query($conexion,$insertar);

 if($resultado){
     echo '<script>
     alert("El Usuario ha sido Registrado");
     window.history.go(-1);
     </script>';
         
 }else{
    echo "Problema al insertar los datos";
 }
 mysqli_close($conexion);

?>

