<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Where am I?</title>
</head>

<body>
<pre>
<?php
$json		= file_get_contents('http://www.google.com/latitude/apps/badge/api?user=255095307788978811&type=json');
$geo		= json_decode($json, true);
$geoData	= $geo['features'][0];
$geoCoords	= $geoData['geometry']['coordinates'];

echo "I am in " . $geoData['properties']['reverseGeocode'] . "\n";
echo "I am at " . $geoCoords[1] . ',' . $geoCoords[0] . "\n";

$json		= file_get_contents('http://brightkite.com/places/search.json?q=' . $geoCoords[1] . ',' . $geoCoords[0]);
$geo		= json_decode($json, true);
$brightkite	= $geo['id'];
//$geoCoords	= $geoData['geometry']['coordinates'];

echo "Brightkite says I am in " . $geo['display_location'] . "\n";

echo "Checking in with Brightkite...";
$hCurl = curl_init();
curl_setopt($hCurl, CURLOPT_URL,	'http://brightkite.com');
curl_setopt($hCurl, CURLOPT_USERPWD,	'dominicsayers:grobelaar');
curl_setopt($hCurl, CURLOPT_URL		"http://brightkite.com/places/$brightkite/checkins.xml");
curl_setopt($hCurl, CURLOPT_POST, 1);
curl_exec($hCurl);
curl_close($hCurl);
echo "done\n";
?>
</pre>
</body>

</html>
