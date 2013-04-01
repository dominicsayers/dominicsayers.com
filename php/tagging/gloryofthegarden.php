<?php require_once 'context/section-context.php'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html><head>
<meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
<title><?php echo $_owner_full_name?> - <?php echo $_section_title?> - <?php $page_title="The Glory of the Garden"; echo $page_title; ?></title>

<link href="../CSS/layout.php" rel="stylesheet" type="text/css" />
<link href="../CSS/style.php" rel="stylesheet" type="text/css" />
</head>

<body>

<div id="centre_content">
	<h2>The Glory of the Garden</h2>
	<p class="emphasis">
The effect of lots of tags
	</p>
<p>
				What happens when a whole lot of stuff gets tagged? Especially
				when you consider not only your own tags but other people’s tags
				applied to the same objects.</p>
				<p>First of all, consider
				photographs on a site like <a target="_blank" href="http://www.flickr.com">
				Flickr</a>. There are literally gazillions of photographs on
				this site now. There are photographs of almost anything you can
				think of. If you want a photograph of an apple then all you have
				to do is type in
				<a target="_blank" href="http://www.flickr.com/photos/tags/apple">
				http://www.flickr.com/photos/tags/apple</a> and you will find
				54,964 photographs of apples (today). But wait, what’s this? I
				wanted a photograph of a nice shiny green apple and I’m getting
				lots of photographs of nice shiny white computers.</p>
				<p>How can I distinguish between photographs tagged with “apple”
				for fruit and “apple” for a particular brand of computer? Well
				it turns out this is no problem at all: just click on
				<a target="_blank" href="http://flickr.com/photos/tags/apple/clusters">apple
				clusters</a> and you will see these photographs broken down into
				<i>tag clusters</i>. What this does is look at the tags that
				people have applied to their apple photographs and divide them
				into groups based on what additional tags they used. People
				photographing fruit will tend to use additional tags like
				“orchard”, “fruit”, “green” and people photographing computers
				will tend to use additional tags like “Powerbook”, “Mac”,
				“iPod”. This make it easy for Flickr to <i>automatically</i>
				separate the fruit photographs from the computer ones. This is
				an amazing result! I can’t over-emphasize how important this is:
				it is easy and successful to use tags to distinguish between
				similarly-named things based on context without enforcing any
				kind of formal taxonomy. Phenomenal! Who knew?</p>
				<p>What else can we do with large numbers of tags?</p>
				<p>There is a crucial, fundamental difference between the
				tagging strategies of Flickr on the one hand and
				<a target="_blank" href="http://delicious.com">delicious.com</a> on the other. In
				Flickr the photographs are tagged only by the person who
				uploaded them. In delicious.com the same link can be tagged by
				many people. I personally believe this is a significant design
				flaw in Flickr and instead of an <b>Add to faves</b> (i.e. a
				single user tag) button they should have implemented a way of
				tagging other people’s photographs with your own arbitrary tags.</p>
				<p>The fact that delicious.com has the same link tagged by
				different people gives you a wonderful opportunity to track down
				other internet resources that are relevant to you. You tagged a
				link with “recipe” but somebody else may have tagged the same
				link with “cookbook”, it doesn’t matter. The point is, you can
				see what other links they have tagged with “cookbook” and let
				them do the legwork for your own research. Why search Google for
				the perfect recipe site when you can see which sites have been
				tagged most often on delicious.com? Let other people lead you to
				the
				<a target="_blank" href="http://delicious.com/url/641323ba64330bf2dc407edd5ceb2edd">
				perfect seafood recipe</a>. This is where the delicious.com
				philosophy is superior to Flickr’s, but there is one area where
				Flickr is well ahead of delicious.com: it’s a lot harder to
				distinguish between fruit and computers when you look for
				<a target="_blank" href="http://delicious.com/tag/apple">apples</a> on delicious.com,
				but you can learn from the Flickr clusters and try
				<a target="_blank" href="http://delicious.com/tag/apple+fruit">
				http://delicious.com/tag/apple+fruit</a> for instance.</p>
				<p>So we can see that very useful results come from allowing
				people to tag things easily and without attempting to control
				what tags they use. People often ask why sites don’t adopt a
				more formal approach and encourage or force users to use a
				restricted set of tags. This, they say, would lead to a more
				reliable way of finding what you want - if some people say <b>
				autumn</b> and some say <b>fall</b> then how can you find <i>all</i>
				pictures of leaves turning brown? Well that would be to
				misunderstand what tags are for - this isn’t a deterministic
				taxonomy like the Dewey Decimal system or the way we name plants
				and animals. The barrier has to be as low as possible or people
				just won’t bother. The value is immediately apparent to the
				tagger because they know their own tags. The macro effects,
				which are of value to everybody, arise from the sheer volume of
				the tags. Clustering and other heuristic techniques mean that
				you <i>will</i> find what you are looking for. Somebody tell
				Bono.</p>
	<p class="ramble mini">I would welcome feedback on this article. Please leave a comment
	<a target="_blank" href="http://blog.dominicsayers.com/2006/03/23/the-glory-of-the-garden/">here</a></p>
	<p class="thrust mini">
	&lt; Back to <a href="<?php echo $_SESSION['path']['browseroot'] ?>/tagging">Tagging and social software</a>
	| <a target="_blank" href="http://blog.dominicsayers.com/2006/03/23/the-glory-of-the-garden/">Original post</a>
	| <a target="_blank" href="http://blog.dominicsayers.com/tag/social-software/tagging/">Other posts with this tag</a>
	| <a target="_blank" href="http://blog.dominicsayers.com">Latest post</a>
	</p>
</div>

<div id="sidebar_left"> <?php include("../_includes/left-sidebar.php"); ?> </div>
<div id="sidebar_right"><?php include("../_includes/right-sidebar.php"); ?></div>
<div id="banner">       <?php include("../_includes/banner.php"); ?>       </div>

<?php include("../_includes/analytics.php"); ?>
</body>
</html>
