<?php 
//Variables
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$asunto = $_POST['asunto'];
$consulta = $_POST['consulta'];

//Crear cuerpo email
$asunto    = $asunto.' - Consulta enviada desde la página web';
$mensaje   = 'Nombre: '.$nombre.'
Correo: '.$correo.'
Teléfono: '.$telefono.'
 
Mensaje: 
'.$consulta.' 
';

$cabeceras = 'From: '.$correo.' . "\r\n';
$para = 'pizaalcuadrado@hotmail.com';

//Mandar email

try{
	enviarCorreo($para,$asunto,$mensaje,$correo,$nombre);
	echo '<meta http-equiv="refresh" content="0; url=../contacto.php?envio=si">';
}catch(Exception $e){
	echo '<meta http-equiv="refresh" content="0; url=../contacto.php?envio=no">';
}



function enviarCorreo($to,$asunto,$mensaje,$from,$from_name=NULL){	
	//incluir galerias
	include_once 'PHPMailer/PHPMailer.php';
	include_once 'PHPMailer/Exception.php';
	include_once 'PHPMailer/OAuth.php';
	include_once 'PHPMailer/POP3.php';
	include_once 'PHPMailer/SMTP.php';
	//crear instancia
	$mail = new PHPMailer\PHPMailer\PHPMailer();
	//tipo de envio
	$mail->isSMTP();
	//tipo de smtp
	$mail->SMTPDebug = 0;
	//host mail de neolo
	$mail->Host = 'email-smtp.us-east-1.amazonaws.com';
	// puerto para ssl/tls
	$mail->Port = 587;
	//seguridad
	$mail->SMTPAuth = true;
	$mail->SMTPSecure = "tls";
	//usuario y pass
	$mail->Username = 'AKIA2G4PNIAUR4YSLGKK';
	$mail->Password = 'BJSWmp72X/90FT7Mr9zKgrjKPzS4g06nfwqVZ0/e9mll';
	//quien envia
	if($from_name!=NULL){
		$mail->setFrom($from, $from_name);
		$mail->addReplyTo($from,$from_name);
	}else{
		$mail->setFrom($from);
		$mail->addReplyTo($from);		
	}
	//a quien manda
	$mail->addAddress($to, 'Pizza al cuadrado');
	//asunto y mensaje
	$mail->Subject = $asunto;
	$mail->Body = $mensaje;
	$mail->CharSet = 'UTF-8';
	
	//enviar correo
	if(!$mail->send()){
		throw new Exception($mail->ErrorInfo);
	}
}



?>