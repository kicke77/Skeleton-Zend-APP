<?php

class AdminController extends My_Controller_Admin
{

    public function init()
    {
        /* Initialize action controller here */
		parent::init();
    }

    public function indexAction()
    {
        $contacts = new Application_Model_Contacts;
		$data = $contacts->fetchAll();
		$this->view->messages = $data ;
    }


}

