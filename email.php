<?php

		//return "success"; die();
		
		if($_REQUEST['name'] == '' || $_REQUEST['email'] == '' || $_REQUEST['subject'] == '' || $_REQUEST['message'] == ''):
			return "error";
		endif;
		
		if (filter_var($_REQUEST['email'], FILTER_VALIDATE_EMAIL)):
			// receiver email address
			$to = 'kashif.ford@gmail.com';
			
			// prepare header
			$header = 'From: '. $_REQUEST['name'] .' <'. $_REQUEST['email'] .'>'. "\r\n";
			$header .= 'Reply-To:  '. $_REQUEST['name'] .' <'. $_REQUEST['email'] .'>'. "\r\n";
			$header .= 'X-Mailer: PHP/' . phpversion();
			
			// Contact Subject
			$subject = $_REQUEST['subject'];
			
			// Contact Message
			$message = $_REQUEST['message'];
			
			// Send contact information
			mail( $to, $subject , $message, $header );

		else:
			return "error";
		endif;