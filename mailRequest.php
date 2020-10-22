<?php
$destinatario = 'mocn2_13@hotmail.com';
$name = $_POST['nombre'];
$mail = $_POST['email'];
$telefono = $_POST['telefono'];
$asunto = "Quiero mas informacion";

$header = "Quiero mas informacion, contactenme";
$mensajeCompleto = "\nNombre: " . $name . "\nMail: " . $mail . "\nTelefono: ". $telefono;

mail($destinatario, $asunto, $mensajeCompleto, $header);

echo "<script>alert('correo enviado exitosamente)</script>";
echo "<script> setTimeout(\"location.href='index.html'\",1000)</script>";
?>