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
    <link rel="stylesheet" href="../../statics/styles/CrearTema.css">

    <title>Crear Tema</title>
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

    <div id="formTarea">
        <form action=".."  enctype="multipart/form-data" method="post">
            <div id="contenedor">
                <div id="izquierda">
                    <label class="etiqueta">Nombre del tema:</label><br />
                    <input type="text" name="nombre" id="nombre" class="input" required placeholder="Escriba el nombre del tema"><br/>

                    <div class="mb-3">
                        <label for="formFileSm" class="archivo" class="form-label">Seleccionar archivo</label>
                        <input class="form-control form-control-sm" id="formFileSm" name="archivo" type="file" multiple required>
                    </div>
                
                    <button type="submit" id="enviar">Guardar</button>
                </div>
                <div id="derecha">
                    <label class="etiqueta">Descripción:</label><br/>
                    <textarea type="text" name="descripcion" id="descripcion"></textarea>
                </div>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>