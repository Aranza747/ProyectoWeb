<?php

date_default_timezone_set('America/Mexico_City');
session_name("SesionUsuario");
session_id("123456789");
session_start();

echo $_SESSION["noDeCuenta"];
echo $_SESSION["nombre"];

require "config.php";
$con = mysqli_connect($db_host, $db_user, $db_pass, $db_schema);

$descripcion = (isset($_POST["descripcion"]) && $_POST["descripcion"]!= "")?$_POST["descripcion"]:false;
$materia = (isset($_POST["materia"]) && $_POST["materia"]!= "")?$_POST["materia"]:false;

$fecha = date("Y-m-d");
   
echo $fecha."<br>";

echo $descripcion."<br>";
echo $materia."<br>";


$sql = "INSERT INTO archivotablon (fechaCreacion) VALUES('$fecha')";//AÑADIMOS FECHA
$res = mysqli_query($con, $sql);
var_dump($res);

$idArchivoTablon = mysqli_insert_id($con);

echo $idArchivoTablon;
if(isset($_FILES['archivoTablon'])){
    echo "si hay archivo";
    $name= $_FILES['archivoTablon']['name'];   
    $arch= $_FILES['archivoTablon']['tmp_name'];
    $ext= pathinfo($name, PATHINFO_EXTENSION);
    echo $ext;
    if($ext=="pdf" || $ext=="txt" || $ext=="doc" || $ext=="docx" || $ext=="jpg" || $ext=="png" || $ext=="jpge" || $ext=="pptx" || $ext=="pptm" || $ext=="ppt" || $ext=="xlsx" || $ext=="xlsm" || $ext=="xls"){
        $ruta = "../../archivosTablon/$idArchivoTablon.$ext"; //idtablo de la tabla Tablon
        rename($arch, "$ruta");
        echo $ruta;
        $sql = "UPDATE archivoTablon SET ruta='$ruta' WHERE id_archivoTablon='$idArchivoTablon'";
        $res = mysqli_query($con, $sql);
    }
}
//AÑADIMOS RUTA EN LA TABLA HIJA


$noDeCuenta = $_SESSION['noDeCuenta'];//sacamos el numero de cuenta de la sesion 
$sql = "SELECT id_alumno FROM alumno WHERE noDeCuenta=$noDeCuenta";//sacamos el id de la tabla alumno (foreana)
$res = mysqli_query($con, $sql);

if($res==false){
    echo"no se pudo conectar";
}
$idTablon = mysqli_insert_id($con);


$noDeCuenta = $_SESSION['noDeCuenta'];

 
$sql = "SELECT id_alumno FROM alumno WHERE noDeCuenta=$noDeCuenta";

$res = mysqli_query($con, $sql);
if($res==false){
    echo"no se pudo conectar";
}else{
    $datos = mysqli_fetch_array($res, MYSQLI_ASSOC); 
    $idAlumno = $datos['id_alumno'];
    $sql = "INSERT INTO tablon (id_alumno, id_archivoTablon, materia, descripcion) VALUES('$idAlumno', '$idArchivoTablon', '$materia', '$descripcion')";//checar
    $res = mysqli_query($con, $sql);
    header('Location: ./vistaTablon.php');
}