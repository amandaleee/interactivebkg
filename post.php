<?php

	if ('POST' === $_SERVER['REQUEST_METHOD'])   {
	if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['country'])) {
		echo "Error";
		
	} else {
	
		$to = "amandalee.anderson@gmail.com";
		$name = trim($_POST['name']);
		$country = trim($_POST['country']);
		$email = trim($_POST['email']);
		
		
		$subject = "Contact Form";
		$headers = "From: $email";
	// 	$messages = "Name: $name 
 // Email: $email \\r\
	// 	$mailsent = mail($to, $subject, $messages, $headers);
		
		if($mailsent) {
			echo "Mail sent successfuly";
		}
	}
}
?>
