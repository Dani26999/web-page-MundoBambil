<?php
    include_once __DIR__."/../models/modeloConectaBD.php";
    $conexion = conectaBD();

    if(!isset($_GET['modificarYA'])){
        include_once __DIR__."/../models/modeloBuscarDatosPersonales.php";
        $datos = consultaDDPPUsuario($conexion, $_SESSION['Nombre']);
        include_once __DIR__."/../views/vistaEditarPerfil.php";
    }else{
        include_once __DIR__ . "/../models/modeloModificarUsuario.php";

        if (isset($_FILES['profile_image']) && !empty($_FILES['profile_image'])){

            $_FILES['profile_image']['name'] = $_SESSION['ID'];
            $destination_path = $filesAbsolutePath.$_FILES['profile_image']['name'];
            move_uploaded_file($_FILES['profile_image']['tmp_name'],$destination_path);
            modificarUsuario($conexion,$_POST['nombre'],$_POST['correo'],$_POST['direccion'],$_POST['poblacion'],$_POST['codigoPostal'],$_POST['contraseña'],$_FILES['profile_image']['name'],$_SESSION['Nombre']);
            include_once __DIR__."/../views/vistaPedidoSinProductos.php";
        }else{
            include_once __DIR__."/../models/modeloBuscarDatosPersonales.php";

            $datos = consultaDDPPUsuario($conexion, $_SESSION['Nombre']);
            modificarUsuario($conexion,$_POST['nombre'],$_POST['correo'],$_POST['direccion'],$_POST['poblacion'],$_POST['codigoPostal'],$_POST['contraseña'],$datos[0]['Avatar'],$_SESSION['Nombre']);
        }
        if($_SESSION['Nombre'] != $_POST['correo']){
            $_SESSION['Nombre'] = $_POST['correo'];
        }
        header('Location: index.php?accion=miPerfil');

    }
    $conexion = null;

?>