<?php
$banner_height		= "150px";
$left_sidebar_width	= "200px";
$right_sidebar_width	= "175px";

header('Content-type: text/css');

echo <<<CSS
/******************************************************************************
	Three-volumn liquid layout for browsers from 2008
	(c) 2008 Dominic Sayers

Notes:
	1.	This stylesheet is not intended to render any visual styles. I
		recommend you put them in a separate file. This is intended only to
		layout the page correctly.
	2.	Not tested on IE6 (can't get hold of IE6)
	3.	Renders correctly on
			IE7 (Windows),
			Firefox 3.0.1 (Windows, OS X and Ubuntu),
			Opera 9.5 (Windows, OS X and Ubuntu),
			Google Chrome (Windows)

Version history:
	0.1		2008-09-08	First version
	0.2		2008-09-19	Dynamic using PHP
******************************************************************************/

#banner {
	position: absolute;
	top: 0px;
	left: 0px;
	height: $banner_height;
	width: 100%;
}

#sidebar_left {
	position: absolute;
	top: $banner_height;
	left: 0px;
	width: $left_sidebar_width;
}

#centre_content {
	position: absolute;
	top: $banner_height;
	left: $left_sidebar_width;
	margin-right: $right_sidebar_width;
}

#sidebar_right {
	position: absolute;
	top: $banner_height;
	width: $right_sidebar_width;
	right: 0px;
}
CSS;
?>

