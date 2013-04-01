<?php
session_start();
session_unset();
session_destroy();
$_SESSION=array();
session_start();
$_SESSION=array();
$_SESSION['foo']='bar';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Untitled 1</title>
</head>

<body>
<pre><?php print_r($GLOBALS); ?></pre>
<a href="sess2.php">Click me</a>
</body>

</html>
