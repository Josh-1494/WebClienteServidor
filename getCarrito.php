<?php 

include 'conexion.php';
$elSQL = "SELECT * from carrito";

// $elSQL = "SELECT p.PRODUCTOID, p.PRECIO, p.NOMBRE as productos, c.CARRITOID, c.CANT, c.PRODUCTOID 
// FROM productos p, carrito c 
// where p.PRODUCTOID = $PRODUCTOID and c.PRODUCTOID = $PRODUCTOID";

$myArray = getArray($elSQL);
echo json_encode($myArray, JSON_UNESCAPED_UNICODE);
?>