<?php
    20$numero = (isset($_POST["numero"]) && $_POST["numero"] != "" ) ?$_POST["numero"] : "No especificado";
    $email = (isset($_POST["email"]) && $_POST["email"] != "" ) ?$_POST["email"] : "No especificado";
    $password = (isset($_POST["password"]) && $_POST["password"] != "" ) ?$_POST["password"] : "No especificado";
    
    echo "<table border=l align=center cellpadding=25px>
        <thead>
            <tr>
                <th colspan=2>SISTEMA</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td><strong>Número de cuenta:</strong> <br/> $numero </td>
                <td><strong>Cuenta:</strong><br> 1 </td>
                
            </tr>
            <tr>
                <td><strong>Usuario: </strong><br/> $email</td>
                <td><strong>Contraseña: </strong><br/> $password </td>
            </tr>
        </tbody>
    </table><br/>";
?>