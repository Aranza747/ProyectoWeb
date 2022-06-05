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
    <link rel="stylesheet" href="../../statics/styles/CrearModulo.css">

    <title>Crear modulo</title>
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

    <!-- Button modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
        Crear Módulo
    </button>
    
    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Crea un nuevo módulo</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="../dynamics/php/crearModulo.php" method="post">
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
    </div>
    
    
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>