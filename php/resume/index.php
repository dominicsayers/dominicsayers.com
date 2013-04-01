<?php require_once 'context/section-context.php'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html><head>
<meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
<title><?php echo $_owner_full_name?> - <?php echo $_section_title?> - <?php $page_title="Dominic Sayers - CV"; echo $page_title; ?></title>

<link href="../CSS/layout.php" rel="stylesheet" type="text/css" />
<link href="../CSS/style.php" rel="stylesheet" type="text/css" />
</head>

<body>
	<?php include "../_includes/banner.php"; ?>

<div id="sidebar_left">
	<h4>My resume</h4>
	<p class="ramble">It&#39;s possible I could be of service to you. I am happy to
	discuss anything that has some intrinsic interest.</p>
	<p><a href="DominicSayers.doc">CV in Microsoft Word format <img alt="Resume / CV" height="14" src="../static/images/document_14px.gif" width="14" /></a></p>

	<?php include("../_includes/left-sidebar.php"); ?>
</div>

<div id="centre_content">
	<h4>Recruitment Professionals</h4>
	<p>You are probably looking for a CV in Microsoft Word format. <a href="DominicSayers.doc">Here it is
	<img alt="Resume / CV" height="14" src="../static/images/document_14px.gif" width="14" /></a></p>
	<hr />
</div>

<div id="sidebar_right"><?php include("../_includes/right-sidebar.php"); ?></div>
<div id="banner">       <?php include("../_includes/banner.php"); ?>       </div>

<?php include("../_includes/analytics.php"); ?>
</body>
</html>
