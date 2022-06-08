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
    <link rel="stylesheet" href="../../statics/styles/vistaMateria.css">

    <title>Materia</title>
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

                    <dl><dt class="cabeza">Rol: &nbsp</dt>'.'<dd class="dato"> &nbsp &nbsp &nbsp &nbsp'.$_SESSION["rol"].'
                    </dd>
                    </dl> 
                </div>
            </div>
        </div>'
    ?>

    <aside>
        <!-- columna-->
        <ul class="list-group list-group-flush"> 
            <button type="button" class="list-group-item btn-opcion" id="foro" onclick="location.href='./vistaForoPreguntasFrec.php'">Foro </button>
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
    </aside>

    

    <!-- Modal -->
    <?php
        if($_SESSION["rol"] == "Profesor" || $_SESSION["rol"] == "Administrador"){
            echo '<div id="contenedor">
                <!-- Button modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    Crear Módulo
                </button>
            </div>
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Crea un nuevo módulo</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                        
                    <div class="modal-body">
                        <form action="./crearModulo.php" method="post">
                            <label for="nombreMod">Escribe el nombre del módulo: </label><br>
                            <input type="text" name="nombreMod">
                            <button type="submit" class="btn btn-primary" >Crear</button>
                        </form>
                    </div>
        
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    
                    </div>
                </div>
            </div>
        </div>';
        }


    ?>

    <div id="datosMateria">

    </div>



    <div id="contModulos">


    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../js/materia.js"></script>
</body>

</html>