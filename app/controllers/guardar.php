<?php

require_once "../models/producto.model.php";

$arrayName = array('nombre' => $_POST['nombre'],
'descripcion' => $_POST['descripcion'],
'precio' => $_POST['precio'] ,
'unidades' => $_POST['unidades'] ,
'proveedor' => $_POST['proveedor'],
'categoria' => $_POST['categoria']);
/*  'fotos' => $_FILES['fotos']); */

echo json_decode(Producto::guardar($arrayName));