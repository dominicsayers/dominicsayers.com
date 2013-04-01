<?php require_once 'context/section-context.php'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>

<head>
	<meta content="text/html;charset=UTF-8" http-equiv="Content-type" />

	<link href="../CSS/layout.php" rel="stylesheet" type="text/css" />
	<link href="../CSS/style.php" rel="stylesheet" type="text/css" />

	<title><?php echo $_owner_full_name?> - <?php echo $_section_title?></title>
</head>

<body>

<div id="centre_content">
	<h2>Organizations and technology</h2>
	<p class="ramble">
	A collection of things I have written about organizations and technology.
	</p>

	<p class="thrust emphasis">Organizations</p>

	<p class="thrust"><a href="commandandcontrol.php">Command and control</a></p>
	<p class="ramble">Excerpt: A complete monoculture is inherently unhygenic; it is vulnerable to a single threat, it’s a single point of failure. The usual biodiversity of an organization exists because we tend to allow a little duplication here and there, some variations from the standard, multiple standards.</p>
	<p class="ramble">The article above came from a comment by Sigurd Rinde after I linked to his excellent post "You know something is wrong..."</p>

	<p class="thrust"><a href="youknowsomethingiswrong.php">You know something is wrong...</a></p>
	<p class="ramble">Excerpt: I agree with a far higher proportion of Sig’s assertions in this list than I do with the Cluetrain Manifesto’s 95 theses. Both lists contain good ideas and numbnuts ones. I guess Sig’s strategy in limiting himself to 18 statements means his chances of success are higher than the scattergun approach of the Cluetrain authors.</p>

	<p class="thrust"><a href="lockin1.php">Vendor lock-in, part 1</a></p>
	<p class="ramble">Excerpt: Attempting to lock your customers into your service by making it difficult for them to switch just shows that you are afraid of the competition.</p>

	<p class="thrust"><a href="lockin2.php">Vendor lock-in, part 2</a></p>
	<p class="ramble">Excerpt: The killer feature in Excel 4.0 was that it allowed the user to switch back to the Lotus 123 easily - it could write Lotus-format spreadsheets. This meant that the isolated Excel fans in an organisation could now use their favourite tool but still communicate with colleagues who used Lotus 123.</p>

	<p class="thrust emphasis">Technology</p>

	<p class="thrust"><a href="opendocumentformat.php">Open document formats</a></p>
	<p class="ramble">Excerpt: Microsoft are investing in a converter that will allow their customers to read and write documents in the OpenOffice format. This is a good thing. It means if I choose to save my documents in OpenOffice format then I have a choice of two office suites to open them in</p>

	<p class="thrust"><a href="simplelogic.php">Some simple logic</a></p>
	<p class="ramble">Excerpt: There is considerable risk of a severely damaging attack. What is perplexing me is the unwillingness of any corporation I know to do something about this.</p>

	<p class="thrust mini">
	&lt; Back to <a href="<?php echo $_SESSION['path']['browseroot'] ?>/">Home</a>
	| Blog posts: <a target="_blank" href="http://blog.dominicsayers.com/tag/management/">Organizations and management</a>
	| <a target="_blank" href="http://blog.dominicsayers.com/tag/technology/">Design and technology</a>
	| <a target="_blank" href="http://blog.dominicsayers.com">Latest post</a>
	</p>
</div>

<div id="sidebar_left"> <?php include("../_includes/left-sidebar.php"); ?> </div>
<div id="sidebar_right"><?php include("../_includes/right-sidebar.php"); ?></div>
<div id="banner">       <?php include("../_includes/banner.php"); ?>       </div>

<?php include("../_includes/analytics.php"); ?>
</body>

</html>
