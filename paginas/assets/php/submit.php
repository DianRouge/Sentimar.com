<?php

// primero checamos el captcha
require_once('../../recaptcha/recaptchalib.php');
  $privatekey = "6Le06PYSAAAAAOh0Tf0JjBPDeIrXzUKXxxmkDfSN";
  $resp = recaptcha_check_answer ($privatekey,
                                $_SERVER["REMOTE_ADDR"],
                                $_POST["recaptcha_challenge_field"],
                                $_POST["recaptcha_response_field"]);

  if (!$resp->is_valid) {
    // What happens when the CAPTCHA was entered incorrectly
  /*  die ("The reCAPTCHA wasn't entered correctly. Go back and try it again." .
         "(reCAPTCHA said: " . $resp->error . ")");*/
    echo "captcha incorrecto";
  // exit;
  } else {
    // Your code here to handle a successful verification
    $your_email="ventas@malsaequipos.com.mx";
//$your_email="malenazz@gmail.com";


	$name=$_POST['name'];
	$email=$_POST['email'];
	$tel=$_POST['subject'];
	$text=$_POST['message'];
	
	$to      = $your_email;
	

	
	
	$message = 'Nombre: '.$name.'<br>Email: '.$email."<BR>";
	$message .= 'Tel: '.$tel."<BR>";
	$message .= "<BR>Mensaje: "."<BR>".$text."<BR>";
	
	require_once('../../PHPMailer/PHPMailerAutoload.php');
	$mail = new PHPMailer;
	$mail->isSMTP();                                      // Set mailer to use SMTP
	$mail->Host = 'smtp.uservers.net';  // Specify main and backup server
	$mail->SMTPAuth = 'login';                               // Enable SMTP authentication
	$mail->Username = 'ventas@malsaequipos.com.mx';                            // SMTP username
	$mail->Password = 'Rodrigo1212';                           // SMTP password
	//$mail->SMTPSecure = 'SSL';                            // Enable encryption, 'ssl' also accepted
	$mail->Port = 2525;
	$mail->FromName = 'Malsa Mailer';
	$mail->From = 'noreply@malsaequipos.com.mx';
	
	
	$mail->addAddress($to);  // Add a recipient
	//$mail->addAddress('ellen@example.com');               // Name is optional
	$newname='=?UTF-8?B?'.base64_encode($name).'?=';
	$mail->addReplyTo($email, $newname);
	//$mail->addCC('cc@example.com');
	//$mail->addBCC('bcc@example.com');
	
	//$mail->WordWrap = 50;                                 // Set word wrap to 50 characters
	//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
	//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
	$mail->isHTML(true);                                  // Set email format to HTML
	
	$mail->Subject = 'Contacto desde página web ';
	$mail->Body    = $message;
	//$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
	
	if(!$mail->send()) {
		echo 'error';
	  echo 'Message could not be sent.';
	  echo 'Mailer Error: ' . $mail->ErrorInfo;
	   exit;
	   
	}else{echo 'Message has been sent';}
	
	
  }
// fin checar captcha

	
?>