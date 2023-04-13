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
    <link rel="stylesheet" href="../../public/css/registrousuarios.css?v=<?php echo(rand()); ?>" />
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
           

                <li><a href="index.html"><img src="../../public/img/tienda.png" alt="">tienda</a></li>

            
                <li><a class="active" href="#"><img src="../../public/img/usuarios.png" alt="">Usuarios</a></li>

           
                <li><a href="creacionUadmin.php"><img src="../../public/img/usuario.png" alt="">Creacion de usuarios</a></li>

           
                <li><a href="almacen.php"><img src="../../public/img/producto.png" alt="">Crear producto</a></li>

    
                <li><a href="vistaproductos.php"><img src="../../public/img/almacen.png" alt="">almacen</a></li>

                
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
                <a href="index.html">
                    <div class="icon"><img src="../../public/img/tienda.png" alt=""></div>
                    <div class="title"><span>Tienda</span></div>
                </a>
            </div>

            <div class="item">
                <a href="creacionUadmin.php">
                    <div class="icon"><img src="../../public/img/usuario.png" alt=""></div>
                    <div class="title"><span>Creacion de usuarios</span></div>
                </a>
            </div>

            <div class="item">
                <a href="#" class="active">
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
                <a href="vistaproductos.php" >
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

  <main class="table" id="tablaproductos">
    <section class="tableheader" >
              
    <h1 class="modaltitle">Listado de Usuarios</h1>
            <h2 class="">Usuarios en existencia</h2>
    </section>
    <section class="tablebody">
            <table class="containertable">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Usuario</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>fecha</th>
                            <th>Email</th>
                            <th>Contrasena</th>
                            <th>Rol</th>
                            <th>Foto</th>
                            <th></th>
                            
                        </tr>
                    </thead>
                        <tbody id="tbodyuser">
                            
                    </tbody>
            </table>
    </section>
  </main>


 

   

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

    <script src="../assets/codeuser.js"></script>
    <script src="../../public/js/registrousuarios.js"></script>
</body>
</html>