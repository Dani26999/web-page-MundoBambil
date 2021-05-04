<?php
function consultaProductos($conexion,$categoria){
    try{
        $consulta=$conexion->prepare("SELECT Nom,ID,Imagen,Precio FROM Producto WHERE ID_categoria=$categoria AND Stock > 0");
        $consulta->execute();
        $resultado=$consulta->fetchALL(PDO::FETCH_ASSOC);
    }catch(PDOException $e){
        echo "ERROR ".$e->getMessage();
    }
    return $resultado;
}


?>