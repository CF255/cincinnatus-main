<?php

require_once "../models/producto.model.php";

$arrayName = array('nombre' => $_POST['nombre'],
'descripcion' => $_POST['descripcion'],
'precio' => $_POST['precio'] ,
'unidades' => $_POST['unidades'] ,
'proveedor' => $_POST['proveedor'],
'categoria' => $_POST['categoria'],
'id' => $_POST['id']);
/* 'fotos' => $_POST['fotos'] ); */

echo json_decode(Producto::actualizar($arrayName));