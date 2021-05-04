$(document).ready(function(){

    $('body').on('click','.barranavcontenido', function () {
        var categoria= $(this).attr('id');
        if(categoria.localeCompare("inicio")!=0){
            $.ajax({url:"index.php?accion=categoria&categoria="+categoria,success:function (result) {
                    $(".main").html(result);
                }});
             }
    });
    $('body').on('click','.product_display li', function () {
        var producto= $(this).attr('id');

        $.ajax({url:"index.php?accion=producto&producto="+producto,success:function (result) {
                $(".main").html(result);
            }});
    });
    $('#desplegable').mouseover(function () {
        $("#userDesplegable").toggle();
    });
    $('#desplegable').mouseout(function () {
        $("#userDesplegable").toggle();
    })


    $('body').on('click','.producto button', function () {
        var producto= $(this).attr('id');

        $.ajax({url:"index.php?accion=añadir&producto="+producto,success:function (result) {
                $("#infoCarrito").html(result);
            }});
    });

    $('body').on('click','#vaciarCarro', function () {
        $.ajax({url:"index.php?accion=vaciarCarro",success:function (result) {
            var productos= document.getElementById('productos');
            productos.innerHTML= "";
            var pie = document.getElementById('pieCarrito');
            pie.innerHTML = "<p>Cantidad: <b>0</b> Total: <b>0€</b></p>";
            var cabezote = document.getElementById('infoCarrito');
            cabezote.innerHTML = "CANTIDAD: 0 IMPORTE: 0€";

            }});

    });

    $('body').on('click ','.botonSumar button', function () {

        var producto = $(this).attr('id');

        var qty= document.getElementById('cantidadContador'+producto).outerText;
        qty= parseFloat(qty)+1;

        $.ajax({url:"index.php?accion=modificarCantidad&&productoP="+producto+"&&cantidad="+qty,success:function (result) {
                var cantidad =document.getElementById('cantidadContador'+producto);
                var valorCantidad = Number(cantidad.outerText) +1;
                cantidad.innerHTML = valorCantidad;

                var cantidadb = document.getElementById('cantidadPC'+producto);
                cantidadb.innerHTML = valorCantidad;

                var subTotal = document.getElementById('subTotalContador'+producto);
                var precio = document.getElementById('precio'+producto);
                var valorSubTotal = Number(subTotal.outerText) + Number(precio.outerText);
                subTotal.innerHTML = valorSubTotal;

                var cantidadTotal =document.getElementById('cantidadTotal');
                var valorCantidadTotal = Number(cantidadTotal.outerText) +1;
                cantidadTotal.innerHTML = valorCantidadTotal;

                var precioTotal = document.getElementById('precioTotal');
                var valorPrecioTotal = Number(precioTotal.outerText) + Number(precio.outerText);
                precioTotal.innerHTML = valorPrecioTotal;

                var cantidadCarrito =document.getElementById('cantidadCarrito');
                cantidadCarrito.innerHTML = valorCantidadTotal;

                var precioCarrito = document.getElementById('precioCarrito');
                precioCarrito.innerHTML = valorPrecioTotal;
            }});

    });
    $('body').on('click','.botonRestar button', function () {

        var producto = $(this).attr('id');

        var qty= document.getElementById('cantidadContador'+producto).outerText;
        if(parseFloat(qty)>1) {
            if (qty == 0) {
                qty = 1;
            }
            qty = parseFloat(qty) - 1;

            $.ajax({
                url: "index.php?accion=modificarCantidad&&productoP=" + producto + "&&cantidad=" + qty,
                success: function (result) {
                    var cantidad = document.getElementById('cantidadContador' + producto);
                    var valorCantidad = Number(cantidad.outerText) - 1;
                    cantidad.innerHTML = valorCantidad;

                    var cantidadb = document.getElementById('cantidadPC' + producto);
                    cantidadb.innerHTML = valorCantidad;

                    var subTotal = document.getElementById('subTotalContador' + producto);
                    var precio = document.getElementById('precio' + producto);
                    var valorSubTotal = Number(subTotal.outerText) - Number(precio.outerText);
                    subTotal.innerHTML = valorSubTotal;

                    var cantidadTotal = document.getElementById('cantidadTotal');
                    var valorCantidadTotal = Number(cantidadTotal.outerText) - 1;
                    cantidadTotal.innerHTML = valorCantidadTotal;

                    var precioTotal = document.getElementById('precioTotal');
                    var valorPrecioTotal = Number(precioTotal.outerText) - Number(precio.outerText);
                    precioTotal.innerHTML = valorPrecioTotal;

                    var cantidadCarrito = document.getElementById('cantidadCarrito');
                    cantidadCarrito.innerHTML = valorCantidadTotal;

                    var precioCarrito = document.getElementById('precioCarrito');
                    precioCarrito.innerHTML = valorPrecioTotal;
                }
            });
        }

    });
    $('body').on('click','.botonEliminar', function () {

        var producto = $(this).attr('id');
        $.ajax({url:"index.php?accion=modificarCantidad&&productoP="+producto+"&&cantidad=0",success:function (result) {


                var cantidad = document.getElementById('cantidadContador' + producto);

                var cantidadTotal = document.getElementById('cantidadTotal');
                var valorCantidadTotal = Number(cantidadTotal.outerText) - Number(cantidad.outerText);
                cantidadTotal.innerHTML = valorCantidadTotal;

                var cantidadCarrito = document.getElementById('cantidadCarrito');
                cantidadCarrito.innerHTML = valorCantidadTotal;

                var subTotal = document.getElementById('subTotalContador' + producto);
                var precioTotal = document.getElementById('precioTotal');
                var valorPrecioTotal = Number(precioTotal.outerText) - Number(subTotal.outerText);
                precioTotal.innerHTML = valorPrecioTotal;

                var precioCarrito = document.getElementById('precioCarrito');
                precioCarrito.innerHTML = valorPrecioTotal;

                var productoEliminado= document.getElementById('producto'+producto);
                productoEliminado.innerHTML= "Producto eliminado de la cesta";

            }});

    });

});
