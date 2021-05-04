<?php
    if(!isset($_POST['usuario'])&&!isset($_POST['contraseñaIS'])) {
        include_once __DIR__ . "/../views/vistaInicioSesion.php";
    }else{
        include_once __DIR__."/../models/modeloConectaBD.php";
        include_once __DIR__."/../models/modeloBuscarUsuario.php";
        $conexion = conectaBD();
        $resultado = consultaUsuario($conexion, $_POST['usuario']);
        $conexion = null;
        if(isset($resultado[0])){
            if(password_verify($_POST['contraseñaIS'],$resultado[0]['Contraseña'])){
                $_SESSION['Nombre'] = $_POST['usuario'];
                $_SESSION['ID'] = $resultado[0]['ID'];
                if(!isset($_SESSION['cart'])){
                    $_SESSION['cart'] = array();
                    $_SESSION['cart']['importe_total'] = 0;
                    $_SESSION['cart']['total_productos'] = 0;
                    $_SESSION['cart']['productos'] = array();
                }
                header('Location: http://tdiw-a11.deic-docencia.uab.cat/index.php');
            }
        }
        $error = true;
        include_once __DIR__ . "/../views/vistaInicioSesion.php";


    }
?>
