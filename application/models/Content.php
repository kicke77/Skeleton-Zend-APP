<?php

class Application_Model_Content
{
	protected $dbTable = null ;
	
	public function getDbTable()
	{
		if($this->dbTable == null) {
			$this->dbTable = new Application_Model_DbTable_Content;
		} 
		return $this->dbTable ;
	}
	
	public function insert()
	{
		$db = $this->getDbTable();
		
	}
	
	public function update($value='')
	{
		$db = $this->getDbTable();
		
	}
	
	public function delete() 
	{
		$db = $this->getDbTable();
	}
	
	function fetch() 
	{
		$db = $this->getDbTable();
		return $db->fetchAll();
		// $db->fetchOne();
		// $db->fetchRow();
		// $db->fetchCol();
	}
	
	public function fetchById($id)
	{
		$db = $this->getDbTable();
		$row = $db->find($id);
		return $row ;
	}

}

