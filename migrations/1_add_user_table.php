<?php
class AddUserTable extends Doctrine_Migration_Base {
    public function up() {
		$columns = array(
			'id' => array(
				'type' => 'string',
				'length' => '36',
				'primary' => true
			),
			'username' => array(
				'type' => 'string',
				'length' => '255',
				'notnull' => true
			),
			'password' => array(
				'type' => 'string',
				'length' => '255',
				'notnull' => true
			)
		);
		
        $this->createTable('users', $columns);
    }

    public function down() {
        $this->dropTable('users');
    }
}