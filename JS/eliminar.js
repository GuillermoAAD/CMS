function eliminarAdministrador(idFila,id,nombre) {
   var confirmacion;
   confirmacion = confirm("¿Desea eliminar el registro del administrador "+nombre+"?");
   if ( confirmacion ) {
      $('#fila'+idFila).hide();

      $.ajax({
         url      : 'elimina.php',
         type     : 'post',
         dataType : 'text',
         data     : 'id='+id,
         success  : function(res){
            alert('Administrador eliminado con exito')
            //$('#contenedor').html(res);
            //setTimeout("$('#contenedor').html('');", 80000);
         },error: function(){
            alert('Error al eliminar...')
         }
      });
   }
}

function eliminarProducto(idFila,id,nombre) {
   var confirmacion;
   confirmacion = confirm("¿Desea eliminar el registro del producto "+nombre+"?");
   if ( confirmacion ) {
      $('#fila'+idFila).hide();

      $.ajax({
         url      : 'eliminaProducto.php',
         type     : 'post',
         dataType : 'text',
         data     : 'id='+id,
         success  : function(res){
            alert('Producto eliminado con exito')
            //$('#contenedor').html(res);
            //setTimeout("$('#contenedor').html('');", 80000);
         },error: function(){
            alert('Error al eliminar...')
         }
      });
   }
}