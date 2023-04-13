<?php

require_once "../models/user.model.php";

echo json_decode(Usuario::eliminar($_POST['id']));