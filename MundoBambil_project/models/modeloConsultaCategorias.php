<?php
    function consultaCategorias($conexion){
        try{
            $consulta=$conexion->prepare("SELECT Nombre, ID FROM Categoria");
            $consulta->execute();
            $resultado=$consulta->fetchALL(PDO::FETCH_ASSOC);
        }catch(PDOException $e){
            echo "ERROR ".$e->getMessage();
        }
        return $resultado;
    }
?>