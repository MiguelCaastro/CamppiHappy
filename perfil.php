<?php

session_start();
error_reporting(0);
$varsesion = $_SESSION['usuario'];

if ($varsesion == null ||  $varsesion = '') {
    echo "NO TIENE PERMISO DE ENTRAR";
    die ();
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USUARIO</title>
    <link rel="stylesheet" href="css/perfil.css">
    
    <style>
        .logo1{
            width: 10px;
            position: relative;
            right: 230px;
        }
        img{
            width: 60px;
        }
    </style>
</head>
<body>
<header>
        <nav class="navbar">
            <div class="logo">
                <a href="#">CAMPI<span>HAPPY</span></a>
            </div>
            <div class="logo1">
            <img src="img/imagen5.png" alt="">
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
    <center>
    <div class="panel">
        <h1>PANEL DE USUARIO</h1>
    </div>
        <center>
        <div class="usuario"><h1>Bienvenido usuario <?php echo $_SESSION['usuario']; ?></h1></div>
        </center>
    
        <div class="cerrar">
            
            <li><a href="cerrar_sesion.php">Cerrar sesion</a></li> 
           
            
        </div>
        <div class="vender">
            <li><a href="formul4rio.php">¿Quieres vender?</a></li>
            
        </div>

        <div class="mostrar">
        <li><a href="mostrar_productos_usu.php">Mira tus productos</a></li>
        </div>

        <div class="cambiar" >
        <li><a href="cambiar.php">Cambiar contraseña</a></li>
        </div>
    
</body>
</html>