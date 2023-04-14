<?php 
include 'conexion.php';
$elSQL = "SELECT * FROM productos";
$myArray = getArray($elSQL);
echo json_encode($myArray, JSON_UNESCAPED_UNICODE);
?>