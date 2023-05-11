/* const { transformAuthInfo } = require("passport"); */

const father = document.querySelector('.father')
const point = document.querySelectorAll('.point')



const check = document.getElementById('check')

check.addEventListener('click',(e)=>{

    e.preventDefault();
    father.classList.add('fatherclose');

}); 



/* carrusel dos */

const slider = document.querySelector('#slider');
let slidersection = document.querySelectorAll('.slidersection');
let slidersectionlast = slidersection[slidersection.length -1]

const btnleft = document.querySelector('#btnleft');
const btnright = document.querySelector('#btnright');

slider.insertAdjacentElement('afterbegin', slidersectionlast);

/* btn right */
function siguiente(){
    let slidersectionfirst = document.querySelectorAll(".slidersection")[0];

    slider.style.marginLeft = "-200%";
    slider.style.transition = "all 0.5s";
    setTimeout(function(){
        slider.style.transition = "none";
        slider.insertAdjacentElement('beforeend', slidersectionfirst);
        slider.style.marginLeft = "-100%";
    }, 500);
}
btnright.addEventListener('click',function(){
    siguiente();
});
/* fin */

/* boton left */

function anterior(){
    
let slidersection = document.querySelectorAll('.slidersection');
let slidersectionlast = slidersection[slidersection.length -1]


    slider.style.marginLeft = "0%";
    slider.style.transition = "all 0.5s";
    setTimeout(function(){
        slider.style.transition = "none";
        slider.insertAdjacentElement('afterbegin', slidersectionlast);
        slider.style.marginLeft = "-100%";
    }, 500);
}
btnleft.addEventListener('click',function(){
    anterior();
});

/* end */


/* automatico */
    setInterval(function() {
        siguiente();
    }, 5000);
/* fin */
/* fin */

/* slider infinito */
const carrousel = document.querySelector(".carrouselitems");

let maxScrollLeft = carrousel.scrollWidth - carrousel.clientWidth;
let interalo = null;
let step = 1;

const start = ()=>{
interalo = setInterval(function(){
    carrousel.scrollLeft = carrousel.scrollLeft  + step;
    if(carrousel.scrollLeft == maxScrollLeft){
        step = step * -1;
    }else if(carrousel.scrollLeft === 0){
        step = step * -1;

    }
}, 10);
}

const stop = () =>{
    clearInterval(interalo);
};

carrousel.addEventListener('mouseover', ()=>{
    stop();
});

carrousel.addEventListener('mouseout', ()=>{
    start();
});


start();

/* fin */


/* carrusel categoria */

function App(){}
    window.onload = function(event){
        var app = new App();
        window.app = app;
    }

    App.prototype.processingButton = function(event){
        const btn = event.currentTarget;
        const carrusellist = event.currentTarget.parentNode;
        const track = event.currentTarget.parentNode.querySelector('#track');
        const carrusel = track.querySelectorAll('.carrusel');

        const carruselWidth = carrusel[0].offsetWidth;
        const trackWidth = track.offsetWidth;
        const listWidth = carrusellist.offsetWidth;

        track.style.left == "" ? leftPosition = track.style.left = 0 : leftPosition = parseFloat(track.style.left.slice(0,-2) * -1);
        btn.dataset.button ==  "button-prev" ? prevAction(leftPosition,carruselWidth, track) : nextAction(leftPosition, trackWidth, listWidth, carruselWidth, track);

    }

    let prevAction = (leftPosition, carruselWidth, track) => {
        if(leftPosition > 0){
            track.style.left = `${-1 * (leftPosition - carruselWidth)}px`;
        }
    }

    let nextAction =(leftPosition, trackWidth, listWidth, carruselWidth, track) => {
        if(leftPosition < (trackWidth - listWidth)){
            track.style.left = `${-1 * (leftPosition + carruselWidth)}px`;
        }
    }



/* fin */