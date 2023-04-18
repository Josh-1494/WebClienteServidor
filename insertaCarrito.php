<?php
function recoge($var, $m ="")
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
$PRECIO = recoge("PRECIO");
$NOMBRE = recoge("NOMBRE");
$CANT = recoge("CANT");
$PRODUCTOIDOK = false;
$PRECIOOK = false;
$CANTOK = false;

if ($PRODUCTOID == ""){
    print "<p class=\"aviso\">No hay producto</p>\n";
    print "\n";
} else {
    $PRODUCTOIDOK = true;
}



if ($PRODUCTOIDOK){
    include 'conexion.php';
    echo json_encode(InsertaCarrito($PRODUCTOID,$PRECIO));  
    header ("Location: productos.php");
}

?>