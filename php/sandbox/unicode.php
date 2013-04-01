<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="chrome=1"/>
	<title>Testing Unicode buggeration</title>
</head>

<body>
	<pre>
<?php
$haystack = '[␀]';
echo "\$haystack = $haystack" . PHP_EOL;
$result = str_replace('␀', 'x', $haystack);
echo "\$result = $result" . PHP_EOL;
$needle1 = mb_convert_encoding('&#x2400;', 'UTF-8', 'HTML-ENTITIES');
echo "[\$needle1] = [$needle1]" . PHP_EOL;
$needle2 = html_entity_decode('&#x2400;', ENT_COMPAT, 'UTF-8');
echo "[\$needle2] = [$needle2]" . PHP_EOL;
$needle3 = mb_convert_encoding('&#9216;', 'UTF-8', 'HTML-ENTITIES');
echo "[\$needle3] = [$needle3]" . PHP_EOL;
$result1 = str_replace($needle1, 'x', $haystack);
echo "\$result1 = $result1" . PHP_EOL;
$result2 = str_replace($needle2, 'x', $haystack);
echo "\$result2 = $result2" . PHP_EOL;
$result3 = str_replace($needle3, 'x', $haystack);
echo "\$result3 = $result3" . PHP_EOL;

$encodings = mb_list_encodings();

foreach ($encodings as $encoding) {
	echo "$encoding: " . mb_convert_encoding($needle3, $encoding, 'UTF-8') . PHP_EOL;
}
//echo '<hr />';
//echo phpinfo();
?>
	</pre>
</body>
</html>
