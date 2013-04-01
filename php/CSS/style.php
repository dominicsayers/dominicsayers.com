<?php
require_once '../_includes/initialize.php';
// Define color palette
// Blues
$palette['color_1']['fg_dark']		= '#264E62';
$palette['color_1']['fg_medium']	= '#346A85';
$palette['color_1']['fg_light']		= '#7E98A5';

$palette['color_1']['bg_default']	= '#FFFFFF';
$palette['color_1']['bg_light']		= '#D7DFE3';
$palette['color_1']['bg_lighter']	= '#DDE4E8';

$palette['color_2']['fg_dark']		= '#266139';
$palette['color_2']['fg_medium']	= '#34854E';
$palette['color_2']['fg_light']		= '#7EA58A';
/*
// Greens
$palette['color_1']['fg_dark']		= '#2f6226';
$palette['color_1']['fg_medium']	= '#408534';
$palette['color_1']['fg_light']		= '#84a57e';

$palette['color_1']['bg_default']	= '#FFFFFF';
$palette['color_1']['bg_light']		= '#d9e3d7';
$palette['color_1']['bg_lighter']	= '#dfe8dd';

$palette['color_2']['fg_dark']		= '#614f26';
$palette['color_2']['fg_medium']	= '#856d34';
$palette['color_2']['fg_light']		= '#a5997e';
*/

// Define font palette
$font_family['sans']			= 'Calibri,Tahoma,Verdana,Arial,Helvetica,sans serif';
$font_family['sans_with_sys_font']	= 'Segoe UI,Calibri,Tahoma,Verdana,Arial,Helvetica,sans serif';

// Associate visual elements with palette elements
$color_fg_default	= $palette['color_1']['fg_dark'];
$color_fg_deemphasize	= $palette['color_1']['fg_light'];
$color_fg_h1		= $palette['color_1']['fg_medium'];
$color_bg_h4		= $palette['color_1']['bg_light'];

$color_link_default	= $palette['color_2']['fg_dark'];
$color_link_visited	= $palette['color_2']['fg_medium'];
$color_link_hover	= $palette['color_2']['fg_light'];
$color_link_active	= $palette['color_1']['fg_dark'];

$color_border_cartouche	= $palette['color_1']['fg_light'];
$color_bg_cartouche	= $palette['color_1']['bg_lighter'];

// Font families
$font_family_text	= $font_family['sans'];
$font_family_control	= $font_family['sans_with_sys_font'];

// Other visual elements
$padding_pixels		= 7;
$margin_pixels		= 8;
$gap_pixels		= $margin_pixels + $padding_pixels;

$padding_default	= $padding_pixels . 'px';
$margin_default		= $margin_pixels . 'px';
$gap_default		= $gap_pixels . 'px';

// Environment
$browseroot		= $_SESSION['path']['browseroot'];

header('Content-type:text/css');

echo <<<CSS
/******************************************************************************

	Styles for standard site
	(c) 2008 Dominic Sayers

Version history:
	0.1		2008-09-08	First version
	0.2		2008-09-19	Dynamic using PHP
	0.3		2008-10-02	Text-based menu labels
	0.4		2008-10-03	Feeds now CSS rather than a table
					Palette removed to a separate file

******************************************************************************/

/******************************************************************************

	General properties
	(note that some may be inherited from layout.php)

******************************************************************************/
body {
	font-family:$font_family_text;
	color:$color_fg_default;
}

p,h1,h2,h3,h4,h5,h6 {
	font-family:inherit;
	color:inherit;
	padding:0 $padding_default 0 $padding_default;
	margin:0 $margin_default 0.5em $margin_default;
}


/******************************************************************************

	Links

******************************************************************************/
/*	I don't like permanent underlining, so I'm not letting you see it either.
	So there.
*/

a:link {
	text-decoration:none;
	color:$color_link_default;
}
a:visited {
	text-decoration:none;
	color:$color_link_visited;
}
a:hover {
	text-decoration:underline;
	color:$color_link_hover;
}
a:active {
	text-decoration:none;
	color:$color_link_active;
}
a img {
	border-style:none;
	vertical-align:baseline;
}



/******************************************************************************

	Headings

******************************************************************************/
h1, h2, h3, h4, h5, h6 {
	margin-bottom:0px;
}

h1 {
	color:$color_fg_h1;
}

h2 {
	font-size:17px;
}

h3 {
	font-size:15px;
}

