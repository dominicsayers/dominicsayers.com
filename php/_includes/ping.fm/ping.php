<?php
/******************************************************************************
	ping.php

	This script writes the new ping.fm status to various dynamic files for
	inclusion in other web pages on this site.

	Copyright 2008 Dominic Sayers
	Uses sample code from ping.fm
	This script may be used and modified freely for business or personal use
	This script may not be resold in any form
	This script may only be redistributed in its original form
******************************************************************************/

if (count($_POST) > 0) {
	require_once "../initialize.php";

	function write_dynamic_file ($File, $message) {
		$File = $_SESSION['path']['dynamic_content'] . "/" . $File;
		$hFile = fopen($File,'w') or exit("Can't open $File for writing");
		fwrite($hFile, $message);
		fclose($hFile);
	}

	function write_message ($method, $title, $text) {
		$File = $method . ".html";

		$message = <<<MESSAGE

		<!-- Start of $File -->
		<h4>$title</h4>
		<p class="ramble small">$text</p>
		<!-- End of $File -->
MESSAGE;

		write_dynamic_file($File, $message);
	}

	// Make sure all required folders are there
	$dir = $_SESSION['path']['dynamic_content'];
	if (!is_dir($dir)) {mkdir($dir); chmod($dir, 0755);}

	$dir .= '/history';
	if (!is_dir($dir)) {mkdir($dir); chmod($dir, 0755);}

	$method = $_POST['method'];

/******************************************************************************
	Email confirmation to site owner
******************************************************************************/
	$email   = $_SESSION['owner']['email'];
	$subject = "$method update";
	$body    = "";

	foreach($_POST as $key => $value) {
		$body .= $key . ": " . $value . "\n";
	}

	mail($email, $subject, $body, "From: \"Ping.fm Custom URL Post\" <{$email}>");

	// Why not update Posterous while we're at it?
//	mail("post@posterous.com", $title, $message, "From: \"Ping.fm Custom URL Post\" <{$email}>");
// Posterous now updated directly by ping.fm

/******************************************************************************
	Write raw $_POST data to debugging file
******************************************************************************/
	$File = "history/ping_" . gmdate('Ymd_His') . ".txt";
	write_dynamic_file($File, $body);

/******************************************************************************
	Update appropriate dynamic file(s)
******************************************************************************/
// Firstly, has the location been specified?
	$location = $_POST['location'];
	if ($location != '') {
		write_message("location", "Location", $location);
		write_dynamic_file("location.txt", $location);
	}

// Now, what kind of message is it?
	$message_safe = stripslashes($_POST['message']);
	switch($method) {
		case "status":
			$title = "Status";
			$text = $_SESSION['owner']['familiar'] . " " . $message_safe;
			break;
		case "microblog":
			$title = "Latest";
			$text = $message_safe;
			break;
		case "blog":
			$title = $_POST['title'];
			$text = $message_safe;
			break;
		default:
			$method = "unknown-" . $method;
			$title = $_POST['title'];
			$text = $message_safe;
	}

	write_message($method, $title, $text);}
?>