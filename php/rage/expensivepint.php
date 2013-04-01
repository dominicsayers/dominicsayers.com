<?php require_once 'context/section-context.php'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html><head>
<meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
<title><?php echo $_owner_full_name?> - <?php echo $_section_title?> - <?php $page_title="The most expensive pint in London?"; echo $page_title; ?></title>

<link href="../CSS/layout.php" rel="stylesheet" type="text/css" />
<link href="../CSS/style.php" rel="stylesheet" type="text/css" />
</head>

<body>

<div id="centre_content">
	<h2>The most expensive pint in London?</h2>

	<p>
				This is real.</p><p>
				<a target="_blank" href="http://www.flickr.com/photos/dominicsayers/217794322/">
				<img height="240" alt="Receipt for £4.60" src="http://static.flickr.com/61/217794322_3af3cb4343_m.jpg" width="181" align="middle" vspace="8" /></a></p>
				<p>And, credit where it’s due, she said this with a straight
				face as she gave me my drink. If this was a bar in a West End
				hotel then I might not be surprised at the price. But it isn’t,
				it’s a regular bar in the City. It’s not as if there aren’t
				plenty of other bars in EC2, some charging as little as £3 a
				pint. There weren’t even any celebrities in there.</p>
				<p>The most shocking thing is that the VAT on this drink is more
				than the entire price of a pint back in my student union days in
				Gower Street.</p>

	<p class="ramble mini">I would welcome feedback on this article. Please leave a comment
	<a target="_blank" href="http://blog.dominicsayers.com/2006/08/17/the-most-expensive-pint-in-london/">here</a></p>
	<p class="thrust mini">
	&lt; Back to <a href="<?php echo $_SESSION['path']['browseroot'] ?>/rage">Rage and other stuff</a>
	| <a target="_blank" href="http://blog.dominicsayers.com/2006/08/17/the-most-expensive-pint-in-london/">Original post</a>
	| <a target="_blank" href="http://blog.dominicsayers.com/tag/off-topic/rage/">Other posts with this tag</a>
	| <a target="_blank" href="http://blog.dominicsayers.com">Latest post</a>
	</p>
</div>

<div id="sidebar_left"> <?php include("../_includes/left-sidebar.php"); ?> </div>
<div id="sidebar_right"><?php include("../_includes/right-sidebar.php"); ?></div>
<div id="banner">       <?php include("../_includes/banner.php"); ?>       </div>

<?php include("../_includes/analytics.php"); ?>
</body>
</html>
