
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


/* rutas */
const rutarol = document.getElementById("rutarol");

/* editor */
const btnalmacen = document.getElementById('btnalmacen');
if(btnalmacen){
    btnalmacen.addEventListener('click', e =>{
        if(rutarol.value == "Administrador"){
            window.location.href = 'http://localhost/cincinnatus-main/app/views/almacen.php'
        }else{
            window.location.href = 'http://localhost/cincinnatus-main/app/views/editor.php'
        }
    
    });
}

const btnalmacennav = document.getElementById("btnalmacennav");
if(btnalmacennav){
    btnalmacennav.addEventListener('click', e =>{
        if(rutarol.value == "Administrador"){
            window.location.href = 'http://localhost/cincinnatus-main/app/views/almacen.php'
        }else{
            window.location.href = 'http://localhost/cincinnatus-main/app/views/editor.php'
        }
    
    });
}

/* fin */

/* login exit */

const btnloginnav = document.getElementById("btnloginnav"); 


if(btnloginnav){
    btnloginnav.addEventListener('click', e =>{
     
       window.location.href = 'http://localhost:4000/users/login'
    
    });
    
}


const btnlogin= document.getElementById("btnlogin");

if(btnlogin){
    btnlogin.addEventListener('click', e =>{
     
        window.location.href = 'http://localhost:4000/users/login'
     
     });
}
/* fin */

/* adminin */
const btnvistaproductos = document.getElementById('btnvistaproductos');
if(btnvistaproductos){
    btnvistaproductos.addEventListener('click', e =>{
        if(rutarol.value == "Administrador"){
            window.location.href = 'http://localhost/cincinnatus-main/app/views/vistaproductos.php'
        }else{
            window.location.href = 'http://localhost/cincinnatus-main/app/views/adminin.php'
        }
    
    });
}

const btnregistropronav = document.getElementById("btnregistropronav");
if(btnregistropronav){
    btnregistropronav.addEventListener('click', e =>{
        if(rutarol.value == "Administrador"){
            window.location.href = 'http://localhost/cincinnatus-main/app/views/vistaproductos.php'
        }else{
            window.location.href = 'http://localhost/cincinnatus-main/app/views/adminin.php'
        }
    
    });
}
/* fin */
/* fin */



