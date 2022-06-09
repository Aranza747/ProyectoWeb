<?php
  require "config.php";

  $con = mysqli_connect($db_host, $db_user, $db_pass, $db_schema);
  

    $id = $_POST["id"];

    $sql = "DELETE FROM tablon WHERE id_tablon=$id";
    $res = mysqli_query($con, $sql);


    if($res == true)
    {
    $respuesta = array("ok" => true);  
    }else
    {
    $respuesta = array("ok"=>false);
    }
    
    echo json_encode($respuesta); 
