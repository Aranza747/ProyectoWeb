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
    <link rel="stylesheet" href="../../statics/styles/CrearTarea.css">
    <title> Crear Tarea</title>
</head>

<body>
    <!--  Navbar -->
    <nav class="navbar navbar-expand-lg" id="nav">
        <div class="container-fluid">
            <a class="navbar-brand" href="https://www.prepa6.unam.mx/ENP6/_P6/">
                <img src="../../statics/img/logoprepa.png" alt="" width="50" height="50">
            </a>
            <!-- Necesario solo cuando no sea la vista principal -->
            <div class="navbar-nav">
                <div>
                <a class="navbar-brand" href="./pagInicio.php">
                        <img id="inicio" src="../../statics/img/Logoaula.png" alt="" width="40" height="40">
                    </a>
                </div>
                <div>
                    <button class="list-group-item btn-opcion" id="foro" class="btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Perfil</button>
                </div>
            </div>
        </div>
    </nav>

    <aside>
        <!-- columna-->
        <ul class="list-group list-group-flush"> 
            
            
            <button type="button" class="list-group-item btn-opcion" id="foro" onclick="location.href='./vistaForoPreguntasFrec.php'">Foro </button>
            <button type="button" class="list-group-item btn-opcion" id="tablon">Tablon</button>
            <button type="button" class="list-group-item btn-opcion" id="calendario">Calendario</button>
            <button type="button" class="list-group-item btn-opcion" id="crear" onclick="location.href='./formCrearMateria.php'">Crear Materia</button>  <!-- Profesor-->
            <button type="button" class="list-group-item btn-opcion" id="crear">Calificaciones</button> <!-- Alumno -->
            <button type="button" class="list-group-item btn-opcion" id="crear">Participantes</button> <!-- Administrador-->
            
        </ul>
    </aside>
    <!-- padre -->
    <div id="formTarea" class="col-xl-6" class="col-lg-6" class="col-sm-12">
        <form action="./crearTarea.php" enctype="multipart/form-data" method="post">
            <div id="contenedor">
                <!-- izquierda -->
                <div id="izquierda" class="col-xl-3" class="col-lg-6" class="col-sm-12">
                    <label class="etiqueta">Descripción:</label><br />
                    <textarea name="descripcion" id="descripcion"></textarea>
                </div>

                <!-- derecha -->
                <div id="derecha" class="col-xl-3" class="col-lg-6" class="col-sm-12">
                    <div id="form">
                    <label class="etiqueta">Nombre de la tarea:</label><br />
                    <input type="text" name="nombre" id="nombre" class="input" required>
                    <br /><br />

                    <div class="mb-3">
                        <label for="formFileSm" class="file" class="form-label">Seleccionar archivo</label>
                        <input class="form-control form-control-sm" id="formFileSm" name="archivo" type="file" multiple required>
                    </div>

                    <label class="file">Fecha de entrega:</label><br />
                    <input type="date" name="fecha" id="fecha" class="input" required>
                    <br /><br />

                    <label class="file">Hora de entrega:</label><br />
                    <input type="time" name="hora" id="hora" class="input" required>
                    <br /><br /><br />

                    <button type="submit" id="enviar">Guardar</button>
                    <br /><br />
                </div>
                </div>
            </div>
        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

