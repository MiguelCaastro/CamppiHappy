<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recupera el correo electrónico del usuario de la solicitud POST
    $user_email = $_POST['user_email'];

    // Establece la conexión a la base de datos
    $db_host = 'localhost';
    $db_user = 'root';
    $db_password = '';
    $db_name = 'campihappy';

    $conn = new mysqli($db_host, $db_user, $db_password, $db_name);

    if ($conn->connect_error) {
        die("Error de conexión a la base de datos: " . $conn->connect_error);
    }

    // Realiza una consulta para verificar la existencia del correo electrónico en la tabla de usuarios
    $query = "SELECT * FROM user WHERE correo = '$user_email'";
    $result = $conn->query($query);

    if ($result->num_rows === 0) {
        // Muestra un mensaje de error si no se encuentra el correo electrónico
        $response = array('status' => 'error', 'message' => '<script>alert("Error al actualizar la contraseña: ' . $conn->error . '");</script>');
    } else {
        // Ejecuta el script de Python para enviar el correo de recuperación
        $command = 'python send_recovery_email.py ' . escapeshellarg($user_email);
        $output = shell_exec($command);

        // Muestra un mensaje de éxito
        $response = array('status' => 'success', 'message' => 'Contraseña cambiada exitosamente');
    }

    // Cierra la conexión a la base de datos
    $conn->close();

    // Devuelve la respuesta en formato JSON
    header('Content-Type: application/json');
    echo json_encode($response);
}
?>
