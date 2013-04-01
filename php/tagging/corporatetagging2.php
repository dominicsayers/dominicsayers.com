<?php require_once 'context/section-context.php'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>

<head>
<meta content="text/html;charset=UTF-8" http-equiv="Content-type" />
<title><?php echo $_owner_full_name?> - <?php echo $_section_title?> - <?php $page_title="Tagging in the corporate environment, part 2"; echo $page_title; ?></title>
<style type="text/css">
@import url('../CSS/style.php');
/* just some basic formatting, no layout stuff */
@import url('../CSS/layout.php');
/* 3-column liquid layout */
</style>
</head>

<body>

	<?php include "../_includes/banner.php"; ?>
<div id="sidebar_left">
	<!--#include virtual="/_includes/inbrief.html" --></div>
<div id="sidebar_right">
	<!--#include virtual="/_includes/sidebar_right.htm" --></div>
<div id="centre_content">
	<h2>Tagging in the corporate environment, part 2</h2>
	<p>
	<a href="http://www.confusedofcalcutta.com/2006/03/22/four-pillars-thinking-about-tagging/" target="_blank">
	JP Rangaswami</a> was kind enough to comment on my last post about
	<a href="corporatetagging1.php">tagging in the corporate environment</a>. He
	said:</p>
	<p class="blockquote">Dom, I think I agree. I can understand the need for the
	locus of operation of a search engine to be all the way from worldwide through
	behind-the-firewall to desk level. Not a problem, but the software remains the
	same in essence, does it not? All we are doing is changing how big a flashlight
	or how small.</p>
	<p class="blockquote">Similarly shouldn’t we try and have the tag free of institutional
	corruption? It can mean the same thing across the firewall. Sometimes it doesn’t.
	But so what?</p>
	<p>If JP is not sure whether he agrees then he is probably being polite. Or
	I am not being clear. Either way some clarification is probably called for.</p>
	<p>Perhaps JP is asking why differentiate between the general tagosphere and
	the corporate one? Why create a separate collection inside the firewall? If
	the “meaning” of the tag is local to the organization then so what? It’s all
	grist to the mill of the magical algorithms that turn tags into a useful resource.</p>
	<p>If so then let’s try a reductio ad absurbum exercise. Consider an organization
	with a rich intranet and a user population that actively tags things using an
	external resource such as (for example)
	<a href="http://delicious.com" target="_blank">delicious.com</a>. The users have
	delicious.com accounts that do not identify them as belonging to any particular
	organization. Is this a useful resource for them? Is it more useful than a locally-implemented
	tag repository? Does it comply with externally-imposed regulatory rules and
	internally-driven commercial sensitivity?</p>
	<p>Here are some examples of the way these hypothetical users might use this
	resource:</p>
	<h3>1. A user tags <a href="http://www.desktoplinux.com/" target="_blank">http://www.desktoplinux.com/</a>
	with the tags “linux” and “desktop strategy”</h3>
	<p>This is the most straightforward
	use of delicious.com: the user simply wants to bookmark the site because he
	or she would like to find it again in a particular context. Somebody inspecting
	that user’s tags might infer that his organization was considering a Linux desktop
	strategy, but since the user is called “Phlebotomist” then nobody knows which
	organization that is. There is value here for Phlebotomist and anybody else
	looking for Linux desktop links but no real opportunity for commercial espionage.</p>
	<h3>2. A user tags the intranet page
	http://intranet.phlebotomy.net/cockups.html with the tag “potential
	lawsuits”</h3>
	<p>&nbsp;Ah. This is useful for Phlebotomist as a
	reminder to him or herself. It is not useful to anybody outside the organization
	because it refers to an intranet page. On the other hand, it identifies the
	organization quite easily and makes it clear there are commercial issues that
	the organization might want to remain private. Score 1 for the internal tag
	repository.</p>
	<h3>3. A user tags the HR document \\hr.phlebotomy.net\guidelines\ergonomic_guidelines.doc
	with the tag…</h3>
	<p>well actually he doesn’t because delicious.com can only tag a few
	specific internet formats. An internal tag repository could be made to allow
	tagging of heterogeneous resources in any format. Score 1 more for the internal
	repository.</p>
	<h3>4. The chairman tags the web site http://www.veinsonline.org/ with the tag
	“potential takeover target”</h3>
	<p>...thus alerting all shareholders of the other organization
	of the potential bid, costing his own organization millions of dollars and getting
	himself struck off for breach of exchange rules. Own goal for the universal
	repository.</p>
	<p>Alright, silly examples. But enough to demonstrate that a single universal
	repository won’t work for corporate tags.</p>
	<p>It’s more likely, I think, that JP means that corporate tagging is no different
	in nature from public tagging and that the same software “in essence” can be
	used for both. Here I definitely agree, but I would argue that the public tagging
	software should behave more like my specification for corporate tagging.</p>
	<p>There are resources on the internet that are not able to be tagged by delicious.com
	(I haven’t done a survey of all the other systems). If you try to tag an unusual
	resource on delicious.com it says: “only http, https, news, and ftp schema urls
	are allowed right now. if you have a really good reason i should allow another
	one, please email support@delicious.com” (to see this try tagging your own email
	address in the format mailto:x.y@z) Of course, delicious.com could be enhanced
	but if it is then it is moving in the direction of my corporate tagging specification.</p>
	<p>Additionally, I claim that the visibility of the tag is a real concern for
	corporate taggers. In an investment banking environment we are not allowed even
	to list the transactions that the advisory teams are working on because that
	knowledge is market-sensitive. A tag could easily give the game away.</p>
	<p>Perhaps it is this that will ultimately distinguish the corporate tagging
	system from the public ones because I am struggling to think of an example where
	this might be useful in the public realm. Maybe, as with many internet innovations,
	“adult” desires will drive this. I might not want everybody to see the list
	of .jpgs I have tagged…</p>
	<p>In conclusion, I also think I agree. I hope this fills in some gaps in my
	meaning. </p>
	<p class="ramble mini">I would welcome feedback on this article. Please leave
	a comment
	<a href="http://blog.dominicsayers.com/2006/03/27/tagging-in-the-corporate-environment-part-2/" target="_blank">
	here</a></p>
	<p class="thrust mini">&lt; Back to <a href="<?php echo $_SESSION['path']['browseroot'] ?>/tagging">Tagging and social software</a>
	|
	<a href="http://blog.dominicsayers.com/2006/03/27/tagging-in-the-corporate-environment-part-2/" target="_blank">
	Original post</a> |
	<a href="http://blog.dominicsayers.com/tag/social-software/tagging/" target="_blank">
	Other posts with this tag</a> |
	<a href="http://blog.dominicsayers.com" target="_blank">Latest post</a> </p>
</div>

<?php include("../_includes/analytics.php"); ?>
</body>

</html>
