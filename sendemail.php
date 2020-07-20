<?php
	header('Content-type: application/json');
	$status = array(
		'type'=>'success',
		'message'=>'Mensaje enviado!',

	);

    $fname = @trim(stripslashes($_POST['fname'])); 
    $lname = @trim(stripslashes($_POST['lname']));	
    $email = @trim(stripslashes($_POST['email'])); 
    $message = @trim(stripslashes($_POST['message'])); 

    $email_from = $email;
	$email_to = 'info@byw-si.com.mx';

    $body = 'First Name: ' . $fname . "\n\n" . 'Last Name: ' . $lname . "\n\n" . 'Email: ' . $email . "\n\n" . 'Message: ' . $message;

    $success = @mail($email_to, 'Mensaje de pagina WEB', $body, 'From: <'.$email_from.'>');

    echo json_encode($status);
 
     die; 
?>	

