(function(window){
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

    $("#text_producto").on("blur",
        function(e){
            let codigoArticulo = this.value;
            $.getJSON("/articulo-debug",
                `method=getArticulo&codigoArticulo=${codigoArticulo}`,
                function(response){
                    if(response.success){
                        $("#tabla_productos").find('tbody')
                            .append($('<tr>')
                                .append($('<td>')
                                    .text(`${response.data.codigo}`))
                                .append($('<td>')
                                    .text(`${response.data.descripcion}`))
                                .append($('<td>')
                                    .text(`${response.data.precio_unitario}`))
                                .append($('<td>')
                                    .text(`1`))
                                .append($('<td>')
                                    .text(`1`))
                                .append($('<td>')
                                    .text(`Accion`))
                            )
                    }
                }
                );
        }
    );
})(window)

//# sourceURL=pedido.js