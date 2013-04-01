<?php require_once 'context/section-context.php'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html><head>
<meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
<title><?php echo $_owner_full_name?> - <?php echo $_section_title?> - <?php $page_title="Vendor lock-in and open document formats"; echo $page_title; ?></title>

<link href="../CSS/layout.php" rel="stylesheet" type="text/css" />
<link href="../CSS/style.php" rel="stylesheet" type="text/css" />
</head>

<body>

<div id="centre_content">
	<h2>Vendor lock-in and open document formats</h2>

				<p>Microsoft are
				<a target="_blank" href="http://sourceforge.net/projects/odf-converter/">
				investing in a converter</a> that will allow their customers to
				read and write documents in the OpenOffice format. This is a
				good thing. It means if I choose to save my documents in
				OpenOffice format then I have a choice of two office suites to
				open them in (three if you count StarOffice).</p>
				<p><strong>My advice would
				therefore be to adopt the OpenOffice format to save your
				documents, whatever software you use to edit them.</strong></p>
				<p>Why are they doing this? Well, you
				will note they are not investing in a Microsoft Office converter
				for OpenOffice. That would simply encourage people to switch
				away from their product. I’m sure Novell are already working on
				such a converter for exactly that reason.</p>
				<p>An OpenOffice converter allows
				them to retain their market share by (i) enabling their
				customers to open all documents, (ii) pacifying organisations
				like the
				<a target="_blank" href="http://www.mass.gov/Aitd/docs/open/2ODF_CIO_mtg_10-27-05.odp">
				Commonwealth of Massachusetts</a> who don’t want their documents
				tied up in a proprietary format and (iii) looking like good
				citizens.</p>
				<p>They could have been really
				cynical and only funded the part of the project that converts
				from OpenOffice to Microsoft Office, and not the other way
				round, but that would have made them look bad. This is the next
				best option for them.</p>
				<p>They may be doing this for
				slightly the wrong reasons but no matter, it brings their
				product back into consideration for me. Now the only decision is
				whether the usability advantage of Office 2007 is worth the big
				bucks you have to pay for it.</p>

	<p class="ramble mini">I would welcome feedback on this article. Please leave a comment
	<a target="_blank" href="http://blog.dominicsayers.com/2006/09/27/vendor-lock-in-and-open-document-formats/">here</a></p>
	<p class="thrust mini">
	&lt; Back to <a href="<?php echo $_SESSION['path']['browseroot'] ?>/management">Organizations and technology</a>
	| <a target="_blank" href="http://blog.dominicsayers.com/2006/09/27/vendor-lock-in-and-open-document-formats/">Original post</a>
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
