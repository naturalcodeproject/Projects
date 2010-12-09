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
		$this->hasColumn('is_active', 'integer', 1, array(
			'type' => 'integer',
			'notnull' => false,
			'length' => 1,
			'default' => 1
		));
	}
	
	public function setUp() { }
	
	public function preSave() {
		$this->password = $this->hashPassword($this->password);
	}
	
	/**
	* checks to see if entered password matches the user
	* md5 hashes in the db work and will be updated to the new hashing method
	*/
	public function checkPassword($password)
	{
		$hash = new Passwordhash_Helper;

		// check to see if updated hash is correct
		if ($hash->CheckPassword($password, $this->password) === true) {
			return true;
		}

		// check to see if md5 is correct
		if (md5($password) === $this->password) {
			// update to new hash method
			$this->password = $password;
			
			$this->update();

			return true;
		}

		// passwords did not match
		return false;
	}
	
	
	/**
	* hashes password
	*/
	public function hashPassword($password) {
		$hash = new Passwordhash_Helper;
		
		return $hash->HashPassword($password);
	}
}