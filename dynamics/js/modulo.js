const datosMod = document.getElementById("datosMod");
const contTemas = document.getElementById("contTemas");
const contTareas = document.getElementById("contTareas");


fetch("../php/datosMod.php") // despliega el nombre del modulo
.then((response) => {
    return response.json();
})
.then((datosJSON) => {
    console.log(datosJSON);
        
    datosMod.innerHTML += "<label class='modulo'>"+datosJSON+" &nbsp; </label>";
        
    
});


// fetch("../php/mostrarTareas.php")  //despliega tareas
// .then((response) => {
//     return response.json();
// })
// .then((datosJSON) => {
//     console.log(datosJSON);
//     for(resultados of datosJSON){
//         // let div = document.createElement("div");
//         // div.innerHTML += "<div class='materia'>" + datos.nombre+datos.foto + "</div>";
//         // div.dataset.id = datos.id_materia;
//         // contMaterias.innerHTML += "<button class='materia' id='"+datos.id_materia+"'  onclick='location.href=\"./vistaMateria.php\"'><strong>"+datos.nombreMateria+"</strong>" +datos.foto+ "</button>";
//         contTareas.innerHTML += "<button class='modulo' id='"+datosJSON.resultados.id_tarea+"'>"+datosJSON.resultados.nombreTarea+"</button>";
        
//     }
// });

// contTareas.addEventListener("click", (evento) =>{
//     let id = evento.target.id;
//     console.log(evento.target.id);
//     // console.log (evento.target.id);
//     fetch("../php/mostrarTareas.php?id="+id)
//     .then((response) => {
//     return response.json();
//     })
//     .then((datosJSON) => {
//         console.log(datosJSON);
//         window.location.href="./tarea.php";
//     })
    
// });