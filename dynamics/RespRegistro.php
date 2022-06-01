<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
   <!-- <link rel="stylesheet" href="../statics/styles/incioreg.css"> -->
</head>
<body>
    <?php 
        include("./config.php");
        $conexion = connect(); 

        $usuario = (isset($_POST["usuario"]) && $_POST["usuario"] != "") ? $_POST["usuario"] : "No especifico";
        $nombre = (isset($_POST["nombre"]) && $_POST["nombre"] != "") ? $_POST["nombre"] : "No especifico";
        $num = (isset($_POST["num"]) && $_POST["num"] != "") ? $_POST["num"] : "No especifico";
        $grupo = (isset($_POST['grupo']) && $_POST["grupo"] != "" ) ?$_POST['grupo'] : "No especificado";
        $correo = (isset($_POST["correo"]) && $_POST["correo"] != "" ) ?$_POST["correo"] : "No especificado";
        $contrasena = (isset($_POST["contrasena"]) && $_POST["contrasena"] != "" ) ?$_POST["contrasena"] : "No especificado";

        $peticion = "SELECT nombre_usuario FROM usuario WHERE nombre_usuario IN ('$usuario')";
        $query = mysqli_query( $conexion, $peticion); 
        $datos=mysqli_fetch_array($query, MYSQLI_ASSOC);
        if($datos==NULL)
        {
            $peticion = "INSERT INTO alumno (No_cuenta, Nombre, Usuario, Correo, Grupo_ID, Contraseña) VALUES ('$num', '$nombre', '$usuario', '$correo', '$grupo', '$contrasena')"; 
            $query = mysqli_query( $conexion, $peticion); 

            $peticion2 = "SELECT * FROM grupo WHERE Grupo_ID ='$grupo'"; 
            $query2 = mysqli_query( $conexion, $peticion2); 
            $datos=mysqli_fetch_array($query2, MYSQLI_ASSOC);
    
            $peticion3 = "SELECT * FROM alumno WHERE Nombre='$nombre'";
            $query3 = mysqli_query($conexion, $peticion3);  
            $datos3=mysqli_fetch_array($query3, MYSQLI_ASSOC);
    
            $foro=$datos3['Alumno_ID'];
            $peticion = "INSERT INTO foro VALUES ($foro, NULL)"; 
            $query = mysqli_query($conexion, $peticion); 
            $peticion3 = "UPDATE alumno SET Foro_ID=$foro WHERE Nombre='$nombre'"; 
            $query3 = mysqli_query($conexion, $peticion3); 

            $peticion5 = "SELECT * FROM alumno WHERE Nombre='$nombre'";
            $query5 = mysqli_query($conexion, $peticion5);  
            $datos5=mysqli_fetch_array($query5, MYSQLI_ASSOC);

            $tablon=$datos5['Alumno_ID'];
            $peticion = "INSERT INTO tablon VALUES ($tablon, NULL)"; 
            $query = mysqli_query( $conexion, $peticion); 
            $peticion5 = "UPDATE alumno SET Tablon_ID=$tablon WHERE Nombre='$nombre'"; 
            $query5 = mysqli_query($conexion, $peticion5); 
          
            $peticion4 = "SELECT * FROM alumno WHERE nombre='$nombre'";
            $query4 = mysqli_query($conexion, $peticion4);  
            $datos4=mysqli_fetch_array($query4, MYSQLI_ASSOC);
            echo "<p  id='texto'>Tu usuario se registro con éxito</p>";
            $nuevaURL='./inicioSesion.php';
            header('Location: '.$nuevaURL);
        }
        else{
            echo "<p id='texto'>Ese usuario ya existe, prueba iniciar sesión o prueba uno nuevo con otro usuario<p>";
        }

    ?>
</body>
</html>