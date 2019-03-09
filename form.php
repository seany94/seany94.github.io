<?php
	$email_to = "robin_sean@hotmail.com";
	$email_subject = "Subject: ".clean_string($subject)."\n";
	$email_message = "Details Below.\n\n";
	$email_message .= "Name: ".clean_string($name)."\n";
	$email_message .= "Email: ".clean_string($email)."\n";
	$email_message .= "Message: ".clean_string($message)."\n";

	mail($email_to, $email_subject, $email_message);
	echo "Message Sent! Thank you I will get back to you asap! <a href='https://seany94.github.io/'>Click here</a> to return to my website."
?>