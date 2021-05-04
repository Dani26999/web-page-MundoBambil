<?php
    if(isset($error)){
        echo "<h2>Error al iniciar sesión. Pruebe de nuevo.</h2>";
    }

?>
<form action="index.php?accion=inicioSesion" method="post">
    Correo electrónico: <input type="email" name="usuario" required></br></br>
    Contraseña: <input type="password" name="contraseñaIS" required></br></br>
    <input type="submit" class="botonRegistro" value="Iniciar sesión">
</form>
