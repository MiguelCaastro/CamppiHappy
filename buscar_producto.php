<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/buscar_producto.css">
    <title>Buscador</title>
</head>
<body>

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
             <li><a href="pagina_admin.php">Pagina Principal</a></li>
                
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

 <div class="container_main">   
<form method="post" action="buscar_producto.php">
    <input type="search" name="dato" placeholder="Ingrese el nombre a buscar">
    <input type="submit" name="buscador" value="Buscar" class="boton">
    
</form>
</div>

<?php
include "conexion.php";

if (isset ($_POST['buscador'])) {
    $buscar = $_POST ['dato'];

    if (empty($buscar)) {
        echo "<h3 class ='mensajes'>ingrese un dato, el campo esta vacio</h3>";
    }else{
        $consulta = "SELECT * FROM items WHERE nombre LIKE '%".$buscar. "%'";
        $mostrar = mysqli_query($conexion, $consulta);
        $var_total = mysqli_num_rows($mostrar);

        if ($row = mysqli_fetch_array ($mostrar)) {
            echo "<h3 class='lineal'>los resultados para esta busqueda son: $buscar</h3>";
            echo"<br>";
            echo "El total de datos encontrados fueron: $var_total";
            echo"<br>";
            echo"<br>";
            echo"<hr>";



            ?>

           <?php
                do{
             ?>       
               <div class="datos" >
                <br>
                    <tr>Id: 
                        <td><?php echo $row ['id']; ?> <td></tr>
                    <br>
                        <tr>Nombre: 
                        <td><?php echo $row ['nombre']; ?> <td></tr>
                        <br>
                        <tr>Descripcion: 
                        <td><?php echo $row ['descripcion']; ?> <td></tr>
                        <br>
                        <tr>Precio:
                        <td><?php echo $row ['precio']; ?> <td></tr>
                        <br>
                        <tr>Categoria:
                        <td><?php echo $row ['categoria']; ?> <td></tr>
                        <br>
                        <tr>Facebook:
                        <td><?php echo $row ['campo1']; ?> <td></tr>
                        <br>
                        <tr>Whatsapp:
                        <td><?php echo $row ['campo2']; ?> <td></tr>
                        <tr>Foto:
                        <td> <?php echo $row['archivo']?> </td>
                        <td><img width="40" src="archivos/<?php echo $row['archivo']; ?>"></td></tr>
                        </div>
                    <?php
                  }  
                  while($row = mysqli_fetch_array($mostrar));
                  
                }else{
                    echo "<h3 class='mensajes'>No se encuentra datos para esta busqueda: $buscar</h3>";
                }

        }
    }

?>









</body>
</html>