<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Paytone+One&display=swap" rel="stylesheet">
<link rel="stylesheet" href="/css/login.css">
<LINK REL="stylesheet" HREF="css/login.css" TYPE="text/css">
</head>
<body>


    <nav>
        <img src="img/logo.jpeg" alt="" class="logoimg">
    </nav>

   <div class="login-box">
    <img class="logoimg" src="img/logo.jpeg" alt="">
    <h1>Hola</h1>
    <h2>Iniciar sesion</h2>

    <form class="form" action="sesion.php" method="POST">
        <input name="user" type="text" class="inputtext" id="inputnombre" placeholder="Nombre de Usuario">

        <input name="pass" type="password" class="inputtext" id="inputcontra" placeholder="Contraseña">

        <input type="submit" value="Continuar" id="btncontinuar" class="btncontinuar">

        <div class="box"></div>

        <a href="#" class="a" >Crear Cuenta</a>
    </form>
   </div>

   <footer>
    <label for="">Copyright © 2023</label>
    
    
    <a href="loginadmi.html"><img class="icon" src="img/admin.png" alt=""></a>
   </footer>
    
</body>
</html>