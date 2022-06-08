// const infoTarea = document.getElementById ("infoTarea")

// let tarea = "hla";
// fetch("../php/mostrarTareas.php?id="+tarea)
//     .then((response) => {
//         return response.json();
//     })
//     .then((datosJSON) => {
//         if(datosJSON.ok == true){
//             infoTarea.innerHTML += "<div class='dato'>" + datosJSON.datos.nombreTarea + "</div>";
//             infoTarea.innerHTML += "<div class='dato'>" + datosJSON.datos.descripcion + "</div>";
//             infoTarea.innerHTML += "<div class='dato'>Imagen Relacionada: " + datosJSON.datos.ruta + "</div>";
//             infoTarea.innerHTML += "<div class='dato'>Fecha de entrega: " + datosJSON.datos.fechaEntreg +' a las '+datosJSON.datos.hora+ "</div>";

//         }
//     })