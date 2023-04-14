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
$NOMBRE = recoge("NOMBRE");
$DESCRIPCION = recoge("DESCRIPCION");
$PRECIO = recoge("PRECIO");
$CANTIDAD = recoge("CANTIDAD");

$PRODUCTOIDOk = false;
$NOMBREOk = false;
$DESCRIPCIONOk = false;
$PRECIOOk = false;
$CANTIDADOk = false;

if ($PRODUCTOID == ""){
    print "<p class=\"aviso\">No ha escrito el nombre</p>\n";
    print "\n";
} else {
    $PRODUCTOIDOk = true;
}

if ($NOMBRE == ""){
    print "<p class=\"aviso\">No ha escrito el nombre</p>\n";
    print "\n";
} else {
    $NOMBREOk = true;
}

if ($DESCRIPCION == ""){
    print "<p class=\"aviso\">No ha escrito la descripcion</p>\n";
    print "\n"; 
}else{
    $DESCRIPCIONOk = true;
}

if ($PRECIO == ""){
    print "<p class=\"aviso\">No ha declarado el precio</p>\n";
    print "\n";
}else{
    $PRECIOOk = true;
}

if ($CANTIDAD == ""){
    print "<p class=\"aviso\">No ha declarado la cantidad</p>\n";
    print "\n";
}else{
    $CANTIDADOk = true;
}



if ($NOMBREOk && $DESCRIPCIONOk && $PRECIOOk && $CANTIDADOk && $PRODUCTOIDOk){
    include 'conexion.php';
    echo json_encode(actualizaProducto($PRODUCTOID, $NOMBRE, $DESCRIPCION, $PRECIO, $CANTIDAD));
}

?>