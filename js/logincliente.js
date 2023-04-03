
const btncontinuar = document.querySelector('.btncontinuar');
const modal = document.querySelector('.modal');
const modalclose = document.querySelector('.modalclose');

const lbl = document.querySelector('.lblvali');

const innombre = document.getElementById('inputnombre');
const inputcontra = document.getElementById('inputcontra');


btncontinuar.addEventListener('click',(e)=>{

   if(innombre != ""){
    if(inputcontra !=""){

       
       
    }else{
        e.preventDefault();
        lbl.classList.add('lblshow');
    }
}else{
    e.preventDefault();
    lbl.classList.add('lblshow');
}

});

modalclose.addEventListener('click',(e)=>{

    e.preventDefault();
    modal.classList.remove('modalshow');
}); 