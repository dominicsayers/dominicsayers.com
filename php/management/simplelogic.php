<?php require_once 'context/section-context.php'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html><head>
<meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
<title><?php echo $_owner_full_name?> - <?php echo $_section_title?> - <?php $page_title="Some simple logic"; echo $page_title; ?></title>

<link href="../CSS/layout.php" rel="stylesheet" type="text/css" />
<link href="../CSS/style.php" rel="stylesheet" type="text/css" />
</head>

<body>

<div id="centre_content">
	<h2>Some simple logic</h2>

	<p>
				Some simple logic that is causing me to furrow my brow. Please,
				if you can refute one of my premises or dispute any of my
				conclusions then let me know.</p><p>Thinking about Microsoft
				Windows, Microsoft Internet Explorer and Microsoft Office:</p>
				<p>(1) Security vulnerabilities continue to be found in these
				products today</p>
				<p>(2) Forthcoming releases of these products are subject to the
				same patches as the current releases</p>
				<p>THEREFORE (1+2)</p>
				<p>(A) Unpatched vulnerabilities still exist in current and
				future versions of these products.</p>
				<p>Now,</p>
				<p>(3) Security patches, virus checkers and firewalls protect
				against known vulnerabilities</p>
				<p>THEREFORE (A+3)</p>
				<p>(B) We have no protection against an exploit of an unpatched
				vulnerability.</p>
				<p>Furthermore,</p>
				<p>(4) Microsoft Windows and Microsoft Office have around 100%
				market share on the corporate desktop</p>
				<p>(5) Many people and organizations have a financial or
				political interest in attacking or threatening to attack wealthy
				corporations.</p>
				<p>(6) Some of these organizations have substantial resources to
				mount a sophisticated attack</p>
				<p>THEREFORE (B+4+5+6)</p>
				<p>(C) There are organizations planning to attack the corporate
				desktop using an unpatched vulnerability for financial or
				political gain.</p>
				<p>(D) <strong>There is considerable risk of a severely damaging attack</strong></p>
				<p>What is perplexing me is the unwillingness of any corporation
				I know to do something about this. I am talking about an attack
				that could threaten the viability of a major global corporation.
				Top headline on the evening news. Pundits talking domesday
				scenarios.</p>
				<p>Some organizations have publicly announced moves to an open
				source desktop platform (Telstra, City of Munich etc.) but this
				has always been for cost reasons.</p>
				<p>Why isn’t this the most talked about issue in IT? The only
				reason I can think of is the analogy with climate change:</p>
				<p>(a) the threat increases slowly, and there is no natural
				trigger for action<br>
				(b) the cost of mitigating the threat is substantial<br>
				(c) the mitigation is not guaranteed to work<br>
				(d) the cost is incurred today and the benefit is gained
				tomorrow or the day after<br>
				(e) it is boring</p>

	<p class="ramble mini">I would welcome feedback on this article. Please leave a comment
	<a target="_blank" href="http://blog.dominicsayers.com/2006/09/08/climate-change/">here</a></p>
	<p class="thrust mini">
	&lt; Back to <a href="<?php echo $_SESSION['path']['browseroot'] ?>/management">Organizations and technology</a>
	| <a target="_blank" href="http://blog.dominicsayers.com/2006/09/08/climate-change/">Original post</a>
	| <a target="_blank" href="http://blog.dominicsayers.com/tag/technology/">Other posts with this tag</a>
	| <a target="_blank" href="http://blog.dominicsayers.com">Latest post</a>
	</p>
</div>

<div id="sidebar_left"> <?php include("../_includes/left-sidebar.php"); ?> </div>
<div id="sidebar_right"><?php include("../_includes/right-sidebar.php"); ?></div>
<div id="banner">       <?php include("../_includes/banner.php"); ?>       </div>

<?php include("../_includes/analytics.php"); ?>
</body>
</html>
