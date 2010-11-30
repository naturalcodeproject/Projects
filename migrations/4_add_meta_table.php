<?php
class AddMetaTable extends Doctrine_Migration_Base {
    public function up() {
		$columns = array(
			'id' => array(
				'type' => 'integer',
				'length' => 11,
				'primary' => true,
				'autoincrement' => true
			),
			'object' => array(
				'type' => 'string',
				'length' => 255,
				'notnull' => true
			),
			'metaKey' => array(
				'type' => 'string',
				'length' => 255,
				'notnull' => true
			),
			'metaValue' => array(
				'type' => 'blob',
				'notnull' => false
			)
		);
		
		$this->createTable('meta', $columns);
	}

	public function down() {
		$this->dropTable('meta');
    }
}