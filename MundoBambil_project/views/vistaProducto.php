<div class="producto" id="responsiveProduct">
    <div style="grid-area: nombre"> <h1> <?php echo $producto[0]['Nom']; ?></h1></div>
    <div style="grid-area: imagen"><img src= <?php echo "imagenes/".$producto[0]['Imagen']; ?>></div>
    <div class="descripcion" style="grid-area: descripcion"> <h3>DESCRIPCIÓN  DEL PRODUCTO: </h3> <?php echo $producto[0]['Descripcion']; ?></div>
    <div class="precio" style="grid-area:precio"> <h4>PRECIO: <small><?php echo $producto[0]['Precio']; ?> €</small></h4></div>
    <div style="grid-area: boton"> <button id=" <?php echo $producto[0]['ID']; ?>"> Añadir a la cesta</button></div>
</div>