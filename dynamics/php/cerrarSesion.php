<?php

    session_name("SesionUsuario");
    session_id("123456789");
    session_start();

    if ($_SESSION["nombre"]){
        session_unset();
        session_destroy();
        header("location: ../../inicioSesion.html");
    } else {
        header("location: ../../inicioSesion.html");
    }

?>