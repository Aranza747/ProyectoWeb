<?php

    $num = (isset($_POST['num']) && $_POST["num"] != "" ) ?$_POST['num'] : "No especificado";
    $nombre = (isset($_POST['nombre']) && $_POST["nombre"] != "" ) ?$_POST['nombre'] : "No especificado";
    $correo = (isset($_POST['correo']) && $_POST["correo"] != "" ) ?$_POST['correo'] : "No especificado";
    $contrasena = (isset($_POST['contrasena']) && $_POST["contrasena"] != "" ) ?$_POST['contrasena'] : "No especificado";

    echo "<table border=l align=center cellpadding=25px>
        <thead>
            <tr>
                <th colspan=2>Cuenta creada</th>
            </tr>
        </thead>

        <tbody>
            <tr> 
                <td><strong>Número de cuenta:</strong> <br/> $num </td>
                <td><strong>Nombre y apellidos: </strong><br/> $nombre </td>

                
            </tr>
            <tr>
                <td><strong>Correo electrónico:</strong> <br/> $correo</td>
                <td><strong>Contraseña: </strong><br/> $contrasena </td>
            </tr>
        </tbody>
    </table><br/>";

?>