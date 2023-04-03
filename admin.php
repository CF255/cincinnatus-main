<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    holis admin

    
    si
    
    <?php

session_start();
$user=$_SESSION['nombre_usuario'];
echo "<h3>hola $user </h3>";
?>

<?php

session_start();
$user=$_SESSION['foto_perfil'];
echo "<h3>hola $foto </h3>";
?>
</body>
</html>