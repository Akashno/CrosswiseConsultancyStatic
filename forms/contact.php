<?php
if(!empty($_POST["send"])) {
	$name = $_POST["name"];
	$email = $_POST["email"];
	$subject = $_POST["subject"];
	$message = $_POST["message"];

	$to = "noakash@ymail.com";
	$mailHeaders = "From: " . $name . "<". $email .">\r\n";
	if(mail($to, $subject, $message)) {
	    $message = "Your contact information is received successfully.";
	    $type = "success";
	}
}

?>