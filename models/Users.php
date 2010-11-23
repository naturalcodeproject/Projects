<?php
class Users extends Doctrine_Record {
	public function setTableDefinition() {
		$this->hasColumn('id', 'string', 36, array(
			'type' => 'string',
			'primary' => true,
			'length' => '36'
		));
		$this->hasColumn('username', 'string', 255, array(
			'type' => 'string',
			'notnull' => true,
			'length' => '255'
		));
		$this->hasColumn('password', 'string', 255, array(
			'type' => 'string',
			'notnull' => true,
			'length' => '255'
		));
	}
	
	public function setUp() { }
	
	public function preInsert($event) {
		$invoker = $event->getInvoker();
		if (empty($invoker->id)) {
			$invoker->id = $this->generateGuid();
		}
    }
	
	function generateGuid($include_braces = false) {
		if (function_exists('com_create_guid')) {
			if ($include_braces === true) {
				return com_create_guid();
			} else {
				return substr(com_create_guid(), 1, 36);
			}
		} else {
			mt_srand((double) microtime() * 10000);
			$charid = strtoupper(md5(uniqid(rand(), true)));

			$guid = substr($charid,  0, 8) . '-' .
					substr($charid,  8, 4) . '-' .
					substr($charid, 12, 4) . '-' .
					substr($charid, 16, 4) . '-' .
					substr($charid, 20, 12);

			if ($include_braces) {
				$guid = '{' . $guid . '}';
			}

			return $guid;
		}
	}
}