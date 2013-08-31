<?php
namespace Account\Form;

use Zend\Form\Form;

class LoginForm extends Form
{
	public function __construct($name = null)
	{
		// we want to ignore the name passed
		parent::__construct('form_signin');
		$this->setAttribute('method', 'post');
		
		$this->add(array(
				'name' => 'username',
				'type' => 'Text',
				'options' => array(
					'label' => '账号',
				),
		));
		$this->add(array(
				'name' => 'password',
				'type' => 'Password',
				'options' => array(
					'label' => '密码',
				),
		));
		$this->add(array(
				'name' => 'submit',
				'type' => 'Submit',
				'attributes' => array(
					'value' => '登录',
					'id' => 'submit_signin',
				),
		));
	}
}