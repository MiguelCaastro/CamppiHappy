<!DOCTYPE html>
<html>
<head>
    <title>Recuperación de contraseña</title>
</head>
<body>
    <form method="post" action="recover_password.php">
        <label for="user_email">Correo electrónico:</label>
        <input type="email" name="user_email" id="user_email" required>
        <input type="submit" value="Enviar correo de recuperación">
    </form>
</body>
</html>