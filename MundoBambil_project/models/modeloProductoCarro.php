<?php
function consultaProductoAñadir($conexion,$IDproducto){
    try{
        $consulta=$conexion->prepare("SELECT Nom,ID,Imagen,Precio FROM Producto WHERE ID=$IDproducto");
        $consulta->execute();
        $resultado=$consulta->fetchALL(PDO::FETCH_ASSOC);
    }catch(PDOException $e){
        echo "ERROR ".$e->getMessage();
    }
    return $resultado;
}


?>