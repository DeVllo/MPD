<?php

function validar_campo($campo)
{
	$campo = trim($campo);
	$campo = stripcslashes($campo);
	$campo = htmlspecialchars($campo);

	return $campo;
}
	
  /* if(empty($_POST['nombre'])   ||
   empty($_POST['apellido'])    ||
   empty($_POST['dni'])     	||
   empty($_POST['telefono'])    ||
   empty($_POST['correo'])     	||
   empty($_POST['monto'])     	||
   empty($_POST['cuotas'])     	||
   empty($_POST['tarjeta'])     ||
   empty($_POST['banco'])   	||
   empty($_POST['cbu'])     	||
   !filter_var($_POST['correo'],FILTER_VALIDATE_EMAIL))
   {
   echo "No arguments Provided!";
   return false;
   }
	*/
   $errorMSG = "";
 
// NAME
	if (empty($_POST["nombre"])) {
    $errorMSG = "Falta colocar el Nombre";
	} else {
    $nombre = validar_campo($_POST["nombre"]);
	}
	if (empty($_POST["apellido"])) {
    $errorMSG = "Falta colocar el apellido";
	} else {
    $apellido = validar_campo($_POST["apellido"]);
	}
	if (empty($_POST["dni"])) {
    $errorMSG = "Falta colocar el DNI";
	} else {
    $dni = validar_campo($_POST["dni"]);
	}
	//Telefono
	if (empty($_POST["telefono"])) {
    $errorMSG = "Falta colocar el telefono";
	} else {
    $telefono = validar_campo($_POST["telefono"]);
	}
	//Monto
	if (empty($_POST["monto"])) {
    $errorMSG = "Falta colocar el monto";
	} else {
    $monto = validar_campo($_POST["monto"]);
	}
	//Cuotas
	if (empty($_POST["cuotas"])) {
    $errorMSG = "Falta colocar el cuotas";
	} else {
    $cuotas = validar_campo($_POST["cuotas"]);
	}
	//Tarjeta
	if (empty($_POST["tarjeta"])) {
    $errorMSG = "Falta colocar la tarjeta.";
	} else {
    $tarjeta = validar_campo($_POST["tarjeta"]);
	}
	//Banco
	if (empty($_POST["banco"])) {
    $errorMSG = "Falta colocar el banco emisor.";
	} else {
    $banco = validar_campo($_POST["banco"]);
	}
	//CBU
	if (empty($_POST["cbu"])) {
    $errorMSG = "Falta colocar el CBU.";
	} else {
    $cbu = validar_campo($_POST["cbu"]);
	}
	if (empty($_POST["nrotarjeta"])) {
    $errorMSG = "Falta colocar el Numero de tarjeta.";
	} else {
    $nrotarjeta = validar_campo($_POST["nrotarjeta"]);
	}
	if (empty($_POST["correo"])) {
    $errorMSG = "Falta colocar su correo electrónico.";
	} else {
    $correo = validar_campo($_POST["correo"]);
	}
	//Terminos
	if (empty($_POST['terminos'])) {
    $errorMSG = "Debe aceptar los términos y condiciones.";
	} else {
    $terminos = $_POST["terminos"];
	}


	$bodymsg = "Nueva solicitud recibida.\n\n"."Detalles:\n\nNombre: $nombre $apellido\n\nDNI: $dni\n\nMonto: $monto\n\nCuotas: $cuotas\n\nBanco: $banco\n\nTarjeta: $tarjeta\n\nCBU: $cbu\n\nNumero de tarjeta: $nrotarjeta\n\nTeléfono: $telefono\n\nCorreo: $correo\n\n";
	$headers = "From: noreply@meprestasdinero.com\n";
	$mailto = 'info@meprestasdinero.com';
	$headers .= "Reply-To: $correo";
	$subject = "[SOLICITUD] Nueva solicitud de dinero [$monto]:  $nombre";


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