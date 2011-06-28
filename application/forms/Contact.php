<?php

class Application_Form_Contact extends Zend_Form
{

    public function init()
    {
        /* Form Elements & Other Definitions Here ... */

		$name  = new Zend_Form_Element_Text("name");
		$name->setLabel("You Name : ");
		$name->setRequired(true);
		
		$website = new Zend_Form_Element_Text("website");
		$website->setLabel("Your Website : ");
		$website->setDescription(" http://www.google.com ");
		
		
		$email = new Zend_Form_Element_Text("email");
		$email->setLabel("Email Address : ");
		$email->setDescription(" Example : john@googe.com ");
		$email->addValidator("EmailAddress",false,
							 array('messages'=>array(
							 Zend_Validate_EmailAddress::INVALID_FORMAT=>"Invalid Email Address Ya tayeb")));
		$email->setRequired(true);
		
		$body = new Zend_Form_Element_Textarea("body");
		$body->setLabel("Text Message : ");
		$body->setAttrib("class","textbox");
		$body->setAttrib("rows","6");
		$body->setAttrib("cols","60");
		$body->setRequired(true);
		
		$submit = new Zend_Form_Element_Submit("contact");
		
		$this->addElement($name);
		$this->addElements(array($website,$email,$body,$submit));
		$this->addElement("hash","contact_us_hash_form");
    }


}

