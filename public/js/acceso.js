const acceso = document.getElementById("acceso");

if(acceso.value == "Administrador"){
    window.location.href = 'http://localhost/cincinnatus-main/app/views/almacen.php'

}else if(acceso.value == "Editor"){

    window.location.href = 'http://localhost/cincinnatus-main/app/views/editor.php'

}else if(acceso.value == "Administrador_de_inventario"){

    window.location.href = 'http://localhost/cincinnatus-main/app/views/adminin.php'
}else if(acceso.value == "Cliente"){
alert("esta no es una cuenta administrativa")
}