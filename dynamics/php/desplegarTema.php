<?php
  require "config.php";

  $con = mysqli_connect($db_host, $db_user, $db_pass, $db_schema);

session_name("SesionUsuario");
session_id("123456789");
session_start();

// $_SESSION["modulo"]="0";

$mod = $_SESSION["modulo"];
$tema = $_SESSION["tarea"];

$sql ="SELECT *  FROM tema NATURAL JOIN archivoTema WHERE id_tema = '$tema'";
    $res = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($res);
      
    $datos = array("descripcion"=>$row['descripcion'], "fecha"=>$row['fecha'], "nombreTema"=>$row['nombreTema'], "ruta"=>$row['ruta']);

    $respuesta = array("ok"=>true, "datos"=>$datos);

    echo json_encode($respuesta);