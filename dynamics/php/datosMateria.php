<?php
  require "config.php";

  $con = mysqli_connect($db_host, $db_user, $db_pass, $db_schema);

session_name("SesionUsuario");
session_id("123456789");
session_start();

$mate = $_SESSION["materia"];


    $sql = "SELECT id_materia, nombreMateria, descripcion FROM materia WHERE id_materia=$mate ";

    $res = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($res);
    // $datos = [];
    $datos = array("id"=>$row['id_materia'], "nombre"=>$row['nombreMateria'], "descripcion"=>$row['descripcion']);

    $respuesta = array("ok"=>true, "datos"=>$datos);

    echo json_encode($respuesta);

