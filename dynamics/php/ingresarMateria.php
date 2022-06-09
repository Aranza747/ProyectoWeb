<?php
  require "config.php";

    session_name("SesionUsuario");
    session_id("123456789");
    session_start();

  $con = mysqli_connect($db_host, $db_user, $db_pass, $db_schema);
  
if(!$con){
  echo "No se pudo conectar a la base de datos";
} else{
  if(isset($_GET['q'])){
    $query = $_GET['q'];
    $sql = "SELECT id_materia, nombreMateria FROM materia WHERE nombreMateria LIKE '%".$query."%'";
    $res = mysqli_query($con, $sql);
    $resultados=[];
    while($row = mysqli_fetch_assoc($res)){
      $resultados[]=$row;
      
    }
    
    echo json_encode($resultados);
  } else if(isset($_GET['id'])){
    $query = $_GET['id'];
    $sql = "SELECT id_materia, nombreMateria, descripcion, contrasena, foto FROM materia WHERE id_materia='$query'";

    $res = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($res);
    // $datos = [];
    $datos = array("id"=>$row['id_materia'], "nombre"=>$row['nombreMateria'], "descripcion"=>$row['descripcion'], "contrasena"=>$row['contrasena'], "foto"=>$row['foto']);

    $respuesta = array("ok"=>true, "datos"=>$datos);

    echo json_encode($respuesta);

  } else if(isset($_GET['idMat'])){
      $alumno = $_SESSION["id_alumno"];
      $query = $_GET['idMat'];

      
      
      $sql = "INSERT INTO alumnoHasMateria VALUES (null, '$alumno', '$query')";
      $res = mysqli_query($con, $sql);

      if($res == true){
        $datos = true;
      } else {
        $datos = null;
      }
      

    echo json_encode($datos);
  }
}

?>