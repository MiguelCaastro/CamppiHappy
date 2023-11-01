<?php
include "conexion.php";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['usuario'])) {
    $usuarioActual = $_POST['usuario'];
} else {
    die("Error: El formulario no se ha enviado correctamente.");
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Lista de Productos</title>
</head>
<body>
<h1>LISTA DE PRODUCTOS</h1>

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
        $query = "SELECT items.* FROM items
                  JOIN user ON items.id_usuario = user.id_usuario
                  WHERE user.usuario = '$usuarioActual'";
        $registros = mysqli_query($conexion, $query) or die("Problemas en el select: " . mysqli_error($conexion));

        while ($row = mysqli_fetch_array($registros)) {
            ?>
            <tr>
                <td><?php echo $row['id'] ?></td>
                <td><?php echo $row['nombre'] ?></td>
                <td><?php echo $row['descripcion'] ?></td>
                <td><?php echo $row['precio'] ?></td>
                <td><?php echo $row['categoria'] ?></td>
                <td><?php echo $row['campo1'] ?></td>
                <td><?php echo $row['campo2'] ?></td>
                <td><?php echo $row['archivo'] ?></td>
                <td><img width="40" src="archivos/<?php echo $row['archivo']; ?>"></td>
                <td>
                    <a href="editar_producto.php?edit=<?php echo $row['id'] ?>" class="edit_btn"> Actualizar</a>
                </td>
                <td>
                    <a href="eliminar_productos.php?del=<?php echo $row['id']; ?>" class="del_btn"> Eliminar</a>
                </td>
            </tr>
            <?php
        }
        ?>
    </tbody>
</table>

</body>
</html>
