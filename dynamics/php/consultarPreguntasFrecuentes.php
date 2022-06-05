<?php

require "config.php";

$con = mysqli_connect($db_host, $db_user, $db_pass, $db_schema);

if(!$con){
    echo "No se pudo conectar";
}else{
    $sql = "SELECT preguntasFrecuentes "
}
