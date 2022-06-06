<?php

    session_name("SesionUsuario");
    session_id("123456789");
    session_start();

// require "config.php";

//   $con = mysqli_connect($db_host, $db_user, $db_pass, $db_schema);


// $id = $_POST['id'];
    
// $sql = "SELECT contrasena FROM materia WHERE id_materia=$id";
// $res = mysqli_query($con, $sql);
// $datos = mysqli_fetch_array($res, MYSQLI_ASSOC); 

// if($datos == NULL)
// {
//     $respuesta = array("ok" => false);
// }
// else
// {
//     $contra = $datos['contrasena'];

//     $respuesta = array("ok"=>true, "contrasena"=>$contra);

//     echo json_encode($respuesta);

    
// }

// echo "hola";