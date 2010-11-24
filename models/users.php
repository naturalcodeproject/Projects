<?php
class Users_Model extends Doctrine_Record {
	public function setTableDefinition() {
		$this->setTableName('users');
		$this->hasColumn('id', 'integer', 11, array(
			'type' => 'integer',
			'primary' => true,
			'length' => 11,
			'autoincrement' => true
		));
		$this->hasColumn('username', 'string', 255, array(
			'type' => 'string',
			'notnull' => true,
			'length' => 255,
			'primary' => true
		));
		$this->hasColumn('password', 'string', 255, array(
			'type' => 'string',
			'notnull' => true,
			'length' => 255
		));
	}
	
	public function setUp() { }
}