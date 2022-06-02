<?php
require "config.php";

$con = mysqli_connect($db_host, $db_user, $db_pass, $db_schema);

$noCuenta = (isset($_POST["numeroCuenta"]) && $_POST["numeroCuenta"]!= "")?$_POST["numeroCuenta"]:false;
$nombre = (isset($_POST["nombre"]) && $_POST["nombre"]!= "")?$_POST["nombre"]:false;//Condicionar Si es estudiante o profesor
$correo = (isset($_POST["correo"]) && $_POST["correo"]!= "")?$_POST["correo"]:false;
$usuario = (isset($_POST["usuario"]) && $_POST["usuario"]!= "")?$_POST["usuario"]:false;
$contrasena = (isset($_POST["contrasena"]) && $_POST["contrasena"]!= "")?$_POST["contrasena"]:false;

echo $noCuenta;
echo $nombre;
echo $correo;
echo $usuario;
echo $contrasena;


$sql = "INSERT INTO alumno (noDeCuenta, nombre, usuario, correo, contraseña) VALUES($noCuenta, '$nombre', '$usuario', '$correo', '$contrasena')";//estudiante
$res = mysqli_query($con, $sql);

if($res == false){
    echo 'No se pudo conectar';
}
else{
    echo 'Si se pudo conectar';
    header ('Location: ../ProyectoWeb/inicioSesion.php');
}
?> 