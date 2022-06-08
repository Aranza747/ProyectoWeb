const contMaterias = document.getElementById("contMaterias");
// const materia = document.getElementsByClassName("materia");


fetch("../php/mostrarMaterias.php")
.then((response) => {
    return response.json();
})
.then((datosJSON) => {
    console.log(datosJSON);
    for(datos of datosJSON){
        // let div = document.createElement("div");
        // div.innerHTML += "<div class='materia'>" + datos.nombre+datos.foto + "</div>";
        // div.dataset.id = datos.id_materia;
        // contMaterias.innerHTML += "<button class='materia' id='"+datos.id_materia+"'  onclick='location.href=\"./vistaMateria.php\"'><strong>"+datos.nombreMateria+"</strong>" +datos.foto+ "</button>";
        contMaterias.innerHTML += "<button class='materia' id='"+datos.id_materia+"'><strong>"+datos.nombreMateria+"</strong>" +datos.foto+ "</button>";
        
    }
});

contMaterias.addEventListener("click", (evento) =>{
    let id = evento.target.id;
    fetch("../php/mostrarMaterias.php?id="+id)
    .then((response) => {
    return response.json();
    })
    .then((datosJSON) => {
        console.log(datosJSON);
        window.location.href="./vistaMateria.php";
    })
    
});