<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesion</title>
</head>
<body>
    <?php
require "config.php";

$con = mysqli_connect($db_host, $db_user, $db_pass, $db_schema);

    $noCuenta = (isset($_POST["numeroCuenta"]) && $_POST["numeroCuenta"]!= "")?$_POST["numeroCuenta"]:false;
    $contrasena = (isset($_POST["contrasena"]) && $_POST["contrasena"]!= "")?$_POST["contrasena"]:false;
    $peticion = "SELECT noDeCuenta, contraseña FROM usuario WHERE noCuenta IN ('$noCuenta')";
    $query = mysqli_query( $con, $peticion); 
    $datos=mysqli_fetch_array($query, MYSQLI_ASSOC);
    if($datos==NULL)
    {
        echo "No estas registrado<a href='../templates/FormRegistro.html'<>Registrate</a>";
    }
    else{
        $peticion = "SELECT noDeCuenta, contraseña FROM usuario WHERE noCuenta IN ('$noCuenta')";
        $query = mysqli_query( $con, $peticion); 
        $datos=mysqli_fetch_array($query, MYSQLI_ASSOC);

        session_name("SesionUsuario");
        session_id("123456789");
    
        session_start();
    
        $_SESSION["numeroCuenta"]=$noCuenta;
        $_SESSION["contrasena"]=$contrasena;
    }
    if(isset($_SESSION["numeroCuenta"]))
    {
        $nuevaURL='';//foro
        header('Location: '.$nuevaURL);
    }  

    ?>
</body>
</html>