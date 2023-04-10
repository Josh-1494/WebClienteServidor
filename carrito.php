<?php
include 'include/header.php';
 ?>

<section>
    <div>
        <div class="carrito">
            <?php
                session_start();
                if (isset($_SESSION['carrito']) && count($_SESSION['carrito']) > 0) {
                    echo "<h3>Productos en el carrito:</h3>";
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

<?php
include 'include/footer.php';
 ?>