<?php
    require "config.php";

    $con = mysqli_connect($db_host, $db_user, $db_pass, $db_schema);

    $id = $_POST['id']; 

    $sql = "DELETE FROM preguntasFrecuentes WHERE id_preguntasFrecuentes = $id";
    mysqli_query($con, $sql);
    $res = mysqli_query($con, $sql);

    if($res == true)
    {
        $respuesta = array("ok" => true);  
    }else
    {
        //echo mysqli_error($con);
        $respuesta = array("ok"=>false);
    }
    
    echo json_encode($respuesta); 
