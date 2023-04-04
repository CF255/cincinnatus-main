<?php

require '../conec/conexion.php';

session_start();

$usuario=$_POST['user'];
$contraseña=$_POST['pass'];
$rol=$_POST['rol'];
$foto=$_POST['foto'];

$query=("SELECT * FROM usuario 
WHERE usuario='$usuario' AND contraseña='$contraseña' AND rol='$rol'");

$query=("SELECT * FROM usuario 
WHERE foto='$foto'");

$consulta=pg_query($conexion,$query);
$cantidad=pg_num_rows($consulta);


if(isset($_POST['submit'])){
    if(empty($usuario)){
        echo "hola";

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
} 

?>



