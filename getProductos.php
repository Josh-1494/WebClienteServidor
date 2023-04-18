<?php 
include 'conexion.php';
$elSQL = "SELECT PRODUCTOID, NOMBRE, DESCRIPCION, PRECIO, CANTIDAD FROM productos";
$myArray = getArray($elSQL);
echo json_encode($myArray, JSON_UNESCAPED_UNICODE);
?>