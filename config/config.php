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
	
	Autoloader::registerPrefix('Doctrine_', Reg::get("Path.physical").'/vendors/Doctrine-1.2.3');
	set_include_path(Reg::get('Path.physical').'/vendors/Doctrine-1.2.3'.PATH_SEPARATOR.get_include_path());
	
	/* Database Setup */ //http://www.doctrine-project.org/projects/orm/1.2/docs/manual/connections/en
	$manager = Doctrine_Manager::getInstance();
	$manager->setAttribute(Doctrine_Core::ATTR_MODEL_LOADING, Doctrine_Core::MODEL_LOADING_CONSERVATIVE);
	
	$conn = Doctrine_Manager::connection('mysql://root:root@localhost/projects', 'Test Connection');
	//Autoloader::registerDirectory('models', Reg::get("Path.physical").'/models');
	
	// Migrations
	try {	
		$migration = new Doctrine_Migration(Reg::get("Path.physical").'/migrations', $conn);
		$migration->migrate();
	} catch(Exception $e) {
		// do nothing...
	}
?>