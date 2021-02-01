<?php 
$errors = '';

$myemail = 'santiago.spencer.d@gmail.com';//<-----Put Your email address here.
if(empty($_POST['name'])  ||
   empty($_POST['email']) || 
   empty($_POST['subject']) || 
   empty($_POST['message']))
{
    $errors .= "\n Error: Todos los campos son requeridos";
}



$name = $_POST['name']; 
$email_address = $_POST['email']; 
$subject = $_POST['subject']; 
$message = $_POST['message']; 

	$to = $myemail;
    $phone = $phone;
	$email_subject = $subject;
	$email_body = "Haz recibido un mensaje desde sitioweb IcsaChile. ".
	" Aqui los detalles :\n Name: $name \n Subject: $subject \n Email: $email_address \n Message: \n $message"; 
	
	$headers = "From: $myemail\n"; 
	$headers .= "Reply-To: $email_address";
	$recaptcha = $_POST["g-recaptcha-response"];

	$url = 'https://www.google.com/recaptcha/api/siteverify';
	$data = array(
		'header' => "Content-Type: application/x-www-form-urlencoded\r\n", 
		'secret' => '6LfTBrcZAAAAAGBQb19WkmTK3k-qHR1txwc8aTqI',
		'response' => $recaptcha
	);
	$options = array(
		'http' => array (
			'method' => 'POST',
			'content' => http_build_query($data)
		)
	);
	$context  = stream_context_create($options);
	$verify = file_get_contents($url, false, $context);
	$captcha_success = json_decode($verify);
	if ($captcha_success->success) {
		// No eres un robot, continuamos con el envío del email
		// ...
		// ...
	} else {
		//
	}
	
$mail_sent = mail($to,$email_subject,$email_body,$headers);;
if ($mail_sent == true){ ?>    
<script language="javascript" type="text/javascript">  
if (window.alert('Gracias por su mensaje. Estaremos contactandolo a la brevedad posible.'))
{
    
window.location = 'contacto.php';	

}
else
{
window.history.back()
}
  
</script>    
<?php } else { ?> 
<script language="javascript" type="text/javascript">   
alert('El mensaje no se ha enviado. por favor notifique al administrador');  
window.location = 'contacto.php'; 
</script>    
<?php     } ?> 
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"> 
<html>
<head>
	<title>Contacto desde Industria Corchera</title>
</head>

<body>
<!-- This page is displayed only if there is some error -->
<?php
echo nl2br($errors);
?>


</body>
</html>