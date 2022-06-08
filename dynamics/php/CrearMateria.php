<?php

session_name("SesionUsuario");
session_id("123456789");
session_start();

require "config.php";

$con = mysqli_connect($db_host, $db_user, $db_pass, $db_schema);

$nombreMateria = (isset($_POST["nombreMateria"]) && $_POST["nombreMateria"]!= "")?$_POST["nombreMateria"]:false;
$descripcion = (isset($_POST["descripcion"]) && $_POST["descripcion"]!= "")?$_POST["descripcion"]:false;
$datosProfesor = (isset($_POST["datosProfesor"]) && $_POST["datosProfesor"]!= "")?$_POST["datosProfesor"]:false;
$contrasena = (isset($_POST["contrasena"]) && $_POST["contrasena"]!= "")?$_POST["contrasena"]:false;


// echo $nombreMateria;
// echo $descripcion;
// echo $datosProfesor;


$sql = "INSERT INTO materia (descripcion, contrasena, nombreMateria) VALUES('$descripcion', '$contrasena', '$nombreMateria')";//falta agregar sal a la base de datos
$res = mysqli_query($con, $sql);

// if($res == false){
//     echo 'No se pudo conectar';
// }
// else{
//     echo 'Si se pudo conectar INSERT        ';
// }
$idMateria = mysqli_insert_id($con); //id de la ultima materia creada
// echo $idMateria;

// $sql = "SELECT id_materia FROM materia WHERE nombreMateria LIKE '$nombreMateria'";
// $res = mysqli_query($con, $sql);
// var_dump($res);

if(isset($_FILES['ImagenRelacionada']))
{
    $name= $_FILES['ImagenRelacionada']['name'];   
    $arch= $_FILES['ImagenRelacionada']['tmp_name'];
    $ext= pathinfo($name, PATHINFO_EXTENSION);
    if($ext=="png" || $ext=="jpg" || $ext=="jpeg"){
        $ruta = "../../descargas/img/img_portadaMaterias/$idMateria.$ext";
        rename($arch, "$ruta");
        $sql = "UPDATE materia SET foto='$ruta' WHERE id_materia='$idMateria'";
        $res = mysqli_query($con, $sql);
        echo $idMateria;
    }
}

$profe = $_SESSION["id_alumno"];

$sql = "INSERT INTO rolHasMateria VALUES(null, $profe, '$idMateria')";//falta agregar sal a la base de datos
$res = mysqli_query($con, $sql);

if($res == false){
    echo "algo salió mal";
} else {
    $sql = "UPDATE roles SET id_materia='$idMateria' WHERE id_rol=$profe"; //falta agregar sal a la base de datos
    $res = mysqli_query($con, $sql);

    if($res == false){
        echo "algo salió mal x2"; 
    } else {
        header('Location: ./pagInicio.php');
    }
}



?>