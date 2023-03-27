<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$destinatario = $_POST["destinatario"];
	$asunto = $_POST["asunto"];
	$cuerpo = $_POST["cuerpo"];

	// Cabeceras del correo
	$headers = "From: doggo.appsweb@gmail.com\r\n";
	$headers .= "Reply-To: doggo.appsweb@gmail.com\r\n";
	$headers .= "X-Mailer: PHP/" . phpversion();

	// Envío del correo
	if (mail($destinatario, $asunto, $cuerpo, $headers)) {
	  echo "El correo se ha enviado correctamente.";
	} else {
	  echo "Ha ocurrido un error al enviar el correo.";
	}
}
?>