<h1 id="misPedidos">MIS PEDIDOS</h1>
<?php
    foreach($facturas as $factura){
        echo "<div class='pedido'>";
        echo "<h3> Pedido con identificador: ".$factura['ID']."</h3>";
        echo "<h5> Contiene: </h5>";

        foreach($productos[$factura['ID']] as $item){
            echo "<div class='productoPedido'>";
            echo "<p> Nombre: <b>".$productosPedido[$item['ID_producto']][0]['Nom']."</b>";
            echo "<img src='imagenes/".$productosPedido[$item['ID_producto']][0]['Imagen']."''>";
            echo "<p>Cantidad: <b>".$item['Cantidad']."</b> Subtotal: <b>".$item['Precio']."€</b></p>";
            echo "</div>";
        }


        echo "<p>Cantidad: <b>".$factura['Cantidad']."</b> Importe total: <b>".$factura['Coste']."€</b></p>";
        echo "</div>";


    }

?>