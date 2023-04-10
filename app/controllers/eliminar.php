<?php

require_once "../models/producto.model.php";

echo json_decode(Producto::eliminar($_POST['id']));