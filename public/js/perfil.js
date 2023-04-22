
/* ocultar menu imputs y sidemenu rigth */
const check = document.querySelector('#check');
const menu3 = document.querySelector('#continput');
const menu4 = document.querySelector('#containernavegador');
const menu2 = document.querySelector('#navid');
const rutarol = document.getElementById("rutarol");
const btncreacionusuarionode = document.getElementById("btncreacionusuarionode");
const btncreacionusuarionodenav = document.getElementById("btncreacionusuarionodenav");
const registrousuarionav = document.getElementById("registrousuarionav");
const btnregistrousuarios = document.getElementById("btnregistrousuarios");
const btnregistropronav = document.getElementById("btnregistropronav");
const btnvistaproductos = document.getElementById('btnvistaproductos');
const btnalmacennav = document.getElementById("btnalmacennav");
const btnalmacen = document.getElementById('btnalmacen');


check.addEventListener('click', e =>{
    menu3.classList.toggle("ocultar");
    menu2.classList.toggle("ocultar");
    menu4.classList.toggle("ocultar");

});


/* bloqueos */
/* editor */

if(rutarol.value == "Editor"){

    btncreacionusuarionode.classList.add("bloqueo");
    btncreacionusuarionodenav.classList.add("bloqueo");
    registrousuarionav.classList.add("bloqueo");
    btnregistrousuarios.classList.add("bloqueo");
    btnregistropronav.classList.add("bloqueo");
    btnvistaproductos.classList.add("bloqueo");
}

if(rutarol.value == "Administrador_de_inventario"){

    btncreacionusuarionode.classList.add("bloqueo");
    btncreacionusuarionodenav.classList.add("bloqueo");
    registrousuarionav.classList.add("bloqueo");
    btnregistrousuarios.classList.add("bloqueo");
    btnalmacennav.classList.add("bloqueo");
    btnalmacen.classList.add("bloqueo");
}



/* fin */

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


/* editor */

if(btnalmacen){
    btnalmacen.addEventListener('click', e =>{
        if(rutarol.value == "Administrador"){
            window.location.href = 'http://localhost/cincinnatus-main/app/views/almacen.php'
        }else{
            window.location.href = 'http://localhost/cincinnatus-main/app/views/editor.php'
        }
    
    });
}


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

if(btnvistaproductos){
    btnvistaproductos.addEventListener('click', e =>{
        if(rutarol.value == "Administrador"){
            window.location.href = 'http://localhost/cincinnatus-main/app/views/vistaproductos.php'
        }else{
            window.location.href = 'http://localhost/cincinnatus-main/app/views/adminin.php'
        }
    
    });
}


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
/* registro uduarios */



if(btnregistrousuarios){
    btnregistrousuarios.addEventListener('click', e =>{
     
        window.location.href = 'http://localhost/cincinnatus-main/app/views/registrousuarios.php'
     
     });
}



if(registrousuarionav){
    registrousuarionav.addEventListener('click', e =>{
     
        window.location.href = 'http://localhost/cincinnatus-main/app/views/registrousuarios.php'
     
     });
} 

/* fin */
/* crecion de uruarios */
 

if(btncreacionusuarionode){
    btncreacionusuarionode.addEventListener('click', e =>{
     
        window.location.href = 'http://localhost:4000/users/registroadmin'
     
     });
}


if(btncreacionusuarionodenav){
    btncreacionusuarionodenav.addEventListener('click', e =>{
     
        window.location.href = 'http://localhost:4000/users/registroadmin'
     
     });
}
 

/* fin */
/* fin */



