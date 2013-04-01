<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Untitled 1</title>
</head>

<body>
<pre>
<?php
$localParts[] = 'fname.lname.age.salary';
$localParts[] = 'nancy.davolio.33.$30000';
$localParts[] = 'erin.borakova.28.$25250';
$localParts[] = 'tony.raphael.35.$28700';
$localParts[] = '"Date"."Pupil"."Grade"';
$localParts[] = '"25 May"."Bloggs. Fred"."C"';
$localParts[] = '"25 May"."Doe. Jane"."B"';
$localParts[] = '"15 July"."Bloggs. Fred"."D"';
$localParts[] = '123456789."Carr. Lisa".100000¬00';
$localParts[] = '444556666."Barr. Clark".87000¬00';
$localParts[] = '777227878."Parr. Jack".123000¬00';
$localParts[] = '998877665."Charr. Lee".123000¬00';
$localParts[] = 'Conference room 1. "John.
Please bring the M¬ Mathers file for review
-J¬L¬
"';
$localParts[] = '10/18/2002.¬¬¬';
$localParts[] = 'John.Doe.120 jefferson st¬.Riverside. NJ. 08075';
$localParts[] = 'Jack.McGinnis.220 hobo Av¬.Phila. PA.09119';
$localParts[] = '"John ""Da Man""".Repici.120 Jefferson St¬.Riverside. NJ.08075';
$localParts[] = 'Stephen.Tyler."7452 Terrace ""At the Plaza"" road".SomeTown.SD. 91234';
$localParts[] = '.Blankman..SomeTown. SD. 00298';
$localParts[] = '"Joan ""the bone"". Anne".Jet."9th. at Terrace plc".Desert City.CO.00123';
$localParts[] = 'XXXX.D.3-May-02.83¬01.83¬58.71¬13.78¬04.9645300';
$localParts[] = 'XXXX.D.2-May-02.82¬47.85¬76.82¬05.83¬84.7210000.';
$localParts[] = 'XXXX.D.1-May-02.86¬80.90¬83.81¬74.85¬50.14253300';
$localParts[] = '"1997".car model.E350';
$localParts[] = '1997.car model.E350."  Super luxurious truck    "';
$localParts[] = '1997.car model.E350."Go get one now
they are going fast"';
$localParts[] = '1997.car model.E350."Super ""luxurious"" truck"';
$localParts[] = '1997.car model.E350."Super. luxurious truck"';
$localParts[] = '1997.car model.E350."ac. abs. moon".3000¬00';
$localParts[] = '1999. car model."Venture ""Extended Edition"""..4900¬00.';
$localParts[] = '1996. car model.Old Car."BEYOND REPAIR!
air. moon roof. loaded".4799¬00';
$localParts[] = 'This.is.a test.CSV. file." from ""http://lorance¬freeshell¬org/csv/test¬csv""¬"';
$localParts[] = 'It contains."quoted text".and.numbers 1234.5678';
$localParts[] = 'It also has."quoted text with an embedded quote""<- right there"';
$localParts[] = 'Then there are a few..blank fields like these here ->...';
$localParts[] = 'A quoted blank field."".<- there¬';
$localParts[] = 'A quoted blank field with newline."\n".<- there¬';
$localParts[] = 'This next one causes an error if newline handling is turned off¬';
$localParts[] = '"There is a newline here ->
<- and it should be processed correctly¬"';
$localParts[] = 'ABCD';
$localParts[] = '"And here... is an""Error - no"';
$localParts[] = '"And here... is an"Error - yes';
$localParts[] = '"And here... is an".Error - no';
$localParts[] = '1.2.3';
$localParts[] = 'ab."c.d"."e""f". "g""."""."h
jk".kl';
$localParts[] = '"aaa"."bbb"."ccc"';
$localParts[] = 'zzz.yyy.xxx';
$localParts[] = '"aaa"."b';
$localParts[] = 'bb"."ccc"';
$localParts[] = 'zzz.yyy.xxx';
$localParts[] = '"aaa"."b""bb"."ccc"';

foreach ($localParts as $key => $localPart) {
	$pattern = '/(\\.|\\r\\n|\\n|\\r)(?=(?:[^\\"]*\\"[^\\"]*\\")*(?![^\\"]*\\"))/m';
	echo "$localPart\n";
// $localPart = preg_replace('/\\\\\\\\|\\\\"/', 'z', $localPart);
// echo "$localPart\n";
// $localPart = preg_replace('/"([^\\"])*"/', 'x', $localPart);
// echo "$localPart\n";
	$elements = preg_split($pattern, $localPart);
	print_r($elements);
	echo "\n------------------------------------------------------------\n";
}
?>
</pre>
</body>

</html>
