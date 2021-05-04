<?php
    function añadirFactura($conexion, $usuario, $cantidad, $coste){
        try{
            $insercion=$conexion->prepare("INSERT INTO Factura2 (ID_Usuario, Cantidad, Coste) VALUES(?,?,?)");

            $insercion->bindParam(1,$usuario);
            $insercion->bindParam(2,$cantidad);
            $insercion->bindParam(3,$coste);
            $insercion->execute();

        }catch(PDOException $e){
            echo "ERROR ".$e->getMessage();
        }
    }
?>