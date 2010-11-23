<?php
class User_Model extends Doctrine_Record {
    public function setTableDefinition() {
        $this->hasColumn('username', 'string', 255);
        $this->hasColumn('password', 'string', 255);
    }

    public function setUp() {
        $this->actAs('Timestampable');
    }
}