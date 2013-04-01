<div id="banner_menu">
	<div id="banner_menu_leading"></div>

	<div id="tab_left"></div>
	<div id="tab_foreground"><a href="<?php echo $_SESSION['path']['browseroot'] ?>/about" alt="Home page"><?php echo $_owner_full_name?></a></div>
	<div id="tab_right"></div>

	<div id="banner_menu_trailing"></div>
</div>

<?php
// Get links from XML file
$xml_filename = $_this_web_root . '/_context/links.xml';
$xsl_filename = $_this_web_root . '/_includes/links.xsl';

$doc = new DOMDocument();
$xsl = new XSLTProcessor();
$doc->load($xsl_filename);
$xsl->importStyleSheet($doc);
$doc->load($xml_filename);

echo str_replace('+browseroot+', $_SESSION['path']['browseroot'], $xsl->transformToXML($doc));
?>
