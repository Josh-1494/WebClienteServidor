<?php
function recoge ($var, $m = "")
{
    if(!isset($_REQUEST[$var])){
        $tmp = (is_array($m)) ? [] : "";

    }elseif (!is_array($_REQUEST[$var])){
        $tmp = trim(htmlspecialchars($_REQUEST[$var], ENT_QUOTES, "UTF-8"));
    }else {
        $tmp = $_REQUEST[$var];
        array_walk_recursive($tmp, function (&$valor){
            $valor = trim(htmlspecialchars($valor, ENT_QUOTES,"UTF-8"));
        });
    }
    return $tmp;
}


$PRODUCTOID = recoge("PRODUCTOID");
$PRODUCTOIDOk = false;

if ($PRODUCTOID == ""){
    print "<p class=\"aviso\">No ha enviado la tutoria a eliminar</p>\n";
    print "\n";
} elseif (!is_numeric($PRODUCTOID)) {
    print "<p class=\"aviso\">tutoria no valida</p>\n";
    print "\n";
    
}else{
    $PRODUCTOIDOk = true;
}

if($PRODUCTOIDOk){
    include 'conexion.php';
    eliminarCarrito($PRODUCTOID);
    header ("Location: carrito.php");
    die();
}

?>