<?php
    include_once __DIR__."/../models/modeloConectaBD.php";
    include_once __DIR__."/../models/modeloBuscar.php";

    $conexion = conectaBD();
    $productos = buscar($conexion, $_POST['producto']);
    $conexion = NULL;
    if(sizeof($productos) == 0){
        echo "<h3 id='noProductos'>No hay resultados para su búsqueda.</h3>";
    }else{
        include_once __DIR__."/../views/vistaListadoProductos.php";
    }




?>