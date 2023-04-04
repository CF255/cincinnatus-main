/* side menu */

const btn = document.querySelector('#menu-btn');
const menu = document.querySelector('#sidemenu');

btn.addEventListener('click', e =>{
    menu.classList.toggle("menuexpanded");
    menu.classList.toggle("menucolapse");

    document.querySelector('body').classList.toggle('body-expanded');

});


/* end side menu */


const nombre = document.getElementById('inputusuario');
const boton = document.getElementById('btncontinuar');
const lbl = document.getElementById('spannombre');


boton.addEventListener('click', e =>{
    
    lbl = "usuario" + nombre;
    alert(nombre);

});


/* side bar right */

 const btnright = document.querySelector('#toggle-button');
 const sidemenu = document.querySelector('#navid');
 

 btnright.addEventListener('click', e =>{
    e.classList.toggle("show");

    var element = document.getElementById("navid"),
    style = window.getComputedStyle(element),
    right = style.getPropertyValue("right");

    if(right == "0px"){
        element.style.right = "-260px";
    }else{
        element.style.right = "0px";
    }
});


function myFnc(e){
    e.classList.toggle("show");

    var element = document.getElementById("navid"),
    style = window.getComputedStyle(element),
    right = style.getPropertyValue("right");

    if(right == "0px"){
        element.style.right = "-260px";
    }else{
        element.style.right = "0px";
    }
}

/* fin */