<?php

require 'app/config/conexion.php';

session_start();

$usuario=$_POST['user'];
$contraseña=$_POST['pass'];
$rol=$_POST['rol'];



$query=("SELECT * FROM usuarios WHERE   AND rol='$rol'");
$consulta=pg_query($conexion,$query);
$cantidad=pg_num_rows($consulta);




/* inicio */



            if($cantidad>0){
                if($rol == "Administrador"){
                        $_SESSION['nombre_usuario']=$usuario;
                        $_SESSION['nombre_rol']=$rol;

                        header('Location: app/views/almacen.php');
                    
                    }else if($rol == "Editor"){
                        $_SESSION['nombre_usuario']=$usuario;
                        $_SESSION['nombre_rol']=$rol;
                    header('Location: app/views/almacen.php');
                
                    }else if($rol == "Administrador_de_inventario"){
                        $_SESSION['nombre_usuario']=$usuario;
                        $_SESSION['nombre_rol']=$rol;
                    header('Location: app/views/almacen.php');
                
                    }else if($rol == "Supervisor"){
                        $_SESSION['nombre_usuario']=$usuario;
                        $_SESSION['nombre_rol']=$rol;
                    header('Location: app/views/almacen.php');
                    }
                }else{
                   
                    echo'<script type="text/javascript">
    alert("No posee este tipo de cuenta");
    window.location.href="app/views/loginadmi.php";
    </script>';
                }


        }</script>';
        }

  /*   }else{
        echo'<script type="text/javascript">
    alert("Debe de introducir una Contraseña");
    window.location.href="app/views/loginadmi.php";
    </script>';
    
    } */

/* fin */

/* 
if(isset($_POST['submit'])){
    if($usuario ){
        echo 

    }else if($cantidad>0){
if($rol == "Administrador"){
        $_SESSION['nombre_usuario']=$usuario;
        $_SESSION['foto_perfil']=$foto;
        header('Location: ../almacen.php');
    
    }else if($rol == "Editor"){
        $_SESSION['nombre_usuario']=$usuario;
    header('Location: ../almacen.html');

    }else if($rol == "Administrador_Inventario"){
        $_SESSION['nombre_usuario']=$usuario;
    header('Location: ../almacen.html');

    }else if($rol == "Supervisor"){
        $_SESSION['nombre_usuario']=$usuario;
    header('Location: ../almacen.html');
    }
}else{
    echo "No posees una Cuenta Administrativa como: $rol";
}
}  */

?>

<!-- 


 -->