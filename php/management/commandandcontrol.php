<?php require_once 'context/section-context.php'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>

<head>
	<meta content="text/html;charset=UTF-8" http-equiv="Content-type" />

	<link href="../CSS/layout.php" rel="stylesheet" type="text/css" />
	<link href="../CSS/style.php" rel="stylesheet" type="text/css" />

	<title><?php echo $_owner_full_name?> - <?php echo $_section_title?> - <?php $page_title="Command and control"; echo $page_title; ?></title>
</head>

<body>

<div id="centre_content">
	<h2><?php echo $page_title?></h2>

	<p>
				<a target="_blank" href="http://thingamy.typepad.com/sigs_blog/">Sigurd Rinde</a> crystallized some thoughts I had on this
				subject.</p><p>Sig’s
				<a target="_blank" href="http://blog.dominicsayers.com/2006/06/28/cluetrain-20/#comment-205">
				point</a> (I think) is that it should be possible to reduce the
				margin between what the producer receives and what the customer
				pays by disintermediating the transaction. We do this by
				adopting a more efficient business model. One that has lower
				overheads and a radically shorter supply chain.</p>
				<p>The novelty of this approach is that it is the polar opposite
				of what many large businesses are trying to do today: that is to
				consolidate and globalise and rationalize what they do until the
				uniformity squeezes out unnecessary costs. Some companies within
				a multinational I am familiar with are attempting to reduce IT
				support costs by standardising on one model of desktop PC for
				all staff. Less training required, fewer technicians, standard
				procedures to follow. As a cost reduction strategy it will
				probably work until the manufacturer of that type of PC issues a
				<a target="_blank" href="http://www.google.co.uk/search?as_q=&amp;num=10&amp;hl=en&amp;btnG=Google+Search&amp;as_epq=product+recall&amp;as_oq=HP+Dell+Compaq+IBM&amp;as_eq=&amp;lr=&amp;as_ft=i&amp;as_filetype=&amp;as_qdr=all&amp;as_occt=any&amp;as_dt=i&amp;as_sitesearch=&amp;as_rights=&amp;safe=images">
				product recall</a> - then you have a business with no computers.</p>
				<p>A complete
				<a target="_blank" href="http://en.wikipedia.org/wiki/Monoculture">
				monoculture</a> is inherently unhygenic; it is vulnerable to a
				single threat, it’s a single point of failure. The usual
				biodiversity of an organization exists because we tend to allow
				a little duplication here and there, some variations from the
				standard, multiple standards. This is the case in most companies
				I have worked for. It seems to be sustainable although it is
				prone to consultants saying they can reduce your costs by
				pushing out these variants (for a fee of course). Many quite
				senior managers seem to believe them.</p>
				<p>I am sympathetic to the idea that we can try pushing in the
				other direction. In other words we move away from command and
				control and towards an organization that naturally aligns the
				objectives of the employees (participants? inhabitants?) with
				the objectives of the organization. If it works then the first
				costs that go are the command and control overheads - the
				uncounted cost of cost reduction.</p>
				<p>Size is a big factor in this. Globalization seems to mean
				trying to hold together a single enormous edifice. A structure
				so big it needs flying buttresses to keep it together because
				the walls aren’t naturally strong enough. Small churches don’t
				need flying buttresses. Villages need a council of elders and
				some goodwill from the inhabitants; cities need a police
				department, a fire department, magistrates, tax collectors and a
				bureaucracy to coordinate them.</p>
				<p>What we know is this:</p>
				<p>1. A team has a natural size of
				<a target="_blank" href="http://en.wikipedia.org/wiki/The_Magical_Number_Seven,_Plus_or_Minus_Two">
				5-9</a> members<br />
				2. A team benefits from leadership<br />
				3. Organising the leaders into a pyramid of management enables
				central control and enforcement of strategy but it adds cost and
				reduces agility.<br />
				4. A pyramid with too many levels prevents effective
				communication</p>
				<p>If you try to flatten the management structure then you make
				the teams too big to be able to be led effectively. If you keep
				the teams the right size then as the organization grows then so
				does the size of the pyramid. You can only abandon the pyramid
				if you also relinquish central control. A familiar problem, and
				one which approaches like internal markets and a service grid
				are designed to combat. I can’t actually point to any
				organization where these have been a conspicuous success though.</p>
				<p>Sig thinks he has part of the answer in
				<a target="_blank" href="http://thingamy.com/">Thingamy</a>. JP
				is working towards a partitioning of enterprise architecture
				into
				<a target="_blank" href="http://confusedofcalcutta.com/2006/03/09/enterprise-applications-architecture/">
				four pillars</a>, which assumes much organizational change.
				<a target="_blank" href="http://accidental-light.com/">Malcolm</a>
				wonders how he can direct a large team without a bullwhip
				(except as a fashion accessory).
				<a target="_blank" href="http://parkparadigm.com/">Sean</a>
				pursues a new revenue model which needs a new infrastructure to
				support it. All seem to agree that getting the big machinery out
				of the way of the relationship between customer and producer is
				the right way to go.
	</p>

	<p class="ramble mini">I would welcome feedback on this article. Please leave a comment
	<a target="_blank" href="http://blog.dominicsayers.com/2006/06/29/information-cost/">here</a></p>
	<p class="thrust mini">
	&lt; Back to <a href="<?php echo $_SESSION['path']['browseroot'] ?>/management"><?php echo $_section_title?></a>
	| <a target="_blank" href="http://blog.dominicsayers.com/2006/06/29/information-cost/">Original post</a>
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
