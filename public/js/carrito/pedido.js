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
                        console.log(response.data);
                    }
                }
                );
        }
    );
})(window)

//# sourceURL=pedido.js