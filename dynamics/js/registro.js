async function  validarNoCuenta(noCuentaRFC){ //indicar es asincronica async
    let regexNoCuenta = /\d{9}/;//1,3 checar
    cadenaNoCuenta = noCuentaRFC.value;

    let regexRFC = /^([A-ZÑ&]{3,4}) ?(?:- ?)?(\d{2}(?:0[1-9]|1[0-2])(?:0[1-9]|[12]\d|3[01])) ?(?:- ?)?([A-Z\d]{2})([A\d])$/;
    cadenaRFC = noCuentaRFC.value;

    if(regexNoCuenta.test(cadenaNoCuenta) || regexRFC.test(cadenaRFC)){

        if(cadenaNoCuenta.length == 9)
        {
            await fetch("../dynamics/php/registro_AlumnoExistente.php?q="+cadenaNoCuenta) //await esperar al fetch
            .then((response)=>{
                return response.json();
            })
            .then((datosJSON)=>{
                console.log(datosJSON)
                if(datosJSON.length == 0)//USUARIO DISPONIBLE
                {
                    console.log("alumno disponible")
                    noCuentaRFC.style.color = "green";
                    noCuentaRFC.classList.add("checked");
                }
                else{ //USUARIO NO DISPONIBLE
                    console.log("alumno no disponible")
                }
            });
        }else{
            noCuentaRFC.style.color = "red";
            noCuentaRFC.classList.remove("checked")
        }
        if(cadenaRFC.length == 13)
        {
            await fetch("../dynamics/php/registro_RFCExistente.php?q="+cadenaRFC) //await esperar al fetch
            .then((response)=>{
                return response.json();
            })
            .then((datosJSON)=>{
                console.log(datosJSON)
                if(datosJSON.length == 0)//USUARIO DISPONIBLE
                {
                    noCuentaRFC.style.color = "green";
                    noCuentaRFC.classList.add("checked");
                    console.log("RFC disponible")
                }
                else{ //USUARIO NO DISPONIBLE
                    console.log("RFC no disponible")
                }
            });
        }

    }else{
        noCuentaRFC.style.color = "red";
        noCuentaRFC.classList.remove("checked")
    }
}


function  validarCorreo(correo){
    let regexCorreo = /^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/;
    cadenaCorreo = correo.value;
    if(regexCorreo.test(cadenaCorreo)){
        return true;
    }
    else{
        return false;
    }
}

function  validarContrasena(contrasena){
    let regexContrasena = /^(?=\w*\d)(?=\w*[A-Z])(?=\w*[a-z])\S{8,16}$/;

    // La contraseña debe tener al entre 8 y 16 caracteres
    // al menos un dígito
    // al menos una minúscula
    // al menos una mayúscula

    cadenaContrasena = contrasena.value;
    if(regexContrasena.test(cadenaContrasena)){
        return true;
    }
    else{
        return false;
    }
}

function  validarNombre(nombre){
    let regexNombre = /^[a-zA-Z\s]*$/; 
    let regexAcentos = /^[a-zA-ZÀ-ÿ\u00f1\u00d1]+(\s*[a-zA-ZÀ-ÿ\u00f1\u00d1]*)*[a-zA-ZÀ-ÿ\u00f1\u00d1]+$/g;

    cadenaNombre = nombre.value;
    if(regexNombre.test(cadenaNombre) || regexAcentos.test(cadenaNombre)){
        return true;
    }
    else{
        return false;
    }
}

let validacionRFC = 0;
let validacionNombre = 0;
let validacionNoCuenta = 0;
let validacionCorreo = 0;
let validacionContrasena = 0;
let contadorValidar = 0;

const formulario = document.getElementById("formulario");
const mensajeError = document.getElementById("mensaje-error");


formulario.addEventListener("keyup", async (evento) => { //async

    const noCuentaRFC = document.getElementById("noCuentaRFC");//DECLARACION DE CONSTANTES
    const nombre = document.getElementById("nombre");
    const correo = document.getElementById("correo");
    const contrasena = document.getElementById("contrasena");

    
    await validarNoCuenta(noCuentaRFC);// await
    validacionCorreo= validarCorreo(correo);
    validacionContrasena= validarContrasena(contrasena);
    validacionNombre= validarNombre(nombre);




    if(validacionNombre == true){//nombre 
        nombre.style.color = "green";
        nombre.classList.add("checked");
    }
    else{
        nombre.style.color = "red";
        nombre.classList.remove("checked")
    }


    if(validacionCorreo == true){//correo
        correo.style.color = "green";
        correo.classList.add("checked");
    }
    else{
        correo.style.color = "red";
        correo.classList.remove("checked")
    }


    if(validacionContrasena == true){//contraseña
        contrasena.style.color = "green";
        contrasena.classList.add("checked");
    }
    else{
        contrasena.style.color = "red";
        contrasena.classList.remove("checked")
    }
    
    if(noCuentaRFC.classList.contains("checked") == true && nombre.classList.contains("checked") == true && correo.classList.contains("checked") == true && contrasena.classList.contains("checked") == true)
        contadorValidar=1
        
})

formulario.addEventListener('submit', (event) => {
    
    event.preventDefault();

    if(contadorValidar == 0)
    {   
        formulario.reset();
        mensajeError.innerHTML = "Llena correctamente todos los campos ): <br> <br>"
    }
    if(contadorValidar == 1)
        formulario.submit();
});

//AGREGAR ESTILO
