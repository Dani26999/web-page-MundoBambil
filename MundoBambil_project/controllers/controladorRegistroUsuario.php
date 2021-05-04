<?php
    $alerta = false;
    if(isset($_POST['nombre'])&&isset($_POST['correo'])&&isset($_POST['direccion'])&&isset($_POST['poblacion'])&&isset($_POST['codigoPostal'])&&isset($_POST['contraseña'])) {
        $error = "";
        if (filter_var($_POST['nombre'], FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => "<^[A-z ]{1,}$>")))) {
            if (filter_var($_POST['correo'], FILTER_VALIDATE_EMAIL)) {
                if ((filter_var($_POST['direccion'], FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => "<^[A-z ]{1,30}$>"))))) {
                    if ((filter_var($_POST['poblacion'], FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => "<^[A-z ]{1,30}$>"))))) {
                        if ((filter_var($_POST['codigoPostal'], FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => "<^[0-9]{5}$>"))))) {
                            if (filter_var($_POST['contraseña'], FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => "<^[A-z0-9]{1,}$>")))) {
                                include_once __DIR__ . "/../models/modeloConectaBD.php";
                                include_once __DIR__ . "/../models/modeloInsertarDatos.php";
                                $conexion = conectaBD();
                                insertarUsuario($conexion, $_POST['nombre'], $_POST['correo'], $_POST['direccion'], $_POST['poblacion'], $_POST['codigoPostal'], $_POST['contraseña']);
                                $conexion = null;
                                include_once __DIR__ . "/../views/vistaRegistroCompletado.php";
                            } else {
                                $alerta = true;
                                $error = "contraseña";
                            }
                        } else {
                            $alerta = true;
                            $error = "codigo postal";
                        }
                    } else {
                        $alerta = true;
                        $error = "población";
                    }
                } else {
                    $alerta = true;
                    $error = "dirección";
                }
            } else {
                $alerta = true;
                $error = "correo";
            }
        } else {
            $alerta = true;
            $error = "nombre";
        }
        if($alerta) {
            include_once __DIR__."/../views/vistaRegistroUsuario.php";
        }
    }else{
        include_once __DIR__."/../views/vistaRegistroUsuario.php";
    }
?>