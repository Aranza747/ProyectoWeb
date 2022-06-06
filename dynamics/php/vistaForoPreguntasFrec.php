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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../statics/styles/foroPreguntasFrecuentes.css">

    <title>AulaP6</title>
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
                <button class="list-group-item btn-opcion" class="foro" class="btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Perfil</button>
                </div>
            </div>
        </div>
    </nav>
    
    <aside>
        <ul class="list-group list-group-flush"> 
            <button class="list-group-item btn-opcion" id="foro" class="btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Perfil</button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel" width="15%" height="15%">
                <div class="offcanvas-header">
                  <h5 class="offcanvas-title" id="offcanvasRightLabel">Perfil</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                  <img src="../dynamics/descargasfondoinicio.jpeg" alt="perfil" width="25%" height="15%">
                  Nombre: Fulanito Petronilo Pancraseo
                  <br><br>
                  Correo: arroba@gmail.com
                  <br><br>
                  Rol: Alumno
                </div>
              </div>
            <button type="button" class="list-group-item btn-opcion" id="foro" onclick="location.href='./foroPreguntasFrecuentes.html'">Foro </button>
            <button type="button" class="list-group-item btn-opcion" id="tablon">Tablon</button>
            <button type="button" class="list-group-item btn-opcion" id="calendario">Calendario</button>
            <button type="button" class="list-group-item btn-opcion" id="crear" onclick="location.href='./CrearMateria.html'">Crear Materia</button>  
            <button type="button" class="list-group-item btn-opcion" id="crear">Calificaciones</button> 
            <button type="button" class="list-group-item btn-opcion" id="crear">Participantes</button>
        </ul>
    </aside>

    <!-- <div id="preguntasFrecuentes">
        <div class="card border-primary mb-3" style="max-width: 18rem;">
            <div class="card-header">Header</div>
            <div class="card-body text-primary">
              <h5 class="card-title">Primary card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>
    </div> -->

    <!-- donde se aguarda las preguntas -->
    <div class=contenedor>
    <div id="preguntasFrecuentes">
    </div>
</div>


    <!-- Button modal -->
    <div class=contenedor>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            Añadir 
        </button>
    </div>

    <!-- Modal, el recuadro que emerge de hacer click en el boton -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Preguntas frecuentes</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="formulario" action="./foroPreguntasFrecuentes.php" method="post">
                        Escribe la pregunta<br>
                        <textarea name="preguntaFrecuente" id="preguntaFrecuente" class="grande" placeholder="Pregunta Frecuente" required></textarea><br>
                        <textarea name="respuestaPreguntaFrecuente" id="respuestaPreguntaFrecuente" class="grande" placeholder="Respuesta" required></textarea><br>
                    </form>
                    <div id="msgError"></div>
                </div>
                <div class="modal-footer">
                    <button id="enviar" type="submit" class="btn btn-primary">Crear</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- segundo aside -->
    <aside id="asideDerecha">
        <ul>
            <button type="button" class="list-group-item" id="preguntasFrecuentes" onclick="location.href='./vistaForoEstudiantes.php'">Foro Estudiantes</button>
            <button type="button" class="list-group-item" id="guardarCambios">Guardar Cambios</button>
            <button type="button" class="list-group-item btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop" id="añadir">Añadir</button>
        </ul>
    </aside>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../js/foroPreguntasFrecuentes.js"></script>
</body>
    
</html>