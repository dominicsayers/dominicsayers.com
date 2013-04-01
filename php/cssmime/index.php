<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>

<head>
	<meta content="text/html;charset=UTF-8" http-equiv="Content-type" />
	<title>Dominic Sayers - Dynamic CSS MIME demonstration</title>
	<link href="CSS/layout.php" rel="stylesheet" type="text/css" />
	<link href="CSS/color.css" rel="stylesheet" type="text/css" />
</head>

<body>
	<div id="centre_content">
		<h2>Main content</h2>
		Go to the <a href="mime.php">version that explicitly declares the MIME-type of the CSS (the version that works on Firefox too)</a>
		<?php readfile("rubric.inc"); ?>
	</div>

	<div id="sidebar_left">		<h2>Left sidebar</h2>	</div>
	<div id="sidebar_right">	<h2>Right sidebar</h2>	</div>
	<div id="banner">		<h2>Banner</h2>		</div>
</body>

</html>
