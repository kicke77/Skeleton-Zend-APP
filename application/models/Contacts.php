<?php

class Application_Model_Contacts
{

	protected $dbTable = null ;
	
	public function getDbTable()
	{
		if($this->dbTable == null) {
			$this->dbTable = new Application_Model_DbTable_Contacts;
		} 
		return $this->dbTable ;
	}


	public function insert($name,$email,$website,$message)
	{
		$db = $this->getDbTable();
		$data = array();
		$data['name'] = $name;
		$data['email'] = $email;
		$data['website'] = $website; 
		$data['message'] = $message;
		return $db->insert($data);
	}
	
	public function fetchAll()
	{
		$db = $this->getDbTable();
		return $db->fetchAll();
	}
}

