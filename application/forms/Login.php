<?php

class Application_Form_Login extends Zend_Form
{

    public function init()
    {
        /* Form Elements & Other Definitions Here ... */
		$this->addElement("text","username",array( 
			'label'=> 'User Name :',
			'required'=> true  
			));
			
		$this->addElement("password","password",array( 
			'label'=> " Password : ",
			'required'=> true 
			));
		
		$this->addElement("submit","Login ",array('name'=>'Login'));
		
		$this->addElement("hash","user_login_form");
		
    }


}

