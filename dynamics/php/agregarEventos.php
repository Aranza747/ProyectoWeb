<?php

session_name("SesionUsuario");
session_id("123456789");
session_start();

require "config.php";
$con = mysqli_connect($db_host, $db_user, $db_pass, $db_schema);

$nombre = (isset($_POST["nombre"]) && $_POST["nombre"]!= "")?$_POST["nombre"]:false;
$descripcion = (isset($_POST["descripcion"]) && $_POST["descripcion"]!= "")?$_POST["descripcion"]:false;
$hora = (isset($_POST["hora"]) && $_POST["hora"]!= "")?$_POST["hora"]:false;
$fecha = (isset($_POST["fecha"]) && $_POST["fecha"]!= "")?$_POST["fecha"]:false;

echo $nombre;
echo $descripcion;
echo $hora;
echo $fecha;


$sql = "INSERT INTO calendarioGlobal VALUES (null, '$nombre', '$descripcion', '$fecha', '$hora')";
$res = mysqli_query($con, $sql);

if($res == false){
    echo "no se pudo añadir evento";
} else {
    echo "Se añadió evento";
    header('Location: ./calendario.php');
}




?>