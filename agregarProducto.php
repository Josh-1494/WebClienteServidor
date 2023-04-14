<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sitio integración de conocimientos</title>
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/sidebar.css">
    <link rel="stylesheet" href="css/fotograma.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="js/jquery-3.6.4.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="bootstrap-4.4.1-dist/css/bootstrap.css">
    <script src="bootstrap-4.4.1-dist/js/bootstrap.min.js"></script>
    <script src="js/jquery-ui-1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="js/jquery-ui-1.12.1/jquery-ui.css">
    <script src="js/productos.js"></script>
    
</head>

<body>
    <!-- Header -->
    <div>
        <?php
        include 'include/header.php';
        ?>
    </div>

    <!-- The flexible grid (content) -->
    <div class="row">
        
        <div id="formProductos" class="main">

            <br />
            <div ID="pnlMensaje" title="Error" style="display:none">
                <div>
                    <strong>Atención!</strong> Se ha presentado el siguiente problema.
                    <br />
                    <br />
                    <p ID="blMensajes"></p>
                </div>
            </div>
            <div ID="pnlInfo" title="Mensaje" style="display : none;">
                <div>
                    <strong>Información!</strong> Procesamiento éxitoso.
                    <br />
                    <br />
                    <p ID="blInfo"></p>
                </div>
            </div>
            <div style="text-align: left; font-family: Arial">
                Nombre del Producto:<br />
                <input name="NOMBRE" type="text" id="NOMBRE" style="width:504px;" /><br />

                Descripcion:<br />
                <input name="DESCRIPCION" type="text" id="DESCRIPCION" style="width:504px;" /><br />
                <br />

                PRECIO:<br />
                <input name="PRECIO" type="text" id="PRECIO" style="width:504px;" /><br />
                <br />

                CANTIDAD:<br />
                <input name="CANTIDAD" type="text" id="CANTIDAD" style="width:504px;" /><br />
                <br />

                <input type="submit" name="btEnviar" value="Enviar datos" id="btEnviar" style="width:112px;" />
                &nbsp;
                <input type="reset" name="btRestablecer" value="Restablecer" id="btRestablecer" style="width:112px;" />
            </div>
        </div>
    </div>

    </div>

    <!-- Footer -->
    <div class="footer">
        <object data="Footer.html"> Error </object>
    </div>
</body>

</html>