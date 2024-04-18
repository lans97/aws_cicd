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
                        if(response.success){
                            let new_item = response.data;
                        }
                    }
                );
                $(this).removeAttr("disabled");
            }
        }
    );
})(window)

//# sourceURL=pedido.js