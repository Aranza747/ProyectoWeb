window.addEventListener("load", ()=>{
    const buscador = document.getElementById("buscador");
    const resultados = document.getElementById("contenedor-resultados");

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
            for(pokemon of datosJSON){
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
                divDatos.innerHTML += "<div class='dato'><strong>Nombre</strong>" + datosJSON.datos.nombre + "</div>";
                divDatos.innerHTML += "<div class='dato'><strong>Altura</strong>" + datosJSON.datos.descripcion + "</div>";
                divDatos.innerHTML += "<div class='dato'><strong>Peso</strong>" + datosJSON.datos.foto + "</div>";
                // divDatos.innerHTML += "<div class='dato'><strong>Tipo</strong>" + datosJSON.datos.tipo + "</div>";
                // divDatos.innerHTML += "<button id='btn-eliminar' data-id='" + id + "'>contraseña</button>";
                divDatos.style.display="flex";
              }
            })
        }
      })
});