<?php
function consultaProducto($conexion,$IDproducto){
    try{
        $consulta=$conexion->prepare("SELECT Nom,ID,Imagen,Descripcion,Precio,Stock FROM Producto WHERE ID=$IDproducto");
        $consulta->execute();
        $resultado=$consulta->fetchALL(PDO::FETCH_ASSOC);
    }catch(PDOException $e){
        echo "ERROR ".$e->getMessage();
    }
    return $resultado;
}


?>