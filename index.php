<?php
    session_name("SesionUsuario");
    session_id("123456789");
    session_start();
    // if(isset( $_SESSION["usuario"])==true)
    // {
    //     $nuevaURL='statics/html/galeria.php';
    //     header('Location: '.$nuevaURL);
    // }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión</title>
    <link rel="stylesheet" href="./statics/styles/inicio.css">
</head>
<body>
   <form method="post">
        <fieldset>
            <center>
                <h1 class="font2" id="inicio" >Inicio de Sesión</h1><br>
                <label class="font3" for="numero">Número de cuenta:</label><br>
                <input id="button" class="font3" type="number" id="numero" name="numero" required placeholder="Escriba su número de cuenta aquí"><br><br>
                </label>
                <label class="font3" for="email">Usuario o correo electrónico:</label><br>
                <input id="button2" class="font3" type="email" id="email" name="email" required placeholder="Escriba su correo aquí"><br><br>
                </label>
                <label class="font3" for="password">Contraseña:</label><br>
                <input id="button3" class="font3" type="password" id="password" name="password" required placeholder="Escriba su contraseña aquí"><br><br>
                </label>
                <button id="button4" class="font2" type="submit">Acceder</button><br><br>
                Si no tiene una cuenta, <a href='./templates/FormRegistro.html'>cree una.</a><br>
                <!--¿Olvidó su contraseña?-->
            </center>
        </fieldset>
   </form> 
</body>
</html>