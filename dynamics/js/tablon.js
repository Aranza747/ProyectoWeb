const contenedorPublicaciones = document.getElementById("contenedorPublicaciones")


fetch("./consultarTablon.php")
.then((response)=>{
  return response.json();
})
.then((datosJSON)=>{
    for(dato of datosJSON){
        console.log(dato.ruta)
        if(dato.ruta == null)
        contenedorPublicaciones.innerHTML += 
            '<div class="crearPublicacion">'+
                '<div>Autor: '+dato.nombre+"  Materia: "+dato.materia+'</div>'+
                '<div>'+dato.descripcion+'</div>'+
                '<div>'+dato.fechaCreacion+'</div>'+
                '<button id="'+dato.id_tablon+'" class="likes">❤'+dato.likes+'</button>'+
                '<button id="'+dato.id_tablon+'" class="reportes">🚩'+dato.reportes+'</button>'+
            '</div>';
        if(dato.ruta != null)
            contenedorPublicaciones.innerHTML += 
            '<div class="crearPublicacion">'+
                '<div>Autor: '+dato.nombre+"  Materia: "+dato.materia+'</div>'+
                '<div>'+dato.descripcion+'</div>'+
                '<div>'+dato.fechaCreacion+'</div>'+
                '<embed src="'+dato.ruta+'" type="application/pdf"" width="300"/>'+
                '<a href="'+dato.ruta+'" download="'+dato.materia+'""/>Descargar Archivo</a>'+
                '<button id="'+dato.id_tablon+'" class="likes">❤'+dato.likes+'</button>'+
                '<button id="'+dato.id_tablon+'" class="reportes">🚩'+dato.reportes+'</button>'+
            '</div>';
    }
    //AREGLAR LAS MEDIDAS DEL EMBED
});