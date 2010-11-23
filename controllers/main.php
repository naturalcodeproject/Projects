<?php
	class Main_Controller extends ApplicationController_Controller {
		public function __construct() {
			$this->_setLayout('index');
		}
	
		public function index () {
			//echo Doctrine_Core::getPath();
			//$user = new User();
			//var_dump($user);
			//var_dump($user->find('946fb6e2-4805-102e-b873-4c4678873d9d'));
			// $found = Doctrine_Core::getTable('Users')->find('946fb6e2-4805-102e-b873-4c4678873d9d');
			// 			echo $found->password."<br />";
			
			$user = new Users();
			$user->username = "Name ".uniqid('php_');
			$user->save();
			
			//echo $user->id;
			
			$q = Doctrine_Query::create()
			    ->from('Users t');
			
			$results = $q->execute();
			
			foreach($results as $result) {
				echo $result->id . " - " . $result->username."<br />";
			}
		}
	}
?>