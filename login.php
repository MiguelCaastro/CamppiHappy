<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
   <link rel="stylesheet" href="css/login.css">
</head>
<body>

   <section>
     <div class="form-box">
       <form action="validar.php" method="post">
         <h2> Iniciar Sesion </h2>
          <div class="inputbox">
            <ion-icon name="person-outline"></ion-icon>
            <input type="text" name="usuario">
            <label for=""> Usuario </label>
          </div>
           <div class="inputbox">
            <ion-icon name="lock-closed-outline"></ion-icon>
            <input type="password" name="password">
            <label for=""> Password </label>
          </div>
          <div class="forget">
            <label for=""><input type="checkbox"> Recordar  <a href=""> ¿Olvido contraseña ?</a> </label>
           
          </div>
          <button> Logear </button>
          <div class="register">
             <p> No tiene una cuenta ?<a href="formulario_registro.php"> Registrarse </a></p>
          </div>
       </form>
     </div>
   </section>




   <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>