const contenedorPublicaciones = document.getElementById("contenedorPublicaciones")


fetch("./consultarTablon.php")
.then((response)=>{
  return response.json();
})
.then((datosJSON)=>{
    for(dato of datosJSON){
        contenedorPublicaciones.innerHTML += 
        '<div class="crearPublicacion">'+
            '<div>Autor: '+dato.nombre+"  Materia: "+dato.materia+'</div>'+
            '<div>'+dato.descripcion+'</div>'+
            '<div>'+dato.fechaCreacion+'</div>'+
            '<div id="'+dato.id_tablon+'" class="likes">❤'+dato.likes+'</div>'+
            '<div id="'+dato.id_tablon+'" class="reportes">🚩'+dato.reportes+'</div>'+
        '</div>'
    }
   
});