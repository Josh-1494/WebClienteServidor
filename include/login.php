<main>
	<div class="logo-container">
		<img class="logo" src="img/Logo.png" alt="Logo">
	</div>
	<div class="login-container">
		<div class="login-form" >
			<h2>Ingresar</h2>
			<form action="index.php" method="POST">
				<label for="username">Correo:</label>
				<input type="text" id="username" name="username" required>
				<label for="password">Contraseña:</label>
				<input type="password" id="password" name="password" required>
				<a href="contraNueva.php">Olvidó la contraseña?</a>
				<button type="submit">Ingresar</button>
			</form>
			<div class="register-link">
				<p>No tiene una cuenta? <a href="registro.php">Registrar</a></p>
			</div>
		</div>
	</div>
</main>
