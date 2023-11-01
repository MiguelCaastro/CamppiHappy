<?php
// Verificar si el formulario ha sido enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Conexión a la base de datos (debes reemplazar con tus propios datos)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "campihappy";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar la conexión
    if ($conn->connect_error) {
        die("La conexión a la base de datos falló: " . $conn->connect_error);
    }

    // Recuperar los datos del formulario
    $usuario = $_POST["usuario"];
    $contrasena_actual = $_POST["contrasena_actual"];
    $nueva_contrasena = $_POST["nueva_contrasena"];

    // Verificar la contraseña actual (debes implementar tu propia lógica de autenticación)
    $sql = "SELECT * FROM user WHERE usuario = '$usuario' AND pass = '$contrasena_actual'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // La contraseña actual es válida, actualiza la contraseña
        $sql = "UPDATE user SET pass = '$nueva_contrasena' WHERE usuario = '$usuario'";
        
        if ($conn->query($sql) === TRUE) {
            // Contraseña actualizada con éxito, muestra un mensaje en JavaScript
            echo '<script>alert("Contraseña actualizada con éxito.");</script>';
        } else {
            // Error al actualizar la contraseña, muestra un mensaje de error en JavaScript
            echo '<script>alert("Error al actualizar la contraseña: ' . $conn->error . '");</script>';
        }
    } else {
        // La contraseña actual es incorrecta, muestra un mensaje de error en JavaScript
        echo '<script>alert("La contraseña actual es incorrecta.");</script>';
    }

    // Cerrar la conexión a la base de datos
    $conn->close();
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Cambio de Contraseña</title>
    <style>
        .logo1{
            width: 10px;
            position: relative;
            right: 300px;
        }
        img{
            width: 60px;
        }

        /* Media queries para hacer el diseño receptivo */
/* Pantallas pequeñas (teléfonos móviles) */
@media screen and (max-width: 768px) {
    body {
        background-size: cover;
    }

    .section-wrap {
        padding: 1rem 2.4rem;
    }

    .section-title h1 {
        font-size: 1.5rem;
    }

    .sub-section-title p {
        font-size: 1.2rem;
    }

    .sub-section-title a {
        font-size: 1rem;
    }

    .menu-items li {
        margin-right: 1rem;
    }

    .menu-items li a {
        font-size: 1rem;
    }

    .search-box {
        width: 16rem;
    }

    .search-box .search-icon span {
        font-size: 1rem;
    }

    .search-box input {
        font-size: 0.9rem;
    }

    .icon-links div span {
        font-size: 1rem;
    }

    #toggle-bar {
        display: block;
    }

    #toggle-bar .toggler {
        height: 2px;
    }
}

/* Pantallas más grandes (tabletas y escritorios) */
@media screen and (min-width: 769px) {
    .section-wrap {
        padding: 2rem 3.6rem;
    }

    .section-title h1 {
        font-size: 2rem;
    }

    .sub-section-title p {
        font-size: 1.4rem;
    }

    .sub-section-title a {
        font-size: 1.2rem;
    }

    .menu-items li {
        margin-right: 2rem;
    }

    .menu-items li a {
        font-size: 1.2rem;
    }

    .search-box {
        width: 24rem;
    }

    .search-box .search-icon span {
        font-size: 1.2rem;
    }

    .search-box input {
        font-size: 1rem;
    }

    .icon-links div span {
        font-size: 1.2rem;
    }
}

/* Efectos adicionales para dispositivos grandes */
@media screen and (min-width: 1024px) {
    /* Agrega estilos específicos para pantallas más grandes si es necesario */
}


    </style>
</head>
<body>
    <link rel="stylesheet" href="css/cambiarpass.css">
<header>
        <nav class="navbar">
            <div class="logo">
                <a href="#">CAMPI<span>HAPPY</span></a>
            </div>
            <div class="logo1">
            <img src="img/imagen5.png" alt="">
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
</head>
<body>
    <div class="formu" >
    <h1 class="cambio" >Cambio de Contraseña</h1>
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label  class="menu-items1" for="usuario">Usuario:</label>
        <input class="custom-input" type="text" id="usuario" name="usuario" required><br><br>
        
        <label class="menu-items1" for="contrasena_actual">Contraseña Actual:</label>
        <input class="custom-input" type="password" id="contrasena_actual" name="contrasena_actual" required><br><br>
        
        <label class="menu-items1" for="nueva_contrasena">Nueva Contraseña:</label>
        <input class="custom-input" type="password" id="nueva_contrasena" name="nueva_contrasena" required><br><br>
        
        <input class="eso" type="submit" value="Cambiar Contraseña">
    </form>
    </div>
</body>
</html>