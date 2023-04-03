<?php

require '../conec/conexion.php';



$usuario=$_POST['user'];
$contraseña=$_POST['pass'];
$rol=$_POST['rol'];
$lbl=$_POST['submit'];




if($usuario != ""){
    if($contraseña != ""){
    if($rol == "Cliente"){

        $query=("SELECT * FROM usuario 
        WHERE usuario='$usuario' AND contraseña='$contraseña' AND rol='$rol'");

        $consulta=pg_query($conexion,$query);
        $cantidad=pg_num_rows($consulta);

        $_SESSION['nombre_usuario']=$usuario;
        header('Location: ../index.php');
        session_start();
    }
    
    }else{
        
        echo"debe de llenar el campo de contrasena";
    }
}else{
    echo"debe de llenar el campo de usuario";
}





        

/* if(isset($_POST['submit'])){
    if(empty($usuario)){
        echo "hola";
    }else if($rol == "Cliente"){
        
    }

}else{
    echo "No posees una Cuenta Administrativa como: $rol";
} */


?>