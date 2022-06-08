const contModulos = document.getElementById("contModulos");
const datosMateria = document.getElementById("datosMateria");

fetch("../php/mostrarModulos.php")
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