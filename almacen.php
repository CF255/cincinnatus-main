<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/almacen.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Paytone+One&display=swap" rel="stylesheet">

</head>
<body>
    
    <nav>
        <input type="checkbox" name="" id="check">
        <label for="check" class="checkbtn">
            <i class="fa-solid fa-bars"></i>
        </label>
        <a href="#" class="linkphoto">
            <img src="img/logo.jpeg" alt="" class="logoimg">
            
        </a>

        <ul>
            <li><a class="active" href="#">Inicio</a></li>
            <li><a href="#">Inicio</a></li>
            <li><a href="#">Inicio</a></li>
            <li><a href="#">Inicio</a></li>
        </ul>
    </nav>

    <div class="menucolapse" id="sidemenu">
        <!-- header -->
        <div id="header">
            <div id="title"><span>MENU</span></div>
            <div id="menu-btn">
                <div class="btn-ham"></div>
                <div class="btn-ham"></div>
                <div class="btn-ham"></div>
            </div>
        </div>
        <!-- profile -->
        <div id="profile">
            <div id="photo"><img src="img/logo.jpeg" alt="">
                <div id="name"><span id="spannombre"></span> <?php session_start(); $user=$_SESSION['nombre_usuario']; echo "<h3> $user </h3>"; ?></div>
            </div>
        </div>

        <!-- items -->
        <div id="menuitem">
            <div class="item">
                <a href="">
                    <div class="icon"><img src="img/tienda.png" alt=""></div>
                    <div class="title"><span>Tienda</span></div>
                </a>
            </div>

            <div class="item">
                <a href="">
                    <div class="icon"><img src="img/usuario.png" alt=""></div>
                    <div class="title"><span>Creacion de usuarios</span></div>
                </a>
            </div>

            <div class="item">
                <a href="">
                    <div class="icon"><img src="img/usuarios.png" alt=""></div>
                    <div class="title"><span>Usuarios</span></div>
                </a>
            </div>

            <div class="item">
                <a href="">
                    <div class="icon"><img src="img/producto.png" alt=""></div>
                    <div class="title"><span>Crear producto</span></div>
                </a>
            </div>

            <div class="item">
                <a href="">
                    <div class="icon"><img src="img/almacen.png" alt=""></div>
                    <div class="title"><span>almacen</span></div>
                </a>
            </div>

            <div class="item separator"></div>


            
            <div class="item itemcerrar">
                <a href="loginadmi.php">
                    <div class="icon"><img src="img/cerrar.png" alt=""></div>
                    <div class="title"><span>Cerrar sesion</span></div>
                </a>
            </div>
        </div>
    
    </div>

    <div id="main">
        hola
    </div>
    
    
    <script src="js/almacen.js"></script>

</body>
</html>