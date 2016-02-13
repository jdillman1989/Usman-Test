<?php

// Get the form fields and remove whitespace.
$name = strip_tags(trim($_POST["name"]));
$name = str_replace(array("\r","\n"),array(" "," "),$name);
$email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
$message = trim($_POST["message"]);

// Check that data was sent to the mailer.
if ( empty($name) OR empty($message) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
	// Set a 400 (bad request) response code and exit.
	echo "Missing Field";
	return;
}
else{

	// Set the recipient email address.
	$file = "/var/www/site_mail.txt";

	// record date
	date_default_timezone_set('America/Chicago');
	$timestamp = date('l jS \of F Y h:i:s A');

	// Build the email content.
	$email_content = "Sent: $timestamp\n\n";
	$email_content .= "Name: $name\n";
	$email_content .= "Email: $email\n\n";
	$email_content .= "Message:\n$message\n\n";
	$email_content .= "**********************************\n\n";

	file_put_contents($file, $email_content, FILE_APPEND | LOCK_EX);

	// Set a 200 (okay) response code.
	http_response_code(200);
	echo "Talk to you soon!";
	return;
}