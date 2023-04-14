$(document).ready(function(){
    cargaProductos();
});

function cargaProductos(){
    try{
        $.ajax({
            url:'getProductos.php'
        })
        .done(function(data){
            ImprTablaJson(data);
        });
    }catch (err){
        alert(err);
    }
}


$(document).ready(function(){


    $("#btEnviar").click(function(){
        ingresaProducto($("#NOMBRE").val(), $("#DESCRIPCION").val(), $("#PRECIO").val(),
        $("#CANTIDAD").val());
    });

    $("#btRestablecer").click(function(){
        LimpiaCampos();
    });


});





function ingresaProducto(pNOMBRE, pDESCRIPCION, pPRECIO, pCANTIDAD){
    try{
        $.ajax(
            {
                data:{
                    NOMBRE: pNOMBRE,
                    DESCRIPCION: pDESCRIPCION,
                    PRECIO: pPRECIO,
                    CANTIDAD: pCANTIDAD,
                    
                },
                url: 'insertaProducto.php',
                type:'POST',
                dataType: 'json',
                success: function(r){
                    InsercionProductoExitosa(r);
                },
                error: function(r){
                    InsercionProductoError(r);
                }
            });
    }catch(err){
        alert(err);
    }
}
function InsercionProductoExitosa(TextoJSON){
    $("#pnlInfo").dialog();
    $("#blInfo").html('<p>' + TextoJSON + '</p>');
    LimpiaCampos();
}

function InsercionProductoError(TextoJSON){
    $("#pnlMensaje").dialog();
    $("#blMensaje").html('<p>Ocurrio un error</p>' + TextoJSON + '</p>');
    LimpiaCampos();
}





function ImprTablaJson(TextoJSON){
    let ObjetoJSON = JSON.parse(TextoJSON);

$("#productos").append("<tr>");
$("#productos").append("<th scope='col'> PRODUCTOID </th>");
$("#productos").append("<th scope='col'> Nombre </th>");
$("#productos").append("<th scope='col'> Descripcion </th>");
$("#productos").append("<th scope='col'> Precio </th>");
$("#productos").append("<th scope='col'> Cantidad </th>");
$("#productos").append("<th scope='col'> Actualiza </th>");
$("#productos").append("<th scope='col'> Elimina </th>");
$("#productos").append("</tr>");

for (i=0; i < ObjetoJSON.length; i++){
    $("#productos").append("<tr>");
    $("#productos").append("<th scope='row'>" + ObjetoJSON[i].PRODUCTOID + "</td>");
    $("#productos").append("<td>" + ObjetoJSON[i].NOMBRE + "</td>");
    $("#productos").append("<td>" + ObjetoJSON[i].DESCRIPCION + "</td>");
    $("#productos").append("<td>" + ObjetoJSON[i].PRECIO + "</td>");
    $("#productos").append("<td>" + ObjetoJSON[i].CANTIDAD + "</td>");
    $("#productos").append("<td>" + "<a href='actualizaProducto.php?PRODUCTOID=" + ObjetoJSON[i].PRODUCTOID + "'>Modificar</a>" + "</td>");
    $("#productos").append("<td>" + "<a href='eliminarProducto.php?PRODUCTOID=" + ObjetoJSON[i].PRODUCTOID + "'>Eliminar</a>" + "</td>");
    $("#productos").append("</tr>");
}
}


function LimpiaCampos(){
    $('#NOMBRE').val('');
    $('#DESCRIPCION').val('');
    $('#PRECIO').val('');
    $('#CANTIDAD').val('');
    
}