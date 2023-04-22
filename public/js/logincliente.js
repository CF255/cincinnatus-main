
const btncontinuar = document.querySelector('.btncontinuar');

const modalclose = document.querySelector('.modalclose');
const btnloginadmi = document.getElementById("btnloginadmi"); 
const btnlogin = document.getElementById("btnlogin"); 


if(btnloginadmi){
    btnloginadmi.addEventListener('click', e =>{
    
 
        window.location.href = 'http://localhost/cincinnatus-main/app/views/loginadmi.php'
     
     });
}




if(btnlogin){
    btnlogin.addEventListener('click', e =>{
     
       window.location.href = 'http://localhost:4000/users/login'
    
    });
    
}


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

const modal = document.querySelector('.modal');
const prueba = document.getElementById("prueba");

if(prueba){
    prueba.addEventListener('click',(e)=>{

        e.preventDefault();
        modal.classList.add('modalshow');
    }); 
}