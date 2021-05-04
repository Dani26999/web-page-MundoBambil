<?php
    include_once __DIR__."/../models/modeloConectaBD.php";
    include_once __DIR__."/../models/modeloConsultaProducto.php";

    $conexion=conectaBD();
    $producto=consultaProducto($conexion,$_GET['producto']);
    $conexion=NULL;

    include_once __DIR__."/../views/vistaProducto.php";
?>