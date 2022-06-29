<?php
$name = $_POST['name'];
$phone = $_POST['phone'];
$mail = $_POST['mail'];
$message = $_POST['message'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$message = "Este mensaje fue enviado por: " . $name . " \r\n";
$message .= "Su mail es: " . $mail . " \r\n";
$message .= "Su teléfono es: " . $phone . " \r\n";
$message .= "Mensaje: " . $_POST['message'] . " \r\n";
$message .= "Enviado el: " . date('d/m/Y', time());

$para = 'Florenciafranzotti@gmail.com';
$asunto = 'Asunto del mensaje';

mail($para, $asunto, $message, $header);

header('Location:contacto.html');
?>

<?php
$message = $_POST['message'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";


$message .= "La respuesta a la imagen es: " . $_POST['message'] . " \r\n";
$message .= "Enviado el: " . date('d/m/Y', time());

$para = 'Florenciafranzotti@gmail.com';
$asunto = 'Asunto del mensaje';

mail($para, $asunto, $message, $header);

header('Location:nosotros.html');
?>