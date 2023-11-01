<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
  @import url('https://fonts.googleapis.com/css2?family=Raleway:wght@500;600;800&display=swap');
</style>
  <link rel="stylesheet" href="prueba.css">
  <title>Document</title>
</head>
<body>
  <h1> Telefonos </h1>

  <div class="container" > 

      <?php 

          include "conexion.php";

      ?>

    <?php

        $registros = mysqli_query($conexion,"SELECT * FROM items") or die("problemas en el select".mysqli_error($conexion));
                  
        while ($row = mysqli_fetch_array($registros)){  ?>

                <div class="card">

                <img src="archivos/<?php echo $row['archivo']; ?>">
                <h4><?php echo $row['nombre']?></h4>
                <p class="precio" >$<?php echo $row['precio']?></p>
                <p><?php echo $row['descripcion']?></p>
                
                <p>F:<?php echo $row['campo1']?></p>
                <p>Whats:<?php echo $row['campo2']?></p>
                  
                </div>
    
    <?php  } ?>



  
</div>

</body>
</html>