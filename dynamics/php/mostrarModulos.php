<?php
  require "config.php";

  $con = mysqli_connect($db_host, $db_user, $db_pass, $db_schema);

session_name("SesionUsuario");
session_id("123456789");
session_start();

$mate = $_SESSION["materia"];



if(isset($_GET['q'])){
    $sql = "SELECT id_materia, nombreMateria, descripcion FROM materia WHERE id_materia=$mate ";

    $res = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($res);
    // $datos = [];
    $datos = array("id"=>$row['id_materia'], "nombre"=>$row['nombreMateria'], "descripcion"=>$row['descripcion']);

    $respuesta = array("ok"=>true, "datos"=>$datos);

    echo json_encode($respuesta);

} else if(isset($_GET['id'])){
    $_SESSION["modulo"] = $_GET['id'];

    echo json_encode("se pudo");

  } else {         
    $sql ="SELECT id_modulo, nombreMod FROM modulo WHERE id_materia = '$mate'";
    // $sql = "SELECT id_materia FROM rolHasMateria WHERE id_rol = $usuario;
    $res = mysqli_query($con, $sql);
    $resultados=[];
    while($row = mysqli_fetch_assoc($res)){
        $resultados[] = array("id_modulo"=>$row['id_modulo'], "nombreMod"=>$row['nombreMod']);
    }
    
    // $respuesta = array("ok"=>true, "datos"=>$datos);

    echo json_encode($resultados);
}