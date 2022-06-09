<?php
  require "config.php";

  $con = mysqli_connect($db_host, $db_user, $db_pass, $db_schema);
  

    $id = $_POST["id"];
    $reportes = $_POST["reportes"];

    $sql = "UPDATE tablon SET reportes='$reportes' WHERE id_tablon='$id'";

    mysqli_query($con, $sql);
    $res = mysqli_query($con, $sql);

    if($res == true)
    {
    $respuesta = array("ok" => true);  
    }else
    {
    $respuesta = array("ok"=>false);
    }
    
    echo json_encode($respuesta); 
