<?php
if(!empty($_POST["send"])) {
	$name = $_POST["name"];
	$email = $_POST["email"];
	$subject = $_POST["subject"];
	$message = $_POST["message"];

	$to = "noakash@ymail.com";
  $headers = array("From: from@example.com",
  "Reply-To: replyto@example.com",
  "X-Mailer: PHP/" . PHP_VERSION
);
$headers = implode("\r\n", $headers);
	if(mail($to, $subject, $message,$headers)) {
	    $message = "Your contact information is received successfully.";
	    $type = "success";
	}
}

?>