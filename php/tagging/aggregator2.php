<?php require_once 'context/section-context.php'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html><head>
<meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
<title><?php echo $_owner_full_name?> - <?php echo $_section_title?> - <?php $page_title="The corporate feed aggregator revisited"; echo $page_title; ?></title>

<link href="../CSS/layout.php" rel="stylesheet" type="text/css" />
<link href="../CSS/style.php" rel="stylesheet" type="text/css" />
</head>

<body>

<div id="centre_content">
	<h2>The corporate feed aggregator revisited</h2>

	<p>
				I should clarify something I said in a
				<a href="aggregator.php">
				previous post</a> about the ideal corporate aggregator. I said
				it could not be browser-based and when I said that I had in mind
				a very specific architecture that would not work in a corporate
				environment.
	</p>
	<p>Thinking about this some more there are of course
				ways of implementing a personal aggregator with a browser
				interface. My objection was to feed caches that simply subscribe
				on behalf of their users to a set of feeds then serve them using
				HTML. This cannot work in a corporate environment because the
				server is either subscribing only to public (non-secured) feeds
				or&nbsp;supplying a general set of credentials on behalf of the
				entire user population.</p>
				<p>You could implement a corporate aggregator with a browser
				interface if you designed it so that it was in effect a virtual
				personal aggregator application sitting on a server. Each user
				would have his or her own credentials&nbsp;held on the server, and
				for secured feeds they would need their own personal storage of
				that content. Public content could be shared among all the users
				and this might cut down on the overall storage requirement
				across the corporation. How many times do you need to store the
				same Boing Boing posts?</p>
				<p>So, I will reiterate my seven requirements for an
				ideal&nbsp;corporate aggregator:</p>
				<p>1. It must be able to supply to a secured feed the personal
				credentials of an individual user.</p>
				<p>2. It must support all the authentication mechanisms used in
				the corporate environment: digital certificate, Kerberos, NTLM.
				Any more?</p>
				<p>3. It must be able to be managed centrally by the support
				department. This means managing a user’s portfolio of feeds for
				him. There are three reasons for this: (a) there are users who
				will not want to manage their own feeds at the outset as the
				technology is new to them, (b) there will likely be a standard
				set of feeds that all users must consume (corporate bulletins
				and the like) and (c) when the aggregator is upgraded or
				replaced we will need to preserve each user’s feed collection
				during the process. These actions need to be scriptable in some
				way.</p>
				<p>4. The Read/Not Read status of any post in any channel must
				follow the user around. Corporate users change locations
				frequently, they work from home, they make VPN connections from
				internet cafes. Whatever the situation they need to see the same
				feed collection and the same unread posts.</p>
				<p>5. The user interface must be sufficiently rich to make
				consuming a large number of feeds efficient. This is another
				challenge to browser-based aggregators which currently do not
				support single-key reading. However carefully you select your
				channels there will always be a certain amount of noise in
				amongst the signal. You need to be able to move rapidly through
				irrelevant posts to give you more time to read the relevant
				ones.</p>
				<p>6. On the same subject of signal-to-noise ratio, there are
				channels that frequently have useful content so you need to
				subscribe to them but it is mixed in with the personal bugbears
				of the author. Some feed publishers will provide a feed of
				certain categories of post so you can filter out the noise this
				way, but this means you miss any interesting new categories the
				author introduces. What I need is a way of subscribing to all
				posts
				<a target="_blank" href="http://www.google.com/search?ie=UTF-8&oe=UTF-8&q=unicorn&domains=boingboing.net&sitesearch=boingboing.net">
				except those which mention Unicorns</a> for instance.
				<a target="_blank" href="http://blog.dominicsayers.com/2006/05/17/blog-post-filtering/">
				The aggregator must support filtering</a>.</p>
				<p>7. We need to get away from the arrangement of feeds into a
				folder hierarchy. I want to tag my feeds with arbitrary
				categories. I want to be able to Mark All As Read in any given
				category if I am pushed for time. Der. I can’t believe nobody
				has done this yet. Tags not hierarchy!</p>
				<p>Somebody tell me they are working on this, please.
	</p>

	<p class="ramble mini">I would welcome feedback on this article. Please leave a comment
	<a target="_blank" href="http://blog.dominicsayers.com/2006/06/02/corporate-feed-aggregator-revisited/">here</a></p>
	<p class="thrust mini">
	&lt; Back to <a href="<?php echo $_SESSION['path']['browseroot'] ?>/tagging">Tagging and social software</a>
	| <a target="_blank" href="http://blog.dominicsayers.com/2006/06/02/corporate-feed-aggregator-revisited/">Original post</a>
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
