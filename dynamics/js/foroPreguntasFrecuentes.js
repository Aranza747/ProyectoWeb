const enviar = document.getElementById("enviar");
const msgError = document.getElementById("msgError");

const formulario = document.getElementById("formulario");


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

const preguntaFrecuente = document.getElementById("preguntasFrecuentes");

preguntaFrecuente.addEventListener("click", (evento) => {
    const divClickeado = document.getElementById(evento.target.id);
    if(divClickeado.classList.contains("eliminar")){
        let datosForm = new FormData();
        datosForm.append("id", evento.target.id);
        fetch("./borrarPreguntaFrecuente.php",{
          method:"POST",
          body: datosForm,
        }).then((response)=>{
          return response.json();
        }).then((datosJSON)=>{
          if(datosJSON.ok ==true)
          {
            alert("Se elimino la preguntaza");
            window.location.reload();//Se recarga la pagina para dejar de mostrar la informacion del pokemon que se elimino
          }
          else
            alert("No se pudo eliminar");
        });

    }
        
})