<?php
class Main_Controller extends ApplicationController_Controller {
	public function __construct() {
		$this->_setLayout('index');
	}

	public function index () {
		
		$q = Doctrine_Query::create()
		    ->from('Clients_Model t');
		
		$this->results = $q->execute();
	}
	
	
	public function login() {
		
	}
}