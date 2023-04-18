<?php
include 'include/header.php';
 ?>

<section>

    <div class="maincontainer">

        <div>
            <h3>Contactenos llenando el formulario</h3>
        </div>
        <div>

            <div class="contactenos">
                <div class="containercontactenos hidden">
                    <div class="containercontactenos2">
                        <form method="POST" id="formularioDatos" class="formcontactenos">
                            <div class="form-row1">
                                <div class="form-col">
                                    <label for="nombre">Nombre</label>
                                    <input type="text" name="nombre" id="nombre" required>
                                </div>
                                <div class="form-col">
                                    <label for="telefono">Telefono</label>
                                    <input type="number" name="telefono" id="telefono" pattern="[0-9]{4}[0-9]{4}"
                                        minlength="8" required>
                                </div>
                            </div>
                            <div class="form-row2">
                                <label for="correo">Correo</label>
                                <input type="email" name="correo" id="correo" pattern=".+@.+\.com" required>
                            </div>
                            <div class="form-row2">
                                <label for="mensaje">Mensaje</label>
                                <textarea name="mensaje" id="mensaje" rows="3" required></textarea>
                            </div>
                            <br><br>
                            <div class="form-row3">
                                <button type="submit" id="btEnviar" name="btEnviar"
                                    onclick="almacenamiento();validacion(); ">Enviar</button>
                            </div>
                            <br>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- <section>
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
    </section> -->

<?php
include 'include/footer.php';
 ?>