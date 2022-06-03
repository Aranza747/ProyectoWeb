function  validarRFC(noCuentaRFC){
    let regexRFC = /^([A-ZÑ&]{3,4}) ?(?:- ?)?(\d{2}(?:0[1-9]|1[0-2])(?:0[1-9]|[12]\d|3[01])) ?(?:- ?)?([A-Z\d]{2})([A\d])$/;
    cadenaRFC = noCuentaRFC.value;
    if(regexRFC.test(cadenaRFC)){
        return true;
    }
    else{
        return false;
    }
}

function  validarNoCuenta(noCuentaRFC){
    let regexNoCuenta = /\d{9}/;
    cadenaNoCuenta = noCuentaRFC.value;
    if(regexNoCuenta.test(cadenaNoCuenta)){
        return true;
        noCuentaRFC.classList.add("checked");
    }
    else{
        return false;
    }
}

//agregar lo de validar num. de trabajador y falta que detecte que ese usuario no esta registrado. FETCH

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
    let regexContrasena = /^(?=\w*\d)(?=\w*[A-Z])(?=\w*[a-z])\S{8,16}$/; //La contraseña debe tener al entre 8 y 16 caracteres, un numerito, minúscula y una mayúscula.Puede tener otros símbolos.
    cadenaContrasena = contrasena.value;
    if(regexContrasena.test(cadenaContrasena)){
        return true;
    }
    else{
        return false;
    }
}

function  validarNombre(nombre){
    let regexNombre = /^[a-zA-Z\s]*$/; //Nombre solo admite letras y espacios
    cadenaNombre = nombre.value;
    if(regexNombre.test(cadenaNombre)){
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


formulario.addEventListener("keyup", (evento) => {

    const noCuentaRFC = document.getElementById("noCuentaRFC");//DECLARACION DE CONSTANTES
    const nombre = document.getElementById("nombre");
    const correo = document.getElementById("correo");
    const contrasena = document.getElementById("contrasena");
    
    validacionRFC = validarRFC(noCuentaRFC); //true or false

    validacionNoCuenta= validarNoCuenta(noCuentaRFC);

    validacionCorreo= validarCorreo(correo);

    validacionContrasena= validarContrasena(contrasena);

    validacionNombre= validarNombre(nombre);


    if(validacionRFC == true || validacionNoCuenta == true){//numero de cuenta o RFC
        noCuentaRFC.style.color = "green";
        noCuentaRFC.classList.add("checked");
    }
    else{
        noCuentaRFC.style.color = "red";
        noCuentaRFC.classList.remove("checked");
    }


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
    console.log(contadorValidar)
        
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
//HACER EL FETCH PARA VER QUE EL USUARIO NO ESTERE REGISTRADO