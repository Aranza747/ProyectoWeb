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
    }
    else{
        return false;
    }
}

//agregar lo de validar num. de trabajador

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

let validacionRFC = 0;
let validacionNoCuenta = 0;
let validacionCorreo = 0;
let validacionContrasena = 0;

const formulario = document.getElementById("formulario");
const enviar = document.getElementById("enviar");

formulario.addEventListener("change", (event) => {
    const noCuentaRFC = document.getElementById("noCuentaRFC");//DECLARACION DE CONSTANTES
    const nombre = document.getElementById("nombre");
    const correo = document.getElementById("correo");
    const contrasena = document.getElementById("contrasena");

    validacionRFC = validarRFC(noCuentaRFC); //true or false
    //console.log(validacionRFC)

    validacionNoCuenta= validarNoCuenta(noCuentaRFC);
    //console.log(validacionNoCuenta)

    validacionCorreo= validarCorreo(correo);
    //console.log(validacionCorreo)

    validacionContrasena= validarContrasena(contrasena);
    //console.log(validacionContrasena)


    if(validacionRFC == true || validacionNoCuenta == true)//numero de cuenta o RFC
        noCuentaRFC.style.color = "green";
    else
        noCuentaRFC.style.color = "red";

    if(validacionCorreo == true)//correo
        correo.style.color = "green";
    else
        correo.style.color = "red";

    if(validacionContrasena == true)//contraseña
        contrasena.style.color = "green";
    else
        contrasena.style.color = "red";

    //if(validacionNoCuenta == true || validacionRFC == true && validacionCorreo == true && validacionContrasena == true)

});

/*enviar.addEventListener("click", (evento) => {

    if(validacionNoCuenta == true || validacionRFC == true && validacionCorreo == true && validacionContrasena == true)
    //aqui va el fecth rescatando los datos del form y conectando al php
})*/



