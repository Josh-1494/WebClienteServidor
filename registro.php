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

    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/login.css">

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
        <div class="maincontainer">
        <div class="logo-container">
		<img class="logo" src="img/Logo.png" alt="Logo">
	</div>
	<div class="login-container">
		<div class="login-form">
			<h2>Registrar</h2>
			<form action="procesar_registro.php" method="POST">
				<label for="name">Nombre:</label>
				<input type="text" id="name" name="name" required>
				<label for="lastname1">Primer apellido:</label>
				<input type="text" id="lastname1" name="lastname1" required>
				<label for="lastname2">Segundo apellido:</label>
				<input type="text" id="lastname2" name="lastname2" required>
				<label for="email">Correo:</label>
				<input type="email" id="email" name="email" required>
				<label for="password">Contraseña:</label>
				<input type="password" id="password" name="password" required>
				<label for="confirm_password">Confirmar contraseña:</label>
				<input type="password" id="confirm_password" name="confirm_password" required>
				<button type="submit">Registrar</button>
			</form>
			<div class="register-link">
				<p>Ya tiene una cuenta? <a href="login.php">Ingresar</a></p>
			</div>
		</div>
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