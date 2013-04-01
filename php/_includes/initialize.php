<?php
// Paths to use for finding files and relative URLs
// PHPLint modules
/*.
    require_module 'standard';
    require_module 'wddx';
.*/
/*.array[string]string.*/ function set_paths () {
	global $paths;
	$root = dirname(__FILE__);

	// Are we in the same web?
	if (is_array($paths) && isset($paths['root']) && $paths['root'] !== $root) unset($paths);	// if not then reset paths

	// Is everything set?
	if (is_array($paths) && isset($paths['root']) && isset($paths['dynamic_content']) && isset($paths['browseroot'])) return;	// No need to do it again

	$isWindows	= (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN');
	$posLastDelim	= strrpos($root, ($isWindows) ? '\\' : '/');
	$root		= ($posLastDelim === false) ? $root : substr($root, 0, $posLastDelim);

	$paths['root']			= $root;
	$paths['dynamic_content']	= $root . '/dynamic';

	$file	= ($isWindows) ? (string) str_replace("\\", '/' , __FILE__) : __FILE__;
	$root	= substr($file, strpos($_SERVER['SCRIPT_FILENAME'], $_SERVER['SCRIPT_NAME']));
	$root	= substr($root, 0, strpos($root, '/_includes'));

	$paths['browseroot']		= $root;

	return $paths;
}

// User-defined error handling function
/*.void.*/ function user_error_handler(/*.int.*/ $errno, /*.string.*/ $errmsg, /*.string.*/ $filename, /*.int.*/ $linenum, /*.array[string]mixed.*/ $vars) {
	// Not interested in 404 warnings that we can't get rid of
	if ($errno == E_WARNING) {
		if (strpos($errmsg,"404 Not Found") > 0) {
			return;
		}
	}

	// timestamp for the error entry
	$dt = gmdate("Y-m-d H:i:s (T)");

	// define an assoc array of error string
	// in reality the only entries we should
	// consider are E_WARNING, E_NOTICE, E_USER_ERROR,
	// E_USER_WARNING and E_USER_NOTICE
	$errortype = array (
		E_ERROR              => 'Error',
		E_WARNING            => 'Warning',
		E_PARSE              => 'Parsing Error',
		E_NOTICE             => 'Notice',
		E_CORE_ERROR         => 'Core Error',
		E_CORE_WARNING       => 'Core Warning',
		E_COMPILE_ERROR      => 'Compile Error',
		E_COMPILE_WARNING    => 'Compile Warning',
		E_USER_ERROR         => 'User Error',
		E_USER_WARNING       => 'User Warning',
		E_USER_NOTICE        => 'User Notice',
		E_STRICT             => 'Runtime Notice',
		E_RECOVERABLE_ERROR  => 'Catchable Fatal Error'
		);

	// set of errors for which a var trace will be saved
	$user_errors = array(E_USER_ERROR, E_USER_WARNING, E_USER_NOTICE);

	$err = "<errorentry>\n";
	$err .= "\t<datetime>" . $dt . "</datetime>\n";
	$err .= "\t<errornum>" . $errno . "</errornum>\n";
	$err .= "\t<errortype>" . $errortype[$errno] . "</errortype>\n";
	$err .= "\t<errormsg>" . $errmsg . "</errormsg>\n";
	$err .= "\t<scriptname>" . $filename . "</scriptname>\n";
	$err .= "\t<scriptlinenum>" . $linenum . "</scriptlinenum>\n";

	if (in_array($errno, $user_errors)) {
	    $err .= "\t<vartrace>" . wddx_serialize_value($vars, "Variables") . "</vartrace>\n";
	}
	$err .= "</errorentry>\n\n";

	// Alert user
	if ($errno == E_USER_ERROR) {
		echo "<p>There has been an application error. The web administrator has been informed. Apologies for any inconvenience caused. The error was of this type: $errortype[$errno]</p>";
	}

	// save to the error log, and e-mail me if there is a critical user error
	$logFile = $_SESSION['path']['dynamic_content']. "/error.xml";
	error_log($err, 3, $logFile);
	mail($_SESSION['owner']['email'], "Application error - $errortype[$errno]", $err);
}

// Define our operating environment
session_start(); // debug - not necessary as ezUser starts a session for us
error_reporting(E_ALL || E_STRICT);
//set_error_handler("user_error_handler");

$paths = set_paths();
$root = $paths['root'];
require_once "$root/_context/site-context.php";	// Global (website) context

// Need to do this when we are sure we have a session
// i.e. after ezUser.php
$_SESSION['path']	= $paths;
$browseroot		= $paths['browseroot'];
?>
