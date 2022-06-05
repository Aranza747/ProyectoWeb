<?php

session_name("SesionUsuario");
session_id("123456789");
session_start();

date_default_timezone_set('America/Mexico_City');
$fechaAct=date('Y-m-d');

require "config.php";
$con = mysqli_connect($db_host, $db_user, $db_pass, $db_schema);

$descripcion = (isset($_POST["descripcion"]) && $_POST["descripcion"]!= "")?$_POST["descripcion"]:false;
$nombre = (isset($_POST["nombre"]) && $_POST["nombre"]!= "")?$_POST["nombre"]:false;

echo $descripcion;
echo $nombre;

print_r ($_FILES);

if(isset($_FILES['archivo'])){
    // $titulo = $_POST['archivo'];
    $name= $_FILES['archivo']['name'];   
    $arch= $_FILES['archivo']['tmp_name'];
    $ext= pathinfo($name, PATHINFO_EXTENSION);
    if($ext=="png" || $ext=="jpg" || $ext=="jpeg"){
        $ruta = "../../descargasTemas/img/$name";
    } else if($ext=="avi" || $ext=="mp4" || $ext=="mpg" || $ext=="mpeg" || $ext=="asf" || $ext=="mp3" || $ext=="au" || $ext=="ma4" || $ext=="mid"){
        $ruta = "../../descargasTemas/media/$name";
    } else {
        $ruta = "../../descargasTemas/docs/$name";
    }
    
    rename($arch, "$ruta");
}



$sql = "INSERT INTO archivoTema (ruta) VALUES('$ruta')";
$res = mysqli_query($con, $sql);

if($res==false){
    echo"no se pudo conectar";
} else {
    $sql = "SELECT id_archivoTema FROM archivoTema WHERE ruta='$ruta'";
    $res = mysqli_query($con, $sql);
    var_dump($res);
    $datos = mysqli_fetch_array($res, MYSQLI_ASSOC);
    var_dump($datos);
    
    if($res == false){
        echo "no recibí id de archivos";
    } else {

        $id_archivoTema = $datos['id_archivoTema'];
        $sql = "INSERT INTO tema (id_archivoTema, descripcion, fecha, nombreTema) VALUES('$id_archivoTema', '$descripcion', '$fechaAct', '$nombre')";
        $res = mysqli_query($con, $sql);
    
        if($res == NULL){
            echo "no podemos conectar los datos";
        } else {
            header ('Location: ./tema.php');
        }
    }
}



?>