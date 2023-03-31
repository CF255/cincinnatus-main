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
    <h1>Bienvenido</h1>
    <h2>Inicio de sesion administrativo</h2>
   

    <form class="form" action="sesion.php" method="POST">

    
    <?php
    include("php/vali.php");
    ?>
        <input name="user" type="text" class="inputtext" id="inputnombre" placeholder="Nombre de Usuario">

        <input name="pass" type="password" class="inputtext" id="inputcontra" placeholder="Contraseña">
        
        <select autocomplete="off" name="rol" class="inputtext" tabindex="9" id="slStatus">
            <option value=""></option>
            <option value="Administrador">Administrador</option>
            <option value="Editor">Editor</option>
            <option value="Administrador_Inventario">Administrador Inventario</option>
            <option value="Supervisor">Supervisor</option>
        </select>

        <input type="submit" name="submit" value="Continuar" id="btncontinuar" class="btncontinuar">
        
        

        <div class="box"></div>

        <a href="#" class="a a2" >Crear Cuenta</a>
    </form>
   </div>

   <footer>
    <label for="">Copyright © 2023</label>

    <a href="login.html"><img class="icon" src="img/salida.png" alt=""></a>
   </footer>
    
</body>
</html>