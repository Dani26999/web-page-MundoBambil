<?php
    function consultaUsuario($conexion, $usuario){
        try{
            $consulta=$conexion->prepare("SELECT Contraseña,ID FROM Usuario2 WHERE e_mail='$usuario'");
            $consulta->execute();
            $resultado=$consulta->fetchALL(PDO::FETCH_ASSOC);
        }catch(PDOException $e){
            echo "ERROR ".$e->getMessage();
        }
        return $resultado;
    }
?>