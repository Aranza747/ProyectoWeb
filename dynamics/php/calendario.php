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
    
    
    
    
    <div id="contenedor-calendario">
        <div id="tabla-calendario">
            <table style = "border-collapse: collapse">
                
                <thead>
                    <tr>
                        <th colspan="7" id="Ano_mes"></th>
                    </tr>
                    <tr>
                        <th id="domingo">Domingo</th>
                        <th id="lunes">Lunes</th>
                        <th id="martes">Martes</th>
                        <th id="miercoles">Miércoles</th>
                        <th id="jueves">Jueves</th>
                        <th id="viernes">Viernes</th>                                        
                        <th id="sabado">Sábado</th>
                    </tr>
                </thead>
                <tbody id="tabla">
                    <!-- <div id="crear">

                    </div>  -->
                </tbody>
            </table>    
        </div>
    </div>

    <button type="button" class="btn btn-outline-info" id="siguiente">></button>
    <button type="button" class="btn btn-outline-info" id="anterior"><</button>
    

    <?php
        if($_SESSION["rol"]=="Administrador"){
            echo '<button id="editar">Editar</button>';
        }
    ?>
    
    

    <div id="formEvento" style="display: none">     


        <form action="./agregarEventos.php" id="Formulario" method="post">

            
            
        </form>
    </div>

    
       
        
            
        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../js/calendario.js"></script>
</body>
    
</html>