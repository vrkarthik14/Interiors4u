<?php

	$to = "";  // Your email here
	$name = $_REQUEST['name'];
	$lastname = $_REQUEST['lastname'];
	$phone = $_REQUEST['phone'];
	$from = $_REQUEST['email'];
	$date = $_REQUEST['date'];
	$address = $_REQUEST['address'];
	$city = $_REQUEST['city'];
	$select1 = $_REQUEST['select1'];
	$select2 = $_REQUEST['select2'];
	$select3 = $_REQUEST['select3'];
	$message = $_REQUEST['message'];
	$headers = "From: $from";
	$subject = "Booking Form Computer Repair Site";

	$fields = array();
	$fields{"name"} = "First name";
	$fields{"lastname"} = "Last Name";
	$fields{"phone"} = "Phone";
	$fields{"email"} = "Email";
	$fields{"date"} = "Date";
	$fields{"address"} = "Address";
	$fields{"city"} = "City";
	$fields{"select1"} = "Computer / Laptop";
	$fields{"select2"} = "Brand";
	$fields{"select3"} = "System";
	$fields{"message"} = "Message";

	echo '<script type="text/javascript">alert("hello!");</script>';

	$body = "Here is what was sent:\n\n";
	foreach($fields as $a => $b){$body .= sprintf("%20s:%s\n",$b,$_REQUEST[$a]);}
	$send = mail($to, $subject, $body, $headers);
	
	
	echo '<script type="text/javascript">alert("hello!");</script>';


?>