<?php
function buscar($conexion,$nombreProducto){
    try{
        $consulta=$conexion->prepare("SELECT Nom,ID,Imagen,Precio FROM Producto WHERE Nom LIKE '%$nombreProducto%' AND Stock > 0");
        $consulta->execute();
        $resultado=$consulta->fetchALL(PDO::FETCH_ASSOC);
    }catch(PDOException $e){
        echo "ERROR ".$e->getMessage();
    }
    return $resultado;
}
?>