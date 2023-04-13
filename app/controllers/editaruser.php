<?php
require_once "../models/user.model.php";
echo json_encode(Usuario::obtener($_POST['id']));