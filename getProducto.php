<?php 
$PRODUCTOID = $_GET['PRODUCTOID'];
include 'conexion.php';
$elSQL = "SELECT PRODUCTOID,NOMBRE,DESCRIPCION,PRECIO,CANTIDAD from productos where PRODUCTOID=$PRODUCTOID";
$myArray = getObjeto($elSQL);
echo json_encode($myArray, JSON_UNESCAPED_UNICODE);
?>
