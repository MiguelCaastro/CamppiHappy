<?php
session_start();
error_reporting(0);
$varsesion = $_SESSION['usuario'];

if ($varsesion == null || $varsesion == '') {
    echo "NO TIENE PERMISO DE ENTRAR";
    die();
}

include "conexion.php"; // Asegúrate de incluir el archivo de conexión

if (isset($_GET['eliminar'])) {
    $id = $_GET['eliminar'];

    // Verificar que el producto exista antes de eliminarlo
    $verificar = mysqli_query($conexion, "SELECT id FROM items WHERE id = $id");
    if (mysqli_num_rows($verificar) > 0) {
        // Realizar la eliminación del producto
        $query = "DELETE FROM items WHERE id = $id";
        if (mysqli_query($conexion, $query)) {
            header("Location: mostrar_productos.php"); // Redirige a la página de lista de productos después de eliminar el producto
        } else {
            echo ("<script LANGUAGE='JavaScript'>
            window.alert('Producto Eliminado');
            window.location.href='mostrar_productos.php';
            </script>");
        }
    } else {
        echo "El producto no existe o ya ha sido eliminado.";
    }
}
?>
<html lang="en">
<head>
    
    <!-- ... (la parte del encabezado de tu página) ... -->
    <title>Editar Producto</title>
    <link rel="stylesheet" href="css/editar_producto.css">

</head>
<body>
<style>
        .logo1{
            width: 10px;
            position: relative;
            right: 290px;
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
<div class="drop" >
    <br>
    <h1>Eliminar Producto</h1>
    <form method="GET" action="">
        <br>
        <label for="id">ID del Producto a Eliminar:</label>
        <br><br><br>
        <input type="text" name="eliminar" placeholder="ID del producto a eliminar">
        <br><br><br>
        <button type="submit" name="submit">Eliminar Producto</button>
    </form>
</div>
</body>
</html>
