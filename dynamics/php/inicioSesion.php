<?php
require "config.php";
require "seguridad.php";
$con = mysqli_connect($db_host, $db_user, $db_pass, $db_schema);

$noCuentaRFC = (isset($_POST["noCuentaRFC"]) && $_POST["noCuentaRFC"]!= "")?$_POST["noCuentaRFC"]:false;
$contrasena = (isset($_POST["contrasena"]) && $_POST["contrasena"]!= "")?$_POST["contrasena"]:false;

echo $noCuentaRFC;
echo $contrasena;

function validarRFC($noCuentaRFC){
    $regexRFC = "/^([A-ZÑ&]{3,4}) ?(?:- ?)?(\d{2}(?:0[1-9]|1[0-2])(?:0[1-9]|[12]\d|3[01])) ?(?:- ?)?([A-Z\d]{2})([A\d])$/";
    $cadenaRFC = $noCuentaRFC;
    if(preg_match($regexRFC, $cadenaRFC) == 1){
        return $rfc = 1;
    }else
        return $rfc = 0;
}

function validarNoCuenta($noCuentaRFC){
    $regexNoCuenta = "/\d{9}/";
    $cadenaNoCuenta = $noCuentaRFC;
    if(preg_match($regexNoCuenta, $cadenaNoCuenta) == 1){
        return $numCuenta = 1;
    }else
        return $numCuenta = 0;
}

if(validarNoCuenta($noCuentaRFC) == 1){//alumno
    $sql = "SELECT noDeCuenta FROM alumno WHERE noDeCuenta=$noCuentaRFC";
    $res = mysqli_query($con, $sql);
    $datos = mysqli_fetch_array($res, MYSQLI_ASSOC);
}

if(validarNoCuenta($noCuentaRFC) == 1){//alumno
    $sql = "SELECT noDeCuenta FROM alumno WHERE noDeCuenta=$noCuentaRFC";
    $res = mysqli_query($con, $sql);
    $datos = mysqli_fetch_array($res, MYSQLI_ASSOC);
    echo "entras?";
}





if($datos==NULL){
    var_dump($datos);
    header('Location: ../../templates/FormRegistro.html'); //../../templates/formregistro.html
} else {
    if(validarNoCuenta($noCuentaRFC) == 1){//alumno
        $sql = "SELECT sal FROM alumno WHERE noDeCuenta=$noCuentaRFC";
        $res = mysqli_query($con, $sql);
        $datos = mysqli_fetch_array($res, MYSQLI_ASSOC); 

        $sal = $datos['sal'];

        $sql = "SELECT contraseña FROM alumno WHERE noDeCuenta=$noCuentaRFC";
        $res = mysqli_query($con, $sql);
        $datos = mysqli_fetch_array($res, MYSQLI_ASSOC); 

        $hasheo = $datos['contraseña'];
    }
    if(validarRFC($noCuentaRFC) == 1){//profesor
        $sql = "SELECT sal FROM roles WHERE RFC=$noCuentaRFC";
        $res = mysqli_query($con, $sql);
        $datos = mysqli_fetch_array($res, MYSQLI_ASSOC); 

        $sal = $datos['sal'];

        $sql = "SELECT contrasena FROM roles WHERE RFC=$noCuentaRFC";
        $res = mysqli_query($con, $sql);
        $datos = mysqli_fetch_array($res, MYSQLI_ASSOC); 

        $hasheo = $datos['contrasena'];
    }
    
    

    if(verificar_contra_pimienta($contrasena, $sal, $hasheo)){
        header('Location: ../../templates/inicio.html');
    } else{
        //var_dump($pimienta);
        header('Location: ../../inicioSesion.html');
    }



    

}
//VALIDAR DONDE TIENE QUE HACER LA BUSQUEDA ALUMNO O PROFESOR
?>