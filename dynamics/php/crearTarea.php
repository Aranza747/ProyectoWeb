<?php
// session_name("SesionUsuario");
// session_id("123456789");
// session_start();
// if(isset( $_SESSION["nombre"])!=true)
// {
//     $nuevaURL='../inicio1.php';
//     header('Location: '.$nuevaURL);
// }

// $sesion =  $_SESSION["nombre"]; 


date_default_timezone_set('America/Mexico_City');
$fechaAct=date('Y-m-d');

require "config.php";
$con = mysqli_connect($db_host, $db_user, $db_pass, $db_schema);

$descripcion = (isset($_POST["descripcion"]) && $_POST["descripcion"]!= "")?$_POST["descripcion"]:false;
$nombre = (isset($_POST["nombre"]) && $_POST["nombre"]!= "")?$_POST["nombre"]:false;
$fecha = (isset($_POST["fecha"]) && $_POST["fecha"]!= "")?$_POST["fecha"]:false;
$hora = (isset($_POST["hora"]) && $_POST["hora"]!= "")?$_POST["hora"]:false;

echo $descripcion;
echo $nombre;
echo $fecha;
echo $hora;

print_r ($_FILES);

if(isset($_FILES['archivo'])){
    // $titulo = $_POST['archivo'];
    $name= $_FILES['archivo']['name'];   
    echo $name;
    $arch= $_FILES['archivo']['tmp_name'];
    $ext= pathinfo($name, PATHINFO_EXTENSION);
    if($ext=="png" || $ext=="jpg" || $ext=="jpeg"){
        $ruta = "../../descargas/img/$name.$ext";
    } else if($ext=="avi" || $ext=="mp4" || $ext=="mpg" || $ext=="mpeg" || $ext=="asf" || $ext=="mp3" || $ext=="au" || $ext=="ma4" || $ext=="mid"){
        $ruta = "../../descargas/media/$name.$ext";
    } else {
        $ruta = "../../descargas/docs/$name.$ext";
    }
    
    rename($arch, "$ruta");
    // echo $ruta;
}



// $sql = "INSERT INTO archivoTarea (ruta, fechaEntrega) VALUES($ruta, '$fechaAct')";
// $res = mysqli_query($con, $sql);

// if($res==false){
//     echo"no se pudo conectar";
// } else {
//     echo "se conectó";
//     $id_archivoTarea = $datos['id_archivoTarea'];

//     $sql = "INSERT INTO tarea VALUES(null, null, null, '$id_archivoTarea', null, '$fecha', '$hora', null, '$descripcion')";
//     $res = mysqli_query($con, $sql);
//     $datos = mysqli_fetch_array($res, MYSQLI_ASSOC);
//     if($datos == NULL){
//         echo "no podemos conectar los datos";
//     } else {
//         $descripcion = $datos ['descrpcion'];
//         $nombre = $datos['nombre'];
//         $ruta = $datos ['ruta'];
//         $fecha = $datos['nombre'];
//         $hora = $datos['hora'];
//         header ('Location: ./tarea.php');
        
//     }
     
// }




?>