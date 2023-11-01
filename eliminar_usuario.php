<?php
include "conexion.php";

if (isset($_GET['delete'])) {
    $id_usuario = $_GET['delete'];
    
    // Realiza la eliminación del usuario en la base de datos
    $query = "DELETE FROM user WHERE id_usuario = '$id_usuario'";
    $resultado = mysqli_query($conexion, $query) or die("Problemas en la eliminación: " . mysqli_error($conexion));
    
    if ($resultado) {
        echo "<script>
        alert('El Cambio Fue Exitoso')
        location.href='mostrar.php';
        </script>";
    }
    mysqli_close($conexion);
    // Redirecciona al usuario a la página de "mostrar usuarios" después de la eliminación

}
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Eliminar Usuario</title>
    <link rel="stylesheet" href="css/eliminar_usuario.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Raleway:wght@500;600;800&display=swap');
    </style>
</head>
<body>


<style>
        .logo1{
            width: 10px;
            position: relative;
            right: 270px;
        }
        img{
            width: 60px;
        }
    </style>
<header>
        <nav class="navbar">
            <div class="logo">
                <a href="#">CAMPI<span>HAPPY</span></a>
            </div>
            <div class="logo1">
            <img src="img/imagen5.jpg" alt="">
            </div>

            <ul class="menu-items">
             <li><a href="index.html"> Inicio </a></li>
			 <li><a href="pagina_admin.php"> Perfil </a></li>
                
            </ul>

            <!--<div class="search-box">
                <div class="search-icon">
                    <span class="icon-search"></span>
                </div>
                <input type="text" placeholder="Search...">
            </div>-->

            <div class="icon-links">
                <!--<div id="search-btn"><span class="icon-search"></span></div>-->
                <div id="customer-center"><span class="icon-phone-alt"></span></div>
                <div id=""> <a href="login.html"> <span class="icon-user"></a></div>
                <div id="toggle-bar"><span class="toggler"></span></div>
            </div>
        </nav>
    </header>
<div class="container" >
    <br>
    <h2>Eliminar Usuario</h2>
    
    <form action="eliminar_usuario.php" method="GET">
        <label for="id_usuario">ID de Usuario a Eliminar:</label>
        <input type="text" name="delete" id="id_usuario" required>
        <br><br>
        
        <input class="eliminar" type="submit" value="Eliminar Usuario">
    </form>
    
    <p class="a" ><a href="mostrar.php">Volver a la lista de usuarios</a></p>
</div>
</body>
</html>
