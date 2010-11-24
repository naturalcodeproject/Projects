<?php
	/* System Setup */
	Reg::set("System.mode", "development");
	
	/* URI Setup */
	Reg::set(array(
		"URI.useModRewrite" => true,
		"URI.useDashes" => true,
		"URI.forceDashes" => true
	));
	
	Reg::set(array("URI.map" => array(
		"controller"	=> "main",
		"view"			=> "index",
		"action"		=> null,
		"id"			=> null
	)));
	
	/* Errors Setup */
	Reg::set("Error.generalErrorMessage", "An error occured. Please contact the administrator.");
	
	/* Cache */
	Reg::set(array(
		'Cache.enabled'	=> true,
		'Cache.path'		=> Reg::get('Path.physical') . '/cache',
		'Cache.expires'	=> 3600, // 1 hour
	));
	
	/* Database Setup */
	include('database.php');
?>