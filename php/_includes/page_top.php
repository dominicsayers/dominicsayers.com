<?php
	require_once '../_includes/initialize.php';	// Global (website) initialization
	require_once '_context/section-context.php';	// Local (section) context
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>

<head>
	<meta content="text/html;charset=UTF-8" http-equiv="Content-type" />
	<link rel="shortcut icon" href="../static/images/favicon.ico"/>
	<script type="text/javascript" src="/ezuser/release/test/ajaxUnit.php?js"></script>
	<link href="../CSS/layout.php" rel="stylesheet" type="text/css" />
	<link href="../CSS/style.php" rel="stylesheet" type="text/css" />

	<title><?php echo "{$_SESSION['owner']['full_name']} - $_section_title"; ?></title>
</head>

<body>
	<div id="ajaxUnit-parse"></div>
	<div id="centre_content">
	<!-- individual page content below here -->
