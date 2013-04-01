<?php
function emailTest($email) {
	$pattern = '/^(?!\\.)("([^"\\r\\\\]|\\\\["\\r\\\\])*"|([-a-z0-9!#$%&\'*+\\/=?^_`{|}~]|(?<!\\.)\\.)*)(?<!\\.)@[a-z0-9][\\w\\.-]*[a-z0-9]\\.[a-z][a-z\\.]*[a-z]$/i';
	return (preg_match($pattern, $email) > 0);
}
?>