<?php
    include_once __DIR__."/../models/modeloConectaBD.php";
    include_once __DIR__ . "/../models/modeloConsultaListaProductos.php";

    $conexion=conectaBD();
    $productos=consultaProductos($conexion,$_GET['categoria']);
    $conexion = NULL;
    include_once __DIR__."/../views/vistaListadoProductos.php";



?>