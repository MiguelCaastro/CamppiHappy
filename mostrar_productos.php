<?php

session_start();
error_reporting(0);
$varsesion = $_SESSION['usuario'];

if ($varsesion == null ||  $varsesion = '') {
    echo "NO TIENE PERMISO DE ENTRAR";
    die ();
}


?>


<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lista de Archivos </title>
 <link rel="stylesheet" href="css/mostrar_productos.css">
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

<?php 

include "conexion.php";

?>
<h1> LISTA DE PRODUCTOS </h1>

<table>
  <tr>
    <th> Codigo Producto </th>
    <th> Nombre Producto </th>
    <th> Descripcion </th>
    <th> Precio </th>
    <th> Categoria </th>
    <th> Facebook </th>
    <th> Whatsapp </th>
    <th> Archivo </th>
     <th> Imagen </th>
    <th colspan="2">Edicion</th>
  </tr>
    <tbody>
      <?php 

           $registros = mysqli_query($conexion,"SELECT * FROM items") or die("problemas en el select".mysqli_error($conexion));
           
           while ($row = mysqli_fetch_array($registros)){  ?>
          
           <tr>
                <td> <?php echo $row['id']?> </td>
                <td> <?php echo $row['nombre']?></td>
                <td> <?php echo $row['descripcion']?></td>
                <td> <?php echo $row['precio']?></td>
                <td> <?php echo $row['categoria']?></td>
                <td> <?php echo $row['campo1']?></td>
                <td> <?php echo $row['campo2']?></td>
                <td> <?php echo $row['archivo']?> </td>
                <td><img width="40" src="archivos/<?php echo $row['archivo']; ?>"></td>
                <td>
					<a href="editar_producto.php?edit=<?php echo $row['id'] ?>" class="edit_btn"> Actualizar</a>
				</td>
				<td>
					<a href="eliminar_productos.php?del=<?php echo $row['id'];?>" class="del_btn"> Eliminar</a>
				</td>
       </tr>
  


       <?php  } ?>

    </tbody>



</table>

<!--<button class="pasa" >
  <a href="formul4rio.php" class="button"> Regresar</a>
  </button>-->
</body>
</html>
