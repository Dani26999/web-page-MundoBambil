<?php
    include_once __DIR__."/../models/modeloConectaBD.php";
    include_once __DIR__."/../models/modeloBuscarFacturas.php";

    $conexion = conectaBD();
    $facturas = consultaFacturas($conexion, $_SESSION['ID']);
    if(sizeof($facturas)==0){
        include_once __DIR__."/../views/vistaNoPedidos.php";
    }else{
        include_once __DIR__."/../models/modeloBuscarProductosFactura.php";
        include_once __DIR__."/../models/modeloConsultaProducto.php";
        $productos = array();
        $productosPedido = array();
        foreach($facturas as $fila){
            $productos[$fila['ID']] = consultaProductosFactura($conexion, $fila['ID']);
            foreach($productos[$fila['ID']] as $item){
                $productosPedido[$item['ID_producto']] = consultaProducto($conexion, $item['ID_producto']);
            }
        }
        $conexion = null;
        include_once __DIR__."/../views/vistaMisPedidos.php";
    }
?>