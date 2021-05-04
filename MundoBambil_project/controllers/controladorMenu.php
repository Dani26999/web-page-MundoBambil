<?php
    include_once __DIR__."/../models/modeloConectaBD.php";
    include_once  __DIR__."/../models/modeloConsultaCategorias.php";

    $conexion=conectaBD();
    $categorias=consultaCategorias($conexion);
    $conexion=NULL;
    include_once __DIR__."/../views/vistaMenu.php";
?>