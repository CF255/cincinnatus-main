<?php

 include(".../config/conexion.php");

 $nombre = $_POST['nombrefoto'];
 $imagen = addslashes(file_get_contents($_FILES['foto']['tmp_name']));

 $query = "INSERT INTO img (nombre,foto) VALUES('$nombre','$imagen')";
 $resultado = $conexion ->query($query);

 if($resultado){
    echo "imagen guardada";
 }else{
    echo "no";
 }


?>