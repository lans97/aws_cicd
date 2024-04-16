(function(window){
    $("#levantarPedido").on("click", 
        function(e){
            e.preventDefault();
            $('#mainContainer').load('/carrito', function() {
                $.getScript("js/carrito/pedido.js");
            });
        }
    );
})(window);
