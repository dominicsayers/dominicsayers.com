<?php require_once 'context/section-context.php'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html><head>
<meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
<title><?php echo $_owner_full_name?> - <?php echo $_section_title?> - <?php $page_title="Features of a corporate feed aggregator"; echo $page_title; ?></title>

<link href="../CSS/layout.php" rel="stylesheet" type="text/css" />
<link href="../CSS/style.php" rel="stylesheet" type="text/css" />
</head>

<body>

<div id="centre_content">
	<h2>Features of a corporate feed aggregator</h2>
	<p>
				Here’s what I think is essential for a corporate RSS reader:</p>
				<p>
				1. It must support individual authentication in order to access
				secured feeds. Preferably using a digital certificate to
				identify the user. This rules out all browser-based aggregators</p>
				<p>2. Most users will want to get started straight away and will
				not want to spend a long time managing their list of feeds. We
				need a way of managing centrally a user’s OPML file and adding a
				feed for them if they request it.</p>
				<p>3. We need the Read/Not Read status of the content to follow
				the user around, whether he is using his regular desktop
				machine, working from home on his laptop, or in an internet cafe
				using a server-based computing environment or a VPN.</p>
				<p>4. The consumption of new content needs to be efficient. My
				aggregator supports Space Bar single-key reading. I just hammer
				away at the Space Bar until I find a post I’m interested in.
				This enables me to consume a large number of feeds in a short
				amount of time. We will be accused of creating an UNproductivity
				tool unless we can demonstrate this!</p>
				<p>These things are pretty important for this technology to get
				accepted in the corporate environment. For my own benefits I
				would also like to see a feed aggregator that has the following
				feature:</p>
				<p>5. Feeds are organised by tagging them, not by creating a
				hierarchical folder structure. Individual posts could also be
				tagged.
	</p>
	<p class="ramble mini">I would welcome feedback on this article. Please leave a comment
	<a target="_blank" href="http://blog.dominicsayers.com/2006/05/09/features-of-a-corporate-feed-aggregator/">here</a></p>
	<p class="thrust mini">
	&lt; Back to <a href="<?php echo $_SESSION['path']['browseroot'] ?>/tagging">Tagging and social software</a>
	| <a target="_blank" href="http://blog.dominicsayers.com/2006/05/09/features-of-a-corporate-feed-aggregator/">Original post</a>
	| <a target="_blank" href="http://blog.dominicsayers.com/tag/corporate-aggregator/">Other posts with this tag</a>
	| <a target="_blank" href="http://blog.dominicsayers.com">Latest post</a>
	</p>
</div>

<div id="sidebar_left"> <?php include("../_includes/left-sidebar.php"); ?> </div>
<div id="sidebar_right"><?php include("../_includes/right-sidebar.php"); ?></div>
<div id="banner">       <?php include("../_includes/banner.php"); ?>       </div>

<?php include("../_includes/analytics.php"); ?>
</body>
</html>
