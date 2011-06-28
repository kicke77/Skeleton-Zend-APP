<?php

class IndexController extends Zend_Controller_Action
{

    public function init()
    { 
			$switchContext = $this->getHelper('contextSwitch');
			$switchContext->addActionContext('login',array('xml','json'));
			$switchContext->setAutoJsonSerialization(false);
			$switchContext->initContext(); 
    }

    public function indexAction()
    {
        // action body
    }

    public function contactAction()
    {
		$contacts = new Application_Model_Contacts;
		$request = $this->getRequest();
		$contactForm = new Application_Form_Contact;
		if($request->isPost() && $contactForm->isValid( $request->getPost() ) ) {  
			$contacts = new Application_Model_Contacts;
			$data = $request->getPost();
			if( $contacts->insert($data['name'],$data['email'],$data['website'],$data['body']) )
				$this->view->success = " Your Message has been sent successfully.";
			else 
				$this->view->error = " Internal Error "; 
		} 
		$this->view->form = $contactForm ;
	
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


	public function loginAction()
	{
	 	$loginForm = new Application_Form_Login;
		$request = $this->getRequest();
		if( $request->isPost() && $loginForm->isValid( $request->getPost() ) ) {
			$service = new Application_Model_Service;
			$data = $request->getPost();
			if ( $service->login($data['username'],$data['password']) ) { 
				if( $request->isXmlHttpRequest() ) {
					$this->view->success = true ;
				} else { 
					$this->_redirect("/"); 
				}
				
				
			} else { 
				$this->view->error = " Bad Credentials ";
			}
		} 
		
		$this->view->form = $loginForm ;
	}
	
	public function logoutAction()
	{
		$service = new Application_Model_Service;
		if( Zend_auth::getInstance()->hasIdentity() )
			$service->logout();
			
		$this->_redirect("/");
	}
}



