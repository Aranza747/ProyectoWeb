const contModulos = document.getElementById("contModulos");
const datosMateria = document.getElementById("datosMateria");



fetch("../php/datosMateria.php")
.then((response) => {
    return response.json();
})
.then((datosJSON) => {
    if(datosJSON.ok == true){
        console.log(datosJSON);
        datosMateria.innerHTML += "<div class='titulo'>" + datosJSON.datos.nombre + "</div>";
        datosMateria.innerHTML += "<div class='descripcion'>" + datosJSON.datos.descripcion + "</div>"; 
    }
})


fetch("../php/mostrarModulos.php")
.then((response) => {
    return response.json();
})
.then((datosJSON) => {
    console.log(datosJSON);
    for(datos of datosJSON){
        
        // contModulos.innerHTML += "<button class='modulo' id='"+datos.id_modulo+"'>"+datos.nombreMod+"</button>";
        contModulos.innerHTML += "<div class='borde'><button class='modulo' id='"+datos.id_modulo+"'><div id='datos'>"+datos.nombreMod+"</div></button></div>";
        
    }
});

contModulos.addEventListener("click", (evento) =>{
    let id = evento.target.id;
    console.log(evento.target);
    console.log (evento.target.id);
    fetch("../php/mostrarModulos.php?id="+id)
    .then((response) => {
    return response.json();
    })
    .then((datosJSON) => {
        console.log(datosJSON);
        window.location.href="./modulo.php";
    })
    
});


