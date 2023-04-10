<!DOCTYPE html>
<html lang="en">
<head>
     <meta http-equiv="Expires" content="0">
  <meta http-equiv="Last-Modified" content="0">
  <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
  <meta http-equiv="Pragma" content="no-cache">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../public/css/almacen.css?v=<?php echo(rand()); ?>" />
<script src="/js/mi_script.js?v=<?php echo(rand()); ?>"></script>
  <!--   <link rel="stylesheet" href="../../public/css/almacen.css">
    --> <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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

    <form action="javascript:void(0);" onsubmit="app.guardar()">
   
    <input type="hidden" id="id" />
    <div class="contenedorinput" id="continput">
        <h1>Creacion de productos</h1>
        <a href="#" id="warning" class="warning"></a>

        <label for="" class="lblfoto">Foto del producto</label>
        <img class="imglogo" src="../../public/img/logo.jpeg" alt="">
        <a href="#"><img class="agregarimg" src="../../public/img/agregarfoto.png" alt=""></a>
    <!--  <input type="file" class="form-control-file " name="foto" id="fotos" placeholder="foto" aria-describedby="fileHelpId">
     -->
    <label class="lblnombres" for="">Nombre</label>
    <input type="text" class="inputtext" id="nombre" placeholder="Nombre del producto">

    <label class="lblnombres" for="">Precio</label>
    <input type="number" class="inputtext" id="precio" placeholder="precio del producto">


    <label class="lblnombres" for="">Proveedor</label>
    <input type="text" class="inputtext" id="proveedor" placeholder="Nombre del proveedor">

<!-- 
    <label class="lblnombres" for="">categoria</label>
    <input type="text" class="inputtext" id="categoria" placeholder="categoria">
 -->
    <label class="lblnombres" for="">Categoria</label>
    <select autocomplete="off" name="categoria" class="inputtext" tabindex="9" id="categoria">
            <option value=""></option>
            <option value="Electronico">Electronico</option>
            <option value="Libros">Libros</option>
            <option value="Ropa">Ropa Inventario</option>
            <option value="Accesorios">Accesorios</option>
            <option value="Deportes">Deportes</option>
            <option value="Juegos/Video juegos">Juegos/VideoJuegos</option>
            <option value="Mascotas">Administrador Inventario</option>
            <option value="Hogar">Hogar</option>
        </select> 

    <label class="lblnombres"  for="">Descripcion</label>
    <textarea class="inputtext textarea" name="" id="descripcion" cols="40" rows="10"></textarea>

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
                
            
                
            <li>
            <li><a href="#"  class="linea">
                    <span class="icons"></span>
                    <span class="item"></span>
                </a></li>


            <li><a href="#"  class="">
                    <span class="icons"></span>
                    <span class="item"></span>
                </a></li>

           
                <li><a href="#" id="btnbuscar"  class="btnbuscar">
                    <span class="icons"><i class="icon fa-solid fa-magnifying-glass"></i></span>
                    <span class="item">Buscar</span>
                </a></li>
                
              <!--   <li> <button onclick="app.editar()" class="btnside" ><span class=""><i class="fa-solid fa-pen-to-square"></i></span>
                    <span class="">Editar</span>
                </button> </li>
 -->
               

                <li> <!-- <a href="#" id="btnactualizar" class="btnactualizar">
                    <span class="icons"><i class="fa-solid fa-rotate"></i></span>
                    <span class="item">Actualizar</span> 
                </a> 
             -->
             <button  id="btnactu" class="btnside btnactu" ><span class=""><i class="fa-solid fa-rotate"></i></span>
                    <span class="">actualizar</span>
                </button> 
            </li>

                
                <li><button  id="btneliminar" class="btnside btneliminar" ><span class=""><i class="fa-solid fa-trash"></i></span>
                    <span class="">Eliminar</span>
                </button> 
                </li>


                <li>
                    <button class="btnside" type="submit"><span class=""><i class="fa-solid fa-floppy-disk"></i></span>
                    <span class="">Guardar</span></button> 
                

                   <!--  <a href="#">
                    <span class="icons"><i class="fa-solid fa-floppy-disk"></i></span>
                    <span class="item">Guardar</span>
                </a> --> </li>

                
            </ul>

  
        </nav>
    </div>
    </form>

    <section class="modal" id="modal">
        <div class="modalcontainer">
            <h1 class="modaltitle">Tabla de productos</h1>

                <table class="containertable table tablefixed">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Precio</th>
                            <th>Proveedor</th>
                            <th>Categoria</th>
                            <th>Descripcion</th>
                            <th>Foto</th>
                            <th></th>
                            
                        </tr>
                    </thead>
                    <tbody id="tbody">
                       
                    </tbody>
                </table>
               

            <a href="#" id="cerrarmodal" class="modalclose">Cerrar</a>
        </div>
    </section>

   

    <section class="modalcorrecto" id="modalcorrecto">
        <div class="containermodalcorrec" id="containermodalcorrec">
            <p><i class="fa-solid fa-circle-check"></i> Accion realizada con exito</p>
            
               </div>
    </section>

    <section class="modalerror" id="modalerror">
        <div class="containermodalerror" id="containermodalerror">
            <p><i class="fa-solid fa-circle-xmark"></i> Ha ocurrido un error fatal</p>
            <a href="#" id="cerrarmodalerror" class="cerrarmodalerror"></a>       
        </div>
    </section>

    <section class="modalwarning" id="modalwarning">
        <div class="containermodalwarning" id="containermodalwarning">
            <p><i class="fa-solid fa-triangle-exclamation"></i> Todos los Campos deben de ser Completados</p>
               <a href="#" id="cerrarmodalwarning" class="cerrarmodalwarning"></a>
        </div>
    </section>
    
    <!-- <script>
        window.location.href="./app/views/almacen.php";
    </script> -->
    <script src="../assets/code.js"></script>
    <script src="../../public/js/almacen.js"></script>
</body>
</html>