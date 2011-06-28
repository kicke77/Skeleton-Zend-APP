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
		
		
		$route = new Zend_Controller_Router_Route('login/*',
									  	 array('controller'=>'index',
											  'action'=> 'login'));
		
		$frontController->getRouter()->addRoute('login',$route);
		
	}
	
	
	public function _initNameSpaces()
	{
		 $autoloader = Zend_Loader_Autoloader::getInstance();
		 $autoloader->registerNamespace('My_');
	}
	
	
	public function _initjQuery()
	{
		$this->bootstrap('view');
		$view = $this->getResource('view');
		ZendX_JQuery::enableView($view);
		$view->jQuery()->setLocalPath('http://code.jquery.com/jquery-1.6.1.min.js')
		->setUiLocalPath('https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.13/jquery-ui.min.js')
		->addStylesheet('/assets/jquery.ui.all.css');
	}
	
	
	
	
	
	
	
	
	
	
	
	/**
		public function _initAutoloadCustomeLibrary()
		{
			$autoloader = Zend_Loader_Autoloader::getInstance();
			$autoloader->registerNamespace('JoyVita_');
		}
	
	
		function _initjQuery()
		{

			$this->bootstrap('View');
			$view = $this->getResource('View');
			ZendX_JQuery::enableView($view);
			$view->jQuery()->setLocalPath('/assets/js/jquery-latest.min.js')
			->setUiLocalPath('/assets/js/jquery-ui-1.8.5.custom.min.js')
			->addStylesheet('/assets/css/south-street/jquery-ui-1.8.6.custom.css');
			 
		 	Zend_Dojo::enableView($view);
		 	$view->dojo()->setLocalPath('assets/js/dojo/dojo/dojo.js')
		 	->addStylesheet('assets/js/dojo/dijit/themes/tundra/tundra.css');
		 }
		 
		 <?php $this->jQuery()->enable();?> 
		
		**/
	

}

