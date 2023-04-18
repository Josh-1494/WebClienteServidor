$(document).ready(function(){
    cargaCarrito();

    $("#btEnviar").click(function(){
        LimpiaCarrito();
    });

    $("#btRestablecer").click(function(){
        LimpiaCampos();
    });

});



function cargaCarrito(){
    try{
        $.ajax({
            url:'getCarrito.php'
        })
        .done(function(data){
            ImprTablaJson(data);
        });
    }catch (err){
        alert(err);
    }
}

function ImprTablaJson(TextoJSON){
    let ObjetoJSON = JSON.parse(TextoJSON);

$("#carrito").append("<tr>");
$("#carrito").append("<th scope='col'> ITEM </th>");
$("#carrito").append("<th scope='col'> PRODUCTOID </th>");
$("#carrito").append("<th scope='col'> Cantidad </th>");
$("#carrito").append("<th scope='col'> PRECIO </th>");
$("#carrito").append("</tr>");

for (i=0; i < ObjetoJSON.length; i++){
    $("#carrito").append("<tr>");
    $("#carrito").append("<th scope='row'>" + ObjetoJSON[i].CARRITOID + "</td>");
    $("#carrito").append("<td>" + ObjetoJSON[i].PRODUCTOID + "</td>");
    $("#carrito").append("<td>" + ObjetoJSON[i].CANT + "</td>");
    $("#carrito").append("<td>" + ObjetoJSON[i].PRECIO + "</td>");
    $("#carrito").append("<td>" + "<a href='actualizaCarrito.php?PRODUCTOID=" + ObjetoJSON[i].PRODUCTOID + "'>Modificar</a>" + "</td>");
    $("#carrito").append("<td>" + "<a href='eliminarCarrito.php?PRODUCTOID=" + ObjetoJSON[i].PRODUCTOID + "'>Eliminar</a>" + "</td>");
   $("#carrito").append("</tr>");
}
}

function addCarrito(pPRODUCTOID, pPRECIO){
    try{
        $.ajax(
            {
                data:{
                    PRODUCTOID: pPRODUCTOID,          
                    PRECIO: pPRECIO,                  
                },
                url: 'insertaCarrito.php',
                type:'POST',
                dataType: 'json',
                success: function(r){
                    InsercionCarritoExitosa(r);
                },
                error: function(r){
                    InsercionCarritoError(r);
                }
            });
    }catch(err){
        alert(err);
    }
}
function InsercionCarritoExitosa(TextoJSON){
    $("#pnlInfo").dialog();
    $("#blInfo").html('<p>' + TextoJSON + '</p>');
    LimpiaCampos();
}

function InsercionCarritoError(TextoJSON){
    $("#pnlMensaje").dialog();
    $("#blMensaje").html('<p>Ocurrio un error</p>' + TextoJSON + '</p>');
    LimpiaCampos();
}

function LimpiaCarrito(){
    $('#NOMBRE').val('');
    $('#DESCRIPCION').val('');
    $('#PRECIO').val('');
    $('#CANTIDAD').val('');
    
}