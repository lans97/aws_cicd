(function(window){
    $("#fndCliente").on("blur",
        function(e){
            let idCliente = this.value;
            $.getJSON("/cliente-debug",
                `method=getCliente&idCliente=1`,
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
            let idArticulo = this.value;
            $.getJSON("/articulo-debug",
                `method=getArticulo&idArticulo=1`,
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