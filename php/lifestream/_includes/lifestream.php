<?php
/******************************************************************************
	lifestream.php

	To fetch a lifestream feed and write it to static HTML pages
	but only if it hasn't been updated recently

	Copyright 2008-2010 Dominic Sayers
******************************************************************************/
function get_URL_contents($URL) {
	$c = curl_init();
	curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($c, CURLOPT_URL, $URL);
	$contents = curl_exec($c);
	curl_close($c);

	if ($contents)	return $contents;
	else		return false;
}

/**
 * Return file contents as a string. Fail silently if the file can't be opened.
 *
 * The parameters are the same as the built-in PHP function {@link http://www.php.net/file_get_contents file_get_contents}
 */
/*.string.*/ function getFileContents(/*.string.*/ $filename, /*.int.*/ $flags = 0, /*.object.*/ $context = NULL, /*.int.*/ $offset = -1, /*.int.*/ $maxlen = -1) {
	// From the documentation of file_get_contents:
	// Note: The default value of maxlen is not actually -1; rather, it is an internal PHP value which means to copy the entire stream until end-of-file is reached. The only way to specify this default value is to leave it out of the parameter list.
	if ($maxlen = -1) {
		$contents = @file_get_contents($filename, $flags, $context, $offset);
	} else {
		$contents = @file_get_contents($filename, $flags, $context, $offset, $maxlen);
	}

	if ($contents === false) $contents = '';
	return $contents;
}

function get_dynamic_file($filename) {
	$filename = $_SESSION['path']['dynamic_content'] . "/" . $filename;
	return getFileContents($filename);
}

function write_file($filename, $data, $mode = 'w') {
	$hFile = fopen($filename,$mode) or exit("Can't open the file $filename for writing. (mode is $mode)");
	fwrite($hFile, $data);
	fclose($hFile);
}

function write_dynamic_file ($filename, $data, $mode = 'w') {
	$filename = $_SESSION['path']['dynamic_content'] . "/" . $filename;
	write_file($filename, $data, $mode);
}

function write_message ($method, $title, $text) {
	$filename = $method . ".html";

	$message = <<<MESSAGE

		<!-- Start of $filename -->
		<h4>$title</h4>
		<p class="ramble small">$text</p>
		<!-- End of $filename -->
MESSAGE;

	write_dynamic_file($filename, $message);
}

function is_stale($filename, $test_age) {
	// Check if it's time to update the static files
	if (is_file($filename)) {
		$time_modified	= filemtime($filename);
		$file_age	= time() - $time_modified;
		$update_flag	= ($file_age > $test_age);	// Only bother updating if it's more than $test_age seconds since last doing so
	} else {
		$time_modified	= time();
		$update_flag	= true;
	}

	return $update_flag;
}

function transform_lifestream (&$xml, $xsl_file) {
	$doc = new DOMDocument();
	$xsl = new XSLTProcessor();

	$doc->load($xsl_file);
	$xsl->importStyleSheet($doc);

	set_error_handler(create_function('$x, $y', 'if (error_reporting() != 0) throw new Exception($y, $x);'), E_ALL & ~E_NOTICE);
	try {
		$doc->loadXML($xml);
		$html = $xsl->transformToXML($doc);
	} catch (Exception $e) {
	    $html = "<p>No valid lifestream.</p>\n";
	}
	restore_error_handler();

	return $html;
}

