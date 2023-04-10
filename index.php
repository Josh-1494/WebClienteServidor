<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="//db.onlinewebfonts.com/c/115792e2e8292773cdb8dd0ab76459f2?family=Font+Awesome+6+Free+Solid"
        rel="stylesheet" type="text/css" />

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
        <!-- Carrousel con Imagenes -->
        <div class="carrousel">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"
                        aria-label="Slide 4"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/carrousel.jpg" class="d-block w-100" preload>
                        <div class="carousel-text d-none d-md-block">
                            <h5>Bowls para Mascotas</h5>
                            <p>Doggo Petbowl esta hecho del mejor tipo de acero inoxidable (Acero 304)</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/carrousel1.jpg" class="d-block w-100" preload>
                        <div class="carousel-text  d-none d-md-block">
                            <h5>Donaciones</h5>
                            <p>Por cada compra que realices, se destina el 10% a ayuda canina.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/carrousel2.jpg" class="d-block w-100" preload>
                        <div class="carousel-text d-none d-md-block">
                            <h5>Bowls Personalizados</h5>
                            <p>Personaliza el bowl de tu mascota a tu gusto.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/carrousel3.jpg" class="d-block w-100" preload>
                        <div class="carousel-text  d-none d-md-block">
                            <h5>Hazlos Felices</h5>
                            <p>Regalales el bowl que ellos se merecen.</p>
                        </div>
                    </div>
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

        <!-- Se contempla todo el contenido dejando de lado el carrousel del intro -->
        <div class="maincontainer">

            <div>
                <h3>Complace a tu mejor amigo con un buen plato, estomago lleno corazón contento!</h3>
            </div>

            <!-- cards de Productos -->
            <div class="productos">
                <h4>
                    Los productos mas pedidos
                </h4>

                <div class="flex-container-Productos">
                     <?php 
                    include 'php/producto/consultaIndex.php';
                     ?>
                </div>
            </div>

            <!-- Personalizado -->
            <div>

            </div>

            <!-- info No son solo bowls para perro-->
            <div>

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
    <script src="js/script.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>

</body>

</html>