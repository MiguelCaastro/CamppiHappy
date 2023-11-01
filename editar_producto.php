<?php
session_start();
error_reporting(0);
$varsesion = $_SESSION['usuario'];

if ($varsesion == null || $varsesion = '') {
    echo "NO TIENE PERMISO DE ENTRAR";
    die();
}

include "conexion.php"; // Asegúrate de incluir el archivo de conexión a la base de datos.

if (isset($_GET['edit'])) {
    $id = $_GET['edit'];

    if (isset($_POST['update'])) {
        $nombre = $_POST['nombre'];
        $descripcion = $_POST['descripcion'];
        $precio = $_POST['precio'];
        $categoria = $_POST['categoria'];
        $campo1 = $_POST['campo1'];
        $campo2 = $_POST['campo2'];

        // Aquí debes realizar la actualización en la base de datos.
        // Dependiendo de tu esquema de base de datos, deberás construir la consulta SQL y ejecutarla.
        // Asumiremos que tu tabla se llama "items" y que el campo clave es "id".

        $update_query = "UPDATE items SET nombre='$nombre', descripcion='$descripcion', precio='$precio', categoria='$categoria', campo1='$campo1', campo2='$campo2' WHERE id=$id";

        if (mysqli_query($conexion, $update_query)) {
            echo ("<script LANGUAGE='JavaScript'>
            window.alert('El Cambio ha sido Efectuado');
            window.location.href='mostrar_productos.php';
            </script>");// Redirige a la página de lista de productos después de la actualización.
        } else {
            echo ("<script LANGUAGE='JavaScript'>
            window.alert('No se ha podido hacer el cambio');
            window.location.href='mostrar_productos.php';
            </script>")  . mysqli_error($conexion);
        }
    }

    $result = mysqli_query($conexion, "SELECT * FROM items WHERE id=$id");
    $row = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/editar_pro.css">
    <title>Editar Producto</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Raleway:wght@500;600;800&display=swap');
    </style>
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
<div class="editar" >
    <br>
    <h1>Editar Producto</h1>
    <br><br>
    <form method="post" action="editar_producto.php?edit=<?php echo $id; ?>">
        <div>
            <label for="nombre">Nombre Producto:</label>
            <input type="text" name="nombre" value="<?php echo $row['nombre']; ?>">
        </div>
        <div>
            <label for="descripcion">Descripción:</label>
            <input type="text" name="descripcion" value="<?php echo $row['descripcion']; ?>">
        </div>
        <div>
            <label for="precio">Precio:</label>
            <input type="text" name="precio" value="<?php echo $row['precio']; ?>">
        </div>
        <div>
            <label for="categoria">Categoría:</label>
            <input type="text" name="categoria" value="<?php echo $row['categoria']; ?>">
        </div>
        <div>
            <label for="campo1">Facebook:</label>
            <input type="text" name="campo1" value="<?php echo $row['campo1']; ?>">
        </div>
        <div>
            <label for="campo2">Whatsapp:</label>
            <input type="text" name="campo2" value="<?php echo $row['campo2']; ?>">
        </div>
        <button type="submit" name="update">Actualizar</button>
    </form>
</div>
</body>
</html>

<?php
} else {
    echo "ID de producto no proporcionado para editar.";
}
?>
