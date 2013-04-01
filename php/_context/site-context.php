<?php
/******************************************************************************
	site-context.php

	To set some options that are specific to where this web is installed

	Copyright 2008 Dominic Sayers
	This script may be used and modified freely for business or personal use
	This script may not be resold in any form
	This script may only be redistributed in its original form

	v0.2
******************************************************************************/

// File locations
if (isset($_SERVER['DOMAIN_PATH'])) {
	$_this_web_root = $_SERVER['DOMAIN_PATH'];
} elseif (isset($_ENV['DOMAIN_PATH'])) {
	$_this_web_root = $_ENV['DOMAIN_PATH'];
} else {
	$_this_web_root = dirname(__FILE__) . '/..'; // site-context.php is in a first-level folder
}

$_dynamic_content_folder = "$_this_web_root/dynamic";

if (!is_dir($_dynamic_content_folder)) {
	mkdir($_dynamic_content_folder, 0600, true);
}

// Owner
$_owner_full_name		= 'Dominic Sayers';
$_owner_familiar		= 'Dominic';
$_owner_nickname		= 'dominicsayers';
$_owner_pronoun_subject		= 'he';
$_owner_pronoun_object		= 'him';
$_owner_pronoun_possessive	= 'his';
$_owner_email			= 'dominic@sayers.cc';

// Make it work with newer code
session_start();

// Host contexts
$_SESSION['path']['dynamic_content']	= $_dynamic_content_folder;
$_SESSION['path']['root']		= $_this_web_root;

// Owner constants
if (!isset($_SESSION['owner'])) {
	$owner = array();
	$owner['full_name']		= $_owner_full_name;
	$owner['familiar']		= $_owner_familiar;
	$owner['nickname']		= $_owner_nickname;
	$owner['pronoun']['subject']	= $_owner_pronoun_subject;
	$owner['pronoun']['object']	= $_owner_pronoun_object;
	$owner['pronoun']['possessive']	= $_owner_pronoun_possessive;
	$owner['email']			= $_owner_email;
	$owner['GoogleID']		= '255095307788978811';
	$owner['brightkitePassword']	= 'grobelaar';
	$owner['foursquareID']		= 'dominic@sayers.cc';
	$owner['foursquarePassword']	= 'grobelaar';

	$_SESSION['owner'] = $owner;
}
?>