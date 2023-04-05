/* prueba */
const check = document.querySelector('#check');
const menu3 = document.querySelector('#continput');

check.addEventListener('click', e =>{
    menu3.classList.toggle("ocultar");
    menu2.classList.toggle("ocultar");

});

/* FIN */

/* side menu */

const btn = document.querySelector('#menu-btn');
const menu = document.querySelector('#sidemenu');

btn.addEventListener('click', e =>{
    menu.classList.toggle("menuexpanded");
    menu.classList.toggle("menucolapse");

    document.querySelector('body').classList.toggle('body-expanded');

});


/* end side menu */





/* prueba */
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



