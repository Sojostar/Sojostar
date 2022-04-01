

function agregarcarrito_2(producto) {
   var cantidad = 1;
   var carrito = document.getElementById('carrito-modificar');
            console.log(cantidad); // Inspect this in your console
   $.ajax({
        url: 'index.php?r=inv-producto/prueba',
        type: 'GET',
        data: {"id":producto,"cant":cantidad},
        success: function(data) {
            console.log(data); // Inspect this in your console
            console.log("CANTIDAD: "+cantidad); // Inspect this in your console
            //carrito.textContent=data;

        }
    });
   $.ajax({
        url: 'index.php?r=inv-producto/preguntarcantidad',
        type: 'GET',
        data: {},
        success: function(data) {
            console.log(data); // Inspect this in your console
            carrito.textContent=data;

        }
    });
}

function recoger(newColor) {
   var elem = document.getElementById('protuctoid');
   elem.value = newColor;
      console.log(newColor);
}