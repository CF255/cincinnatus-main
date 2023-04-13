<?php

require_once "../models/user.model.php";

$arrayName = array('usuario' => $_POST['usuario'],
'nombre' => $_POST['nombre'],
'apellido' => $_POST['apellido'],
'email' => $_POST['email'],
'fecha' => $_POST['fecha'],
'pass' => $_POST['pass'],
'rol' => $_POST['rol'], 
'id' => $_POST['id']);

echo json_decode(Usuario::actualizar($arrayName));
