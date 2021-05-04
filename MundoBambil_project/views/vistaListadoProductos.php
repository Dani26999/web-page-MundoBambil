<ul class="product_display">
    <?php foreach($productos as $fila): ?>
    <li id= <?php echo $fila['ID']; ?>>
        <h3><?php echo $fila['Nom']; ?></h3>
        <img src="imagenes/<?php echo $fila['Imagen']; ?>">
        <p><?php echo $fila['Precio'];?>€</p>
    </li>
    <?php endforeach; ?>

</ul>