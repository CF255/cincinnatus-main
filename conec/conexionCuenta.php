<?php

$host='localhost';
$db='miniproyect';
$user='postgres';
$pass='1234';


 $conexion = pg_connect("host=$host dbname=$db user=$user password=$pass");

 $query=("INSERT INTO usuario (usuario, nombre, apellido, fecha,email,contraseña,rol)
 VALUES('$_REQUEST[usuario]','$_REQUEST[nombre]', '$_REQUEST[apellido]', '$_REQUEST[fecha]', '$_REQUEST[email]', '$_REQUEST[pass]', '$_REQUEST[rol]')");



 $consulta=pg_query($conexion,$query);

 if($consulta){
    echo 'Registro completado exitosamente';
 }else{
    echo 'error';
 }
 pg_close();

/*  if($conexion){
   echo"si";
}else{
   echo "no";
} */ 

?>