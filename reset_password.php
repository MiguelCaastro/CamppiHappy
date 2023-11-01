<?php
// Conexión a la base de datos
$servername = "localhost"; // Servidor MySQL en localhost
$username = "root"; // Nombre de usuario de la base de datos
$password = ""; // Contraseña de la base de datos (deja en blanco si no tiene contraseña)
$dbname = "campihappy"; // Nombre de la base de datos "campihappy"

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Error de conexión a la base de datos: " . $conn->connect_error);
}

// Generar un token único
$token = bin2hex(random_bytes(16));

// Obtener el correo electrónico proporcionado por el usuario
$email = $_POST['email'];

// Verificar si el correo electrónico existe en la tabla de usuarios
$sql = "SELECT id_usuario FROM user WHERE correo = '$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Almacenar el token en la tabla de reset_password_tokens junto con la fecha de creación
    $timestamp = date('Y-m-d H:i:s');
    $sql = "INSERT INTO reset_password_tokens (email, token, created_at) VALUES ('$email', '$token', '$timestamp')";
    $conn->query($sql);

    // Configuración del correo electrónico
    $to = $email;
    $subject = 'Restablecer contraseña';
    $message = "Haz clic en este enlace para restablecer tu contraseña: https://tudominio.com/reset.php?token=$token";
    $headers = 'From: campihappy1@gmail.com' . "\r\n" .
               'Reply-To: campihappy1@gmail.com' . "\r\n" .
               'X-Mailer: PHP/' . phpversion();

    // Enviar el correo
    $mailSent = mail($to, $subject, $message, $headers);

    if ($mailSent) {
        echo "Se ha enviado un enlace de restablecimiento de contraseña a su dirección de correo electrónico.";
    } else {
        echo "No se pudo enviar el correo. Verifica la configuración de tu servidor SMTP.";
    }
} else {
    echo "No se encontró ninguna cuenta asociada a ese correo electrónico.";
}

$conn->close();
?>
