<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="prueba1.css">
    
    <style>
  @import url('https://fonts.googleapis.com/css2?family=Raleway:wght@500;600;800&display=swap');
</style>
    <title>Productos</title>
</head>
<body>
<style>
        .logo1{
            width: 10px;
            position: relative;
            right: 230px;
        }
      
    </style>
</head>
<body>
<header>
        <nav class="navbar">
            <div class="logo">
                <a href="#">CAMPI<span>HAPPY</span></a>
            </div>
            

            <ul class="menu-items">
             <li><a href="#top"> Inicio </a></li>
             <li><a href="pagina_user.php"> Pagina Usuario </a></li>
                
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
    
<br><br><br><br>
<?php
// Establece la conexión a la base de datos
$dsn = 'mysql:host=localhost;dbname=campihappy';
$usuario = 'root';
$contrasena = '';

try {
    $conexion = new PDO($dsn, $usuario, $contrasena);
} catch (PDOException $e) {
    die('Error: ' . $e->getMessage());
}

// Categoría que quieres mostrar (en este caso, "frutas")
$categoria = 'verduras';

// Consulta SQL para recuperar productos de la categoría "frutas"
$consulta = $conexion->prepare("SELECT * FROM items WHERE categoria = :categoria");
$consulta->bindParam(':categoria', $categoria, PDO::PARAM_STR);
$consulta->execute();

echo '<h1>Verduras</h1>';
echo '<center>';
while ($fila = $consulta->fetch()) {
    echo '<div class="card">';
    echo '<img src="archivos/' . $fila['archivo'] . '">';
    echo '<h4>' . $fila['nombre'] . '</h4>';
    echo '<p class="precio">$' . $fila['precio'] . '</p>';
    echo '<p>' . $fila['descripcion'] . '</p>';
    echo '<p>F:' . $fila['campo1'] . '</p>';
    echo '<p>Whats:' . $fila['campo2'] . '</p>';
    echo '</div>';
}

$categoria = 'frutas';

// Consulta SQL para recuperar productos de la categoría "frutas"
$consulta = $conexion->prepare("SELECT * FROM items WHERE categoria = :categoria");
$consulta->bindParam(':categoria', $categoria, PDO::PARAM_STR);
$consulta->execute();
echo '<br>';
echo '<br>';
echo '<br>';
echo '<h1>Frutas</h1>';
while ($fila = $consulta->fetch()) {
    echo '<div class="card">';
    echo '<img src="archivos/' . $fila['archivo'] . '">';
    echo '<h4>' . $fila['nombre'] . '</h4>';
    echo '<p class="precio">$' . $fila['precio'] . '</p>';
    echo '<p>' . $fila['descripcion'] . '</p>';
    echo '<p>F:' . $fila['campo1'] . '</p>';
    echo '<p>Whats:' . $fila['campo2'] . '</p>';
    echo '</div>';
}



$categoria = 'granoss';

// Consulta SQL para recuperar productos de la categoría "frutas"
$consulta = $conexion->prepare("SELECT * FROM items WHERE categoria = :categoria");
$consulta->bindParam(':categoria', $categoria, PDO::PARAM_STR);
$consulta->execute();
echo '<br>';
echo '<br>';
echo '<br>';
echo '<h1>Granos</h1>';
while ($fila = $consulta->fetch()) {
    echo '<div class="card">';
    echo '<img src="archivos/' . $fila['archivo'] . '">';
    echo '<h4>' . $fila['nombre'] . '</h4>';
    echo '<p class="precio">$' . $fila['precio'] . '</p>';
    echo '<p>' . $fila['descripcion'] . '</p>';
    echo '<p>F:' . $fila['campo1'] . '</p>';
    echo '<p>Whats:' . $fila['campo2'] . '</p>';
    echo '</div>';
}

$categoria = 'huevos';

// Consulta SQL para recuperar productos de la categoría "frutas"
$consulta = $conexion->prepare("SELECT * FROM items WHERE categoria = :categoria");
$consulta->bindParam(':categoria', $categoria, PDO::PARAM_STR);
$consulta->execute();
echo '<br>';
echo '<br>';
echo '<br>';
echo '<h1>Huevos</h1>';
while ($fila = $consulta->fetch()) {
    echo '<div class="card">';
    echo '<img src="archivos/' . $fila['archivo'] . '">';
    echo '<h4>' . $fila['nombre'] . '</h4>';
    echo '<p class="precio">$' . $fila['precio'] . '</p>';
    echo '<p>' . $fila['descripcion'] . '</p>';
    echo '<p>F:' . $fila['campo1'] . '</p>';
    echo '<p>Whats:' . $fila['campo2'] . '</p>';
    echo '</div>';
}

$categoria = 'ganaderia';

// Consulta SQL para recuperar productos de la categoría "frutas"
$consulta = $conexion->prepare("SELECT * FROM items WHERE categoria = :categoria");
$consulta->bindParam(':categoria', $categoria, PDO::PARAM_STR);
$consulta->execute();
echo '<br>';
echo '<br>';
echo '<br>';
echo '<h1>Ganaderia</h1>';
while ($fila = $consulta->fetch()) {
    echo '<div class="card">';
    echo '<img src="archivos/' . $fila['archivo'] . '">';
    echo '<h4>' . $fila['nombre'] . '</h4>';
    echo '<p class="precio">$' . $fila['precio'] . '</p>';
    echo '<p>' . $fila['descripcion'] . '</p>';
    echo '<p>F:' . $fila['campo1'] . '</p>';
    echo '<p>Whats:' . $fila['campo2'] . '</p>';
    echo '</div>';
}

$categoria = 'carnes';

// Consulta SQL para recuperar productos de la categoría "frutas"
$consulta = $conexion->prepare("SELECT * FROM items WHERE categoria = :categoria");
$consulta->bindParam(':categoria', $categoria, PDO::PARAM_STR);
$consulta->execute();
echo '<br>';
echo '<br>';
echo '<br>';
echo '<h1>Carnes</h1>';
while ($fila = $consulta->fetch()) {
    echo '<div class="card">';
    echo '<img src="archivos/' . $fila['archivo'] . '">';
    echo '<h4>' . $fila['nombre'] . '</h4>';
    echo '<p class="precio">$' . $fila['precio'] . '</p>';
    echo '<p>' . $fila['descripcion'] . '</p>';
    echo '<p>F:' . $fila['campo1'] . '</p>';
    echo '<p>Whats:' . $fila['campo2'] . '</p>';
    echo '</div>';
}

?>


<script src="script.js"></script>
  

</body>
</html>