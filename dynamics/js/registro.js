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



const formulario = document.getElementById("formulario");

formulario.addEventListener("change", (event) => {
    const noCuentaRFC = document.getElementById("noCuentaRFC");//DECLARACION DE CONSTANTES
    const nombre = document.getElementById("nombre");
    const correo = document.getElementById("correo");
    const contrasena = document.getElementById("contrasena");

    let validacionRFC = validarRFC(noCuentaRFC); //true or false
    //console.log(validacionRFC)

    let validacionNoCuenta= validarNoCuenta(noCuentaRFC);
    //console.log(validacionNoCuenta)

    let validacionCorreo= validarCorreo(correo);
    //console.log(validacionCorreo)

    let validacionContrasena= validarContrasena(contrasena);
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

})

