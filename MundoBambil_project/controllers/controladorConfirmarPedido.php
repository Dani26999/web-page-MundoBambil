<?php
    if(isset($_SESSION['Nombre'])){
        if($_SESSION['cart']['total_productos']>0){
            include_once __DIR__."/../models/modeloConectaBD.php";
            include_once __DIR__."/../models/modeloConsultaProducto.php";

            $conexion = conectaBD();

            $stockSuperado = false;
            foreach($_SESSION['cart']['productos'] as $producto){
                $resultado = consultaProducto($conexion, $producto['id']);
                if($resultado[0]['Stock']<$producto['cantidad']){
                    $stockSuperado = true;
                    $nombreProducto = $producto['nombre'];
                    $stockProducto = $resultado[0]['Stock'];
                    break;
                }
            }

            if($stockSuperado == false){
                include_once __DIR__."/../models/modeloAñadirFactura.php";
                include_once __DIR__."/../models/modeloBuscarFacturaActual.php";
                include_once __DIR__ . "/../models/modeloAñadirProductoAFactura.php";
                include_once __DIR__."/../models/modeloActualizarStock.php";


                añadirFactura($conexion,$_SESSION['ID'],$_SESSION['cart']['total_productos'],$_SESSION['cart']['importe_total']);
                $id_factura = IDfacturaActual($conexion,$_SESSION['ID']);

                foreach ($_SESSION['cart']['productos'] as $item) {
                    añadirProductoAFactura($conexion, $id_factura[0]['ID'], $item['id'], $item['cantidad'], $item['subTotal']);
                    $resultado = consultaProducto($conexion, $item['id']);
                    $stock = $resultado[0]['Stock'] - $item['cantidad'];
                    modificarStock($conexion, $item['id'], $stock);

                }
                unset($_SESSION['cart']);
                $_SESSION['cart'] = array();
                $_SESSION['cart']['importe_total'] = 0;
                $_SESSION['cart']['total_productos'] = 0;
                $_SESSION['cart']['productos'] = array();

                $conexion = null;

                include_once __DIR__."/../views/vistaPedidoFinalizado.php";
            }else{
                include_once __DIR__."/../views/vistaCarrito.php";
            }

        }else{
            include_once __DIR__."/../views/vistaPedidoSinProductos.php";
        }
    }else{
        include_once __DIR__."/../views/vistaNOInicioSesion.php";
    }


?>