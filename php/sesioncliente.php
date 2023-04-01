<?php

require '../conec/conexion.php';


session_start();

$usuario=$_POST['user'];
$contraseña=$_POST['pass'];
$rol=$_POST['rol'];


$query=("SELECT * FROM usuario 
WHERE usuario='$usuario' AND contraseña='$contraseña' AND rol='$rol'");

$consulta=pg_query($conexion,$query);
$cantidad=pg_num_rows($consulta);


if(isset($_POST['submit'])){
    if(empty($usuario)){
        echo "hola";
    }else if($rol == "Cliente"){
        $_SESSION['nombre_usuario']=$usuario;
    header('Location: ../index.php');
    }

}else{
    echo "No posees una Cuenta Administrativa como: $rol";
}


?>