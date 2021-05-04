<?php
function consultaProductosFactura($conexion,$id){
    try{
        $consulta=$conexion->prepare("SELECT ID_producto, Cantidad, Precio FROM LineaCompra WHERE ID_factura='$id'");
        $consulta->execute();
        $resultado=$consulta->fetchALL(PDO::FETCH_ASSOC);
    }catch(PDOException $e){
        echo "ERROR ".$e->getMessage();
    }
    return $resultado;
}
?>