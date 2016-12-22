<?php 
	
	$name = $_REQUEST[ 'contact_name' ];
	$email = $_REQUEST[ 'contact_email' ];
	$subject = $_REQUEST[ 'contact_subject' ];
	$message = $_REQUEST[ 'contact_message' ];
	$mail_subject = $subject . "( Customer Contact )";
	$message = "Name: ".$name." || Email: ".$email." || Subject: ".$subject." || Message: ".$message;
	
	/* Replace YOUR_MAIL With Your Mail Address inside '' */
	if ( mail( 'georgiadessim@gmail.com', $mail_subject, $message, "From:" . $email ) ) {
		echo "Thank you <strong>$name</strong> for contacting with us !!!";
	} else {
		echo "Error in sending message !!! Please try again";
	}
	
 ?>
