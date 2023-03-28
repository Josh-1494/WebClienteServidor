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
    <link href="//db.onlinewebfonts.com/c/115792e2e8292773cdb8dd0ab76459f2?family=Font+Awesome+6+Free+Solid" rel="stylesheet" type="text/css" />
    <link rel="preload" href="css/styles.css" as="style">
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
    <div class="container hidden">
        <h2>Contacto</h2>
        <div class="container2">
            <h3>Contactenos llenando el formulario</h3>
            <form method="POST" id="formularioDatos" class="form">
                <div class="form-row1">
                    <div class="form-col">
                        <label for="nombre">Nombre</label>                   
                        <input type="text"  name="nombre" id="nombre" required>                      
                    </div>
                    <div class="form-col">
                        <label for="telefono">Telefono</label>                   
                        <input type="tel"  name="telefono" id="telefono" pattern="[0-9]{4}[0-9]{4}" minlength="8" required>
                    </div>                    
                </div>
                <div class="form-row2">
                    <label for="correo">Correo</label>                   
                    <input type="email"  name="correo" id="correo" pattern=".+@.+\.com" required>
                </div>
                <div class="form-row2">
                    <label for="mensaje">Mensaje</label>                   
                    <textarea name="mensaje"  id="mensaje" rows="3" required></textarea>                            
                </div>
                <div class="form-row2">
                    <button type="submit" id="btEnviar" name="btEnviar" onclick="almacenamiento();validacion();">Enviar</button>                            
                </div>
                <br>
            </form>
        </div>
    </div>

    <br>
    <br>
    <br>
    <section>
        <div>
            <form action="php/contactenos/enviarCorreo.php" method="post">
                <label for="destinatario">Destinatario:</label>
                <input type="email" id="destinatario" name="destinatario" required><br>

                <label for="asunto">Asunto:</label>
                <input type="text" id="asunto" name="asunto" required><br>

                <label for="cuerpo">Cuerpo del correo:</label>
                <textarea id="cuerpo" name="cuerpo" required></textarea><br>

                <input type="submit" value="Enviar correo">
            </form>

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
    <script src="js/jquery-3.6.4.js"></script>
    <script language="JavaScript" type="text/javascript" src="js/script.js"></script>

</body>

</html>