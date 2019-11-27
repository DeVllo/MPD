<?php
if(empty($_POST['nombre'])     	||
   empty($_POST['apellido'])   	||
   empty($_POST['dni'])        	||
   empty($_POST['correo'])     	||
   empty($_POST['telefono'])    ||
   empty($_POST['monto'])    	||
   empty($_POST['cuotas'])    	||
   empty($_POST['tarjeta'])    	||
   empty($_POST['banco'])    	||
   empty($_POST['cbu'])    		||
   !filter_var($_POST['correo'],FILTER_VALIDATE_EMAIL))
   {
   echo "No arguments Provided!";
   return false;
   }
   
$nombre = strip_tags(htmlspecialchars($_POST['name']));
$apellido = strip_tags(htmlspecialchars($_POST['apellido']));
$dni = strip_tags(htmlspecialchars($_POST['dni']));
$correo = strip_tags(htmlspecialchars($_POST['correo']));
$telefono = strip_tags(htmlspecialchars($_POST['telefono']));
$cuotas = strip_tags(htmlspecialchars($_POST['cuotas']));
$monto = strip_tags(htmlspecialchars($_POST['monto']));
$tarjeta = strip_tags(htmlspecialchars($_POST['tarjeta']));
$banco = strip_tags(htmlspecialchars($_POST['banco']));
$cbu = strip_tags(htmlspecialchars($_POST['cbu']));
   
// Create the email and send the message
$to = 'info@meprestasdinero.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "[SOLICITUD] - Nueva solicitud de préstamo:  $nombre";
$email_body = "Nueva solicitud de préstamo de $nombre por [$ $monto].\n\n"."Detalles:\n\nNombre: $nombre $apellido\n\nDNI: $dni\n\nTeléfono: $telefono\n\nCorreo: $correo\n\nMonto: $monto\n\nCuotas: $cuotas\n\nTarjeta: $tarjeta\n\nBanco: $banco\n\nCBU: $cbu\n\n";
$headers = "De: noreply@meprestasdinero.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Responder a: $correo";   
mail($to,$email_subject,utf8_decode($email_body),$headers);
return true;         
?>