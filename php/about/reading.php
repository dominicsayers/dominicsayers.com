<?php require_once 'context/section-context.php'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>

<head>
<meta content="text/html;charset=UTF-8" http-equiv="Content-type" />
<link href="../CSS/delicious.css" rel="stylesheet" type="text/css" />
<link href="../CSS/layout.php" rel="stylesheet" type="text/css" />
<link href="../CSS/style.php" rel="stylesheet" type="text/css" />
<title><?php echo $_owner_full_name?> - <?php echo $_section_title?></title>
</head>

<body>

<div id="centre_content">
	<script src="http://delicious.com/feeds/js/dominicsayers/listofbooklists?extended;title=Reading;icon=rss;sort=alpha" type="text/javascript"></script>
	<noscript>
	<a href="http://delicious.com/dominicsayers/listofbooklists" target="_blank">
	Reading</a>
		</noscript>

	<div id="comments">
		<div id="disqus_thread">
		</div>
	</div>
	<script src="http://disqus.com/forums/dominicsayers/embed.js" type="text/javascript"></script>
	<noscript>
	<a href="http://dominicsayers.disqus.com/?url=ref">View the discussion
	thread.</a>
	</noscript>
	<a class="dsq-brlink" href="http://disqus.com">blog comments
	powered by <span class="logo-disqus">Disqus</span></a>
</div>

<div id="sidebar_left"> <?php include("../_includes/left-sidebar.php"); ?> </div>
<div id="sidebar_right"><?php include("../_includes/right-sidebar.php"); ?></div>
<div id="banner">       <?php include("../_includes/banner.php"); ?>       </div>

<script type="text/javascript">
//<![CDATA[
(function() {
		var links = document.getElementsByTagName('a');
		var query = '?';
		for(var i = 0; i < links.length; i++) {
			if(links[i].href.indexOf('#disqus_thread') >= 0) {
				query += 'url' + i + '=' + encodeURIComponent(links[i].href) + '&';
			}
		}
		document.write('<script type="text/javascript" src="http://disqus.com/forums/dominicsayers/get_num_replies.js' + query + '"></' + 'script>');
	})();
//]]>
</script>

<?php include("../_includes/analytics.php"); ?>
</body>

</html>
