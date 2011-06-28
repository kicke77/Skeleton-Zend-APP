<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
	
	public function _initRoute()
	{
		
		$route = new Zend_Controller_Router_Route('page/:id',
									  	 array('controller'=>'index',
											  'action'=> 'page',
											  'id'=> ''));
		
		 
		$frontController = Zend_Controller_Front::getInstance();
		$frontController->getRouter()->addRoute('pages',$route);
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		# code... 
		$frontController = Zend_Controller_Front::getInstance();
		$r = new Zend_Controller_Router_Route(
	       			'profiles/:page/*',
			array(
	                'controller' => 'profiles',
	                'module' => 'default' ,
					'action' => 'profiles'
					));
			//$frontController->getRouter()->addRoute('profiles',$r);
		
	}


}

