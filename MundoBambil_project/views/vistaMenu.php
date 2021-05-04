<div class="barranav" >
    <img src="imagenes/logoMB.jpg"  id="logo">
    <div class="barranavcontenido" style="order:1;" id="inicio">
        <p><a href="index.php?accion=inicio">INICIO</a></p>
    </div>
        <?php
            $contador=2;
            foreach($categorias as $fila){
                $id = htmlentities($fila['ID'],  ENT_HTML5, 'UTF-8');
                $fila = htmlentities($fila['Nombre'], ENT_HTML5, 'UTF-8');
                echo "<div class='barranavcontenido' style='order:$contador;' id=".$id."><p>".$fila."</p></div>\n";
                $contador=$contador+1;
            }
        ?>

</div>
<br/>