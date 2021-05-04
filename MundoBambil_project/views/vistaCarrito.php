<div class="vistaCarrito">

    <h1>TU CARRITO</h1>
    <?php
        if(isset($_SESSION['cart'])) {
            echo "<div id='productos'>";
            foreach ($_SESSION['cart']['productos'] as $producto) {
                echo "<div class='productoCarrito' id='producto".$producto['id']."'>";
                echo "<button id='".$producto['id']."' class = 'botonEliminar'>&times;</button>";
                echo "<h5>" . $producto['nombre'] . "</h5>";
                echo "<div id='precio".$producto['id']."' style='display:none;'>".$producto['precio']."</div>";
                echo "<img src= 'imagenes/" . $producto['imagen'] . "'>";
                echo "<div class='botonesProductoCarrito'>";
                echo "<div class='botonRestar'>";
                echo "<button id='".$producto['id']."' class = '".$producto['cantidad']."'>-</button>";
                echo "</div>";
                echo "<span id='cantidadPC".$producto['id']."'>".$producto['cantidad']."</span>";
                echo "<div class='botonSumar'>";
                echo "<button id='".$producto['id']."' class = '".$producto['cantidad']."'>+</button>";
                echo "</div>";
                echo "</div>";
                echo " <p>Cantidad: <b><span id='cantidadContador".$producto['id']."'>" . $producto['cantidad'] . "</span></b> Subtotal: <b><span id='subTotalContador".$producto['id']."'>" . $producto['subTotal'] . "</span>€</b></p>";
                echo "</div>";
                echo "</br>";
            }
            echo "</div>";
            if(isset($stockSuperado)){
                if($stockSuperado){
                    echo "La cantidad del producto: ".$nombreProducto." supera nuestro stock actual (stock: ".$stockProducto.").";
                }
            }
            echo "<div id = 'pieCarrito'><span>Cantidad: <b><span id='cantidadTotal'>" . $_SESSION['cart']['total_productos'] . "</b></span> Total: <b><span id='precioTotal'>" . $_SESSION['cart']['importe_total'] . "</span>€</b></p></div>";
        }else{
            echo "<div id = 'pieCarrito'><p>Cantidad: <b>0</b> Total: <b>0€</b></p></div>";
        }
    ?>
    <a href="index.php?accion=confirmar"><button id="finalizarCompra">Finalizar compra</button></a>
    <button id="vaciarCarro">Vaciar carrito</button>
</div>
