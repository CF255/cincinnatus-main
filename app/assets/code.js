const app = new (function () {
    this.tbody = document.getElementById("tbody");
    this.nombre = document.getElementById("nombre");
    this.precio = document.getElementById("precio");
    this.proveedor = document.getElementById("proveedor");
    this.categoria = document.getElementById("categoria");
    this.descripcion = document.getElementById("descripcion");
    this.fotos = document.getElementById("fotos");
    this.id = document.getElementById("id");
    this.eliminar = document.getElementById("eliminar");
    this.modal2 = document.getElementById("modalcorrecto");
    this.containermodalcorrec = document.getElementById("containermodalcorrec");
    this.cerrarmodalcorrecto = document.getElementById("cerrarmodalcorrecto");


    this.cerrarmodalcorrecto=()=>{
      this.modal2.classList.remove('modalcorrectoshow');
    }

    

    this.containermodalcorrec=()=>{
      this.modal2.classList.add('modalcorrectoshow');
    }


  
    this.listado = () => {
      fetch("../controllers/listado.php")
        .then((res) => res.json())
        .then((data) => {
          this.tbody.innerHTML = "";
          data.forEach((item) => {
            this.tbody.innerHTML += `
              <tr>
                <td>#${item.id}</td>
                <td>${item.nombre}</td>
                <td>$${item.precio}</td>
                <td>${item.proveedor}</td>
                <td>${item.categoria}</td>
                <td>${item.descripcion}</td>
                <td>${item.foto}</td>
                <td>
                  <a href="javascript:;" class="btn btn-warning btn-sm" onclick="app.editar(${item.id})">Editar</a>
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
      fetch("../controllers/eliminar.php",{
        method: "POST",
        body: form,
      })

      .then((res) => res.json())
      .then((data)=>{
        this.listado();
        this.containermodalcorrec();
         setTimeout(this.cerrarmodalcorrecto,1000);
      })
      .catch((error)=>console.log(error));
      
    }

    
   this.guardar = () =>{

      var form = new FormData();
      form.append("nombre", this.nombre.value);
      form.append("descripcion", this.descripcion.value);
      form.append("precio", this.precio.value);
      form.append("proveedor", this.proveedor.value);
      form.append("categoria", this.categoria.value);
      form.append("id", this.id.value);
      /* form.append("fotos", this.fotos.value); */

      if (this.id.value === "") {
        fetch("../controllers/guardar.php", {
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
      } else {
        fetch("../controllers/actualizar.php", {
          method: "POST",
          body: form,
        })
          .then((res) => res.json())
          .then((data) => {
            this.containermodalcorrec();
            this.listado();
            this.limpiar();
            etTimeout(this.cerrarmodalcorrecto,2000);
          })
          .catch((error) => console.log(error));
      }
       
    };

    this.limpiar = () =>{
      this.id.value ="";
      this.nombre.value ="";
      this.descripcion.value ="";
      this.precio.value ="";
      this.proveedor.value ="";
      this.categoria.value ="";

    };

    this.editar = (id)=>{
      var form = new FormData();
      form.append("id", id);
      fetch("../controllers/editar.php",{
        method: "POST",
        body: form,
      })
      .then((res)=>res.json())
      .then((data)=>{
        this.id.value = data.id;
        this.nombre.value =data.nombre;
        this.descripcion.value =data.descripcion;
        this.precio.value =data.precio;
        this.proveedor.value =data.proveedor;
        this.categoria.value =data.categoria;
        this.cerrarmodal();
      })
      .catch((error)=> console.log(error));
    };



   
  })();
  app.listado();
  