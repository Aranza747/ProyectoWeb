<?php
    session_name("SesionUsuario");
    session_id("123456789");

    session_start();

    if(isset($_SESSION["SesionUsuario"])){
        session_unset();
        session_destroy();
    }
    $nuevaURL='./IniciarSesion.php';
    header('Location: '.$nuevaURL);
?>