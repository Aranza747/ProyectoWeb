<?php

session_name("SesionUsuario");
session_id("123456789");
session_start();

$mod = $_SESSION["modulo"];
$usuario = $_SESSION["id_alumno"];
$tarea = $_SESSION["tarea"];


date_default_timezone_set('America/Mexico_City');
$fechaAct=date('Y-m-d');
$horaAct = date('h:i:s');
echo $horaAct;

require "config.php";
$con = mysqli_connect($db_host, $db_user, $db_pass, $db_schema);

print_r ($_FILES);


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
        echo $id_archivoTarea;
        $sql = "INSERT INTO entrega (id_tarea, id_archivoTarea, fecha, hora) VALUES('$tarea', '$id_archivoTarea', '$fechaAct', '$horaAct')";
        $res = mysqli_query($con, $sql);
    
        if($res == false){
            echo "no podemos conectar los datos";
        } else {
            header ('Location: ./tarea.php');
        }
    }

}