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
    <link rel="stylesheet" href="../../statics/styles/CrearModulo.css">

    <title>Crear modulo</title>
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

    <!-- crar materia -->
    <div class="contenedor">
        <div class="titulo">
            <div>
                <label class="modulo">Nombre del modulo: &nbsp; </label>
                <input type="text" id="nombre" class="input" required placeholder="Escriba el nombre del modulo">
            </div>
        </div>
        <div class="tabla">
            <div class="columna">
                <div class="arriba">Material del trabajo</div>
            </div>
            <div class="columna">
                <div class="arriba">Tarea</div>
            </div>
            <div class="Columna2" onclick="location.href='./formCrearTema.php'">
                <div class="abajo">
                    <div><img id="inicio" src="../../statics/img/+.png" alt="" width="30" height="30"></div>
                    <div>Añadir material</div>
                </div>
            </div>
            <div class="Columna2" onclick="location.href='./formCrearTarea.php'">
                <div class=" abajo">
                    <div><img id="inicio" src="../../statics/img/+.png" alt="" width="30" height="30"></div>
                    <div>Crear tarea</div>
                </div>
            </div>
        </div>
    </div>
    <button type="submit" id="enviar">Guardar</button>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>