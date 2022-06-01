<?php
    session_name("SesionUsuario");
    session_id("123456789");

    session_start();

?>
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Inicio de sesion</title>
    <link rel='stylesheet' href='./statics/styles/incioreg.css'>
</head>
<body>
    
   
        <header>Bienvenido:</header>
        <nav>
            <form id="formulario" class='sesion' action='./RecibirInicio.php' method='post'>
                <fieldset>
                    <legend>Inicio de sesión</legend>
                    <label for='NoCuenta'> Numero de cuenta: 
                        <input type='text' name='NoCuenta' required>
                    </label> <br> <br> 
                    <label for='contraseña'> Contraseña: 
                        <input type='password' name='contraseña' required>
                    </label> <br> <br> 
                    <button type='submit'>Enviar</button>
                    <button type='reset'>Reset</button>
                    <br> <br>
                    Si no tienes una cuenta, <a href='./templates/FormRegistro.html'>registrate</a>
                </fieldset>
            </form>    
        </nav>
    
</body>
</html>