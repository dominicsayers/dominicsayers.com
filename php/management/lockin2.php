<?php require_once 'context/section-context.php'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html><head>
<meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
<title><?php echo $_owner_full_name?> - <?php echo $_section_title?> - <?php $page_title="Vendor lock-in, part 2"; echo $page_title; ?></title>

<link href="../CSS/layout.php" rel="stylesheet" type="text/css" />
<link href="../CSS/style.php" rel="stylesheet" type="text/css" />
</head>

<body>

<div id="centre_content">
	<h2>Vendor lock-in, part 2</h2>

	<p>
				Following
				<a target="_blank" href="http://blog.dominicsayers.com/2006/06/21/is-it-a-good-business-strategy-to-make-it-easy-for-your-customers-to-leave-you/">
				my post</a> on whether lock-in is a good business strategy Joel
				Spolsky has
				<a target="_blank" href="http://www.joelonsoftware.com/items/2006/08/23.html">
				written</a> about the same thing. Coincidence I’m sure, I don’t
				think he reads my blog.</p><p>My conclusion was that it is no bad
				thing to allow customers to switch easily to a competitor but
				this was based more on gut feeling than hard facts. Now we have
				those facts: Joel says it costs him 2% of his revenues to make
				customer refunds. This is a sustainably low figure if his
				margins are reasonable and it is low despite a promise on the
				<a target="_blank" href="https://www.copilot.com/signup/">
				Copilot signup page</a> that you “may cancel at any time, on the
				web, without hassle”.</p>
				<p>Contrast this with my experience of
				<a target="_blank" href="http://blog.dominicsayers.com/2005/05/23/subscription-to-ftcom/">
				cancelling a subscription</a> to FT.com. I was duped by a
				similar promise of a web-based cancellation, but it led me to a
				page that just had a phone number to call where they tried to
				interrogate me about my cancellation and get me to change my
				mind. I will never subscribe to their services again, firstly
				because of the subterfuge and secondly because of the hard sell.
				If I needed Copilot, on the other hand, I would be only too glad
				to subscribe.</p>
				<p>Joel points out
				<a target="_blank" href="http://www.joelonsoftware.com/articles/fog0000000052.html">
				another great post</a> from his archives, one that is rich with
				irony. He used to be a member of the Microsoft Excel development
				team and recalls what made it a success in a market dominated by
				Lotus 123. The killer feature in Excel 4.0 was that it allowed
				the user to switch back to the Lotus 123 easily - it could write
				Lotus-format spreadsheets. This meant that the isolated Excel
				fans in an organisation could now use their favourite tool but
				still communicate with colleagues who used Lotus 123.</p>
				<p>The irony? Microsoft Excel now has a 100% market share and
				the biggest reason why companies cannot switch to another
				product is the lock-in enforced by the lack of compatibility
				with today’s competitors. History would suggest that the first
				competitor to repeat the trick of Excel 4.0 will do well, but
				clearly this would be bad news for Microsoft.</p>
				<p>Lock-in, therefore, is a good strategy when you have a
				monopoly position but a bad one if you are after market share.
				Thanks to Stu for pointing me to
				<a target="_blank" href="http://www.roughtype.com/archives/2006/06/why_do_you_thin.php">
				a post</a> from Nicholas Carr that supports the first half of
				that statement. And thanks to Joel for the confirmation of my
				gut feeling.
	</p>

	<p class="ramble mini">I would welcome feedback on this article. Please leave a comment
	<a target="_blank" href="http://blog.dominicsayers.com/2006/08/23/lock-in-part-deux/">here</a></p>
	<p class="thrust mini">
	&lt; Back to <a href="<?php echo $_SESSION['path']['browseroot'] ?>/management">Organizations and technology</a>
	| <a target="_blank" href="http://blog.dominicsayers.com/2006/08/23/lock-in-part-deux/">Original post</a>
	| <a target="_blank" href="http://blog.dominicsayers.com/tag/organizations/">Other posts with this tag</a>
	| <a target="_blank" href="http://blog.dominicsayers.com">Latest post</a>
	</p>
</div>

<div id="sidebar_left"> <?php include("../_includes/left-sidebar.php"); ?> </div>
<div id="sidebar_right"><?php include("../_includes/right-sidebar.php"); ?></div>
<div id="banner">       <?php include("../_includes/banner.php"); ?>       </div>

<?php include("../_includes/analytics.php"); ?>
</body>
</html>
