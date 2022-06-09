window.addEventListener("load", ()=>{
    const buscador = document.getElementById("buscador");
    const divResultados = document.getElementById("contenedor-resultados");
    const divDatos = document.getElementById("contenedor-mostrar");
    const contrasena = document.getElementById("contrasena");
    let contra = 0;
    // const btnContrasena = document.getElementById("btnContrasena");

    buscador.addEventListener("keyup", (evento) => {
        let termino = buscador.value;
        divResultados.innerHTML = "";
  
        if(termino.length >= 2){
          fetch("../php/ingresarMateria.php?q="+termino)
          .then((response) => {
            return response.json();
          })
          .then((datosJSON) => {
            console.log(datosJSON);
            for(materia of datosJSON){
              let div = document.createElement("div");
              div.innerHTML = materia.nombreMateria;
              div.dataset.id = materia.id_materia;
              div.classList.add("coincidencia");
              divResultados.appendChild(div);
            }
          })
        }
      })
  
      divResultados.addEventListener("click", (evento) => {
        if(evento.target.classList.contains("coincidencia")){
          let id = evento.target.dataset.id;
          fetch("../php/ingresarMateria.php?id="+id)
            .then((response) => {
              return response.json();
            })
            .then((datosJSON) => {
              if(datosJSON.ok == true){
                divDatos.innerHTML += "<div class='dato'><strong>" + datosJSON.datos.nombre + "</strong></div>";
                divDatos.innerHTML += "<div class='dato'>" + datosJSON.datos.descripcion + "</div>";
                divDatos.innerHTML += "<div class='dato'>Imagen Relacionada: " + datosJSON.datos.foto + "</div>";
                divDatos.innerHTML += "<button id='btnContrasena' data-id='" + id + "'>►</button>";
                // console.log(datosJSON.datos);
                divDatos.style.display="block";
                contra = datosJSON.datos.contrasena;
                console.log(contra);
              }
            })
        }
      });


      divDatos.addEventListener("click", (evento)=>{
        if(evento.target.id == "btnContrasena"){
          let idMat = evento.target.dataset.id; 
          console.log(evento.target.dataset.id);
          // console.log(divDatos.children[0].value); 
          if(divDatos.children[0].value == contra){ //compara el valor del input de contraseña (children[0]) con la conraseña que viene de base de datos
            fetch("../php/ingresarMateria.php?idMat="+idMat)
            .then((response) => {
              return response.json();
            })
            .then((datosJSON) => {
              console.log(datosJSON);
              if(datosJSON == true)
                window.location.href="./pagInicio.php";
            })
          } else {
            alert("Tu contraseña es incorrecta");
          }
        }
      });
     
});