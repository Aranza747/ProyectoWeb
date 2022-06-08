<?php
  require "config.php";

  $con = mysqli_connect($db_host, $db_user, $db_pass, $db_schema);

session_name("SesionUsuario");
session_id("123456789");
session_start();

// $_SESSION["modulo"]="0";

$mod = $_SESSION["modulo"];
echo $_SESSION["modulo"];


if(isset($_GET['id'])){

    $_SESSION["tarea"] = $_GET['id'];

    echo json_encode($_SESSION["tarea"]);

  } else {         // hace el boton a la tarea
    $sql ="SELECT id_tarea, nombreTarea FROM tarea WHERE id_modulo = '$mod'";
    // echo $mod;
    // $sql = "SELECT id_materia FROM rolHasMateria WHERE id_rol = $usuario;
    $res = mysqli_query($con, $sql);
    // var_dump($res);
    $resultados=[];
    while($row = mysqli_fetch_assoc($res)){
        $resultados[] = array("id_tarea"=>$row['id_tarea'], "nombreTarea"=>$row['nombreTarea']);
    }
    
    // $respuesta = array("ok"=>true, "datos"=>$datos);

    echo json_encode($resultados);
} 

// if(isset($_GET['tarea'])){
//     $tarea = $_SESSION["tarea"]; 
//     $sql = "SELECT * FROM tarea NATURAL JOIN archivoTarea WHERE id_tarea='$tarea'";

//     $res = mysqli_query($con, $sql);
//     $row = mysqli_fetch_assoc($res);
//     // $datos = [];
//     $datos = array("id_tarea"=>$row['id_tarea'], "fecha"=>$row['fecha'], "hora"=>$row['hora'], "descripcion"=>$row['descripcion'], "nombreTarea"=>$row['nombreTarea'], "ruta"=>$row['ruta'], "fechaEntrega"=>$row['fechaEntrega']);

//     $respuesta = array("ok"=>true, "datos"=>$datos);

//     echo json_encode($respuesta);

  
// }