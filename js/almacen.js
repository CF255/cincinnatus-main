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