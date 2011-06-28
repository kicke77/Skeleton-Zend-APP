<?php

class Application_Model_Service
{

	public function login($user,$pass)
	{
		
		$uAuth = new Zend_Auth_Adapter_DbTable();
		$auth = Zend_Auth::getInstance();
		
		$uAuth->setIdentityColumn("username")
			  ->setCredentialColumn("password")
			  ->setIdentity($user)
			  ->setCredential($pass)
			  ->setTableName("users")
			  ->setCredentialTreatment(" md5( ? ) ");
		
		if( $auth->authenticate($uAuth)->isValid() ) {  
			
		 	$userdata = $uAuth->getResultRowObject(array('id','username'));
			$auth->getStorage()->write($userdata); 
			return true ;
		}  
		
		return false ;
		 
	}
	
	public function logout()
	{
		Zend_Auth::getInstance()->clearIdentity();
	}
}

