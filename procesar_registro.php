<?php
include 'include/header.php';
 ?>

<section>
    <?php
// Obtener los datos del formulario de registro
$name = $_POST['name'];
$lastname1 = $_POST['lastname1'];
$lastname2 = $_POST['lastname2'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];

// Verificar si las contraseñas coinciden
if ($password !== $confirm_password) {
    // Las contraseñas no coinciden, mostrar un mensaje de error y volver al formulario de registro
    $mensaje = "Las contraseñas no coinciden, por favor verifique de nuevo la contraseña.";
} else {
    // Las contraseñas coinciden, agregar el usuario a la base de datos y establecer la variable $registro_exitoso en true
    // Código para agregar el usuario a la base de datos

    $registro_exitoso = true;
    $mensaje = "Registro exitoso! Por favor, inicie sesión para continuar.";
}

// Si el registro es exitoso, redirigir al usuario a la página de inicio de sesión
if (isset($registro_exitoso) && $registro_exitoso) {
    header("Location: login.php");
    exit();
}
?>

</section>

<?php
include 'include/footer.php';
 ?>