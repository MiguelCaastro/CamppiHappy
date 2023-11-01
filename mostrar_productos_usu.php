<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar Productos</title>
    <style>
        /* Estilos para la página */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
        }
        /* Estilos para el encabezado */
        header {
            background-color: #333;
            color: #fff;
            padding: 20px 0;
        }
        header h1 {
            text-align: center;
        }
        /* Estilos para el pie de página */
        footer {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
            text-align: center;
            position: absolute;
    
            width: 100%;
        }
        /* Estilos para la tabla de productos */
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #333;
            color: #fff;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
           /* Estilos para las imágenes */
           .product-image {
            max-width: 100px;
            max-height: 100px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Mostrar Productos</h1>
    </header>
    <div class="container">
        <table>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Precio</th>
                <th>Categoría</th>
                <th>Facebook</th>
                <th>Whatsapp</th>
                <th>Archivo</th>
            </tr>
</body>
</html>

<?php

session_start();
error_reporting(0);
$varsesion = $_SESSION['usuario'];

if ($varsesion == null ||  $varsesion = '') {
    echo "NO TIENE PERMISO DE ENTRAR";
    die ();
}
            // Configuración de la base de datos (reemplaza con tus propios valores)
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "campihappy";

            // Crear la conexión a la base de datos
            $conn = new mysqli($servername, $username, $password, $database);

            // Verificar la conexión
            if ($conn->connect_error) {
                die("Conexión fallida: " . $conn->connect_error);
            }

            // Consulta SQL para obtener los datos de productos (reemplaza con tu consulta)
            $sql = "SELECT * FROM items";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["id"] . "</td>";
                    echo "<td>" . $row["nombre"] . "</td>";
                    echo "<td>" . $row["descripcion"] . "</td>";
                    echo "<td>" . $row["precio"] . "</td>";
                    echo "<td>" . $row["categoria"] . "</td>";
                    echo "<td>" . $row["campo1"] . "</td>";
                    echo "<td>" . $row["campo2"] . "</td>";
                    echo "<td><img src='archivos/" . $row["archivo"] . "' alt='Imagen del producto' class='product-image'></td>";
                    echo "</tr>";
                }
            } else {
                echo "No se encontraron resultados.";
            }

            // Cerrar la conexión a la base de datos
            $conn->close();
            ?>
        </table>
    </div>
    <center>
            <h3>Si deseas editar tus archivos envia un email con tu peticion al correo
                    campihappy1@gmail.com
            </h3>
            </center>
            <br><br>
    <footer>
        <p>Pie de página - Derechos Reservados © 2023</p>
    </footer>
</body>
</html>


