<?php

function conectar()
{
    $server = "localhost";
    $user = "root";
    $password = "";
    $database = "proyectotienda";
    //Establece coneccion con Base de Datos
    $conexion = mysqli_connect($server, $user, $password, $database);

    if ($conexion) {
        //echo 'La conexion se hizo satisfactoriamente'
    } else {
        //echo 'Ha sucedido un error'
    }
    return $conexion;
}

function desconectar($conexion)
{
    //Cierra la conexion
    mysqli_close($conexion);
}

function getArray($sql)
{
    $conexion = conectar();
    //consulta
    mysqli_set_charset($conexion, "utf8");

    if (!$result = mysqli_query($conexion, $sql))
        die();

    $rawdata = array();

    $i = 0;

    while ($row = mysqli_fetch_array($result)) {
        $rawdata[$i] = $row;
        $i++;
    }

    desconectar($conexion);
    return $rawdata;
}

function getObjeto($sql)
{
    $conexion = conectar();
    //consulta
    mysqli_set_charset($conexion, "utf8");

    if (!$result = mysqli_query($conexion, $sql))
        die();

    $rawdata = null;

    $i = 0;

    while ($row = mysqli_fetch_array($result)) {
        $rawdata = $row;
        $i++;
    }

    desconectar($conexion);
    return $rawdata;
}

function InsertaProductos($pNOMBRE, $pDESCRIPCION, $pPRECIO, $pCANTIDAD)
{
    $response = "";
    $conn = conectar();

    mysqli_set_charset($conn, "utf8");
    $stmt = $conn->prepare("INSERT INTO PRODUCTOS(NOMBRE, DESCRIPCION, PRECIO, CANTIDAD) VALUES (?,?,?,?)");
    $stmt->bind_param("siis", $inombre, $idescripcion, $iprecio, $icantidad);

    $inombre = $pNOMBRE;
    $idescripcion = $pDESCRIPCION;
    $iprecio = $pPRECIO;
    $icantidad = $pCANTIDAD;


    $stmt->execute();

    $response = "se almaceno correctamente";
    $stmt->close();
    desconectar($conn);
    return $response;
}

function actualizaProducto($pPRODUCTOID, $pNOMBRE, $pDESCRIPCION, $pPRECIO, $pCANTIDAD)
{
    $response = "";
    $conn = conectar();
    mysqli_set_charset($conn, "utf8");

    $stmt = $conn->prepare("update productos
    set NOMBRE=?, 
    DESCRIPCION=?, 
    PRECIO=?, 
    CANTIDAD=?
    WHERE PRODUCTOID=?");

    $stmt->bind_param("ssdii", $inombre, $idescripcion, $iprecio, $icantidad, $iproductoid);


    $inombre = $pNOMBRE;
    $idescripcion = $pDESCRIPCION;
    $iprecio = $pPRECIO;
    $icantidad = $pCANTIDAD;
    $iproductoid = $pPRODUCTOID;


    $stmt->execute();

    $response = "se actualizo el producto";
    $stmt->close();
    desconectar($conn);
    return $response;

}

function eliminarProducto($pPRODUCTOID)
{
    $response = "";
    $conn=conectar();
    $stmt = $conn->prepare("delete from productos where PRODUCTOID = ?");
    $stmt -> bind_param("i",$PRODUCTOID);

    $PRODUCTOID = $pPRODUCTOID;
    $stmt -> execute();
    $response = "Se elimino correctamente";

    $stmt -> close();
    desconectar($conn);
    return $response;
}

?>