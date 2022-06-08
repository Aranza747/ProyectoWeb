<?php
  require "config.php";

  $con = mysqli_connect($db_host, $db_user, $db_pass, $db_schema);

session_name("SesionUsuario");
session_id("123456789");
session_start();

// $_SESSION["modulo"]="0";

$mate = $_SESSION["materia"];
$mod = $_SESSION["modulo"];



$sql ="SELECT nombreMod FROM modulo WHERE id_modulo = '$mod'";
    // $sql = "SELECT id_materia FROM rolHasMateria WHERE id_rol = $usuario;
$res = mysqli_query($con, $sql);
$resultados = mysqli_fetch_array($res); 
  
    $nombre = $resultados['nombreMod'];
    
    // $respuesta = array("ok"=>true, "datos"=>$datos);

    echo json_encode($nombre);