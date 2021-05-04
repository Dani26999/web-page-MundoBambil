<?php
    if($alerta==true){
        echo "<h3> Por favor intente registrarse de nuevo, el campo $error es incorrecto.</h3>";
    }
?>
<section class="formularioRegistro">
    <form action="index.php?accion=registro" method="post" >
        <br/>
        Nombre: <input type="text" name="nombre" placeholder="Solo carácteres y espacios" pattern="[A-Za-z ]+" required><br/>
        Correo electrónico: <input type="email" name="correo" required><br/>
        Dirección: <input type="text" name="direccion" maxlength="30" pattern="[A-Za-z ]+" required><br/>
        Población: <input type="text" name="poblacion" maxlength="30" pattern="[A-Za-z ]+" required><br/>
        Código postal: <input type="text" name="codigoPostal" pattern="[0-9]{5}" required><br/>
        Contraseña: <input type="password" name="contraseña" placeholder="Solo puede contener letras y números" pattern="[A-Za-z0-9]+" required><br/><br/>
        <input class="botonRegistro" type="submit" value="Registrarme">
    </form>
</section>