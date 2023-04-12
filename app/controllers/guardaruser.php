<?php

require_once "../models/user.model.php";

$arrayName = array('nombre' => $_POST['nombre'],
'usuario' => $_POST['usuario'],
'apellido' => $_POST['apellido'],
'fecha' => $_POST['fecha'] ,
'email' => $_POST['email'],
'contraseña' => $_POST['contraseña'] ,
'rol' => $_POST['rol'],
'categoria' => $_POST['categoria']);
/*  'fotos' => $_FILES['fotos']); */

echo json_decode(Usuario::guardar($arrayName));