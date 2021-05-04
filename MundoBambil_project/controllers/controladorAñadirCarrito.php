<?php
    include_once __DIR__."/../models/modeloConectaBD.php";
    include_once __DIR__."/../models/modeloProductoCarro.php";

    $conexion = conectaBD();
    $resultado = consultaProductoAñadir($conexion,$_GET['producto']);
    $conexion = null;
    if(!isset($_SESSION['cart'])){
        $_SESSION['cart'] = array();
        $_SESSION['cart']['importe_total'] = 0;
        $_SESSION['cart']['total_productos'] = 0;
        $_SESSION['cart']['productos'] = array();
    }

    if(!isset($_SESSION['cart']['productos'][$resultado[0]['ID']])){
        $_SESSION['cart']['productos'][$resultado[0]['ID']] = array();
        $_SESSION['cart']['productos'][$resultado[0]['ID']]['cantidad'] = 1;
        $_SESSION['cart']['productos'][$resultado[0]['ID']]['id'] = $resultado[0]['ID'];
        $_SESSION['cart']['productos'][$resultado[0]['ID']]['subTotal'] = $resultado[0]['Precio'];
        $_SESSION['cart']['productos'][$resultado[0]['ID']]['nombre'] = $resultado[0]['Nom'];
        $_SESSION['cart']['productos'][$resultado[0]['ID']]['imagen'] = $resultado[0]['Imagen'];
        $_SESSION['cart']['productos'][$resultado[0]['ID']]['precio'] = $resultado[0]['Precio'];

    }else{
        $_SESSION['cart']['productos'][$resultado[0]['ID']]['cantidad'] = $_SESSION['cart']['productos'][$resultado[0]['ID']]['cantidad'] +1;
        $_SESSION['cart']['productos'][$resultado[0]['ID']]['subTotal'] = $_SESSION['cart']['productos'][$resultado[0]['ID']]['subTotal'] + $resultado[0]['Precio'];
    }

    $_SESSION['cart']['importe_total'] = $_SESSION['cart']['importe_total'] + $resultado[0]['Precio'];
    $_SESSION['cart']['total_productos'] = $_SESSION['cart']['total_productos'] + 1;


    echo "CANTIDAD: ".$_SESSION['cart']['total_productos']."    IMPORTE: ".$_SESSION['cart']['importe_total']."€";

?>