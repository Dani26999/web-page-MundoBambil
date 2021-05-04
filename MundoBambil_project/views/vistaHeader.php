<div id="reg_ini">
    <form action="index.php?accion=buscar" method="post" >
        <input type ="text" name="producto" placeholder="Buscar productos">
        <input type="submit" value="BUSCAR">
    </form>
    <a id= "carrito" href="index.php?accion=visitarCarro"> <img src="imagenes/carrito2.png"></a>
    <div id="infoCarrito">

        <?php
            if(isset($_SESSION['cart'])){
                echo "CANTIDAD: <span id='cantidadCarrito'>".$_SESSION['cart']['total_productos']."</span>    IMPORTE: <span id='precioCarrito'>".$_SESSION['cart']['importe_total']."</span>€";
            }else{
                echo "CANTIDAD: 0 IMPORTE: 0€";
            }
        ?>
    </div>
    <div id="desplegable">
        <img src="imagenes/usuario.png" id="user">
        <div id="userDesplegable">
            <ul>
                <?php if(isset($_SESSION['Nombre'])){ ?>
                    <a href="index.php?accion=miPerfil"><li>Mi cuenta</li></a>
                    <a href="index.php?accion=misPedidos"><li>Mis pedidos</li></a>
                    <a href="index.php?accion=cerrarSesion"><li>Cerrar sesión</li></a>
                <?php }
                else{?>
                    <a href="index.php?accion=registro" ><li>Registrarse</li></a>
                    <a href="index.php?accion=inicioSesion"><li>Iniciar sesión</li></a>
                <?php } ?>
            </ul>
        </div>
    </div>



</div>