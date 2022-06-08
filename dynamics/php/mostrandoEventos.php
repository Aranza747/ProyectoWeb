<?php
  require "config.php";

  $con = mysqli_connect($db_host, $db_user, $db_pass, $db_schema);
  
if(!$con){
  echo "No se pudo conectar a la base de datos";
} else {
    if(isset($_GET['q'])){
    $query = $_GET['q'];
    $sql = "SELECT * FROM calendarioGlobal WHERE fecha LIKE '%".$query."%'";

    $res = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($res);
      
    $datos = array("id"=>$row['id_calendarioGlobal'], "nombre"=>$row['evento'], "descripcion"=>$row['descripcion'], "hora"=>$row['hora'], "fecha"=>$row['fecha']);

    $respuesta = array("ok"=>true, "datos"=>$datos);

    echo json_encode($respuesta);

  }
}