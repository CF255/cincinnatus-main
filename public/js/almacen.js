/* ocultar menu imputs y sidemenu rigth */
const check = document.querySelector('#check');
const menu3 = document.querySelector('#continput');

check.addEventListener('click', e =>{
    menu3.classList.toggle("ocultar");
    menu2.classList.toggle("ocultar");

});

/* FIN */

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
const menu2 = document.querySelector('#navid');

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

const openmodal = document.querySelector('.btnbuscar');
const modal = document.querySelector('.modal');
const closemodal = document.querySelector('.modalclose');

openmodal.addEventListener('click', (e)=>{
    e.preventDefault();
    modal.classList.add('modalshow');

});

closemodal.addEventListener('click', (e)=>{
    e.preventDefault();
    modal.classList.remove('modalshow');

});

/* fin modal tabla */


