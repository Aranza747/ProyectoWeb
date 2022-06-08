const contModulos = document.getElementById("contModulos");
const datosMateria = document.getElementById("datosMateria");


q = "hola";
fetch("../php/mostrarModulos.php?q="+q)
.then((response) => {
    return response.json();
})
.then((datosJSON) => {
    if(datosJSON.ok == true){
        console.log(datosJSON);
        datosMateria.innerHTML += "<div class='dato'><strong>" + datosJSON.datos.nombre + "</strong></div>";
        datosMateria.innerHTML += "<div class='dato'>" + datosJSON.datos.descripcion + "</div>";
        datosMateria.innerHTML += "<div class='dato'>Imagen Relacionada: " + datosJSON.datos.foto + "</div>";
    
    }
})


fetch("../php/mostrarModulos.php")
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
        contModulos.innerHTML += "<button class='materia' id='"+datos.id_modulo+"'><strong>"+datos.nombreMod+"</strong></button>";
        
    }
});

contModulos.addEventListener("click", (evento) =>{
    let id = evento.target.id;
    // console.log (evento.target.id);
    fetch("../php/mostrarModulos.php?id="+id)
    .then((response) => {
    return response.json();
    })
    .then((datosJSON) => {
        console.log(datosJSON);
        // window.location.href="./modulo.php";
    })
    
});