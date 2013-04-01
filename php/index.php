<?php require_once '_context/site-context.php'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>

<head>
	<meta content="z2ccuoicPgUWN6F6QGaQZbmwhyOw07VBoupjPOEBsCw=" name="verify-v1" />
	<meta content="bad632ec3dca23322c720e7192af579ad0ab7cad" name="microid" />
	<meta name="google-site-verification" content="QpPXgB6u6SjoFPP57mW1mDDkykp0Xeqx2yQbx23IOVI" />
	<link href="http://www.myopenid.com/server" rel="openid.server" />
	<link href="http://dominic.sayers.myopenid.com/" rel="openid.delegate" />
	<meta content="http://dominic.sayers.myopenid.com/xrds" http-equiv="X-XRDS-Location" />

	<meta name="author" content="<?php echo $_owner_full_name?>" />
	<meta name="copyright" content="Copyright © 2011 <?php echo $_owner_full_name?>" />
	<meta name="description" content="Dominic Sayers is a director working in the IT department of a multinational investment bank. He is interested in how people collaborate in large organisations, in particular the challenges of communicating across hierarchical structures." />
	<meta name="keywords" content="Dominic Sayers is a director working in the IT department of a multinational investment bank. He is interested in how people collaborate in large organisations, in particular the challenges of communicating across hierarchical structures." />
	<meta name="robots" content="all" />

	<meta content="text/html;charset=UTF-8" http-equiv="Content-type" />

	<link href="CSS/delicious.css" rel="stylesheet" type="text/css" />
	<link href="CSS/layout.php" rel="stylesheet" type="text/css" />
	<link href="CSS/style.php" rel="stylesheet" type="text/css" />

	<title><?php echo $_owner_full_name?></title>

	<style type="text/css">
		.caption {text-align: center;}
	</style>
</head>

<body>

<div id="centre_content">
	<div class="imageblock">
		<a href="about">
			<img alt="About <?php echo $_owner_full_name?>" height="122" src="static/images/about_<?php echo $_owner_nickname?>.png" width="200" class="image" /><br />
			<p class="caption">About <?php echo $_owner_full_name?></p>
		</a>
	</div>

<!--	<div class="imageblock">
		<a href="http://www.thisisnotariot.org" target="_blank">
			<img alt="This is not a riot" height="122" src="static/images/tinar_businesscard.png" width="200" class="image" /><br />
			<p class="caption">This is not a riot</p>
		</a>
	</div>
-->
	<div class="imageblock">
		<a href="http://isemail.info" target="_blank">
			<img alt="Email address validation" height="122" src="static/images/thesearejustwords.gif" width="200" class="image" /><br />
			<p class="caption">Email address validation</p>
		</a>
	</div>

	<div class="imageblock">
		<a href="tagging">
			<img alt="Tagging and social software" height="122" src="static/images/Blogging_200.gif" width="200" class="image" /><br />
			<p class="caption">Tagging and social software</p>
		</a>
	</div>

	<div class="imageblock">
		<a href="management">
			<img alt="Organizations and technology" height="122" src="static/images/Company_hierarchy_200.gif" width="200" class="image" /><br />
			<p class="caption">Organizations and technology</p>
		</a>
	</div>

	<div class="imageblock">
		<a href="rage">
			<img alt="Rage and other stuff" height="122" src="static/images/Glob_of_chaos_200.gif" width="200" class="image" /><br />
			<p class="caption">Rage and other stuff</p>
		</a>
	</div>


	<br class="clearboth" />

</div>


<div id="sidebar_left"></div>
<div id="sidebar_right"></div>
<div id="banner" style="background-image:none;"></div>

<?php include '_includes/analytics.php'; ?>
</body>

</html>
