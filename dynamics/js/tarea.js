const infoTarea = document.getElementById ("infoTarea");
const ver = document.getElementById("ver");


fetch("../php/desplegarTarea.php")
.then((response) => {
    return response.json();
})
.then((datosJSON) => {
    console.log(datosJSON);
    if(datosJSON.ok == true){
        infoTarea.innerHTML += "<div class='nombre'>" + datosJSON.datos.nombreTarea + "</div>";
        infoTarea.innerHTML += "<div class='descripcion'>" + datosJSON.datos.descripcion + "</div>";
        infoTarea.innerHTML += "<div class='archivo'>Archivo adjunto: " + datosJSON.datos.ruta + "</div>";
        infoTarea.innerHTML += "<div class='subida'>Publicada: " + datosJSON.datos.fecha + "</div>";
        infoTarea.innerHTML += "<div class='entrega'>Fecha de entrega: " + datosJSON.datos.fechaEntrega +' a las '+datosJSON.datos.hora+ "</div>";

    }
})


