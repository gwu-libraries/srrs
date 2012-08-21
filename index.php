<?php
/**
* This file is the login page for the system
* It provides a login form and will automatically
* forward any users who have cookies set to ctrlpnl.php
* @author Nick Korbel <lqqkout13@users.sourceforge.net>
* @version 06-25-04
* @package phpScheduleIt
*
* Copyright (C) 2003 - 2007 phpScheduleIt
* License: GPL, see LICENSE
*/
/**
* Include Template class
*/
include_once('lib/Template.class.php');

// Auth included in Template.php
$auth = new Auth();
$t = new Template();
$msg = '';

$resume = (isset($_POST['resume'])) ? $_POST['resume'] : '';
	
// Logging user out
if (isset($_GET['logout'])) {
    $auth->doLogout();   
}
else if (isset($_POST['login'])) {
	if ($conf['app']['wrlc'])
	{
		$msg = $auth->doLoginGwid($_POST['gwid'], $_POST['name']);
	}
	else{
		$msg = $auth->doLogin($_POST['email'], $_POST['password'], (isset($_POST['setCookie']) ? 'y' : null), false, $resume, $_POST['language']);
	}
}
else if (isset($_COOKIE['ID'])) {
    $msg = $auth->doLogin('', '', 'y', $_COOKIE['ID'], $resume);  	// Check if user has cookies set up. If so, log them in automatically 
}

$t->printHTMLHeader();

// Print out logoImage if it exists
//echo '<div id="banner-bg"><div id="banner"><img src="img/banner.jpg" /></div></div>';
echo '<div id="libheader-container" style="">
	<div id="libheader" style="">
		<div class="libheader-logo hide-lo" style=""><a href="http://www.gwu.edu" target="_blank" title="GWU website"><img src="img/gwheaderlogo.png" alt="logo: The George Washington University" /></a></div>
		<div class="libheader-liblink" style=""><a href="http://library.gwu.edu" target="_blank" title="GW Libraries website">GW Libraries</a></div>
		<div class="libheader-link" style=""><a href="#" target="_blank" title="">Link 1</a></div>
		<div class="libheader-link" style=""><a href="#" target="_blank" title="">Link 2</a></div>
	</div>
</div>';

// echo (!empty($conf['ui']['logoImage']))
//		? '<div align="left"><img src="' . $conf['ui']['logoImage'] . '" alt="logo" vspace="5"/></div>'
//		: ''; -->

$t->startMain();

if (isset($_GET['auth'])) {
	$auth->printLoginForm(translate('You are not logged in!'), $_GET['resume']);
}
else {
	$auth->printLoginForm($msg);
}

$t->endMain();
// Print HTML footer
//$t->printHTMLFooter();
?>
