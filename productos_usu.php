<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "campihappy";

try {
    $conexion = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error al conectar a la base de datos: " . $e->getMessage());
}

$id = 1; // Reemplaza 1 con el ID del usuario actual

$sql = "SELECT * FROM items WHERE usuario_id = :usuario_id";
$stmt = $conexion->prepare($sql);
$stmt->bindParam(":id", $id, PDO::PARAM_INT);
$stmt->execute();
$resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);

if (count($resultados) > 0) {
    foreach ($resultados as $item) {
        echo "Nombre: " . $item['nombre'] . "<br>";
        echo "Descripción: " . $item['descripcion'] . "<br>";
        echo "Precio: " . $item['precio'] . "<br>";
        echo "Categoría: " . $item['categoria'] . "<br>";
        echo "Campo 1: " . $item['campo1'] . "<br>";
        echo "Campo 2: " . $item['campo2'] . "<br>";

        // Para mostrar la imagen (si el campo "archivo" contiene la ruta de la imagen):
        echo '<img src="' . $item['archivo'] . '" alt="Imagen del artículo" /><br>';

        echo "<hr>";
    }
} else {
    echo "No se encontraron elementos registrados por este usuario.";
}
?>
