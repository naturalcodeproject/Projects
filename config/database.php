<?php
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