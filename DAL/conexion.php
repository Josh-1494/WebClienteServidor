<?php 

function conectar()
{
    $server = "localhost";
    $user = "root";
    $password = "";
    $database = "proyectotienda";
    //Establece coneccion con Base de Datos
    $conexion = mysqli_connect($server, $user, $password, $database);

    if(!$conexion){
        echo "Ocurrio un error con la conexion a la base de datos: ". mysqli_connect_error();
    }

    return $conexion;
}

function desconecta($conexion)
{
    //Cierra la conexion
    mysqli_close($conexion);
}

?>