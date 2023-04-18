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
    <link rel="stylesheet" href="../../public/css/vistaproductos.css?v=<?php echo(rand()); ?>" />

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
           

                <li><a href="index.html"><img src="../../public/img/tienda.png" alt="">tienda</a></li>

            
                <li><a href="registrousuarios.php"><img src="../../public/img/usuarios.png" alt="">Usuarios</a></li>

           
                <li><a href="#" id="btncreacionusuarionodenav"><img src="../../public/img/usuario.png" alt="">Creacion de usuarios</a></li>

           
                <li><a  href="almacen.php"><img src="../../public/img/producto.png" alt="">Crear producto</a></li>

    
                <li><a class="active" href="#"><img src="../../public/img/almacen.png" alt="">almacen</a></li>

                
                <li><a id="btnloginnav"><img src="../../public/img/cerrar.png" alt="">Cerrar sesion</a></li>

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
                <a href="index.html">
                    <div class="icon"><img src="../../public/img/tienda.png" alt=""></div>
                    <div class="title"><span>Tienda</span></div>
                </a>
            </div>

            <div class="item">
                <a href="#" id="btncreacionusuarionode">
                    <div class="icon"><img src="../../public/img/usuario.png" alt=""></div>
                    <div class="title"><span>Creacion de usuarios</span></div>
                </a>
            </div>

            <div class="item">
                <a href="registrousuarios.php">
                    <div class="icon"><img src="../../public/img/usuarios.png" alt=""></div>
                    <div class="title"><span>Usuarios</span></div>
                </a>
            </div>

            <div class="item">
                <a href="almacen.php" >
                    <div class="icon"><img src="../../public/img/productos.png" alt=""></div>
                    <div class="title"><span>Crear producto</span></div>
                </a>
            </div>

            <div class="item">
                <a href="#" class="active">
                    <div class="icon"><img src="../../public/img/almacen.png" alt=""></div>
                    
                    <div class="title"><span>almacen</span></div>
                </a>
            </div>

            <div class="item separator"></div>


            
            <div class="item itemcerrar">
                <a id="btnlogin">
                    <div class="icon"><img src="../../public/img/cerrar.png" alt=""></div>
                    <div class="title"><span>Cerrar sesion</span></div>
                </a>
            </div>
        </div>
    
    </div>


    <div class="containerduo">

  <main class="table" id="tablaproductos">
    <section class="tableheader" >
              
    <h1 class="modaltitle">Listado de los productos</h1>
            <h2 class="">Productos en existencia</h2>
    </section>
    <section class="tablebody">
            <table class="containertable">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Precio</th>
                            <th>Unidades</th>
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
    </section>
  </main>



  <div class="contenedorinput" id="continput">
  
  <form action="javascript:void(0);"  onsubmit="app.guardar()" enctype="multipart/form-data" autocomplete="off">
   
   <input type="hidden" id="id" />
   
       <h1>Edicion de productos</h1>
       <a href="#" id="warning" class="warning"></a>

    
   <label class="lblnombres" for="">Precio</label>
   <input type="number" class="inputtext" id="precio" placeholder="precio del producto">

   <label class="lblnombres" for="">Unidades</label>
   <input type="number" class="inputtext" id="unidades" placeholder="Cantidad de unidades">

   <button class="btnside btnguardar" type="submit"><span class=""><i class="fa-solid fa-floppy-disk"></i></span>
                    <span class="">Guardar</span></button> 

                    <button class="btnside btncancelar "  id="btncancelar" type="button"><span class=""><i class="fa-solid fa-xmark"></i></span>
                    <span class="">Cancelar</span></button> 


    <input type="text" class="inputtext ocultar" id="nombre" placeholder="Nombre del producto">


    <input type="text" class="inputtext ocultar" id="proveedor" placeholder="Nombre del proveedor">

    <select autocomplete="off" name="categoria" class="inputtext ocultar" tabindex="9" id="categoria">
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

    <textarea class="inputtext textarea ocultar" name="" id="descripcion" ></textarea>

  
   </form>
   </div>
   </div>


 

   

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
    


    <!-- FIN -->
    <script src="../../public/js/vistaproductos.js?v=<?php echo(rand()); ?>"></script>
    <script src="../assets/code.js?v=<?php echo(rand()); ?>"></script>
    <script src="../../public/js/ruta.js?v=<?php echo(rand()); ?>"></script>
    <script src="../assets/code.js"></script>
    <script src="../../public/js/vistaproductos.js"></script>
    <script src="../../public/js/ruta.js"></script>
</body>
</html>