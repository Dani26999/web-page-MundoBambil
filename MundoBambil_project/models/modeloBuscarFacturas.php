<?php
function consultaFacturas($conexion,$usuario){
    try{
        $consulta=$conexion->prepare("SELECT ID, Cantidad, Coste FROM Factura2 WHERE ID_Usuario='$usuario'");
        $consulta->execute();
        $resultado=$consulta->fetchALL(PDO::FETCH_ASSOC);
    }catch(PDOException $e){
        echo "ERROR ".$e->getMessage();
    }
    return $resultado;
}
?>