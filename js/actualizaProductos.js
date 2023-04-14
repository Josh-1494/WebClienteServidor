$(document).ready(function(){
    cargaProducto();
     
     $("#btEnviar").click(function(){
         actualizaProducto($("#PRODUCTOID").val(),$("#NOMBRE").val(), $("#DESCRIPCION").val(), $("#PRECIO").val(),
         $("#CANTIDAD").val());
     });
 
     $("#btRestablecer").click(function(){
         LimpiaCampos();
     });
 
 
 });
 
 
 function cargaProducto(){
     try{
         $.ajax({
             url:'getProducto.php?PRODUCTOID=' + $("#PRODUCTOID").val()
         })
         .done(function(data){
             LlenaProductoJson(data);
         });
     }catch(err){
         alert(err);
     }
 }
 
 
 function actualizaProducto(pPRODUCTOID,pNOMBRE,pDESCRIPCION,pPRECIO,pCANTIDAD){
     try{
         $.ajax(
             {
                 data:{
                     PRODUCTOID: pPRODUCTOID,
                     NOMBRE: pNOMBRE,
                     DESCRIPCION: pDESCRIPCION,
                     PRECIO: pPRECIO,
                     CANTIDAD: pCANTIDAD,              
                 },
                 url: 'actualiza.php',
                 type:'POST',
                 dataType: 'json',
                 success: function(r){
                     ActualizaProductoExitosa(r);
                 },
                 error: function(r){
                     ActualizaProductoError(r);
                 }
             });
     }catch(err){
         alert(err);
     }
 }
 
 function ActualizaProductoExitosa(TextoJSON){
     $("#pnlInfo").dialog();
     $("#blInfo").html('<p>' + TextoJSON + '</p>');
     LimpiaCampos();
 }
 
 function ActualizaProductoError(TextoJSON){
     $("#pnlMensaje").dialog();
     $("#blMensaje").html('<p>Ocurrio un error</p>' + TextoJSON + '</p>');
     LimpiaCampos();
 }
 
 function LlenaProductoJson(TextoJSON){
     var ObjetoJSON = JSON.parse(TextoJSON);
     $('#NOMBRE').val(ObjetoJSON.NOMBRE);
     $('#DESCRIPCION').val(ObjetoJSON.DESCRIPCION);
     $('#PRECIO').val(ObjetoJSON.PRECIO);
     $('#CANTIDAD').val(ObjetoJSON.CANTIDAD);
 }

 function LimpiaCampos(){
    $('#NOMBRE').val('');
    $('#DESCRIPCION').val('');
    $('#PRECIO').val('');
    $('#CANTIDAD').val('');
    
}