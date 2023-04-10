<?php

require_once "../models/producto.model.php";

$arrayName = array('nombre' => $_POST['nombre'],
'descripcion' => $_POST['descripcion'],
'precio' => $_POST['precio'] ,
'proveedor' => $_POST['proveedor'],
'categoria' => $_POST['categoria']);
/* 'fotos' => $_POST['fotos'] ); */

echo json_decode(Producto::guardar($arrayName));