<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="//db.onlinewebfonts.com/c/115792e2e8292773cdb8dd0ab76459f2?family=Font+Awesome+6+Free+Solid" rel="stylesheet" type="text/css"/>

    <link rel="stylesheet" href="css/styles.css">

    <script src="https://kit.fontawesome.com/9ac4c8c0ba.js" crossorigin="anonymous"></script>

    <title>DOGGO CR</title>
</head>

<body>

    <head>
        <div>
            <?php
            include 'include/menuNavegacion.php';
            ?>
        </div>
    </head>

    <section>
        <div>
        <div class="carrito">
    <?php
session_start();

if (isset($_SESSION['carrito']) && count($_SESSION['carrito']) > 0) {
    echo "<h3>Productos
    en el carrito:</h3>";
    echo "<ul>";
    foreach ($_SESSION['carrito'] as $producto_id => $cantidad) {
    // Aquí puedes buscar la información del producto en la base de datos utilizando $producto_id
    // y mostrarla como quieras. Por ahora, solo se muestra el ID del producto y la cantidad.
    echo "<li>Producto: {$producto_id} - Cantidad: {$cantidad}</li>";
    }
    echo "</ul>";
    } else {
    echo "<h3>No hay productos en el carrito.</h3>";
    }
    ?>
    </div>
        </div>
    </section>

    <footer>
        <div>
            <?php
            include 'include/footer.php';
            ?>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>

</html>