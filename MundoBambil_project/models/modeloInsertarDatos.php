<?php
    function insertarUsuario($conexion, $nombre,$correo,$direccion,$poblacion,$codigoPostal,$password){
        try{
            $contra=password_hash($password,2);
            $insercion=$conexion->prepare("INSERT INTO Usuario2 (Nombre, Direccion, e_mail, Poblacion, Codigo_postal, Contraseña) VALUES(?,?,?,?,?,?)");

            $insercion->bindParam(1,$nombre);
            $insercion->bindParam(2,$direccion);
            $insercion->bindParam(3,$correo);
            $insercion->bindParam(4,$poblacion);
            $insercion->bindParam(5,$codigoPostal);
            $insercion->bindParam(6,$contra);
            $insercion->execute();
        }catch(PDOException $e){
            echo "ERROR ".$e->getMessage();
        }

    }

?>