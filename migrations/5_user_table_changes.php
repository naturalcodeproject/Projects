<?php
class UserTableChanges extends Doctrine_Migration_Base {
    public function up() {
		$this->addColumn('users', 'is_active', 'integer', 1, array(
			'default' => '1'
		));
    }

    public function down() {
        $this->removeColumn('users', 'is_active');
    }
}