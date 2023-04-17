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
                <form action="login.php" method="POST">
                    <label for="code">Codigo de verificacion enviado al email</label>
                    <input type="number" id="code" name="code" required>          
                    <label for="newPassword">Nueva contraseña:</label>
                    <input type="password" id="newPassword" name="newPassword" required>
                    <label for="confirm_password">Confirmar nueva contraseña:</label>
                    <input type="password" id="confirm_newPassword" name="confirm_newPassword" required>
                    <button type="submit">Confirmar nueva contraseña</button>
                </form>
                <div class="atras-link">
                  <p><a href="login.php">Atras</a></p>
                </div>
            </div>
        </div>
    </main>
</section>

<?php
include 'include/footer.php';
 ?>