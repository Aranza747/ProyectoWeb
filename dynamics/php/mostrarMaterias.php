<?php

    session_name("SesionUsuario");
    session_id("123456789");
    session_start();

    require "config.php";

    $con = mysqli_connect($db_host, $db_user, $db_pass, $db_schema);

    if(isset($_GET['id'])){
        $_SESSION["materia"] = $_GET['id'];

        echo json_encode("se pudo");
    
      } else {
            $usuario = $_SESSION["id_alumno"];
            if ($_SESSION["rol"] != "Alumno"){
                $sql ="SELECT id_materia, foto, nombreMateria FROM materia NATURAL JOIN rolHasMateria WHERE id_rol = '$usuario'";
            } else if ($_SESSION["rol"] == "Alumno"){
                $sql ="SELECT id_materia, foto, nombreMateria FROM materia NATURAL JOIN alumnoHasMateria WHERE id_alumno = '$usuario'";
            }
            
            // $sql = "SELECT id_materia FROM rolHasMateria WHERE id_rol = $usuario;
            $res = mysqli_query($con, $sql);
            $resultados=[];
            while($row = mysqli_fetch_assoc($res)){
                $resultados[] = array("id_materia"=>$row['id_materia'], "nombreMateria"=>$row['nombreMateria'], "foto"=>$row['foto']);
            }
            
            // $respuesta = array("ok"=>true, "datos"=>$datos);

            echo json_encode($resultados);
    }

?>