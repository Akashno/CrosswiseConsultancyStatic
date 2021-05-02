<?php
if(!empty($_POST["send"])) {
	$name = $_POST["name"];
	$email = $_POST["email"];
	$subject = $_POST["subject"];
	$message = $_POST["message"];

	$to = "noakash@ymail.com";
 $header = "From: noreply@example.com\r\n";
$header.= "MIME-Version: 1.0\r\n";
$header.= "Content-Type: text/html; charset=ISO-8859-1\r\n";
$header.= "X-Priority: 1\r\n";

$headers = implode("\r\n", $headers);
	if(mail($to, $subject, $message,$headers)) {
	    $message = "Your contact information is received successfully.";
	    $type = "success";
	}
}

?>