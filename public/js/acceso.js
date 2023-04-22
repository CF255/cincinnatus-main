const acceso = document.getElementById("acceso");
const modal = document.querySelector('.modal');
const modalclose = document.getElementById("modalclose");

if(modalclose){
    modalclose.addEventListener('click',(e)=>{
        window.location.href = 'http://localhost:4000/users/loginadmi' 
        
    }); 
}

     
      
if(acceso.value == "Administrador"){
    window.location.href = 'http://localhost/cincinnatus-main/app/views/almacen.php'

}else if(acceso.value == "Editor"){

    window.location.href = 'http://localhost/cincinnatus-main/app/views/editor.php'

}else if(acceso.value == "Administrador_de_inventario"){

    window.location.href = 'http://localhost/cincinnatus-main/app/views/adminin.php'
}else if(acceso.value == "Cliente"){
  
    modal.classList.add('modalshow');

}