h4 {
	font-size:14px;
	background-color:$color_bg_h4;
	padding-top:2px;
	padding-bottom:2px;
	margin-bottom:4px;
	border-radius:$margin_default;
	-webkit-border-radius:$margin_default; /* Pre-CSS 3.0 browser-specific rounded corners */;
	-moz-border-radius:$margin_default; /* Pre-CSS 3.0 browser-specific rounded corners */;
}



/******************************************************************************

	Tables

******************************************************************************/
table {
	empty-cells:show;
	border-style:none;
}

td {
	padding:0px;
}


/******************************************************************************

	General paragraph styles

******************************************************************************/
.justify {text-align:justify;}
.emphasis {font-weight:bold;}
.ramble {color:$color_fg_deemphasize;}

.mini {
	font-family:$font_family_control;
	font-size:10px;
	margin-bottom:10px;
}
.small {
	font-family:$font_family_control;
	font-size:12px;
	margin-bottom:0;
}

.blockquote {
	font-style:italic;
	margin-left:30px;
}

.horizontalrule {
	border-bottom-style:solid;
	border-bottom-width:1px;
}



/******************************************************************************

	Context-specific styles

******************************************************************************/
#centre_content hr {
	margin:0 $gap_default 0.5em $gap_default;
	color:$color_fg_deemphasize;
	background-color:$color_fg_deemphasize;
}

#centre_content div {
	margin:0 $gap_default 0.5em $gap_default;
}

#sidebar_left p {margin-bottom:1em;}

#sidebar_right img {margin:0 0 1em $gap_default;}
#sidebar_right div.addthis_toolbox {margin:0.5em $gap_default 1em $gap_default;}

#banner {
	background-image:url('$browseroot/static/images/banner/banner.jpg');
	background-repeat:no-repeat;
}

#banner_menu {
	position:absolute;
	top:60px;
	left:0px; /* Needed for IE */
	width:100%;
}

#banner_menu_leading {
	float:left;
	height:70px;
	width:40px;
	background-image:url('$browseroot/static/images/banner/tab_background.png');
}

#banner_menu_trailing {
	height:70px;
	margin-left:215px;
	background-image:url('$browseroot/static/images/banner/tab_background.png');
}

#banner_menu #tab_left {
	float:left;
	height:70px;
	width:20px;
	background-image:url('$browseroot/static/images/banner/tab_left.png');
}

#banner_menu #tab_right {
	float:left;
	height:70px;
	width:20px;
	background-image:url('$browseroot/static/images/banner/tab_right.png');
}

#banner_menu #tab_foreground {
	float:left;
	height:70px;
	width:135px;
	background-image:url('$browseroot/static/images/banner/tab_foreground.png');
}

#banner_menu a {
	position:relative;
	top:39px;
	font-size:15px;
	font-family:"Segoe UI", Calibri, Verdana, Arial, Helvetica, "sans serif";
	font-weight:bold;
	text-decoration:none;
}

#banner_link_container {
	position:absolute;
	top:$padding_default;
	right:$padding_default;
	width:354px;
	overflow:auto;
	background-color:$color_bg_cartouche;
/*	background-image:url('$browseroot/../static/images/banner feeds gradient.png'); */
	padding:8px;
	padding-top:6px;
	border:3px solid $color_border_cartouche;
	-webkit-border-radius:$margin_default; /* Pre-CSS 3.0 browser-specific rounded corners */;
	-moz-border-radius:$margin_default; /* Pre-CSS 3.0 browser-specific rounded corners */;
}

#banner_link {
	float:left;
	width:100px;
	text-align:right;
	font-family:$font_family_control;
	font-size:14px;
}

#banner_link_icon {
	float:left;
	width:14px;
	margin-top:2px;
	margin-left:4px;
}

/*	Center content															 */
.imageblock {
	float:left;
	width:200px;
	padding-top:$padding_default;
	padding-bottom:$gap_default;
	padding-left:$padding_default;
	padding-right:$padding_default;
	margin-left:$margin_default;
	margin-right:$margin_default;
}

.clearboth {
	clear:both;
}

/* Disqus comments */
#disqus_thread {
	margin-left:$gap_default;
}

#disqus_thread #dsq-content #dsq-auth .dsq-by {
	display:none;
}

#disqus_thread #dsq-content h3 {
	margin-left:0;
	padding-left:0;
	font-size:17px;
}

a.dsq-brlink {
	display:none;
}

/******************************************************************************

	Individual pages

******************************************************************************/
/*	socialdataflow/index.php												 */
a img.bigpicture {
	vertical-align:middle;
	margin-top:16px;
	margin-bottom:16px;
}
CSS;
?>
