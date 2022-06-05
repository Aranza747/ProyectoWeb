<?php
    session_name("SesionUsuario");
    session_id("123456789");
    session_start();
?>

<?php
require "config.php";

$con = mysqli_connect($db_host, $db_user, $db_pass, $db_schema);

$preguntaFrecuente = (isset($_POST["preguntaFrecuente"]) && $_POST["preguntaFrecuente"]!= "")?$_POST["preguntaFrecuente"]:false;
$respuestaPreguntaFrecuente = (isset($_POST["respuestaPreguntaFrecuente"]) && $_POST["respuestaPreguntaFrecuente"]!= "")?$_POST["respuestaPreguntaFrecuente"]:false;


$sql = "INSERT INTO preguntasFrecuentes (preguntaFrecuente, respuesta) VALUES('$preguntaFrecuente', '$respuestaPreguntaFrecuente')";
$res = mysqli_query($con, $sql);

if($res == true)
    header ('Location: ./vistaForoPreguntasFrec.php');