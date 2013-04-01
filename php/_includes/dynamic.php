<?php
/******************************************************************************
	dynamic.php

	To fetch the current social update from its dynamic file or create a
	temporary placeholder if it isn't there

	Copyright 2008 Dominic Sayers
	rss2html.php is copyright 2004-2007 NotePage, Inc.
	This script may be used and modified freely for business or personal use
	This script may not be resold in any form
	This script may only be redistributed in its original form
******************************************************************************/

function get_social_update ($method) {
	global $_dynamic_content_folder, $_owner_familiar, $_owner_pronoun_possessive;

	$status_file_name = $method . ".html";
	$rubric = $_owner_familiar . ' has not updated ' . $_owner_pronoun_possessive . ' ' . $method . ' yet.';

	switch ($method) {
		case 'status':
			$title = 'Status';
			break;
		case 'location':
			$title = 'Location';
			break;
		case 'microblog':
			$title = 'Latest';
			$rubric = $_owner_familiar . ' has not posted a microblog yet.';
			break;
		default:
			$title = 'Unknown method - ' . $method;
	}

	$status_file = $_dynamic_content_folder . "/" . $status_file_name;

	if (!file_exists($status_file)) {
		$message = <<<MESSAGE
	<!-- Start of $status_file_name -->
	<h4>$title</h4>
	<p class="ramble justify small">$rubric</p>
	<!-- End of $status_file_name -->
MESSAGE;

		$hFile = @fopen($status_file,'w') or die("Can't open the file $status_file for writing.");
		fwrite($hFile,$message);
		fclose($hFile);
	}

	readfile($status_file);
}
?>