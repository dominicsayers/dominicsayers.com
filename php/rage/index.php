<?php require_once 'context/section-context.php'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html><head>
<meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
<title><?php echo $_owner_full_name?> - <?php echo $_section_title?> - <?php $page_title="Rage and other stuff"; echo $page_title; ?></title>

<link href="../CSS/layout.php" rel="stylesheet" type="text/css" />
<link href="../CSS/style.php" rel="stylesheet" type="text/css" />
</head>

<body>

<div id="centre_content">
	<h2>Rage and other stuff</h2>
	<p class="ramble">
	What bugs me
	</p>

	<p class="thrust emphasis">Rage</p>

	<p class="thrust"><a href="userexperience1.php">A user experience</a></p>
	<p class="ramble">Excerpt: You can listen to music from your hard disk or CDs, watch videos from your hard disk or DVD player, listen to the radio and look at your family photographs. All this is combined into an easy-to-use interface for non-technical people. So it should just work, right?</p>

	<p class="thrust"><a href="expensivepint.php">The most expensive pint in London?</a></p>
	<p class="ramble">Excerpt: Credit where it’s due, she said this with a straight face as she gave me my drink</p>

	<p class="thrust"><a href="chilternrailways.php">Another user experience</a></p>
	<p class="ramble">Excerpt: You would be perfectly entitled to expect them to know their arse from their elbow</p>

	<p class="thrust emphasis">Cricket</p>

	<p class="thrust"><a href="montypanesar1.php">Mudhsuden Singh Panesar</a></p>
	<p class="ramble">Excerpt: It is for his bowling that he has been selected, and it is his bowling that marks him out as a genuine international cricketer. Whatever nerves he displays in the field or with the bat seem to disappear when the ball is thrown to him.</p>

	<p class="thrust"><a href="LBW.php">Law 36 (Leg before wicket)</a></p>
	<p class="ramble">Excerpt: Heavens to betsy! The batsman is out whatever the ball might have done when it pitched. Whatever happened to giving the batsman the benefit of the doubt?</p>

	<p class="thrust"><a href="montypanesar2.php">Monty Panesar, part 2</a></p>
	<p class="ramble">Excerpt: With this analysis we can see that Panesar’s value to the side has more than one dimension. His excellent control means that he will hardly ever concede runs quickly so he is a very valuable economical bowler. Furthermore he can bowl many overs because he is not exerting himself as much as a fast bowler. Without a containing spinner you need two economical seam bowlers or a bits and pieces player who can bowl a few overs to give the others a rest.</p>

	<p class="thrust emphasis">Language</p>

	<p class="thrust"><a href="germanbusinessenglish.php">German Business English</a></p>
	<p class="ramble">Excerpt: As I argued with a German consultant over the word “bi-weekly” it became clear to me that German Business English is a dialect with its own conventions and standards, as different from British English as Australian, say.</p>

	<p class="thrust"><a href="lostplacenames.php">Lost place names</a></p>
	<p class="ramble">Excerpt: Nobody really knows why the area is called Marylebone, but it definitely wasn’t named after anybody called Marley (as in Marleybone).</p>

	<p class="thrust emphasis">Lembriela</p>

	<p class="thrust"><a target="_blank" href="http://blog.dominicsayers.com/2007/10/17/lembriela/">The Lembriela Meme</a></p>
	<p class="ramble">I have a small wager with a friend that I can get the word Lembriela into circulation. You can help by using it as often as possible. Go on, it sounds nice.</p>

	<p class="thrust mini">
	&lt; Back to <a href="<?php echo $_SESSION['path']['browseroot'] ?>/">Home</a>
	| Blog posts: <a target="_blank" href="http://blog.dominicsayers.com/tag/off-topic/rage/">Rage</a>
	| <a target="_blank" href="http://blog.dominicsayers.com/tag/off-topic/cricket/">Cricket</a>
	| <a target="_blank" href="http://blog.dominicsayers.com/tag/off-topic/language/">Language</a>
	| <a target="_blank" href="http://blog.dominicsayers.com">Latest post</a>
	</p>
</div>

<div id="sidebar_left"> <?php include("../_includes/left-sidebar.php"); ?> </div>
<div id="sidebar_right"><?php include("../_includes/right-sidebar.php"); ?></div>
<div id="banner">       <?php include("../_includes/banner.php"); ?>       </div>

<?php include("../_includes/analytics.php"); ?>
</body>
</html>
