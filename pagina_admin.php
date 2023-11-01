<?php
//iniciar sesion 
session_start();

// validar que solamente pueda ingresar el usuario solo

$var_sesion = $_SESSION['usuario'];

if ($var_sesion == null || $var_sesion = ''){
	echo "Ingreso no autorizado";
	die();
}else{
    if ((time() - $_SESSION['time']) > 60) {
        header('location:logout-page.php');
    }
}
/*
    if (!$_SESSION['usuario']) {
            header('location:login.html');
        }else{
        if ((time() - $_SESSION['time']) > 60) {
            header('location:logout-page.php');
        }
    }*/

 ?>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Pagina Administrador </title>
	<link rel="stylesheet" href="css/css2.css">
    <link rel="stylesheet" href="responsive/responsive_admin.css">
	<link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Lobster&family=Lobster+Two:wght@700&family=Righteous&display=swap');
    </style>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Righteous&display=swap');
    </style>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Raleway:wght@800&display=swap');
        </style>

   
</head>
<body>

<style>
        .logo1{
            width: 10px;
            position: relative;
            right: 450px;
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
            <img src="img/imagen5.jpg" alt="">
            </div>


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
        <button class="btn"><?php echo$_SESSION['usuario']; ?></button>
</header>

        <center><p>PANEL DE ADMINISTRADOR </p><center>
            <div class="box_admin">
                <br>
                <h2> BIENVENIDO Administrador <?php echo$_SESSION['usuario']; ?> </h2>
            </div>
                
            <div class="inicio" >
                <br>
            <a href="index.html"><h3>Inicio</h3></a>
            
            <br>
            <a href="registrar_admin.html">Registrate Administrador</a></i></div>
            
            <div class="perfil" >
                <br><br>
			 <h3>Perfil</h3>
             <br>
                        <li><a href=""> CUENTA </a></li>
                        <li><a href="cerrar_sesion.php"> CERRAR SESION </a></li>

				</div>

					<div class="funciones">
                        <br>
                    <h3>Funciones</h3>
                    <br>
                        <li><a href="cambiar.php">Cambiar Contraseña</a></li>
                        <li><a href="mostrar.php"> Mostrar Usuarios </a></li>
                        <li><a href="Buscar_usuario.php"> Buscar Usuario </a></li>
                    </div>

                    <div class="productos">
                        <br>
                    <h3>Productos</h3>
                    <br>
                        <li><a href="mostrar_productos.php">Mostrar Productos</a></li>
                        <li><a href="eliminar_productos.php"> Eliminar Productos </a></li>
                        <li><a href="buscar_producto.php"> Buscar Productos </a></li>
                    </div>
				
				
				
                
                
				
                </li>
            </ul>
        </nav>
</ul>  
    
   <script>

    //variable para tiempo de inactividad
        var tiempoInactividad = 1 * 60 *1000;
            //presenta minutos en milisegundos
        var contadorInactividad = 0; 
            function restablecercontador(){
                contadorInactividad = 0;
            }
            function verificarInactividad(){
                contadorInactividad += 1000;
                    //se añade un segundo al contador cada segundo
            }

        //si el contador de inactividad supera el tiempo deseado;
        //mostrar un mensaje y cerrar la sesion

            if (contadorInactividad >= tiempoInactividad ) {
                alert("Se ha detectado inactividad, su sesion se cerrara automaticamente");
                    window.location.href="cerrar_sesion.php";
                    //se redirige la pagina a cerrar la sesion
            }

            //Restablecer el contador de la inactividad del usuario
                document.addEventListener("mousemove",restablecercontador);
                document.addEventListener("keypress",restablecercontador);

            //verificar la Inactividad cada segundo
                setInterval(verificarInactividad,1000);

   </script>




</body>
</html>
