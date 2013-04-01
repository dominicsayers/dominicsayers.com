<?php require_once 'context/section-context.php'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html><head>
<meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
<title><?php echo $_owner_full_name?> - <?php echo $_section_title?> - <?php $page_title="Tagging and social software"; echo $page_title; ?></title>

<style type="text/css">
	/* just some basic formatting, no layout stuff */
	/* 3-column liquid layout */
</style>
<link href="../CSS/style.php" rel="stylesheet" type="text/css" />
<link href="../CSS/layout.php" rel="stylesheet" type="text/css" />
</head>

<body>

<div id="centre_content">
	<h2>Social software</h2>
	<p class="ramble">
	A collection of things I have written about tagging and social software generally.
	</p>

	<p class="horizontalrule" />

	<p class="thrust emphasis">My social data flow</p>

	<p class="ramble">Realising that my blog posts, Twitter updates and FriendFeed were in danger of creating a feedback loop and a never-ending series of
	updates, I decided to rationalise the data flow using a defined syndication point and a defined aggregation point. The result is a coherent
	social data flow that keeps everything synchronised and prevents multiple notifications of the same event.</p>

	<p class="thrust"><a href="<?php echo $_SESSION['path']['browseroot'] ?>/socialdataflow">
	<img class="bigpicture" src="../socialdataflow/SocialDataFlowThumb.png" alt="Social data flow diagram" /></a></p>

	<p class="horizontalrule" />

	<p class="thrust emphasis">A corporate feed aggregator</p>

	<p class="ramble">There isn't an RSS aggregator that is really appropriate for the corporate environment. In these articles
	I discuss the features such an aggregator would need and why. I avoid the use of the term RSS for two reasons: firstly, it is
	geek jargon and not meaningful to a lay person and secondly, it is not the only syndication protocol.</p>

	<p class="thrust"><a href="aggregator.php">Features of a corporate feed aggregator</a></p>
	<p class="ramble">Excerpt: The consumption of new content needs to be efficient. My aggregator supports Space Bar single-key reading.
	I just hammer away at the Space Bar until I find a post I’m interested in. This enables me to consume a large number of feeds in a
	short amount of time. We will be accused of creating an UNproductivity tool unless we can demonstrate this
	</p>

	<p class="thrust"><a href="aggregator2.php">The corporate feed aggregator revisited</a></p>
	<p class="ramble">Excerpt: This means managing a user’s portfolio of feeds for him. There are three reasons for this:
	(a) there are users who will not want to manage their own feeds at the outset as the technology is new to them,
	(b) there will likely be a standard set of feeds that all users must consume (corporate bulletins and the like) and
	(c) when the aggregator is upgraded or replaced we will need to preserve each user’s feed collection during the process.
	</p>

	<p class="horizontalrule" />

	<p class="thrust emphasis">Tagging</p>

	<p class="thrust"><a href="tagging101.php">Tagging 101</a></p>
	<p class="ramble">Excerpt: Tagging has been extended to email by Gmail. Uniquely, Gmail does not allow you to organize your emails into folders. Instead it allows you to give them multiple labels. Finding an old email in Gmail is easy because you can use the labels as if they were folders but you can also search for any text in the email very quickly.</p>

	<p class="thrust"><a href="gloryofthegarden.php">The glory of the garden</a></p>
	<p class="ramble">Excerpt: People often ask why sites don’t adopt a more formal approach and encourage or force users to use a restricted set of tags. This, they say, would lead to a more reliable way of finding what you want - if some people say autumn and some say fall then how can you find all pictures of leaves turning brown?</p>

	<p class="thrust"><a href="corporatetagging1.php">Tagging in the corporate environment, part 1</a></p>
	<p class="ramble">Excerpt: You should be able to tag what you can see (whatever it is) and manage your tags like any set of bookmarks. However much of the value of tagging for the enterprise lies in the aggregation of those tags over the whole population of users and this cannot be done without preserving the ACLs of the assets being tagged.</p>

	<p class="thrust"><a href="corporatetagging2.php">Tagging in the corporate environment, part 2</a></p>
	<p class="ramble">Excerpt: I claim that the visibility of the tag is a real concern for corporate taggers. In an investment banking environment we are not allowed even to list the transactions that the advisory teams are working on because that knowledge is market-sensitive. A tag could easily give the game away.</p>

	<p class="thrust mini">
	&lt; Back to <a href="<?php echo $_SESSION['path']['browseroot'] ?>/">Home</a>
	| Blog posts: <a target="_blank" href="http://blog.dominicsayers.com/tag/social-software/tagging/">Tagging</a>
	| <a target="_blank" href="http://blog.dominicsayers.com/tag/social-software/corporate-aggregator/">Corporate aggregator</a>
	| <a target="_blank" href="http://blog.dominicsayers.com/tag/social-software/">Social software</a>
	| <a target="_blank" href="http://blog.dominicsayers.com">Latest post</a>
	</p>
</div>

<div id="sidebar_left"> <?php include("../_includes/left-sidebar.php"); ?> </div>
<div id="sidebar_right"><?php include("../_includes/right-sidebar.php"); ?></div>
<div id="banner">       <?php include("../_includes/banner.php"); ?>       </div>

<?php include("../_includes/analytics.php"); ?>
</body>
</html>
