<?php
  require "config.php";

  $con = mysqli_connect($db_host, $db_user, $db_pass, $db_schema);

session_name("SesionUsuario");
session_id("123456789");
session_start();

// $_SESSION["modulo"]="0";

$mod = $_SESSION["modulo"];
$tarea = $_SESSION["tarea"];

$sql ="SELECT *  FROM tarea NATURAL JOIN archivoTarea WHERE id_tarea = '$tarea'";
    $res = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($res);
      
    $datos = array("fecha"=>$row['fecha'], "hora"=>$row['hora'], "descripcion"=>$row['descripcion'], "nombreTarea"=>$row['nombreTarea'], "ruta"=>$row['ruta'], "fechaEntrega"=>$row['fechaEntrega']);

    $respuesta = array("ok"=>true, "datos"=>$datos);

    echo json_encode($respuesta);
