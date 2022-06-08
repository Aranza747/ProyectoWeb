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


fetch("../php/mostrarTareas.php")  //despliega tareas
.then((response) => {
    return response.json();
})
.then((datosJSON) => {
    console.log(datosJSON);
    for(datos of datosJSON){
        contTareas.innerHTML += "<button class='tareas' id='"+datos.id_tarea+"'>"+datos.nombreTarea+"</button>";
        
    }
});



contTareas.addEventListener("click", (evento) =>{
    let id = evento.target.id;
    console.log(evento.target.id);
    // console.log (evento.target.id);
    fetch("../php/mostrarTareas.php?id="+id)
    .then((response) => {
    return response.json();
    })
    .then((datosJSON) => {
        console.log(datosJSON);
        window.location.href="./tarea.php";
    })
    
});


fetch("../php/mostrarTemas.php")  //despliega tareas
.then((response) => {
    return response.json();
})
.then((datosJSON) => {
    console.log(datosJSON);
    for(datos of datosJSON){
        contTemas.innerHTML += "<button class='temas' id='"+datos.id_temas+"'>"+datos.nombreTema+"</button>";
        
    }
});



contTemas.addEventListener("click", (evento) =>{
    let id = evento.target.id;
    console.log(evento.target.id);
    // console.log (evento.target.id);
    fetch("../php/mostrarTemas.php?id="+id)
    .then((response) => {
    return response.json();
    })
    .then((datosJSON) => {
        console.log(datosJSON);
        window.location.href="./tema.php";
    })
    
});