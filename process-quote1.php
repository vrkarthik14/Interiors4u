<?php

	$to = "";  // Your email here
	$from = $_REQUEST['email'];
	$name = $_REQUEST['name'];
	$phone = $_REQUEST['phone'];
	$message = $_REQUEST['message'];
	$headers = "Quote: $from";
	$subject = "Quote Form Computer Repair Site";

	$fields = array();
	$fields{"name"} = "First name";
	$fields{"email"} = "Email";
	$fields{"phone"} = "Phone";
	$fields{"message"} = "Message";

echo '<script type="text/javascript">alert("hello!");</script>';

	$body = "Here is what was sent:\n\n"; foreach($fields as $a => $b){   $body .= sprintf("%20s: %s\n",$b,$_REQUEST[$a]); }

	$send = mail($to, $subject, $body, $headers);
echo '<script type="text/javascript">alert("hello!");</script>';

?>