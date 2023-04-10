<?php
// 
// --> En este file se continenen todas las funciones encargadas de gestionar los queries en la base de datos, 
//      reciben los parametros necesarios para completar cada query CRUD.
// --> De igual manera retornan los resultados de las consultas (READ)
//

require_once 'conexion.php';

function ingresarProducto($pNombre, $pDescripcion, $pPrecio, $pCantidad, $pImagen){

    $retorno = false;
    $conexion = conectar();

    if (mysqli_set_charset($conexion, "utf8")) {

        //PREPARA la consulta
        $stmt = $conexion->prepare("insert into productos (nombre, descripcion, precio, cantidad, imagen) values (?,?,?,?,?)");
        $stmt->bind_param("ssdib",$iNombre, $iDescripcion, $iPrecio, $iCantidad, $iImagen);

        //EJECUTA la consulta (SET parametros)
        $iNombre = $pNombre;
        $iDescripcion = $pDescripcion;
        $iPrecio = $pPrecio;
        $iCantidad = $pCantidad;
        $iImagen = $pImagen;

        if ($stmt->execute()) {
            $retorno = true;
            
        }
    }

    desconectar($conexion);

    return $retorno;
    
}

function consultaProdIndex(){

    $conexion = conectar();

    if (mysqli_set_charset($conexion, "utf8")) {

        //PREPARA la consulta
        $stmt = $conexion->prepare("insert into productos (nombre, descripcion, precio, cantidad, imagen) values (?,?,?,?,?)");
        $stmt->bind_param("ssdib",$iNombre, $iDescripcion, $iPrecio, $iCantidad, $iImagen);

        //EJECUTA la consulta (SET parametros)

        if ($stmt->execute()) {
            $retorno = true;
        }
    }

    desconectar($conexion);

    return $retorno;
    
}





?>