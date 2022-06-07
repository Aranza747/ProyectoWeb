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

$sql = "INSERT INTO archivotablon (fechaCreacion) VALUES('$fecha')";
$res = mysqli_query($con, $sql);
$idArchivoTablon = mysqli_insert_id($con);

if($res==false){
    echo"no se pudo conectar";
}else{
    // echo $idArchivoTablon;
    if(isset($_FILES['archivoTablon']))
    {
        $name= $_FILES['archivoTablon']['name'];   
        $arch= $_FILES['archivoTablon']['tmp_name'];
        $ext= pathinfo($name, PATHINFO_EXTENSION);
        // echo $ext;

        $ruta = "../../archivosTablon/$idArchivoTablon.$ext"; //idtablo de la tabla Tablon
        rename($arch, "$ruta");
        echo $ruta;
        $sql = "UPDATE archivoTablon SET ruta='$ruta' WHERE id_archivoTablon='$idArchivoTablon'";
        $res = mysqli_query($con, $sql);
        if($res==false){
            echo"no se pudo conectar";
        }
    }
}
//inserta fecha y ruta en tabla hija


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
    $sql = "UPDATE tablon (id_alumno) VALUES('$idAlumno') WHERE id_tablon='$idTablon'";//checar
    echo $idTablon;
    $res = mysqli_query($con, $sql);
}