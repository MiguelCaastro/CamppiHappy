<?php

session_start();

//destruir la sesion y redirigir al usuario a pagina de login

session_unset();
session_destroy();
header('location:login.html');
exit();
?>