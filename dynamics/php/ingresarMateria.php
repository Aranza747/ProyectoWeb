<?php
  require "config.php";

  $con = mysqli_connect($db_host, $db_user, $db_pass, $db_schema);
  
if(!$con){
  echo "No se pudo conectar a la base de datos";
}
else{
  if(isset($_GET['q'])){
    $query = $_GET['q'];
    $sql = "SELECT id_materia, nombreMateria FROM materia WHERE nombreMateria LIKE '%".$query."%'";
    $res = mysqli_query($con, $sql);
    $resultados=[];
    while($row = mysqli_fetch_assoc($res)){
      $resultados[]=$row;
      
    }
    
    echo json_encode($resultados);
  }
  else if(isset($_GET['id'])){
    $query = $_GET['id'];
    $sql = "SELECT id_materia, nombreMateria, descripcion, foto WHERE id_materia='$query';

    $res = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($res);
      
    $datos = array("id"=>$row['id_materia'], "nombre"=>$row['nombreMateria'], "descripcion"=>$row['descripcion'], "foto"=>$row['foto']);

    $respuesta = array("ok"=>true, "datos"=>$datos);

    echo json_encode($respuesta);

  }