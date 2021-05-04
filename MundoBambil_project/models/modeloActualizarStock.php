<?php
function modificarStock($conexion, $producto, $stock){
    try{
        $insercion=$conexion->prepare("UPDATE Producto SET Stock=? WHERE ID='$producto'");
        $insercion->execute([$stock]);

    }catch(PDOException $e){
        echo "ERROR ".$e->getMessage();
    }

}

?>