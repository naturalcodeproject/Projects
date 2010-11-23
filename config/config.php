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
    
	/* Database Setup */
	Reg::set("Database.host", "localhost");
	Reg::set("Database.username", "");
	Reg::set("Database.password", "");
	Reg::set("Database.database", "");
	Reg::set("Database.driver", "MySQL");
	
	/* Cache */
	Reg::set(array(
		'Cache.enabled'	=> true,
		'Cache.path'		=> Reg::get('Path.physical') . '/cache',
		'Cache.expires'	=> 3600, // 1 hour
	));
	
	Autoloader::registerPrefix('Doctrine_', Reg::get("Path.physical").'/vendors/Doctrine-1.2.3');
	set_include_path(Reg::get('Path.physical').'/vendors/Doctrine-1.2.3'.PATH_SEPARATOR.get_include_path());
	
	//http://www.doctrine-project.org/projects/orm/1.2/docs/manual/connections/en
	$conn = Doctrine_Manager::connection('mysql://username:password@localhost/test', 'connection 1');
?>