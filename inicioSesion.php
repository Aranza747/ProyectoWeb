<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./statics/styles/inicio.css">
</head>
<body>
    <form action="./dynamics/php/inicio.php" method="post">
    <fieldset>
            <legend>Inicio de Sesión</legend>

            <label>Número de cuenta o RFC:</label><br/>
            <input type="text" name="numeroCuenta" id="noCuentaRFC" required placeholder="Escriba su número de cuenta o rfc aquí">
            <br/><br/>
            
            <label>Contraseña:</label><br/>
            <input type="password" name="contrasena" id="contrasena" required placeholder="Escriba su contraseña aquí">
            <br/><br/>

            <button type="submit" id="enviar">Acceder</button>
        </fieldset>
    </form>

    Si no tiene cuenta, <a href="./templates/formregistro.html">cree una.</a>
</body>
</html>