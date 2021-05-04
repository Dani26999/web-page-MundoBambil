<?php
    function modificarUsuario($conexion, $nombre,$correo,$direccion,$poblacion,$codigoPostal,$password,$avatar,$emailActual){
        try{
            $contra=password_hash($password,2);
            $insercion=$conexion->prepare("UPDATE Usuario2 SET Nombre=?,Direccion=?,e_mail=?,Poblacion=?,Codigo_postal=?,Contraseña=?,Avatar=? WHERE e_mail='$emailActual'");
            $insercion->execute([$nombre,$direccion,$correo,$poblacion,$codigoPostal,$contra,$avatar]);

        }catch(PDOException $e){
            echo "ERROR ".$e->getMessage();
        }

    }

?>