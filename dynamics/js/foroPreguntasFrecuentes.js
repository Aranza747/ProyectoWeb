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