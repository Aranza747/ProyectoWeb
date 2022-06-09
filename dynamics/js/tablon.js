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
                '<div class="section foto"><img src="../../descargas/img/img_perfilUsuarios/321165848.jpg" width="13%" height="15%" alt="fotodeperfil"></div>'+
                '<div>Autor: '+dato.nombre+"  Materia: "+dato.materia+'</div>'+
                '<div>'+dato.descripcion+'</div>'+
                '<div>'+dato.fechaCreacion+'</div>'+
                '<button  class="likes" data-id="'+dato.id_tablon+'" data-likes="'+dato.likes+'">❤'+dato.likes+'</button>'+
                '<button  class="reportes" data-id="'+dato.id_tablon+'" data-reportes="'+dato.reportes+'">🚩'+dato.reportes+'</button>'+
                '<button  class="eliminar" data-id="'+dato.id_tablon+'">Eliminar</button>'+
            '</div>';
        if(dato.ruta != null)
            contenedorPublicaciones.innerHTML += 
            '<div class="crearPublicacion">'+
                '<div class="section foto"><img src="../../descargas/img/img_perfilUsuarios/321165848.jpg" width="13%" height="15%" alt="fotodeperfil"></div>'+
                '<div>Autor: '+dato.nombre+"  Materia: "+dato.materia+'</div>'+
                '<div>'+dato.descripcion+'</div>'+
                '<div>'+dato.fechaCreacion+'</div>'+
                '<embed src="'+dato.ruta+'" type="application/pdf"" width="300"/>'+
                '<a href="'+dato.ruta+'" download="'+dato.materia+'""/>Descargar Archivo</a>'+
                '<button  class="likes" data-id="'+dato.id_tablon+'" data-likes="'+dato.likes+'">❤'+dato.likes+'</button>'+
                '<button  class="reportes" data-id="'+dato.id_tablon+'" data-reportes="'+dato.reportes+'">🚩'+dato.reportes+'</button>'+
                '<button  class="eliminar" data-id="'+dato.id_tablon+'">Eliminar</button>'+
            '</div>';
    }
    //AREGLAR LAS MEDIDAS DEL EMBED
});
contenedorPublicaciones.addEventListener("click", (evento) => {

    if(evento.target.classList.contains("likes")){

        contadorLikes = evento.target.dataset.likes;//LIKES QUE TIENE 
        let datosForm = new FormData();
        datosForm.append("id", evento.target.dataset.id);
        
        if(!evento.target.classList.contains("likeado")){
            contadorLikes = parseInt(contadorLikes)+1;

            datosForm.append("likes", contadorLikes);

        }else{
            contadorLikes = parseInt(contadorLikes)-1;
            
            datosForm.append("likes", contadorLikes);
            
        }
        fetch("./likearTablon.php",{
            method:"POST",
            body: datosForm,
        }).then((response)=>{
            return response.json();
        }).then((datosJSON)=>{
            if(datosJSON.ok ==true)
            {
                evento.target.innerHTML = "❤"+contadorLikes;
                evento.target.dataset.likes = contadorLikes;
                evento.target.classList.toggle("likeado");
            }
            else
                console.log("no se pueden actualizar los likes");
        });
    }
    
    if(evento.target.classList.contains("reportes")){

        contadorReportes = evento.target.dataset.reportes;//REPORTES QUE TIENE 
        let datosForm = new FormData();
        datosForm.append("id", evento.target.dataset.id);
        
        if(!evento.target.classList.contains("reportado")){
            contadorReportes = parseInt(contadorReportes)+1;

            datosForm.append("reportes", contadorReportes);

        }else{
            contadorReportes = parseInt(contadorReportes)-1;
            
            datosForm.append("reportes", contadorReportes);
            
        }
        fetch("./reportarTablon.php",{
            method:"POST",
            body: datosForm,
        }).then((response)=>{
            return response.json();
        }).then((datosJSON)=>{
            if(datosJSON.ok ==true)
            {
                evento.target.innerHTML = "🚩"+contadorReportes;
                evento.target.dataset.reportes = contadorReportes;
                evento.target.classList.toggle("reportado");
            }
            else
                console.log("no se pueden actualizar los reportes");
        });
    }

    if(evento.target.classList.contains("eliminar")){
        let datosForm = new FormData();
        datosForm.append("id", evento.target.dataset.id);

        fetch("./eliminarTablon.php",{
            method:"POST",
            body: datosForm,
        }).then((response)=>{
            return response.json();
        }).then((datosJSON)=>{
            if(datosJSON.ok ==true)
            {
                window.location.reload();
            }
            else
                console.log("):");
        });
    }
})
