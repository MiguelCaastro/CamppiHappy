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
<html>
<head>
    <link rel="stylesheet" href="css/formul4rio.css">
    <title> Registro de Productos </title>
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
                <li class="inicio" ><a href="cerrar_sesion.php"> Inicio </a></li>
             <li class="inicio" ><a href="perfil.php"> Perfil </a></li>
            </ul>
            
            <button class="btn"><?php echo $_SESSION['usuario']; ?></button>
    
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
<div class="forma" >
    <h1> Deseas Vender </h1>
    <form action="cargar_formulario.php" method="post" enctype="multipart/form-data">
    <div class="nombre" >
        <label class="menu-items" for="nombre">Nombre </label>
        <input type="text" class="custom-input" name="nombre" id="nombre" required><br>
    </div>
       <div class="desc">
        <label for="descripcion">Descripcion</label>
        <br>
        <input type="text" class="custom-input1" name="descripcion" id="descripcion"required><br>
    </div>
    <div class="precio" >
        <label for="precio">Precio </label>
        <input type="text " class="custom-input" name="precio" id="precio" required><br>
    </div>
    <div class="categoria" >
        <label for="categoria">Categoria </label>
        <select class="custom-select" name="categoria" id="categoria" required>
            <option value="frutas">Frutas</option>
            <option value="verduras">Verduras</option>
            <option value="huevos">Huevos</option>
            <option value="ganaderia">Ganaderia</option>
            <option value="carnes">Carnes</option>
            <option value="granoss">Granos</option>
        </select><br>
    </div>
    <div class="redes" >
        <label class="insta" for="campo1">Facebook</label>
        <input type="text" class="custom-input" name="campo1" id="campo1" required><br>
        <br>
        <label  class="wsp" for="campo2">Whatsapp</label>
        <input type="text" class="custom-input" name="campo2" id="campo2" required><br>
    </div>    
        
    
    <div class="prodc" >
        <label for="imagen">Seleccionar una imagen:</label>
        <br>
        <input type="file" class="custom-input" name="archivo" id="archivo" required><br>
    </div>
        <input class="enviar" type="submit" value="Enviar">
        <input  class="reset"  type="reset" value="Limpiar formulario" />
        <div class="mostro">
            <button> <a href="mostrar_productos.php"> MOSTRAR PRODUCTOS </a></button></div>
    </form>
</div>
</body>
</html>
