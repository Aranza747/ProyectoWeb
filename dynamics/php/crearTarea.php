<?php

session_name("SesionUsuario");
session_id("123456789");
session_start();

$mod = $_SESSION["modulo"];

date_default_timezone_set('America/Mexico_City');
$fechaAct=date('Y-m-d');

require "config.php";
$con = mysqli_connect($db_host, $db_user, $db_pass, $db_schema);

$descripcion = (isset($_POST["descripcion"]) && $_POST["descripcion"]!= "")?$_POST["descripcion"]:false;
$nombre = (isset($_POST["nombre"]) && $_POST["nombre"]!= "")?$_POST["nombre"]:false;
$fecha = (isset($_POST["fecha"]) && $_POST["fecha"]!= "")?$_POST["fecha"]:false;
$hora = (isset($_POST["hora"]) && $_POST["hora"]!= "")?$_POST["hora"]:false;


// print_r ($_FILES);

if(isset($_FILES['archivo'])){
    // $titulo = $_POST['archivo'];
    $name= $_FILES['archivo']['name'];   
    $arch= $_FILES['archivo']['tmp_name'];
    $ext= pathinfo($name, PATHINFO_EXTENSION);
    if($ext=="png" || $ext=="jpg" || $ext=="jpeg"){
        $ruta = "../../descargas/img/$name";
    } else if($ext=="avi" || $ext=="mp4" || $ext=="mpg" || $ext=="mpeg" || $ext=="asf" || $ext=="mp3" || $ext=="au" || $ext=="ma4" || $ext=="mid"){
        $ruta = "../../descargas/media/$name";
    } else {
        $ruta = "../../descargas/docs/$name";
    }
    
    rename($arch, "$ruta");
    
}


echo $fechaAct;
echo $ruta;
echo $mod;

$sql = "INSERT INTO archivoTarea (ruta, fechaEntrega) VALUES('$ruta', '$fechaAct')";
$res = mysqli_query($con, $sql);
// var_dump($res);


if($res==false){
    echo"no se pudo conectar";
} else {

    $sql = "SELECT id_archivoTarea FROM archivoTarea WHERE ruta='$ruta'";
    $res = mysqli_query($con, $sql);
    // var_dump($res);
    echo '</br></br>';
    $datos = mysqli_fetch_array($res, MYSQLI_ASSOC);
    // var_dump($datos);
    echo '</br>';

    
    if($res == false){
        echo "no recibí id de archivos";
    } else {

        $id_archivoTarea = $datos['id_archivoTarea'];
        $sql = "INSERT INTO tarea (id_modulo, id_archivoTarea, fecha, hora, descripcion, nombreTarea) VALUES('$mod', '$id_archivoTarea', '$fecha', '$hora', '$descripcion', '$nombre')";
        $res = mysqli_query($con, $sql);
    
        if($res == false){
            echo "no podemos conectar los datos";
        } else {
            header ('Location: ./tarea.php');
        }
    }
}



?>