<?php

$name = strip_tags(trim($_POST["name"]));
$name = str_replace(array("\r","\n"),array(" "," "),$name);
$email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
$message = trim($_POST["message"]);

if ( empty($name) OR empty($message) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
	echo "Missing Field";
	return;
}
else{
	$file = "/var/www/site_mail.txt";
	date_default_timezone_set('America/Chicago');
	$timestamp = date('l jS \of F Y h:i:s A');

	$email_content = "Sent: $timestamp\n\n";
	$email_content .= "Name: $name\n";
	$email_content .= "Email: $email\n\n";
	$email_content .= "Message:\n$message\n\n";
	$email_content .= "**********************************\n\n";

	file_put_contents($file, $email_content, FILE_APPEND | LOCK_EX);

	echo "Talk to you soon!";
	return;
}