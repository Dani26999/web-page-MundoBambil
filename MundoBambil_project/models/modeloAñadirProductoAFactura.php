<?php
    function añadirProductoAFactura($conexion, $id_factura, $id_producto, $cantidad, $subTotal){
        try{
            $insercion=$conexion->prepare("INSERT INTO LineaCompra (ID_factura, ID_producto, Cantidad, Precio) VALUES(?,?,?,?)");

            $insercion->bindParam(1,$id_factura);
            $insercion->bindParam(2,$id_producto);
            $insercion->bindParam(3,$cantidad);
            $insercion->bindParam(4,$subTotal);
            $insercion->execute();
        }catch(PDOException $e){
            echo "ERROR ".$e->getMessage();
        }
    }
?>