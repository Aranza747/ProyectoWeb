const enviar = document.getElementById("enviar");
const msgError = document.getElementById("msgError");

const formulario = document.getElementById("formulario");

// const guardar = document.getElementById("guardarCambios");

var html = '<div id="preguntasFrecuentes" class="card border-primary mb-3" style="max-width: 18rem;">'+
            '<div class="card-header">Header</div>'+
            '<div class="card-body text-primary">'+
            '<h5 class="card-title">Primary card title</h5>'+
            '<p class="card-text">Some quick example text to build on the card title and make up the bulk of the cards content.</p>'+
            '</div></div></div>';


enviar.addEventListener("click", (evento) => {
    evento.preventDefault();

    const respuestaPreguntaFrecuente = document.getElementById("respuestaPreguntaFrecuente").value
    const preguntaFrecuente = document.getElementById("preguntaFrecuente").value

    if(respuestaPreguntaFrecuente == 0 || preguntaFrecuente == 0)
        msgError.innerHTML = "Necesitas rellenar correctamente todos los campos";
        
    if(respuestaPreguntaFrecuente != 0 && preguntaFrecuente != 0){
        msgError.innerHTML = "";
        formulario.submit();
        formulario.reset();
    }
})


fetch("./consultarPreguntasFrecuentes.php")
.then((response)=>{
  return response.json();
})
.then((datosJSON)=>{
  console.log(datosJSON);
  let preguntaFrecuente = document.getElementById("preguntasFrecuentes");
  for(dato of datosJSON){
    preguntaFrecuente.innerHTML += '<div class="padre">'+'<div class=hijoP>'+dato.preguntaFrecuente+'</div>'+'<div class=hijoR>'+dato.respuesta+'</div>'+'<div class=botonPropio>'+'<button type="button" id="'+dato.id_preguntasFrecuentes+'"'+'class="eliminar">Eliminar</button>'+'</div>'+'</div>';
    }
});
