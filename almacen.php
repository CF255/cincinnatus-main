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
    <nav class="nav2">
        <input type="checkbox" name="" id="check">
        <label for="check" class="checkbtn">
            <i class="fa-solid fa-bars"></i>
        </label>
        <a href="#" class="linkphoto">
            <img src="img/logo.jpeg" alt="" class="logoimg">
            
        </a>

        <ul>
           

                <li><a class="active" href="#"><img src="img/tienda.png" alt="">tienda</a></li>

            
                <li><a href="#"><img src="img/usuarios.png" alt="">Usuarios</a></li>

           
                <li><a href="#"><img src="img/usuario.png" alt="">Creacion de usuarios</a></li>

           
                <li><a href="#"><img src="img/producto.png" alt="">Crear producto</a></li>

    
                <li><a href="#"><img src="img/almacen.png" alt="">almacen</a></li>

                
                <li><a href="loginadmi.php"><img src="img/cerrar.png" alt="">Cerrar sesion</a></li>

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

  

    <!-- contenedor de inputs -->
    <div class="contenedorinput">
        <h1>Creacion de productos</h1>

        <label for="" class="lblfoto">Foto de perfil</label>
        <img class="imglogo" src="img/logo.jpeg" alt="">
        <a href="#"><img class="agregarimg" src="img/agregarfoto.png" alt=""></a>
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
            <button  type="button" onclick="myFnc(e)"  class="toggle-collapse " id="toggle-button" >
            <span class="toggle-icon"></span>
            </button>

            <ul> 
            <li class="nav-item"><a href="#" class="nav-link"><img src="img/btnbuscar.png" alt="">Buscar</a></li>
            <li class="nav-item"><a class="nav-link" href="#"><img src="img/btnguardar.png" alt="">Guardar</a></li>
            <li class="nav-item"><a class="nav-link" href="#"><img src="img/btnactualizar.png" alt="">Actualizar</a></li>
            <li class="nav-item"><a class="nav-link" href="#"><img src="img/btneditar.png" alt="">Editar</a></li>
            <li class="nav-item"><a class="nav-link" href="#"><img src="img/btneliminar.png" alt="">Eliminar</a></li>
        </ul>
        </nav>
    </div>
    <script src="js/almacen.js"></script>
<?php
function myFnc(e){
    e.classList.toggle("show");

    var element = document.getElementById("navid"),
    style = window.getComputedStyle(element),
    right = style.getPropertyValue("right");

    if(right == "0px"){
        element.style.right = "-260px";
    }else{
        element.style.right = "0px";
    }
}

?>
</body>
</html>

onclick="myFnc(this)"