<?php
// Recibir los datos del formulario
$telefono = $_POST['phone'];
$mensaje = $_POST['message'];

// Configurar el correo electrónico
$destinatario = "saulsolucion@gmail.com"; // Cambia esto por tu dirección de correo electrónico
$asunto = "Nuevo mensaje de cliente";

// Construir el cuerpo del correo
$cuerpo = "Número de Teléfono: $telefono\n";
$c
