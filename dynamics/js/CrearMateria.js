const divImagenRelacionada = document.getElementById("imagenRelacionada");
const InputImagenRelacionada = document.getElementById("InputImagenRelacionada");
const archivoInvalido = document.getElementById("archivoInvalido");

let regexExtensiones = /^.*\.(jpg|JPG|png|PNG|jpeg|JPEG)$/;

InputImagenRelacionada.addEventListener("change", () => {
    
    let archivoExt = InputImagenRelacionada.value

    if(regexExtensiones.test(archivoExt)){

        const archivos = InputImagenRelacionada.files;

        if (!archivos || !archivos.length) {
            divImagenRelacionada.src = "";
            return;
        }
        const primerArchivo = archivos[0];
        const objectURL = URL.createObjectURL(primerArchivo);
        divImagenRelacionada.src = objectURL;
        archivoInvalido.innerHTML = ""

    }
    else{
        archivoInvalido.innerHTML = "<strong>Solo puedes subir archivos .jpg, .jpeg, .png.</strong>"
        InputImagenRelacionada.value = null;
        console.log(InputImagenRelacionada.value)
    }
});