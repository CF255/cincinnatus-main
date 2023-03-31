<?php

require 'conexion.php';

session_start();

$usuario=$_POST['user'];
$contraseña=$_POST['pass'];
$rol=$_POST['rol'];

$query=("SELECT * FROM usuario 
WHERE usuario='$usuario' AND contraseña='$contraseña' AND rol='$rol'");

$consulta=pg_query($conexion,$query);
$cantidad=pg_num_rows($consulta);

if($cantidad>0){
    if($rol == "Administrador"){
        $_SESSION['nombre_usuario']=$usuario;
    header('Location:admin.php');

    }else if($rol == "Editor"){
        $_SESSION['nombre_usuario']=$usuario;
    header('Location:admin.php');

    }else if($rol == "Administrador_Inventario"){
        $_SESSION['nombre_usuario']=$usuario;
    header('Location:admin.php');

    }else if($rol == "Supervisor"){
        $_SESSION['nombre_usuario']=$usuario;
    header('Location:admin.php');
    }

   /*  $_SESSION['nombre_usuario']=$usuario;
    header('Location:index.php'); */

}else{
    echo "No posees una Cuenta Administrativa como: $rol";
}


?>