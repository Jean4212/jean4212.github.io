<?php

// change this
define("EMAIL_ADDRESS", 'informes@gruasyasociados.com');
define("EMAIL_SUBJECT", 'Contact Form Submission');

if(isset($_POST) && !empty($_POST)){

	$name = stripslashes($_POST['name']);
	$email = trim($_POST['email']);
	$message = stripslashes($_POST['message']);
	$error = '';

	// Check name
	if(!$name) {
		if (!$error) $error .= '<ul class="error">';
		$error .= '<li>Por favor intoroduzca su nombre</li>';
	}

	// Check email
	if(!$email) {
		if (!$error) $error .= '<ul class="error">';
		$error .= '<li>Por favor introduzca su correo electrónico</li>';
	}

	if($email && !validateEmail($email)) {
		if (!$error) $error .= '<ul class="error">';
		$error .= '<li>Por favor introduzca una cuenta de correo válida</li>';
	}

	// Check message (length)
	if(!$message) {
		if (!$error) $error .= '<ul class="error">';
		$error .= "<li>Por favor introduzca su mensaje</li>";
	}

	if(!$error){
	$mail = mail(EMAIL_ADDRESS, EMAIL_SUBJECT, $message,
		 "From: ".$name." <".$email.">\r\n"
		."Reply-To: ".$email."\r\n"
		."X-Mailer: PHP/" . phpversion());

		if($mail) {
			echo '<div class="form-notification"><h3 class="success">Gracias! su menjsaje ha sido enviado. Le responderemos en breve.</h3></div>'; // Email sent
		} else {
			echo '<div class="form-notification"><h3 class="warning">Correo no enviado. Por favor intente de nuevo.<h3></div>'; // Email not sent
		}

	}else{
		$error .= '</ul>';
		echo '<div class="form-notification">'.$error.'</div>'; // Error
	}

}

function validateEmail($email){

	if($email == ''){
		return false;
	}else{
		$eregi = preg_replace('/[-0-9a-zA-Z.+_]+@[-0-9a-zA-Z.+_]+\.[a-zA-Z]{2,4}/', '', $email);
	}
	
	return empty($eregi) ? true : false;
}
?>