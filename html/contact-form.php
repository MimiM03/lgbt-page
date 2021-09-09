<?php 
	$name = $_POST['name'];
	$visitor_email = $_POST['email'];
	$message = $_POST['message'];

	$email_from = 'mimito_devone@abv.bg';
	$email_subject = 'LGBT Website Submission';

	$email_body = "Name: $name.\n$message".
					"Email: $visitor_email.\n".
					"$message.\n";

	$to = "mimi.miteva@gmail.com";
	$headers = "From: $email_from \r\n";
	$headers .="Reply-To: $visitor_email \r\n";

	mail($to, $email_subject, $headers);

?>