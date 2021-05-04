<?php

    include_once __DIR__."/../models/modeloConectaBD.php";
    include_once __DIR__."/../models/modeloProductoCarro.php";

    $conexion = conectaBD();
    $resultado = consultaProductoAñadir($conexion,$_GET['productoP']);
    $conexion = null;
    if($_GET['cantidad']==0){
        unset($_SESSION['cart']['productos'][$resultado[0]['ID']]);
    }else{
        $_SESSION['cart']['productos'][$resultado[0]['ID']]['cantidad'] = (float)$_GET['cantidad'];
        $_SESSION['cart']['productos'][$resultado[0]['ID']]['subTotal'] = $resultado[0]['Precio'] * (float)$_GET['cantidad'];
    }
    $_SESSION['cart']['importe_total'] = 0;
    $_SESSION['cart']['total_productos'] = 0;
    foreach($_SESSION['cart']['productos'] as $item){
        $_SESSION['cart']['importe_total'] += $item['subTotal'];
        $_SESSION['cart']['total_productos'] += $item['cantidad'];
    }

?>