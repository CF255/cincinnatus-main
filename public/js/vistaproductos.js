
/* ocultar menu imputs y sidemenu rigth */
const check = document.querySelector('#check');
const tablaproductos = document.getElementById('tablaproductos');
const continput = document.getElementById('continput');



if(check){
    check.addEventListener('click', e =>{
        tablaproductos.classList.toggle("ocultar");
        continput.classList.toggle("ocultar");
        body.classList.toggle("ocultarscroll");
    });
    
}
/* FIN */
/* pequeño modal editor */

const btncancelar = document.getElementById("btncancelar");

if(btncancelar){
    btncancelar.addEventListener('click', e =>{
        
        continput.classList.toggle("ocultar");
    
    });
}

const btneditar = document.getElementById("btneditar");
if(btneditar){
    btneditar.addEventListener('click', e =>{
        alert("hola");
        continput.classList.toggle("ocultar");
    
    });
}

/*  */

/* side menu left */


const btn = document.querySelector('#menu-btn');
const menu = document.querySelector('#sidemenu');

btn.addEventListener('click', e =>{
    menu.classList.toggle("menuexpanded");
    menu.classList.toggle("menucolapse");
    continput.classList.toggle("expandcontainer");

    document.querySelector('body').classList.toggle('body-expanded');

});
/* end side menu */








/* fin modal tabla */

