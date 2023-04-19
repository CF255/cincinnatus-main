
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


/* abrir cerrar sidemenu rigth */
const btn2 = document.querySelector('#toggle-button');


btn2.addEventListener('click', e =>{
    btn2.classList.toggle("show"); 

    var element = document.getElementById("navid"),
    style = window.getComputedStyle(element),
    right = style.getPropertyValue("right");
   
    if(right == "0px"){
        element.style.right = "-30%";
     
    }else{
        element.style.right = "0px";
       
    }
});
/* fin */

/* abrir modal tabla */

/* const openmodal = document.querySelector('.btnbuscar');
const openmodaldos = document.querySelector('.botoninferiormodal');
const modal = document.querySelector('.modal');
const closemodal = document.querySelector('.modalclose');

openmodal.addEventListener('click', (e)=>{
    e.preventDefault();
    modal.classList.add('modalshow');

});

openmodaldos.addEventListener('click', (e)=>{
    e.preventDefault();
    modal.classList.add('modalshow');

});

closemodal.addEventListener('click', (e)=>{
    e.preventDefault();
    modal.classList.remove('modalshow');

}); */

/* fin */

/* boton limpiar */

const botonborrar = document.getElementById("botonborrar");



if(botonborrar){
    botonborrar.addEventListener('click', (e)=>{
        document.getElementById("usuario").value="";
        document.getElementById("nombre").value="";
        document.getElementById("apellido").value="";
        document.getElementById("fecha").value="";
        document.getElementById("email").value="";
        document.getElementById("rol").value="";
       /*  document.getElementById("contraseña").value=""; */
       /*  document.getElementById("confi").value=""; */
       document.getElementById("pass").value="";
       document.getElementById("password2").value="";
     
     });
    
}

const botonborrarinferior = document.getElementById("botonborrarinferior");

if(botonborrarinferior){
    botonborrarinferior.addEventListener('click', (e)=>{
        document.getElementById("usuario").value="";
        document.getElementById("nombre").value="";
        document.getElementById("apellido").value="";
        document.getElementById("fecha").value="";
        document.getElementById("email").value="";
        document.getElementById("rol").value="";
       /*  document.getElementById("contraseña").value=""; */
       /*  document.getElementById("confi").value=""; */
       document.getElementById("pass").value="";
       document.getElementById("password2").value="";
     
     });
    
}
/* limpiar fin */



/* fin modal tabla */


