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


$NOMBRE = recoge("NOMBRE");
$DESCRIPCION = recoge("DESCRIPCION");
$PRECIO = recoge("PRECIO");
$CANTIDAD = recoge("CANTIDAD");

$NOMBREOK = false;
$DESCRIPCIONOK = false;
$PRECIOOK = false;
$CANTIDADOK = false;

if ($NOMBRE == ""){
    print "<p class=\"aviso\">No ha escrito el nombre</p>\n";
    print "\n";
} else {
    $NOMBREOK = true;
}

if ($DESCRIPCION == ""){
    print "<p class=\"aviso\">No ha escrito la descripcion</p>\n";
    print "\n";
} else {
    $DESCRIPCIONOK = true;
}

if ($PRECIO == ""){
    print "<p class=\"aviso\">No ha escrito el PRECIO</p>\n";
    print "\n";
} else {
    $PRECIOOK = true;
}

if ($CANTIDAD == ""){
    print "<p class=\"aviso\">No ha escrito la cantidad</p>\n";
    print "\n";
} else {
    $CANTIDADOK = true;
}

if ($NOMBREOK && $DESCRIPCIONOK && $PRECIOOK && $CANTIDADOK){
    include 'conexion.php';
    echo json_encode(InsertaProductos($NOMBRE, $DESCRIPCION, $PRECIO, $CANTIDAD));
}

?>