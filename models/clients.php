<?php
class Clients_Model extends Doctrine_Record {
	public function setTableDefinition() {
		$this->setTableName('clients');
		$this->hasColumn('id', 'integer', 11, array(
			'type' => 'integer',
			'primary' => true,
			'length' => 11,
			'autoincrement' => true
		));
		$this->hasColumn('identifier', 'string', 255, array(
			'type' => 'string',
			'notnull' => true,
			'length' => 255,
			'primary' => true
		));
		$this->hasColumn('name', 'string', 255, array(
			'type' => 'string',
			'notnull' => false,
			'length' => 255
		));
	}
	
	public function setUp() { }
}