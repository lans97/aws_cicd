(function(window){
    
    let carrito = [];

    $("#fndCliente").on("blur",
        function(e){
            let idCliente = this.value;
            $.getJSON("/cliente-debug",
                `method=getCliente&idCliente=${idCliente}`,
                function(response){
                    if(response.success){
                        $("#span_cliente").html(response.data.nombre);
                        $("#span_correo").html(response.data.correo);
                    }
                }
                );
        }
    );

    $("#text_producto").on("keypress",
        function(e){
            if (e.which === 13) {
                $(this).attr("disabled", "disabled");    
                let codigoArticulo = this.value;
                $.getJSON("/articulo-debug",
                    `method=getArticulo&codigoArticulo=${codigoArticulo}`,
                    function(response){
                        if(response.success === "true"){

                            item_result = carrito.find(item => item.codigo === response.data.codigo);
                            if (item_result) {
                                item_result.cantidad++;
                                item_result.subtotal = +item_result.subtotal+item_result.subtotal + + + +response.data.precio_unitario;
                            } else {
                                carrito.push({
                                    codigo: response.data.codigo,
                                    descripcion: response.data.descripcion,
                                    precio: response.data.precio_unitario,
                                    cantidad: 1,
                                    subtotal: response.data.precio_unitario,
                                    accion: "<button>Acción</button>"
                                });
                            }
                            $("#tabla_productos tbody").html(
                            $.map(carrito, function(item) {
                                return `
                                    <tr>
                                        <td>${item.codigo}</td>
                                        <td>${item.descripcion}</td>
                                        <td>${item.precio}</td>
                                        <td>${item.cantidad}</td>
                                        <td>${item.subtotal}</td>
                                        <td>${item.accion}</td>
                                    </tr>
                                `;
                            }).join(''));
                        } else {
                            alert(`Error: ${response.errmsg}`);
                        }
                    }
                );
                $(this).removeAttr("disabled");
            }
        }
    );
})(window)

//# sourceURL=pedido.js