<?php
function consultaRecurso($conexion,$nombre){
    try{
        $consulta=$conexion->prepare("SELECT Contenido FROM Recursos WHERE Nombre='$nombre'");
        $consulta->execute();
        $resultado=$consulta->fetchALL(PDO::FETCH_ASSOC);
    }catch(PDOException $e){
        echo "ERROR ".$e->getMessage();
    }
    return $resultado;
}


?>