<?php require_once '../_context/site-context.php'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title><?php echo $_owner_full_name?> - <?php $page_title="Site information"; echo $page_title; ?></title>
</head>

<body>
<?php phpinfo(); ?>
<?php include("../_includes/analytics.php"); ?>
</body>

</html>
