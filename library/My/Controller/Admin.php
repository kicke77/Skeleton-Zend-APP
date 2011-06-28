<?php


class My_Controller_Admin extends Zend_Controller_Action
{
	 
	public function init()
	{
		$auth = Zend_Auth::getInstance();
		if( !$auth->hasIdentity() )  
			$this->_redirect("/login");
	}
	
}
