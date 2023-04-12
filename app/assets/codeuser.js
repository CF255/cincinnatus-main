const app = new (function () {
    this.tbody = document.getElementById("tbodyuser");
    this.usuario = document.getElementById("usuario")
    this.nombre = document.getElementById("nombre");
    this.precio = document.getElementById("apellido");
    this.unidades = document.getElementById("fecha");
    this.proveedor = document.getElementById("email");
    this.categoria = document.getElementById("foto");
    this.descripcion = document.getElementById("contraseña");
    this.fotos = document.getElementById("rol");
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
    this.btnactualizar = document.getElementById("btnactu");
    this.botonborrar = document.getElementById("botonborrar");    

  
    /* fin */

    /* color campo vacio warning */
  this.warning=()=>{
    this.nombre.classList.add("inputerror");
  }
  this.warningremove=()=>{
    this.nombre.classList.remove("inputerror");
  }

  this.warning2=()=>{
    this.precio.classList.add("inputerror");
  }
  this.warningremove2=()=>{
    this.precio.classList.remove("inputerror");
  }

  this.warning3=()=>{
    this.proveedor.classList.add("inputerror");
  }
  this.warningremove3=()=>{
    this.proveedor.classList.remove("inputerror");
  }

  this.warning4=()=>{
    this.categoria.classList.add("inputerror");
  }
  this.warningremove4=()=>{
    this.categoria.classList.remove("inputerror");
  }

  this.warning5=()=>{
    this.descripcion.classList.add("inputerror");
  }
  this.warningremove5=()=>{
    this.descripcion.classList.remove("inputerror");
  }

  
  this.warning6=()=>{
    this.unidades.classList.add("inputerror");
  }
  this.warningremove6=()=>{
    this.unidades.classList.remove("inputerror");
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
          console.log(data);

         /*  this.tbody.innerHTML = "";
          data.forEach((item) => {
            this.tbody.innerHTML += `
              <tr>
                <td>#${item.id}</td>
                <td>${item.usuario}</td>
                <td>$${item.nombre}</td>
                <td>${item.apellido}</td>
                <td>${item.fecha}</td>
                <td>${item.email}</td>
                <td>${item.contraseña}</td>
                <td>${item.rol}</td>
                <td>foto</td>
                <td>
                  <a href="javascript:;" class="btn btn-warning btn-sm" onclick="app.editar(${item.id})">Editar</a>
                  <a href="javascript:;" class="btn btn-danger btn-sm" onclick="app.eliminar(${item.id})">Eliminar</a>
                </td>
              </tr>
            `;
          }); */
        })
        .catch((error) => console.log(error));      
    };

/* 
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
      form.append("fecha", this.fecha.value);
      form.append("email",this.email.value);
      form.append("contraseña", this.contraseña.value);
      form.append("rol", this.rol.value);
      form.append("id", this.id.value);


      
      if(this.nombre.value != ""){
        if(this.apellido.value != ""){
          if(this.fecha.value != ""){
            if(this.email.value !=""){
              if(this.contraseña.value !=""){
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
                       this.warningremove();
                       this.warningremove2();
                       this.warningremove3();
                       this.warningremove4();
                       this.warningremove5();
                        
                        
                      })
                      .catch((error) => console.log(error));

  
                  } else {
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
                  this.warning5();
                  this.descripcion.focus();
                }
              }else{
                this.containermodalwarning();
              setTimeout(this.cerrarmodalwarning,2000);
              this.warning4();
              this.categoria.focus();
              }
            }else{
              this.containermodalwarning();
              setTimeout(this.cerrarmodalwarning,2000);
              this.warning3();
              this.proveedor.focus();
            }
  
          }else{
            this.containermodalwarning();
            setTimeout(this.cerrarmodalwarning,2000);
            this.unidades.focus();
            this.warning6();
          }
        }else{
          this.containermodalwarning();
          setTimeout(this.cerrarmodalwarning,2000);
          this.warning2();
          this.precio.focus();
        }
       
      }else{
        this.containermodalwarning();
        setTimeout(this.cerrarmodalwarning,2000);
        this.nombre.focus();
        this.warning();
      }
     
       
    };


    this.limpiar = () =>{
      this.id.value ="";
      this.nombre.value ="";
      this.descripcion.value ="";
      this.precio.value ="";
      this.unidades.value ="";
      this.proveedor.value ="";
      this.categoria.value ="";

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
        this.nombre.value =data.nombre;
        this.descripcion.value =data.descripcion;
        this.precio.value =data.precio;
        this.unidades.value =data.unidades;
        this.proveedor.value =data.proveedor;
        this.categoria.value =data.categoria;
        this.cerrarmodal();
      })
      .catch((error)=> console.log(error));
    };



   */
  })();
  app.listado();
  
 