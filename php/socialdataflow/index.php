<?php require_once 'context/section-context.php'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
<title><?php echo $_owner_full_name?> - <?php echo $_section_title?> - <?php $page_title="Dominic Sayers - Social Data Flow"; echo $page_title; ?></title>
<link href="../CSS/layout.php" rel="stylesheet" type="text/css" />
<link href="../CSS/style.php" rel="stylesheet" type="text/css" />
</head>

<body>

<div id="centre_content">
	<h2>My social data flow</h2>
	<p class="ramble">This is a developing topic: keep track of it on
	<a target="_blank" href="http://blog.dominicsayers.com/tag/social-software/social-data-flow/">
	my blog</a>.</p>
	<p class="ramble">Here&#39;s how my updates arrive at their destination</p>
	<p class="ramble">
	<img class="bigpicture" height="654" src="SocialDataFlow.png" width="739" /></p>
	<p class="ramble">Here&#39;s an <a href="SocialDataFlow.svg">SVG version</a> you can edit. Please credit me if you do so.</p>
	<p class="ramble"><a rel="license" href="http://creativecommons.org/licenses/by-sa/3.0/">
<img alt="Creative Commons License" style="border-width:0" src="http://creativecommons.org/images/public/somerights20.png" />
</a>
<br />This work is licenced under a
<a rel="license" href="http://creativecommons.org/licenses/by-sa/3.0/">Creative Commons Licence</a>.</p>
</div>

<div id="sidebar_left"> <?php include("../_includes/left-sidebar.php"); ?> </div>
<div id="banner">       <?php include("../_includes/banner.php"); ?>       </div>

<?php include("../_includes/analytics.php"); ?>
</body>
</html>
