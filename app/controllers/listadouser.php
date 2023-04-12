<?php
require_once "../models/user.model.php";
echo json_encode(Usuario::mostrar()); 