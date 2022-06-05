<?php
require "config.php";

$con = mysqli_connect($db_host, $db_user, $db_pass, $db_schema);

$nombre = (isset($_POST["nombreMod"]) && $_POST["nombreMod"]!= "")?$_POST["nombreMod"]:false;

$sql = "INSERT INTO modulo (nombreMod) VALUES('$nombre')";
$res = mysqli_query($con, $sql);

if($res == true)
{
    header ('Location: ../../templates/modulo.html');
}else
{
    echo "no se conectó";
}