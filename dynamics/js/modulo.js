const datosMod = document.getElementById("datosMod");


fetch("../php/datosMod.php")
.then((response) => {
    return response.json();
})
.then((datosJSON) => {
    console.log(datosJSON);
    
        // let div = document.createElement("div");
        // div.innerHTML += "<div class='materia'>" + datos.nombre+datos.foto + "</div>";
        // div.dataset.id = datos.id_materia;
        // contMaterias.innerHTML += "<button class='materia' id='"+datos.id_materia+"'  onclick='location.href=\"./vistaMateria.php\"'><strong>"+datos.nombreMateria+"</strong>" +datos.foto+ "</button>";
        
        datosMod.innerHTML += "<label class='modulo'>"+datosJSON+" &nbsp; </label>";
        
    
});