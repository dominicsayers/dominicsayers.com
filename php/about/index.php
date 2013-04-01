<?php require_once 'context/section-context.php'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>

<head>
<meta content="text/html;charset=UTF-8" http-equiv="Content-type" />
<link href="../CSS/delicious.css" rel="stylesheet" type="text/css" />
<link href="../CSS/layout.php" rel="stylesheet" type="text/css" />
<link href="../CSS/style.php" rel="stylesheet" type="text/css" />
<title><?php echo $_owner_full_name?> - <?php echo $_section_title?></title>

<link rel="alternate" type="application/rss+xml" title="Subscribe to comments" href="http://dominicsayers.disqus.com/dominic_sayers_about_86/latest.rss" />
</head>

<body>

<div id="centre_content">
	<h2>Welcome</h2>
	<p class="thrust">I write things down as a way of mentally shelving the thoughts
	that gnaw away at my mind and cause me to be unproductive. So
	<a href="http://blog.dominicsayers.com">my blog</a> is just an extension of
	my memory - a near-line storage area. It can be a bit haphazard, going from
	cricket to customer service to organizational behaviour in successive posts.
	Each post is a statement of what I think at the point when further thought is
	not achieving any progress. It&#39;s not a definitive statement of beliefs that
	I never intend to change, it&#39;s a record of a work in progress.</p>
	<p class="thrust">This website is a way of drawing together some of the threads
	of my writing to make it more accessible. It&#39;s also a reminder to me of some
	of the areas I need to think some more about.</p>
	<p class="thrust">If you are interested in what I write then you can keep up-to-date
	with my current thoughts in
	<a href="http://blog.dominicsayers.com/" target="_blank">my blog</a>. Below
	is a guide to some of the subjects I have written about in the past.</p>
	<h2><a href="http://blog.dominicsayers.com" target="_blank">Writing</a>
	<a href="http://blog.dominicsayers.com/feed" target="_blank">
	<img alt="Feed" height="14" src="../static/images/feed.gif" width="14" /></a>
	</h2>

<!--	<div class="imageblock">
		<a href="http://www.thisisnotariot.org" target="_blank">
			<img alt="This is not a riot" height="122" src="../static/images/tinar_businesscard.png" width="200" class="image" /><br />
			This is not a riot
		</a>
	</div> -->

	<div class="imageblock">
		<a href="../isemail">
			<img alt="Email address validation" height="122" src="../static/images/thesearejustwords.gif" width="200" class="image" /><br />
			Email address validation
		</a>
	</div>

	<div class="imageblock">
		<a href="../tagging">
		<img alt="Tagging and social software" height="122" src="../static/images/Blogging_200.gif" width="200" /><br />
		Tagging and social software</a> </div>

	<div class="imageblock">
		<a href="../management">
		<img alt="Organizations and technology" height="122" src="../static/images/Company_hierarchy_200.gif" width="200" /><br />
		Organizations and technology</a> </div>

	<div class="imageblock">
		<a href="../rage">
		<img alt="Rage and other stuff" height="122" src="../static/images/Glob_of_chaos_200.gif" width="200" /><br />
		Rage and other stuff</a> </div>

	<br class="clearboth" />

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


<div id="sidebar_left">
	<?php include("../_includes/left-sidebar.php"); ?>
	<h4><a href="../resume/">My resume</a></h4>
	<p class="ramble justify small">It&#39;s possible I could be of service to you.
	I am happy to discuss anything that has some intrinsic interest.</p>

	<!-- Include the Google Friend Connect javascript library. -->
	<script type="text/javascript" src="http://www.google.com/friendconnect/script/friendconnect.js"></script>

	<!-- Define the div tag where the gadget will be inserted. -->
	<div id="div-1228410296130" style="width:200px;border:1px solid #cccccc;"></div>
	<!-- Render the gadget into a div. -->
	<script type="text/javascript">
	var skin = {};
	skin['HEIGHT'] = '385';
	skin['BORDER_COLOR'] = '#cccccc';
	skin['ENDCAP_BG_COLOR'] = '#e0ecff';
	skin['ENDCAP_TEXT_COLOR'] = '#333333';
	skin['ENDCAP_LINK_COLOR'] = '#0000cc';
	skin['ALTERNATE_BG_COLOR'] = '#ffffff';
	skin['CONTENT_BG_COLOR'] = '#ffffff';
	skin['CONTENT_LINK_COLOR'] = '#0000cc';
	skin['CONTENT_TEXT_COLOR'] = '#333333';
	skin['CONTENT_SECONDARY_LINK_COLOR'] = '#7777cc';
	skin['CONTENT_SECONDARY_TEXT_COLOR'] = '#666666';
	skin['CONTENT_HEADLINE_COLOR'] = '#333333';
	google.friendconnect.container.setParentUrl('/google/friendconnect/' /* location of rpc_relay.html and canvas.html */);
	google.friendconnect.container.renderMembersGadget(
	 { id: 'div-1228410296130',
	   site: '05169724494465631447'},
	  skin);
	</script>
</div>

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
