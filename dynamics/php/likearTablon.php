<?php
  require "config.php";

  $con = mysqli_connect($db_host, $db_user, $db_pass, $db_schema);
  

    $id = $_POST["id"];
    $likes = $_POST["likes"];

    $sql = "UPDATE tablon SET likes='$likes' WHERE id_tablon='$id'";

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

  