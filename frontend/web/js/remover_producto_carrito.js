
function remover(producto) {
            console.log(producto); 

   $.ajax({
        url: 'index.php?r=inv-producto/removerproducto',
        type: 'GET',
        data: {"id":producto},
        success: function(product) {
            console.log(product); 
            console.log(producto); 
            //document.location.reload(true);

        }
    });
}

function cancelar(limpiarproductos) {
            console.log("Inicio Limpieza"); 
if (confirm('Seguro que desea cancelar facturacion?')) {
  // Save it!
  console.log('Carrito Vacio');
   $.ajax({
        url: 'index.php?r=inv-producto/limpiarproductos',
        type: 'GET',
        data: {},
        success: function(product) {
            console.log(product); 
        }
    });
   document.location.reload(true);
} else {
  // Do nothing!
  console.log('No pasa Nada Carrito Lleno');
}
}


function cantidad() {
   var carrito = document.getElementById('carrito-modificar');
   console.log(carrito); 
   $.ajax({
        url: 'index.php?r=inv-producto/preguntarcantidad',
        type: 'GET',
        success: function() {
            console.log(carrito); 
            //document.location.reload(true);

        }
    });
}

function modificacion(producto) {
   var cantidad = document.getElementById("producto-"+producto);
   var total = document.getElementById('total-total');
   var datos=cantidad.value;
   console.log("producto-"+producto); 
   console.log(datos); 
   $.ajax({
        data: {"id":producto,"cant":datos},
        url: 'index.php?r=inv-producto/modificarcantidad',
        type: 'GET',
        success: function() {
            console.log(producto); 
            //document.location.reload(true);

        }
    });
   $.ajax({
        url: 'index.php?r=inv-producto/total',
        type: 'GET',
        success: function(data) {
            console.log(data); 
            total.textContent="$"+data;
            //document.location.reload(true);

        }
    });
}