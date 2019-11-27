<?php
if(empty($_POST['nombre'])       ||
   empty($_POST['apellido'])     ||
   empty($_POST['dni'])          ||
   empty($_POST['correo'])       ||   
   empty($_POST['telefono'])     ||
   empty($_POST['monto'])        ||
   empty($_POST['cuotas'])       ||        
   empty($_POST['tarjeta'])      ||
   empty($_POST['banco'])        ||
   empty($_POST['cbu'])          ||
   !filter_var($_POST['correo'],FILTER_VALIDATE_EMAIL))
   {
   echo "No arguments Provided!";
   return false;
   }

header('Content-type: application/json');
$nombre = strip_tags(htmlspecialchars($_POST['nombre']));
$apellido = strip_tags(htmlspecialchars($_POST['apellido']));
$dni = strip_tags(htmlspecialchars($_POST['dni']));
$correo = strip_tags(htmlspecialchars($_POST['correo']));
$telefono = strip_tags(htmlspecialchars($_POST['telefono']));
$monto = strip_tags(htmlspecialchars($_POST['monto']));
$cuotas = strip_tags(htmlspecialchars($_POST['cuotas']));
$tarjeta = strip_tags(htmlspecialchars($_POST['tarjeta']));
$banco = strip_tags(htmlspecialchars($_POST['banco']));
$cbu = strip_tags(htmlspecialchars($_POST['cbu']));
   
// Create the email and send the message
$to = 'info@meprestasdinero.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "[SOLICITUD] Nueva solicitud de dinero:  $nombre";
$email_body = "Nueva solicitud recibida.\n\n"."Detalles:\n\nNombre: $nombre $apellido\n\nMonto: $monto\n\nCuotas: $cuotas\n\nBanco: $banco\n\nTarjeta: $tarjeta\n\nCBU: $cbu\n\nTeléfono: $telefono\n\nCorreo: $correo\n\n";
$headers = "From: noreply@meprestasdinero.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $correo";   
//mail($to,$email_subject,utf8_decode($email_body),$headers);
mail($to,$email_subject,utf8_decode($email_body),$headers);
return print(json_encode('ok')); 
?>