<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../public/css/almacen.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Paytone+One&display=swap" rel="stylesheet">

</head>
<body>
    <nav class="nav2">
        <input type="checkbox" name="" id="check">
        <label for="check" class="checkbtn">
            <i class="fa-solid fa-bars"></i>
        </label>
        <a href="#" class="linkphoto">
            <img src="../../public/img/logo.jpeg" alt="" class="logoimg">
            
        </a>

        <ul class="navlist">
           

                <li><a class="active" href="#"><img src="../../public/img/tienda.png" alt="">tienda</a></li>

            
                <li><a href="#"><img src="../../public/img/usuarios.png" alt="">Usuarios</a></li>

           
                <li><a href="#"><img src="../../public/img/usuario.png" alt="">Creacion de usuarios</a></li>

           
                <li><a href="#"><img src="../../public/img/producto.png" alt="">Crear producto</a></li>

    
                <li><a href="#"><img src="../../public/img/almacen.png" alt="">almacen</a></li>

                
                <li><a href="loginadmi.php"><img src="../../public/img/cerrar.png" alt="">Cerrar sesion</a></li>

        </ul>
    </nav>

    <div class="menucolapse" id="sidemenu">
        <!-- header -->
        <div id="header">
            <div id="title"><span>MENU</span></div>
            <div id="menu-btn">
            <i class="fa-solid fa-bars" ></i>
            </div>
        </div>
        <!-- profile -->
        <div id="profile">
            <div id="photo"><img src="../../public/img/logo.jpeg" alt="">
                <div id="name"><span id="spannombre"></span> <?php session_start(); $user=$_SESSION['nombre_usuario']; echo "<h3> $user </h3>"; ?></div>
            </div>
        </div>

        <!-- items -->
        <div id="menuitem">
            <div class="item">
                <a href="">
                    <div class="icon"><img src="../../public/img/tienda.png" alt=""></div>
                    <div class="title"><span>Tienda</span></div>
                </a>
            </div>

            <div class="item">
                <a href="">
                    <div class="icon"><img src="../../public/img/usuario.png" alt=""></div>
                    <div class="title"><span>Creacion de usuarios</span></div>
                </a>
            </div>

            <div class="item">
                <a href="">
                    <div class="icon"><img src="../../public/img/usuarios.png" alt=""></div>
                    <div class="title"><span>Usuarios</span></div>
                </a>
            </div>

            <div class="item">
                <a href="">
                    <div class="icon"><img src="../../public/img/productos.png" alt=""></div>
                    <div class="title"><span>Crear producto</span></div>
                </a>
            </div>

            <div class="item">
                <a href="">
                    <div class="icon"><img src="../../public/img/almacen.png" alt=""></div>
                    
                    <div class="title"><span>almacen</span></div>
                </a>
            </div>

            <div class="item separator"></div>


            
            <div class="item itemcerrar">
                <a href="loginadmi.php">
                    <div class="icon"><img src="../../public/img/cerrar.png" alt=""></div>
                    <div class="title"><span>Cerrar sesion</span></div>
                </a>
            </div>
        </div>
    
    </div>

  

    <!-- contenedor de inputs -->
    <div class="contenedorinput" id="continput">
        <h1>Creacion de productos</h1>

        <label for="" class="lblfoto">Foto de perfil</label>
        <img class="imglogo" src="../../public/img/logo.jpeg" alt="">
        <a href="#"><img class="agregarimg" src="../../public/img/agregarfoto.png" alt=""></a>
        <input type="file" class="form-control-file " name="foto" id="" placeholder="foto" aria-describedby="fileHelpId">
    
    <label class="lblnombres" for="">Nombre</label>
    <input type="text" class="inputtext" id="txtnombre" placeholder="Nombre del producto">

    <label class="lblnombres" for="">Precio</label>
    <input type="text" class="inputtext" id="txtprecio" placeholder="precio del producto">

    <label class="lblnombres" for="">Proveedor</label>
    <input type="text" class="inputtext" id="txtproeedor" placeholder="Nombre del proveedor">


    <label class="lblnombres" for="">Categoria</label>
    <select autocomplete="off" name="" class="inputtext" tabindex="9" id="slcategoria">
            <option value=""></option>
            <option value="Electronico">Administrador</option>
            <option value="Libros">Editor</option>
            <option value="Ropa">Administrador Inventario</option>
            <option value="Accesorios">Supervisor</option>
            <option value="Deportes">Administrador</option>
            <option value="Juegos/Video juegos">Editor</option>
            <option value="Mascotas">Administrador Inventario</option>
            <option value="Hogar">Supervisor</option>
        </select>

    <label class="lblnombres"  for="">Descripcion</label>
    <textarea class="inputtext textarea" name="" id="" cols="40" rows="10"></textarea>

    </div>

    <div class="containerright">


        <nav class="navbar" id="navid">
           <!--  <div id="menu-btn2" class="toggle-collapse" id="toggle-button">
                <i class="fa-solid fa-bars" ></i>
                </div> -->

            <button  type="button"  class="toggle-collapse" id="toggle-button" >
            <img src="../../public/img/fondo.jpg" alt=""><span class="toggle-icon"></span>
            </button>

            <ul>
                <li><a href="#" id="btnbuscar" class="btnbuscar">
                    <span class="icons"><i class="icon fa-solid fa-magnifying-glass"></i></span>
                    <span class="item">Buscar</span>
                </a></li>
                <li><a href="#">
                    <span class="icons"><i class="fa-solid fa-floppy-disk"></i></span>
                    <span class="item">Guardar</span>
                </a></li>
                <li><a href="#">
                    <span class="icons"><i class="fa-solid fa-pen-to-square"></i></span>
                    <span class="item">Editar</span>
                </a></li>
                <li><a href="#">
                    <span class="icons"><i class="fa-solid fa-rotate"></i></span>
                    <span class="item">Actualizar</span>
                </a></li>
                <li><a href="#">
                    <span class="icons"><i class="fa-solid fa-trash"></i></span>
                    <span class="item">Eliminar</span>
                </a></li>
            </ul>

  
        </nav>
    </div>

    <section class="modal">
        <div class="modalcontainer">
            <h1 class="modaltitle">Tabla de productos</h1>


            <a href="#" class="modalclose">Cerrar</a>
        </div>
    </section>

    <script src="../../public/js/almacen.js"></script>
    
<?php

?>
</body>
</html>