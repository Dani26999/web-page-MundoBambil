<h1 id="miPerfil">EDITAR MI PERFIL</h1>

<img src="<?php echo '/imagenes/'.$datos[0]['Avatar']; ?>" alt="No tienes avatar" id="imagenAvatar">

<form action="index.php?accion=miPerfil&&modificarYA=si" method="post" enctype="multipart/form-data">
    Nombre: <input type="text" name="nombre"  value="<?php echo $datos[0]['Nombre'];?>" pattern="[A-Za-z ]+" required><br/>
    Avatar: <input type="file" name="profile_image"></br>
    <?php echo $datos[0]['Avatar'];?>
    Correo electrónico: <input type="email" name="correo" value="<?php echo $datos[0]['e_mail'];?>" required><br/>
    Dirección: <input type="text" name="direccion" maxlength="30"  value="<?php echo $datos[0]['Direccion'];?>" pattern="[A-Za-z ]+" required><br/>
    Población: <input type="text" name="poblacion" maxlength="30"  value="<?php echo $datos[0]['Poblacion'];?>" pattern="[A-Za-z ]+" required><br/>
    Código postal: <input type="text" name="codigoPostal" value="<?php echo $datos[0]['Codigo_postal'];?>" pattern="[0-9]{5}" required><br/>
    Nueva contraseña (o actual): <input type="password" name="contraseña" pattern="[A-Za-z0-9]+" required><br/><br/>
    <input class="botonRegistro" type="submit" value="Modificar">
</form>