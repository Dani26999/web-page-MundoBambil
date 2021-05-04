<?php
    include_once __DIR__."/../models/modeloConectaBD.php";
    include_once __DIR__."/../models/modeloConsultaRecursos.php";

    $conexion = conectaBD();
    $nombre = "Portada";
    $resultado = consultaRecurso($conexion,$nombre);
    $conexion = null;
    include_once __DIR__."/../views/vistaPortada.php";
?>