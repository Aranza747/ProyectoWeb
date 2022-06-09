window.addEventListener("load", ()=>{
    // const responder = document.getElementById("responder");
    // const btnEnviar = document.getElementById("btn-enviar");
    // const divDatos = document.getElementById("contenedor-mostrar");
    // // const divResultados = document.getElementById("contenedor-resultados");
    // const nuevo = document.getElementById("nuevo");
    const divNuevo = document.getElementById("nuevo");
    const crearComentario = document.getElementById("crearComentario");

    const divNuevoComentario = document.getElementById("nuevoComentario");
    const infoComentario = document.getElementById("info");
    const btnGuardar = document.getElementById("btn-guardar-comentario");

    const divContenido = document.getElementById("contenido");


    crearComentario.addEventListener("click", (evento)=>{
        divNuevoComentario.style.display = "block";
        btnGuardar.style.display = "block";
      });

    btnGuardar.addEventListener("click", (evento) =>{
        divNuevoComentario.style.display = "none";
    })

//     nuevo.addEventListener("click", (evento)=>{
//         divContenido.style.display = "none";
//         evento.preventDefault();
//         fetch("consultarForoEstudiantes.php",{
//           method:"POST",
//         }).then((response) =>{
//           return response.json();
//         }).then ((datosJSON)=>{
//           if(datosJSON.ok == true){
//             alert("todo bien");
//           }else{
//             alert(datosJSON.texto);
//           }
//         })
//       });
//   })

    // responder.addEventListener("click", (evento)=>{
    //   divContenido.style.display = "block";
    //   divDatos.style.display = "none";
    // });
  
//     btnEnviar.addEventListener("click", (evento)=>{
//       divAgregar.style.display = "none";
//       evento.preventDefault();
//       let datosForm = new FormData(formNuevo);
//       fetch("consultarForoEstudiantes.php",{
//         method:"POST",
//         body: datosForm,
//       }).then((response) =>{
//         return response.json();
//       }).then ((datosJSON)=>{
//         if(datosJSON.ok == true){
//           alert("todo bien");
//         }else{
//           alert(datosJSON.texto);
//         }
//       })
    });
