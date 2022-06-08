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
                '<button  class="likes" data-id="'+dato.id_tablon+'" data-likes="'+dato.likes+'">❤'+dato.likes+'</button>'+
                '<button  class="reportes" data-id="'+dato.id_tablon+'" data-reportes="'+dato.reportes+'">🚩'+dato.reportes+'</button>'+
            '</div>';
        if(dato.ruta != null)
            contenedorPublicaciones.innerHTML += 
            '<div class="crearPublicacion">'+
                '<div>Autor: '+dato.nombre+"  Materia: "+dato.materia+'</div>'+
                '<div>'+dato.descripcion+'</div>'+
                '<div>'+dato.fechaCreacion+'</div>'+
                '<embed src="'+dato.ruta+'" type="application/pdf"" width="300"/>'+
                '<a href="'+dato.ruta+'" download="'+dato.materia+'""/>Descargar Archivo</a>'+
                '<button  class="likes" data-id="'+dato.id_tablon+'" data-likes="'+dato.likes+'">❤'+dato.likes+'</button>'+
                '<button  class="reportes" data-id="'+dato.id_tablon+'" data-reportes="'+dato.reportes+'">🚩'+dato.reportes+'</button>'+
            '</div>';
    }
    //AREGLAR LAS MEDIDAS DEL EMBED
});
contenedorPublicaciones.addEventListener("click", (evento) => {

    if(evento.target.classList.contains("likes")){
        // console.log(evento.target.dataset.id);
        contadorLikes = evento.target.dataset.likes;
        contadorLikes=+1;
        console.log(contadorLikes)
        evento.target.innerHTML = "❤"+contadorLikes;
        console.log("likeado")
    }
    
    if(evento.target.classList.contains("reportes")){
        contadorReportes = evento.target.dataset.reportes;
        contadorReportes=+1;
        console.log(contadorReportes)
        evento.target.innerHTML = "🚩"+contadorReportes;
        console.log("reportado")
    }
})
