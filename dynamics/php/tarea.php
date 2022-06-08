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
    <link rel="stylesheet" href="../../statics/styles/tarea.css">
    <title>Tarea</title>
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
                    <a class="navbar-brand"  href="./pagInicio.php">
                        <img id="inicio" src="../../statics/img/Logoaula.png" alt="" width="30" height="30">
                    </a>
                </div>

                <div>
                    <a class="nav-link" href="#" id="perfil">Perfil</a>
                </div> 
            </div>
    
        </div>
    </nav>

    <!-- Perfil -->
    <?php    
        echo $_SESSION["modulo"];
        echo $_SESSION["tarea"];
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

    <aside id="aside">
        
    </aside>

    <div id="infoTarea"></div>

    

   


    <script src="../js/tarea.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
    
</html>


