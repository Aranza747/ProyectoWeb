<?php
require "config.php";

$con = mysqli_connect($db_host, $db_user, $db_pass, $db_schema);

$noCuenta = (isset($_POST["numeroCuenta"]) && $_POST["numeroCuenta"]!= "")?$_POST["numeroCuenta"]:false;
$contrasena = (isset($_POST["contrasena"]) && $_POST["contrasena"]!= "")?$_POST["contrasena"]:false;

$sql = "SELECT noDeCuenta FROM alumno WHERE noDeCuenta=$noCuenta";
$res = mysqli_query($con, $sql);
$datos = mysqli_fetch_array($res, MYSQLI_ASSOC);

if($datos==NULL){
    // echo "No de cuenta no existe, crear cuenta";
    header('Location: ../../templates/formregistro.html'); //../../templates/formregistro.html
} else {
    $sql = "SELECT contraseña FROM alumno WHERE contraseña='$contrasena' AND noDeCuenta=$noCuenta";
    $res = mysqli_query($con, $sql);

    $datos = mysqli_fetch_array($res);
    
    if($datos == NULL){
        // echo "contraseña mal";
        echo "Contraseña incorrecta";
        header('Location: ../../inicioSesion.html'); //../../templates/formregistro.html
        
    } 
    else{
        echo "bienvenido";
    }
    
}
//VALIDAR DONDE TIENE QUE HACER LA BUSQUEDA ALUMNO O PROFESOR
?>

