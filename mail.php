<?php 
	$name = $_post['name'];
	$email = $_post['email'];
	$message = $_post['message'];
	$formcontent="From: $name \n Message: $message";
	$recipient = "imartinezl@alumni.tecnun.es";
	$subject = "Contact Form";
	$mailheader = "From: $email \r\n";
	mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
	echo "Thank You!";
?>