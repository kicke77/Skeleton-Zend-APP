<?php

class IndexController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        // action body
    }

    public function contactAction()
    {
        
    }

    public function exploreAction()
    {
        // action body
		$contentModel = new Application_Model_Content();
		$data = $contentModel->fetch();
		$this->view->contents =  $data;
    }

	public function pageAction() 
	{
		$request = $this->getRequest();
		$id = $request->getParam("id",null); 
		if($id != null){
			$content = new Application_Model_Content();
			$data = $content->fetchById($id); 
			$this->view->content = $data->current() ;
		}
		$this->view->id = $id ; 
	}

}



