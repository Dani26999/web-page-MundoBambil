<?php
    function conectaBD(){
        $host="localhost";
        $user= "tdiw-a11";
        $password= "W11tpMpZ";
        $nombreBD="tdiwa11";
        try{
            $conexion= new PDO("mysql: host=$host;dbname=$nombreBD;charset=UTF8",$user,$password);
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch( PDOException $e){
            echo "ERROR ".$e->getMessage();
        }
        return $conexion;
    }
?>