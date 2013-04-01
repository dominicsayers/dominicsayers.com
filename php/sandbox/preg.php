<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Untitled 1</title>
</head>

<body>
<pre>
<?php
$localParts[] = '"first".last';
$localParts[] = 'first."last"';
$localParts[] = '"first"."last"';
$localParts[] = '"first".middle."last"';
$localParts[] = '"first".""middle"."last"';
$localParts[] = '"first.middle"."last"';
$localParts[] = '"first.middle.last"';
$localParts[] = '"first..last"';
$localParts[] = '"first\\"last"';
$localParts[] = '"first\\\\\\"last"';
$localParts[] = 'first."mid\\dle"."last"';
$localParts[] = '"first\\\\"last"';
$localParts[] = '"first"last"';
$localParts[] = 'first..last';
$localParts[] = '.first.last"';
$localParts[] = 'first.last.';

foreach ($localParts as $key => $localPart) {
	$pattern = '/(?m)^((?(")"(?<quote>)|(?<=(^|\\.)))(?<field>(?(quote)(""|[^"]|"(?!\\.))|[^\\.])*?)(?(quote)"(?<-quote>))(?($)|\\.))+/';
	echo "$localPart\n";
	$localPart = preg_replace('/\\\\\\\\|\\\\"/', 'z', $localPart);
	echo "$localPart\n";
	$localPart = preg_replace('/"([^\\"])*"/', 'x', $localPart);
	echo "$localPart\n";
	$count = preg_match_all($pattern, $localPart, $elements);
	print_r($elements);
	echo "\n------------------------------------------------------------\n";
}
?>
</pre>
</body>

</html>
