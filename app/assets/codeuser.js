const app = new (function () {
    this.tbodyuser = document.getElementById("tbodyuser");
    this.usuario = document.getElementById("usuario")
    this.nombre = document.getElementById("nombre");
    this.apellido = document.getElementById("apellido");
    this.fecha = document.getElementById("fecha");
    this.email = document.getElementById("email");
    this.foto = document.getElementById("foto");
    this.pass = document.getElementById("pass");
    this.rol = document.getElementById("rol");
    this.id = document.getElementById("id");
    this.eliminar = document.getElementById("eliminar");
    this.modal2 = document.getElementById("modalcorrecto");
    this.containermodalcorrec = document.getElementById("containermodalcorrec");
    this.cerrarmodalcorrecto = document.getElementById("cerrarmodalcorrecto");
    this.cerrarmodal = document.getElementById("modalclose");
    this.modal = document.getElementById("modal");
    this.modal3 = document.getElementById("modalwarning");
    this.containermodalwarning = document.getElementById("containermodalwarning");
    this.cerrarmodalwarning =document.getElementById("cerrarmodalwarning");
    this.warning = document.getElementById("warning");
    this.modal4 = document.getElementById("modalerror");
    this.containermodalerror=document.getElementById("containermodalerror");
    this.cerrarmodalerror = document.getElementById("cerrarmodalerror");
    this.botonborrar = document.getElementById("botonborrar");    

  
   
    /* fin */

    /* color campo vacio warning */
    this.warning0=()=>{
      this.usuario.classList.add("inputerror");
    }
    this.warningremove0=()=>{
      this.usuario.classList.remove("inputerror");
    }

  this.warning=()=>{
    this.nombre.classList.add("inputerror");
  }
  this.warningremove=()=>{
    this.nombre.classList.remove("inputerror");
  }

  this.warning2=()=>{
    this.apellido.classList.add("inputerror");
  }
  this.warningremove2=()=>{
    this.apellido.classList.remove("inputerror");
  }

  this.warning3=()=>{
    this.email.classList.add("inputerror");
  }
  this.warningremove3=()=>{
    this.email.classList.remove("inputerror");
  }

  this.warning4=()=>{
    this.fecha.classList.add("inputerror");
  }
  this.warningremove4=()=>{
    this.fecha.classList.remove("inputerror");
  }

  this.warning5=()=>{
    this.pass.classList.add("inputerror");
  }
  this.warningremove5=()=>{
    this.pass.classList.remove("inputerror");
  }

  
  this.warning6=()=>{
    this.rol.classList.add("inputerror");
  }
  this.warningremove6=()=>{
    this.rol.classList.remove("inputerror");
  }
    /* FIN  */

    /* modal error */
    this.cerrarmodalerror=()=>{
      this.modal4.classList.remove('modalcorrectoshow');
    }
    this.containermodalerror=()=>{
      this.modal4.classList.add('modalcorrectoshow');
    }
    /* fin */

    /* modal warning */
    this.cerrarmodalwarning=()=>{
      this.modal3.classList.remove('modalcorrectoshow');
    }
    this.containermodalwarning=()=>{
      this.modal3.classList.add('modalcorrectoshow');
    }
/* fin */

  
/* modal correcto */
    this.cerrarmodalcorrecto=()=>{
      this.modal2.classList.remove('modalcorrectoshow');
    }
    this.containermodalcorrec=()=>{
      this.modal2.classList.add('modalcorrectoshow');
    }
/* fin */

/* modal tabla productos */
    this.cerrarmodal =()=>{
      this.modal.classList.remove('modalshow');
    }


  
    /* fin */
     this.listado = () => {
      fetch("../controllers/listadouser.php")
        .then((res) => res.json())
        .then((data) => {

           this.tbodyuser.innerHTML = "";
          data.forEach((item) => {
            this.tbodyuser.innerHTML += `
              <tr>
                <td>#${item.id}</td>
                <td>${item.usuario}</td>
                <td>${item.nombre}</td>
                <td>${item.apellido}</td>
                <td>${item.fecha}</td>
                <td>${item.email}</td>
                <td>${item.pass}</td>
                <td>${item.rol}</td>
                <td>foto</td>
                <td>
                  
                  <a href="javascript:;" class="btn btn-danger btn-sm" onclick="app.eliminar(${item.id})">Eliminar</a>
                </td>
              </tr>
            `;
          }); 
        })
        .catch((error) => console.log(error));      
    };


    this.eliminar = (id)=>{
      var form = new FormData();
      form.append("id", id);
      fetch("../controllers/eliminaruser.php",{
        method: "POST",
        body: form,
      })

      .then((res) => res.json())
      .then((data)=>{
        this.listado();
        this.containermodalcorrec();
         setTimeout(this.cerrarmodalcorrecto,1500);
      })
      .catch((error)=>console.log(error));
      
    } 

    
   this.guardar = () =>{

      var form = new FormData();
      form.append("usuario", this.usuario.value);
      form.append("nombre", this.nombre.value);
     form.append("apellido", this.apellido.value);
     form.append("email",this.email.value);
    form.append("fecha", this.fecha.value);  
    form.append("pass", this.pass.value);  
      form.append("rol", this.rol.value);
      form.append("id", this.id.value);

if(this.usuario.value != ""){
      if(this.nombre.value != ""){
        if(this.apellido.value != ""){
          if(this.fecha.value != ""){
            if(this.email.value !=""){
              if(this.pass.value !=""){
                if(this.rol.value != ""){
                  if (this.id.value === "") {
                    fetch("../controllers/guardaruser.php", {
                      method: "POST",
                      body: form,
                    })
                      .then((res) => res.json())
                      .then((data) => {
                        this.containermodalcorrec();
                        this.listado();
                        this.limpiar();
                       setTimeout(this.cerrarmodalcorrecto,2000);
                       this.warningremove0();
                       this.warningremove();
                       this.warningremove2();
                       this.warningremove3();
                       this.warningremove4();
                       this.warningremove5();
                       this.warningremove6();
                      
                       
                         
                        
                      })
                      .catch((error) => console.log(error));

  
                  }  else {
                    fetch("../controllers/actualizaruser.php", {
                      method: "POST",
                      body: form,
                    })
                      .then((res) => res.json())
                      .then((data) => {
                        this.containermodalcorrec();
                        
                        this.listado();
                        this.limpiar();
                        setTimeout(this.cerrarmodalcorrecto,2000);
                        
          
                        
                      })
                      .catch((error) => console.log(error));
               
                  }  

  
  
                }else{
                  this.containermodalwarning();
                  setTimeout(this.cerrarmodalwarning,2000);
                  this.warning6();
                  this.rol.focus();
                }
              }else{
                this.containermodalwarning();
              setTimeout(this.cerrarmodalwarning,2000);
              this.warning5();
              this.pass.focus();
              }
            }else{
              this.containermodalwarning();
              setTimeout(this.cerrarmodalwarning,2000);
              this.warning3();
              this.email.focus();
            }
  
          }else{
            this.containermodalwarning();
            setTimeout(this.cerrarmodalwarning,2000);
            this.fecha.focus();
            this.warning4();
          }
        }else{
          this.containermodalwarning();
          setTimeout(this.cerrarmodalwarning,2000);
          this.warning2();
          this.apellido.focus();
        }
       
      }else{
        this.containermodalwarning();
        setTimeout(this.cerrarmodalwarning,2000);
        this.nombre.focus();
        this.warning();
      }

}else{
  this.containermodalwarning();
  setTimeout(this.cerrarmodalwarning,2000);
  this.usuario.focus();
  this.warning0();

}
     
       
    };


     this.limpiar = () =>{
      this.id.value ="";
      this.usuario.value ="";
      this.nombre.value ="";
      this.apellido.value ="";
      this.fecha.value ="";
      this.rol.value ="";
      this.pass.value ="";
      this.email.value ="";

    };

     this.editar = (id)=>{
      var form = new FormData();
      form.append("id", id);
      fetch("../controllers/editaruser.php",{
        method: "POST",
        body: form,
      })
      .then((res)=>res.json())
      .then((data)=>{
        this.id.value = data.id;
        this.usuario.value = data.usuario;
        this.nombre.value =data.nombre;
        this.apellido.value =data.apellido;
        this.fecha.value =data.fecha;
        this.rol.value =data.rol;
        this.pass.value =data.pass;
        this.email.value =data.email;
        this.cerrarmodal();
      })
      .catch((error)=> console.log(error));
    };



   
  })();
  app.listado(); 
  
 

