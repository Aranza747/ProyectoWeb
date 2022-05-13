<?php
    $usuario = (isset($_POST["usuario"]) && $_POST["usuario"] != "" ) ?$_POST["usuario"] : "No especificado";
    $num = (isset($_POST["num"]) && $_POST["num"] != "" ) ?$_POST["num"] : "No especificado";
    $nombre = (isset($_POST['nombre']) && $_POST["nombre"] != "" ) ?$_POST['nombre'] : "No especificado";
    $grupo = (isset($_POST['grupo']) && $_POST["grupo"] != "" ) ?$_POST['grupo'] : "No especificado";
    $correo = (isset($_POST["correo"]) && $_POST["correo"] != "" ) ?$_POST["correo"] : "No especificado";
    $contrasena = (isset($_POST["contrasena"]) && $_POST["contrasena"] != "" ) ?$_POST["contrasena"] : "No especificado";
    
    echo "<table border=l align=center cellpadding=25px>
    <thead>
        <tr>
            <th colspan=3>Cuenta creada</th>
        </tr>
    </thead>

    <tbody>
        <tr> 
            <td><strong>Número de cuenta:</strong> <br/> $num </td>
            <td><strong>Nombre y apellidos: </strong><br/> $nombre </td>
            <td><strong>Grupo:</strong><br/>$grupo</td>

            
        </tr>
        <tr>
            <td colspan=3><strong>Correo electrónico:</strong> <br/> $correo</td>
        </tr>
        <tr>
            <td colspan=3><strong>Contraseña: </strong><br/> $contrasena </td>
        </tr>
    </tbody>
</table><br/>";

?>