function update_lifestream ($type = 'summary') {
	$feed_source = 'http://friendfeed.com/' . $_SESSION['owner']['nickname'] . '?format=atom';
	$max_age = 300; // (seconds) If the XML file is older than this then refresh it

	$type = (isset($type)) ? strtolower($type) : '';
	$filename_modifier = ($type == 'full') ? '' : '_summary';

	$html_file = $_SESSION['path']['dynamic_content'] . '/lifestream' . $filename_modifier . '.html';

	if (is_stale($html_file, $max_age)) {
		$xml_file = $_SESSION['path']['dynamic_content'] . '/lifestream.xml';

		if (is_stale($xml_file, $max_age)) {
			// Get lifestream data from the feed source
			$xml = get_URL_contents($feed_source);

			// Write it to a local file so we don't bug the aggregator for every page view here
			write_file($xml_file, $xml);

			// While we're here, let's update the location
			// First, get the current location from Google Latitude
			$googleId		= $_SESSION['owner']['GoogleID'];
			$json_google		= get_URL_contents("http://www.google.com/latitude/apps/badge/api?user=$googleId&type=json");
			$geo_google		= json_decode($json_google, true);
			$geoData		= $geo_google['features'][0];
			$geoCoords		= $geoData['geometry']['coordinates'];

			// Get the location id from Brightkite
			$json_brightkite	= get_URL_contents('http://brightkite.com/places/search.json?q=' . $geoCoords[1] . ',' . $geoCoords[0]);
			$geo_brightkite		= json_decode($json_brightkite, true);

			// Write local location data
			$brightkite_id		= $geo_brightkite['id'];
			$location		= $geoData['properties']['reverseGeocode'];

			// Have we moved since we last checked in?

			// Read location where we last checked in
			$locationFile		= 'location.txt';
			$location_old		= get_dynamic_file($locationFile);

			// If we've moved then update our locally-stored location
			if (($location !== '') && ($location !== $location_old)) {
				write_message('location', 'Location', $location);
				write_dynamic_file($locationFile,	$location);
				write_dynamic_file('google.txt',	var_export($geoData, true));
				write_dynamic_file('brightkite.txt',	var_export($geo_brightkite, true));
				write_dynamic_file('locus.csv',		date('c') . ',' . $geoCoords[1] . ',' . $geoCoords[0] . ',"' . $location . "\"\r\n", 'a'); // Append location to locus trail

				// ...and check in with Brightkite (which can then update FireEagle)
				$user	= $_SESSION['owner']['nickname'];
				$pwd	= $_SESSION['owner']['brightkitePassword'];

				$hCurl = curl_init();
				curl_setopt($hCurl, CURLOPT_URL,	'http://brightkite.com');
				curl_setopt($hCurl, CURLOPT_USERPWD,	"$user:$pwd");
				curl_setopt($hCurl, CURLOPT_URL,	"http://brightkite.com/places/$brightkite_id/checkins.xml");
				curl_setopt($hCurl, CURLOPT_POST,	1);
				curl_setopt($hCurl, CURLOPT_RETURNTRANSFER, true);
				curl_exec($hCurl);
				curl_close($hCurl);

				// Check in with Foursquare
				$user	= $_SESSION['owner']['foursquareID'];
				$pwd	= $_SESSION['owner']['foursquarePassword'];
				$data	= array('venue' => $location, 'geolat' => $geoCoords[1], 'geolong' => $geoCoords[0]);

				$hCurl = curl_init();
				curl_setopt($hCurl, CURLOPT_URL,	'http://foursquare.com');
				curl_setopt($hCurl, CURLOPT_USERPWD,	"$user:$pwd");
				curl_setopt($hCurl, CURLOPT_URL,	"http://api.foursquare.com/v1/checkin");
				curl_setopt($hCurl, CURLOPT_POST,	1);
				curl_setopt($hCurl, CURLOPT_POSTFIELDS,	$data);
				curl_setopt($hCurl, CURLOPT_RETURNTRANSFER, true);
				curl_exec($hCurl);
				curl_close($hCurl);
			}
		} else {
			// Get lifestream from our saved file
			$xml = file_get_contents($xml_file);
		}

		// Write an HTML version of the full details for the Lifestream page
		if ($xml == "") {
			$html = <<<HTML

		<h4>Lifestream</h4>
		<p class="ramble small">{$_SESSION['owner']['familiar']} has not started a lifestream yet.</p>
HTML;
		} else {
			$xsl_file = $_SESSION['path']['root'] . '/lifestream/_includes/lifestream' . $filename_modifier . '.xsl';
			$html = str_replace('+browseroot+', $_SESSION['path']['browseroot'], transform_lifestream($xml, $xsl_file));
		}

		write_file($html_file, $html);
	} else {
		$html = file_get_contents($html_file);
	}

	return $html;
}

function print_lifestream ($type = 'summary') {
	echo update_lifestream($type);
}
?>
