<?php
include $_this_web_root . '/_includes/dynamic.php';

get_social_update('status');

get_social_update('location');

$picture_location = file_get_contents($_this_web_root . '/_context/picture.inc');
echo '<img alt="' . $_owner_full_name . '" height="264" src="' . $_SESSION['path']['browseroot'] . $picture_location . '" width="180" style="margin-left:7px;margin-bottom:10px" />';

readfile($_this_web_root . '/_context/about.inc.html');

echo "<h4>Contacting $_owner_familiar</h4>";

// Get contact methods from XML file
$xml_filename = $_this_web_root . '/_context/contact.xml';
$xsl_filename = $_this_web_root . '/_includes/contact.xsl';

$doc = new DOMDocument();
$xsl = new XSLTProcessor();
$doc->load($xsl_filename);
$xsl->importStyleSheet($doc);
$doc->load($xml_filename);

echo str_replace('+browseroot+', $_SESSION['path']['browseroot'], $xsl->transformToXML($doc));

get_social_update('microblog');
?>
