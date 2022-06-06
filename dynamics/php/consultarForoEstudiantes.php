<?php

require "config.php";

$con = mysqli_connect($db_host, $db_user, $db_pass, $db_schema);

if(!$con){
    echo "No se pudo conectar";
} else{
    $sql = "SELECT * FROM foro";
    $res = mysqli_query($con, $sql);
    $resultados = [];
    while($row = mysqli_fetch_assoc($res))
    {
        $resultados[] = array("id_foro" => $row["id_foro"], "comentarioForo" => $row["id_comentarioForo"], "respuesta" => $row["respuesta"]);
    }
  
    echo json_encode($resultados, JSON_UNESCAPED_UNICODE);
     
}
