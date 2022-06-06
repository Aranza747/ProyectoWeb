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
    <title>foroEstudiantes</title>
    <link rel="stylesheet" href="../../libs/bootstrap-5.2.0-beta1-dist/css/bootstrap.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../statics/styles/foroEstudiantes.css" rel="stylesheet">
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
    
    <!-- Perfil -->
    <?php    
        echo '<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel" width="15%" height="15%">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasRightLabel">Perfil</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <img src="../../statics/img/descargasfondoinicio.jpeg" alt="perfil" width="25%" height="15%">
                Nombre: '.$_SESSION["nombre"].'
                <br><br>
                Correo: '.$_SESSION["correo"].'
                <br><br>
                Rol: '.$_SESSION["rol"].'
            </div>
        </div>'
    ?>
  

    <div class="d-flex position-relative pregunta">
        <img src="..." class="flex-shrink-0 me-3" alt="...">
        <div>
            <h5 class="mt-0">Custom component with stretched link</h5>
            <p>This is some placeholder content for the custom component. It is intended to mimic what some real-world content would look like, and we're using it here to give the component a bit of body and size.</p>
            <a href="#" class="stretched-link">Go somewhere</a>
        </div>
    </div>
<!-- 
    <aside id="asideDerecha">
        <ul>
            <button type="button" class="list-group-item" id="preguntasFrecuentes" onclick="location.href='./vistaForoPreguntasFrecuentes.php'">Preguntas Frecuentes</button>
            <button type="button" class="list-group-item" id="guardarCambios">Guardar Cambios</button>
            <button type="button" class="list-group-item btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop" id="añadir">Añadir</button>
        </ul>
    </aside> -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../js/foroEstudiantes.js"></script>
</body>
</html>