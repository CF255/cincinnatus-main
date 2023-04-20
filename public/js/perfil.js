
/* ocultar menu imputs y sidemenu rigth */
const check = document.querySelector('#check');
const menu3 = document.querySelector('#continput');
const menu4 = document.querySelector('#containernavegador');
const menu2 = document.querySelector('#navid');

check.addEventListener('click', e =>{
    menu3.classList.toggle("ocultar");
    menu2.classList.toggle("ocultar");
    menu4.classList.toggle("ocultar");

});

/* FIN */

/* menu inferior */

const list = document.querySelectorAll('.list');
function activeLink(){
    list.forEach((item)=>
        item.classList.remove('activenav'));
        this.classList.add('activenav');
    
}

list.forEach((item)=>
item.addEventListener('click', activeLink));

/* fin */
/* side menu left */

const btn = document.querySelector('#menu-btn');
const menu = document.querySelector('#sidemenu');

btn.addEventListener('click', e =>{
    menu.classList.toggle("menuexpanded");
    menu.classList.toggle("menucolapse");

    document.querySelector('body').classList.toggle('body-expanded');

});
/* end side menu */

const continput = document.getElementById('continput');

const btnmostrar = document.getElementById("btnmostrar");

const nombre = document.getElementById("nombre");

if(btnmostrar){
    btnmostrar.addEventListener('click', e =>{
        
        continput.classList.add("mostrar");
        nombre.focus();
    
    });
}


const btncancelar = document.getElementById("btncancelar");

if(btncancelar){
    btncancelar.addEventListener('click', e =>{
        
        continput.classList.remove("mostrar");
    
    });
}




