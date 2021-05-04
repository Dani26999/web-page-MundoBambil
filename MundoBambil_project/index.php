<?php
    session_start();

    $filesAbsolutePath='/home/TDIW/tdiw-a11/public_html/imagenes/';

    if(isset($_GET['accion'])){
        $accion=$_GET['accion'];
    }else{
        $accion="indice";
    }
    switch($accion){
        case 'registro':
            include_once __DIR__."/resourceRegistro.php";
            break;
        case 'categoria':
            include_once __DIR__."/resourceCategoria.php";
            break;
        case 'producto':
            include_once __DIR__."/resourceProducto.php";
            break;
        case'inicioSesion':
            include_once __DIR__."/resourceInicioSesion.php";
            break;
        case 'cerrarSesion':
            session_destroy();
            header('Location: index.php');
            break;
        case 'añadir':
            include_once __DIR__."/resourceAñadir.php";
            break;
        case 'visitarCarro':
            include_once __DIR__."/resourceCarrito.php";
            break;
        case 'confirmar':
            include_once __DIR__."/resourceConfirmarPedido.php";
            break;
        case 'misPedidos':
            include_once __DIR__."/resourceMisPedidos.php";
            break;
        case 'vaciarCarro':
            include_once __DIR__."/resourceVaciarCarro.php";
            break;
        case 'miPerfil':
            include_once __DIR__."/resourceEditarPerfil.php";
            break;
        case 'modificarCantidad':
            include_once __DIR__."/resourceModificarCantidad.php";
            break;
        case 'buscar':
            include_once __DIR__."/resourceBuscar.php";
            break;
        default:
            include_once __DIR__."/resourceIndice.php";
            break;
    }
?>
