<?php
    function IDfacturaActual($conexion, $idUser){
        try{
            $consulta=$conexion->prepare("SELECT ID FROM Factura2 WHERE ID_Usuario ='$idUser' ORDER BY ID DESC LIMIT 1");
            $consulta->execute();
            $resultado=$consulta->fetchALL(PDO::FETCH_ASSOC);
        }catch(PDOException $e){
            echo "ERROR ".$e->getMessage();
        }
        return $resultado;
    }


?>