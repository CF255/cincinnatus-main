const father = document.querySelector('.father')
const point = document.querySelectorAll('.point')



// recorriendo cada punto
point.forEach ((allpoint, i)=>{

    
    //asignar un click a cada punto
    point[i].addEventListener('click',()=>{
        
        //guardando la posicion del punto
        let position = i
        //calculando el espacio de desplazamiento
        let operation = position * - 20

        //moviendo el container father
        father.style.transform = `translateX(${operation}%)`

        //recorriendo todos los puntos
        point.forEach((allpoint, i)=>{
            //quitando el ativo
            point[i].classList.remove('activo')
        })
        //add nuevo activo
        point[i].classList.add('activo')
    })
  

})
setInterval(function(){ 

    point.forEach ((allpoint, i)=>{

    
        
        
            //guardando la posicion del punto
            let position = i
           
            //calculando el espacio de desplazamiento
            let operation = position - 24
        
            //moviendo el container father
            father.style.transform = `translateX(${operation}%)`
        
            //recorriendo todos los puntos
            point.forEach((allpoint, i)=>{
                //quitando el ativo
                point[i].classList.remove('activo')
            })
            //add nuevo activo
            point[i].classList.add('activo')
        
      
    
    })
}, 2000);


const check = document.getElementById('check')

check.addEventListener('click',(e)=>{

    e.preventDefault();
    father.classList.add('fatherclose');

}); 



