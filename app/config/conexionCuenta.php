<?php

$host='localhost';
$db='miniproyect';
$user='postgres';
$pass='1234';


 $conexion = pg_connect("host=$host dbname=$db user=$user password=$pass");

 $inusuario=$_POST['usuario'];
 $innombre=$_POST['nombre'];
 $inapellido=$_POST['apellido'];
 $infecha=$_POST['fecha'];
 $inemail=$_POST['email'];
 $inpass=$_POST['pass'];
 $inpasscon=$_POST['cPass'];
 $rol=$_POST['rol'];
 

 
   
   if($inusuario != ""){
      if($innombre != ""){
         if($inapellido != ""){
            if($infecha != ''){
               if($inemail !=""){
                  if($inpass != ""){
                     if($inpasscon !=""){
                        if($inpass == $inpasscon){
                           if($inusuario != $innombre){
                              if($inusuario != $inpass){
                                 if($rol == "Cliente"){
                                    
                                    $query=("INSERT INTO usuario (usuario, nombre, apellido, fecha, email, foto, contraseña,rol)
                                    VALUES('$_REQUEST[usuario]','$_REQUEST[nombre]', '$_REQUEST[apellido]', '$_REQUEST[fecha]', '$_REQUEST[email]', '$_REQUEST[foto]', '$_REQUEST[pass]', '$_REQUEST[rol]')");                             
                                    
                                    $consulta=pg_query($conexion,$query);
                                             
                                    echo 'Registro completado exitosamente';
                                    
                                    }else{
                                    echo 'Error al Guardar';
                                    pg_close();
                                    }
                                    
                              }else{
                                 echo "EL usuario y la contrasena no pueden ser iguales";
                              }
                           }else{
                              echo "El usuario y el nombre no pueden ser iguales";
                           }
                        }else{
                           echo "Las contrasenas no coinciden";
                        }
                     }else{
                        echo "Debe de confirmar la Contrasena";
                     }
                  }else{
                     echo "Debe de introducir una Contrasena";
                  }
               }else{
                  echo "Debe de introducir un Correo Electronico";
               }
            }else{
               echo "Debe de introducir una Fecha";
            }
         }else{
            echo "Debe de introducir de Apellido";
         }
      }else{
         echo "Debe de introducir un nombre";
      }
   }else{
   echo "Debe de introducir un Nombre de Usuario";
   }
      
 
?>

<!-- if($conexion){
   echo"si";
}else{
   echo "no";
} -->

