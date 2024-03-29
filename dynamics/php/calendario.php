<?php
    session_name("SesionUsuario");
    session_id("123456789");
    session_start();

    date_default_timezone_set('America/Mexico_City');
    $fechaAct=date('Y-m-j');
    $fechaAct2=date('Y-m-D');
    // $_SESSION["fecha1"] = $fechaAct;
    // $_SESSION["fecha2"] = $fechaAct2;


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="../../libs/bootstrap-5.2.0-beta1-dist/css/bootstrap.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../statics/styles/calendario.css">

    <title>Calendario</title>
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
            <button type="button" class="list-group-item btn-opcion" id="foro" onclick="location.href='./foro.php'">Foro </button>
            <button type="button" class="list-group-item btn-opcion" id="tablon" onclick="location.href='./vistaTablon.php'">Tablon</button>
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
    <!-- Perfil -->
    
    
    
    
    <div id="contenedor">
        <div id="hijoCalendario">
            <table class="cuerpo" style = "border-collapse: collapse">
                <thead>
                    <tr>
                        <div id="año">
                                <th colspan="7" id="titulo"><button type="button" class="btn btn-outline-info" id="anterior"><</button>
                                <span id="Ano_mes"></span>
                                <button type="button" class="btn btn-outline-info" id="siguiente">></button></th>
                        </div>
                    </tr>
                    <tr>
                        <th id="domingo" class="dias">Domingo</th>
                        <th id="lunes" class="dias">Lunes</th>
                        <th id="martes" class="dias">Martes</th>
                        <th id="miercoles" class="dias">Miércoles</th>
                        <th id="jueves" class="dias">Jueves</th>
                        <th id="viernes" class="dias">Viernes</th>                                        
                        <th id="sabado" class="dias">Sábado</th>
                    </tr>
                </thead>

                <tbody id="tabla">
                    <!-- <div id="crear">

                    </div>  -->
                </tbody>

            </table> 
        </div>

        <div id="boton">
        <?php
            if($_SESSION["rol"]=="Administrador"){
                echo '<button id="editar">Editar</button>';
            }
        ?>
        </div>
    </div>
    <div id="formEvento" style="display: none">     
            <form action="./agregarEventos.php" id="Formulario" method="post">
            </form>
        </div>


    
       
        
            
        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../js/calendario.js"></script>
</body>
    
</html>