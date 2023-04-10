<?php
include 'include/header.php';
 ?>

<section>
    <main>
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
                    <div class="success-message"><?php if(isset($mensaje)) echo $mensaje; ?></div>
                </form>
                <div class="register-link">
                    <p>Ya tiene una cuenta? <a href="login.php">Ingresar</a></p>
                </div>
            </div>
        </div>
    </main>
</section>

<?php
include 'include/footer.php';
 ?>