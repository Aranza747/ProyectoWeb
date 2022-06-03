<?php
require "config.php";
require "seguridad.php";

$con = mysqli_connect($db_host, $db_user, $db_pass, $db_schema);

$noCuenta = (isset($_POST["numeroCuenta"]) && $_POST["numeroCuenta"]!= "")?$_POST["numeroCuenta"]:false;
$contrasena = (isset($_POST["contrasena"]) && $_POST["contrasena"]!= "")?$_POST["contrasena"]:false;

//$contrasena = 'Mariana123';

$sql = "SELECT noDeCuenta FROM alumno WHERE noDeCuenta=$noCuenta";
$res = mysqli_query($con, $sql);
$datos = mysqli_fetch_array($res, MYSQLI_ASSOC);

if($datos==NULL){
    // echo "No de cuenta no existe, crear cuenta";
    header('Location: ../../templates/FormRegistro.html'); //../../templates/formregistro.html
} else {
    $sql = "SELECT sal FROM alumno WHERE noDeCuenta=$noCuenta";
    $res = mysqli_query($con, $sql);
    $datos = mysqli_fetch_array($res, MYSQLI_ASSOC); 

    $sal = $datos['sal'];

    $sql = "SELECT contraseña FROM alumno WHERE noDeCuenta=$noCuenta";
    $res = mysqli_query($con, $sql);
    $datos = mysqli_fetch_array($res, MYSQLI_ASSOC); 

    $hasheo = $datos['contraseña'];
    //$hasheo = hash("sha256", $contrasena.$pimienta.$sal);

    // if($contrasena.$pimienta.$sal=$hasheo){
    //     echo "si es";
    // }

    if(verificar_contra_pimienta($contrasena, $sal, $hasheo)){
        header('Location: ../../templates/inicio.html');
    } else{
        //var_dump($pimienta);
        header('Location: ../../inicioSesion.html');
    }



    // $sql = "SELECT contraseña FROM alumno WHERE contraseña='$contrasena' AND noDeCuenta=$noCuenta";
    // $res = mysqli_query($con, $sql);

    // $datos = mysqli_fetch_array($res);

    // if($datos == NULL){
    //     // echo "contraseña mal";
    //     echo "Contraseña incorrecta";
    //     header('Location: ../../inicioSesion.html'); //../../templates/formregistro.html

    // } 
    // else{
    //     header('Location: ../../templates/inicio.html');
    // }

}
//VALIDAR DONDE TIENE QUE HACER LA BUSQUEDA ALUMNO O PROFESOR
?>