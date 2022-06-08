<?php
  require "config.php";

  $con = mysqli_connect($db_host, $db_user, $db_pass, $db_schema);

session_name("SesionUsuario");
session_id("123456789");
session_start();

// $_SESSION["modulo"]="0";

$mod = $_SESSION["modulo"];

if(isset($_GET['id'])){

    $_SESSION["tema"] = $_GET['id'];

    echo json_encode($_SESSION["tema"]);

  } else {         // hace el boton a la tarea
    $sql ="SELECT id_tema, nombreTema FROM tarea WHERE id_modulo = '$mod'";
    // $sql = "SELECT id_materia FROM rolHasMateria WHERE id_rol = $usuario;
    $res = mysqli_query($con, $sql);
    $resultados=[];
    while($row = mysqli_fetch_assoc($res)){
        $resultados[] = array("id_tema"=>$row['id_tema'], "nombreTema"=>$row['nombreTema']);
    }
    
    // $respuesta = array("ok"=>true, "datos"=>$datos);

    echo json_encode($resultados);
}