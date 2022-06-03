<?php
require "config.php";

$con = mysqli_connect($db_host, $db_user, $db_pass, $db_schema);
//$res = mysqli_query($con, $sql);

$noCuentaRFC = (isset($_POST["noCuentaRFC"]) && $_POST["noCuentaRFC"]!= "")?$_POST["noCuentaRFC"]:false;
$nombre = (isset($_POST["nombre"]) && $_POST["nombre"]!= "")?$_POST["nombre"]:false;
$correo = (isset($_POST["correo"]) && $_POST["correo"]!= "")?$_POST["correo"]:false;
$contrasena = (isset($_POST["contrasena"]) && $_POST["contrasena"]!= "")?$_POST["contrasena"]:false;
$rfc = 0;
$numCuenta = 0;




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
    $sql = "INSERT INTO alumno (noDeCuenta, nombre, correo, contraseña) VALUES('$noCuentaRFC', '$nombre', '$correo', '$contrasena')";//falta agregar sal a la base de datos
    $res = mysqli_query($con, $sql);

    if($res == true)
    {
        header ('Location: ../../inicioSesion.html');
    }else
    {
        echo mysqli_error($con);
        echo ("alumno ):");
    }
}
if(validarRFC($noCuentaRFC) == 1){//profesor
    $rol = "profesor";
    $sql = "INSERT INTO roles (noDeCuenta, nombre, correo, contraseña) VALUES('$noCuentaRFC', '$nombre', '$correo', '$contrasena')";//profesor Aqui puse null sal y id de las materias 
    $res = mysqli_query($con, $sql);
    if($res == true)
    {
        header ('Location: ../../inicioSesion.html');
    }else
    {
        echo mysqli_error($con);
        echo ("roles ):");
    }
}









if($res == false){
    echo 'No se pudo conectar';
}
else{
    echo 'Si se pudo conectar';
    header ('Location: ../../inicioSesion.html');
}
?>



