<?php
class ChangeUserTable extends Doctrine_Migration_Base {
    public function up() {
		$columns = array(
			'id' => array(
				'type' => 'integer',
				'length' => 11,
				'primary' => true,
				'autoincrement' => true
			),
			'username' => array(
				'type' => 'string',
				'length' => 255,
				'notnull' => true,
				'primary' => true
			),
			'password' => array(
				'type' => 'string',
				'length' => 255,
				'notnull' => true
			)
		);
		
		$this->dropTable('users');
        $this->createTable('users', $columns);
    }

    public function down() {
        $this->dropTable('users');
    }
}