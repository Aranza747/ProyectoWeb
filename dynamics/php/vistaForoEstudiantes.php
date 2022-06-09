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
    <title>ForoEstudiantes</title>
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
    
    <!-- Perfil -->
    <?php    
        echo '<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel" width="15%" height="15%">
            <div class="offcanvas-header">
                <span class="offcanvas-title" id="offcanvasRightLabel">Perfil</span>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body" id="padre">
                    <img  id="hijo" src="../../statics/img/descargasfondoinicio.jpeg" alt="perfil" width="80%" height="25%">
                <div class="hijo">
                    <dl><dt class="cabeza">Nombre: &nbsp</dt>'.'<dd class="dato"> &nbsp &nbsp &nbsp &nbsp'.$_SESSION["nombre"].'
                        </dd>
                    </dl>

                    <dl><dt class="cabeza">Correo: &nbsp</dt>'.'<dd class="dato"> &nbsp &nbsp &nbsp &nbsp'.$_SESSION["correo"].'
                        </dd>
                    </dl>

                    <dl><dt class="cabeza">Rol: &nbsp</dt>'.'<dd id="noDeCuentaRFC" class="dato"> &nbsp &nbsp &nbsp &nbsp'.$_SESSION["rol"].'
                        </dd>
                    </dl> 

                    <dl><dt class="cabeza">Numero de Cuenta o RFC: &nbsp</dt>'.'<dd class="dato"> &nbsp &nbsp &nbsp &nbsp'.$_SESSION["noDeCuenta"].'
                        </dd>
                    </dl>

                </div>
            </div>
        </div>'

    ?>
    

    <!-- <aside> -->
        <!-- columna-->
        <!-- <ul class="list-group list-group-flush"> 
            
            <button type="button" class="list-group-item btn-opcion" id="foro" onclick="location.href='./foro.php'">Foro </button>
            <button type="button" class="list-group-item btn-opcion" id="tablon">Tablon</button>
            <button type="button" class="list-group-item btn-opcion" id="calendario" onclick="location.href='./calendario.php'">Calendario</button>
            <?php
                if($_SESSION["rol"] == "Profesor"){
                    echo '<button type="button" class="list-group-item btn-opcion" id="crear" onclick="location.href=\'./formCrearMateria.php\'">Crear Materia</button>'  ;
                } else if ($_SESSION["rol"] == "Administrador"){
                    echo '<button type="button" class="list-group-item btn-opcion" id="crear" onclick="location.href=\'./formCrearMateria.php\'">Crear Materia</button>'  ;
                    echo '<button type="button" class="list-group-item btn-opcion" id="crear">Participantes</button>'; 
                } else if ($_SESSION["rol"] == "Alumno"){
                    echo '<button type="button" class="list-group-item btn-opcion" id="crear">Calificaciones</button>'; 
                } else if ($_SESSION["rol"] == "Moderador"){

                }
            ?>
            
        </ul>
    </aside>    -->

    <div id="nuevo">
        <button id="crearComentario">Agregar Comentario/Pregunta</button>
    </div>

    <div id="nuevoComentario" style="display:none">
        
        <!-- <p>Nombre del alumno:</p> -->
        <h5 class="mt-0">Comentario:</h5>
        <br>
        <div id="info"><label></label> <input type="text" name="info-comentario" ></div><br>
        <button id="btn-guardar-comentario">Guardar</button>

    </div>
  

    <!-- <img src="..." id="imagenAlum" class="flex-shrink-0 me-3" alt="..."> -->
    <div class="d-flex position-relative pregunta" id="contenido" style="display:none">
        <h5 class="mt-0">Comentario:</h5>
        <p>Nombre del alumno:</p>
        <button id="responder">Responder</button>
        <div id="contenedor-agregar" style="display:none">
            <form id="form-nuevo">
                <br>
                <div class="info"><label></label> <input type="text" name="info-respuesta" ></div><br>
                <button id="btn-enviar">Enviar</button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../js/foroEstudiantes.js"></script>
</body>
</html>