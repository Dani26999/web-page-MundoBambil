<?php
    function consultaDDPPUsuario($conexion, $usuario){
        try{
            $consulta=$conexion->prepare("SELECT Nombre, Direccion, e_mail, Poblacion, Codigo_postal, Avatar FROM Usuario2 WHERE e_mail='$usuario'");
            $consulta->execute();
            $resultado=$consulta->fetchALL(PDO::FETCH_ASSOC);
        }catch(PDOException $e){
            echo "ERROR ".$e->getMessage();
        }
        return $resultado;
    }
?>