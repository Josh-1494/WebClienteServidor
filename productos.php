<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/jquery-3.6.4.js"></script>
    <script src="js/productos.js"></script>
    <script src="js/jquery-ui-1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="js/jquery-ui-1.12.1/jquery-ui.css">
</head>

<body>
    <!-- Header -->
    <div>
        <?php
        include 'include/header.php';
        ?>
    </div>
    <div>

        <div id="formProductos" class="main">
            <h3>Listado de productos</h3>
            <a href="agregarProducto.php"> Agregar nuevo producto </a>
            <br>
            <table id="productos" class='table'>
            </table>
        </div>
    </div>
    <!-- Footer -->
    <div>
        <?php
        include 'include/footer.php';
        ?>
    </div>

</body>

