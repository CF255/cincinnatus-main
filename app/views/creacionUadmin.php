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
<!-- <script src="/js/mi_script.js?v=<?php echo(rand()); ?>"></script> -->
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

           
                <li><a class="active" href="creacionUadmin.html"><img src="../../public/img/usuario.png" alt="">Creacion de usuarios</a></li>

           
                <li><a  href="almacen.php"><img src="../../public/img/producto.png" alt="">Crear producto</a></li>

    
                <li><a href="registrousuarios.php"><img src="../../public/img/almacen.png" alt="">almacen</a></li>

                
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
                <a class="active" href="#">
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
                <a href="vistaproductos.php">
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

    <form action="javascript:void(0);"  onsubmit="app.guardar()">
   
    <input type="hidden" id="id" />
    <div class="contenedorinput" id="continput">
        <h1>Creacion de Usuarios</h1>
        <a href="#" id="warning" class="warning"></a>

        <label for="" class="lblfoto">Foto de Perfil</label>
        <img class="imglogo" src="../../public/img/logo.jpeg" alt="">
        <a href="#"><img class="agregarimg" src="../../public/img/agregarfoto.png" alt=""></a>
    <input type="file" class="form-control-file " name="foto" id="foto" placeholder="foto" aria-describedby="fileHelpId">
     
    <label class="lblnombres" for="">Usuario</label>
    <input type="text" class="inputtext" id="usuario" placeholder="Nombre de Usuario">

    <label class="lblnombres" for="">Nombre</label>
    <input type="text" class="inputtext" id="nombre" placeholder="Nombre">

    <label class="lblnombres" for="">Apellido</label>
    <input type="text" class="inputtext" id="apellido" placeholder="Apellido">


    <label class="lblnombres" for="">fecha</label>
    <input type="date" class="inputtext" id="fecha" placeholder="Nombre del proveedor">


    <label class="lblnombres" for="">Email</label>
    <input type="text" class="inputtext" id="email" placeholder="Correo Electronico">


    <label class="lblnombres"  for="">Rol</label>
    <select autocomplete="off" name="rol" class="inputtext" tabindex="9" id="rol">
            <option value=""></option>
            <option value="Administrador">Administrador</option>
            <option value="Editor">Editor</option>
            <option value="Administrador_de_inventario">Administrador de inventario</option>
            <option value="Supervisor">Supervisor</option>
            <option value="Cliente">Cliente</option>
        </select> 
    
        <label class="lblnombres" for="">Contraseña</label>
    <input type="password" class="inputtext" id="pass" placeholder="Contraseña">

    <label class="lblnombres" for="">Confirmar la contraseña</label>
    <input type="password" class="inputtext" id="confi" placeholder="Confirma la Contraseña">


    </div>
    </form>
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

                
                <li> <button  id="botonborrar" class="btnside btneliminar" ><span class=""><i class="fa-solid fa-eraser"></i></span>
                    <span class="">Borrar</span>
                </button> 
                </li>


             
                <li>
                    <form action="javascript:void(0);"  onsubmit="app.guardar()">
                    <button class="btnside" type="submit"><span class=""><i class="fa-solid fa-floppy-disk"></i></span>
                    <span class="">Guardar</span></button> 
                    </form>
                 </li>
                  
                

                 
            </ul>
            
  
        </nav>
    </div>
   

  
    <section class="modal" id="modal">
        <div class="modalcontainer">
            
  <main class="table" id="tablaproductos">
    <section class="tableheader" >
              
    <h1 class="modaltitle">Tabla Usuarios</h1>
            <h2 class="">Usuarios Registrados</h2>
    </section>
    <section class="tablebody">
            <table class="containertable">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Usuario</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Fecha</th>
                            <th>Email</th>
                            <th>Contraseña</th>
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
    
    <!-- BUTTON MENU -->

                
    <div class="navegador" id="containernavegador">
        <ul>
            <li class="list activenav">
               <!--  <a href="#">
                    <span class="iconnav"><i class="icon fa-solid fa-magnifying-glass"></i></span>
                    <span class="textnav">Buscar</span>
                </a> -->

                <a href="#" id="botoninferiormodal"  class="botoninferiormodal">
                    <span class="iconnav"><i class="icon fa-solid fa-magnifying-glass"></i></span>
                    <span class="textnav">Buscar</span>
                </a>
            </li>

            <li class="list">
                <form action="javascript:void(0);"  onsubmit="app.guardar()"> 
                    <button class="" type="submit"><span class="iconnav"><i class="fa-solid fa-rotate"></i></span>
                    <span class="textnav">Actualizar</span></button> 
                    </form>
            </li>

          
            <li class="list">
             
                <button id="botonborrarinferior" type="submit" ><span class="iconnav"><i class="fa-solid fa-eraser"></i></span>
                    <span class="textnav">Borrar</span>
                </button> 

           
            </li>

            
            
            <li class="list">
            <form action="javascript:void(0);"  onsubmit="app.guardar()"> 
                    <button class="" type="submit"><span class="iconnav"><i class="fa-solid fa-floppy-disk"></i></span>
                    <span class="textnav">Guardar</span></button> 
                    </form>
            </li>
            

            <div class="indicadornav">

            </div>
        </ul>
    </div>

    <!-- FIN -->

    <script src="../assets/codeuser.js"></script>
    <script src="../../public/js/creacionUadmin.js"></script>
</body>
</html>