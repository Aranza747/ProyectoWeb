<?php

session_name("SesionUsuario");
session_id("123456789");
session_start();

require "config.php";

$con = mysqli_connect($db_host, $db_user, $db_pass, $db_schema);

$nombre = (isset($_POST["nombreMod"]) && $_POST["nombreMod"]!= "")?$_POST["nombreMod"]:false;

$sql = "INSERT INTO modulo (nombreMod) VALUES('$nombre')";
$res = mysqli_query($con, $sql);

if($res == true)
{
    header ('Location: ./modulo.php');
}else
{
    echo "no se conectó";
}