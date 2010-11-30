<?php
class AddClientsAndProjectsTable extends Doctrine_Migration_Base {
    public function up() {
		$columns = array(
			'id' => array(
				'type' => 'integer',
				'length' => 11,
				'primary' => true,
				'autoincrement' => true
			),
			'identifier' => array(
				'type' => 'string',
				'length' => 255,
				'notnull' => true,
				'primary' => true
			),
			'name' => array(
				'type' => 'string',
				'length' => 255,
				'notnull' => false
			)
		);
		
		$this->createTable('clients', $columns);
		
		
		$columns = array(
			'id' => array(
				'type' => 'integer',
				'length' => 11,
				'primary' => true,
				'autoincrement' => true
			),
			'clientId' => array(
				'type' => 'integer',
				'length' => 11
			),
			'identifier' => array(
				'type' => 'string',
				'length' => 255,
				'notnull' => true,
				'primary' => true
			),
			'name' => array(
				'type' => 'string',
				'length' => 255,
				'notnull' => false
			)
		);
		
		$this->createTable('projects', $columns);
	}

	public function down() {
		$this->dropTable('clients');
		$this->dropTable('projects');
    }
}