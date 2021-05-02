<?php
if(!empty($_POST["send"])) {
	$name = $_POST["name"];
	$email = $_POST["email"];
	$subject = $_POST["subject"];
	$content = $_POST["message"];

	$toEmail = "noakash@ymail.com";
	$mailHeaders = "From: " . $name . "<". $email .">\r\n";
	if(mail($toEmail, $subject, $content, $mailHeaders)) {
	    $message = "Your contact information is received successfully.";
	    $type = "success";
	}
  else{
    echo '<p>we are sorry email didnt go through</p>';
  }
}
require_once "contact-view.php";
?>