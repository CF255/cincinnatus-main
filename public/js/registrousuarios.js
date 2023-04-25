
/* ocultar menu imputs y sidemenu rigth */
const check = document.querySelector('#check');
const tablaproductos = document.getElementById('tablaproductos');
const btn = document.querySelector('#menu-btn');
const menu = document.querySelector('#sidemenu');

check.addEventListener('click', e =>{
    tablaproductos.classList.toggle("ocultar");

});

/* FIN */


/* side menu left */



btn.addEventListener('click', e =>{
    menu.classList.toggle("menuexpanded");
    menu.classList.toggle("menucolapse");

    document.querySelector('body').classList.toggle('body-expanded');

});
/* end side menu */








/* fin modal tabla */

