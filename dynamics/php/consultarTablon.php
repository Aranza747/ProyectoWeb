<?php

require "config.php";

$con = mysqli_connect($db_host, $db_user, $db_pass, $db_schema);

if(!$con){
    echo "No se pudo conectar";
}else{
    $sql = "SELECT * FROM tablon";
    $res = mysqli_query($con, $sql);
    $resultados = [];
    while($row = mysqli_fetch_assoc($res))
    {
        if($row["id_archivoTablon"]){
            $idArchivoTablon = ($row["id_archivoTablon"]);
            echo $idArchivoTablon;
            $sqlFecha = "SELECT fechaCreacion FROM archivoTablon WHERE id_archivoTablon=$idArchivoTablon";
            $resFecha = mysqli_query($con, $sqlFecha);
            $fechaCreacion = mysqli_fetch_array($resFecha, MYSQLI_ASSOC);
            //var_dump($fechaCreacion['fechaCreacion']);

            $sqlRuta = "SELECT ruta FROM archivoTablon WHERE id_archivoTablon=$idArchivoTablon";
            $resRuta = mysqli_query($con, $sqlRuta);
            $ruta= mysqli_fetch_array($resRuta, MYSQLI_ASSOC);
        }
        $idAlumno = $row["id_alumno"];
        $sqlNombre = "SELECT nombre FROM alumno WHERE id_alumno=$idAlumno";
        $resNombre = mysqli_query($con, $sqlNombre);
        $nombre= mysqli_fetch_array($resNombre, MYSQLI_ASSOC);



        $resultados[] = array("nombre" => $nombre["nombre"], "materia" => $row["materia"], "descripcion" => $row["descripcion"], "fechaCreacion" => $fechaCreacion["fechaCreacion"], "ruta" => $ruta["ruta"], "likes" => $row["likes"]);

    }
  
    echo json_encode($resultados);
     
}