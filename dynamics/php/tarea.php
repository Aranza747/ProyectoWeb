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
    <link rel="stylesheet" href="">
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

    <aside id="aside">
        
    </aside>

    

   


    <script src="../js/tarea.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
    
</html>


