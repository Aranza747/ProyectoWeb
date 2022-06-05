<?php
    session_name("SesionUsuario");
    session_id("123456789");
    session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../../libs/bootstrap-5.2.0-beta1-dist/css/bootstrap.css">
    <link rel="stylesheet" href="../../statics/styles/CrearMateria.css">

    <title>Crear Materia</title>
</head>

<body>
    <!--  Navbar -->
    <nav class="navbar navbar-expand-lg" id="nav">
        <div class="container-fluid">

            <a class="navbar-brand" href="https://www.prepa6.unam.mx/ENP6/_P6/">
                <img src="../../statics/img/logoprepa.png" alt="" width="40" height="40">
            </a>
            <!-- Necesario solo cuando no sea la vista principal -->


            <div class="navbar-nav">
                <div>
                    <a class="navbar-brand" href="./pagInicio.php">
                        <img id="inicio" src="../../statics/img/Logoaula.png" alt="" width="30" height="30">
                    </a>
                </div>
                <div>
                    <a class="nav-link" href="#" id="perfil">Perfil</a>
                </div>
            </div>
        </div>
    </nav>

    <aside>
    </aside>

    <!-- crear materia -->
    <div class="contenedor">
        Crear materia
        <form action="./CrearMateria.php" method="post" id="formulario" autocomplete="off" enctype="multipart/form-data">
            <input name="nombreMateria" id="nombreMateria" placeholder="Ingresa el nombre de la materia" required>
            <input name="descripcion" id="descripcion" placeholder="Breve descripcion" required>
            <input name="datosProfesor" id="datosProfesor" placeholder="Datos del Profesor" required>
            <!-- Aqui vamos a poner el cuadrito donde se muestre la imagen -->
            <img id="imagenRelacionada"></img>
            <!--  -->
            <!-- Este es el boton de files -->
            <input type='file' name='ImagenRelacionada' id="InputImagenRelacionada"><div id="archivoInvalido"></div>
            <!--  -->
            <input name="contrasena" id="contrasena" placeholder="Contraseña de acceso" required>
            <button type="submit" id="crear" onclick="location.href='./vistaMateria.html'">Crear</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../../dynamics/js/CrearMateria.js"></script>
</body>

</html>