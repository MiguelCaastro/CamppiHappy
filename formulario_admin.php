<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/registrar.css">
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Lobster&family=Lobster+Two:wght@700&family=Righteous&display=swap');
    </style>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Righteous&display=swap');
    </style>

</head>
<body>
    <section>
    <div class="form-box" >
       <form action="registrar_roles.php" method="post">
         <h2> Registro de Roles</h2>
          <div class="inputbox">
            <ion-icon name="person-outline"></ion-icon>
            <input type="text" name="nombre">
            <label for=""> Nombre</label>
          </div>
           <div class="inputbox">
            <ion-icon name="lock-closed-outline"></ion-icon>
            <input type="text" name="usuario">
            <label for=""> Usuario </label>
          </div>
          <div class="inputbox">
            <ion-icon name="lock-closed-outline"></ion-icon>

            <input type="password" name="pass">
            <label for=""> Password </label>
          </div>
          <div class="inputbox">
            <select name="tipo">
                <option value="">-seleccione el tipo</option>
                <option value="admin">admin</option>
                <option value="user">user</option>
            </select>
          </div>
            <button><a href="registrar_roles.php">Registar</a></button>
          
       </form>
     </div>
</section>

</body>
</html>