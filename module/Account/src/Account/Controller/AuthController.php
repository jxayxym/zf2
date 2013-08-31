<?php
namespace Account\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Account\Form\LoginForm;
use Zend\Authentication\Adapter\DbTable as AuthAdapter;
use Zend\Authentication\Validator\Authentication;


class AuthController extends AbstractActionController
{
    protected $authservice;
    
    public function getAuthService()
    {
    	if (! $this->authservice) {
    		$this->authservice = $this->getServiceLocator()->get('AuthService');
    	}
    	 
    	return $this->authservice;
    }
        
	public function loginAction()
	{
		$form = new LoginForm();
		$form->setAttribute('action',$this->url()->fromRoute('authenticate'));
		return array('form' => $form);
	}
	
	public function authenticateAction()
	{
		$form = new LoginForm();
		$request = $this->getRequest();
		if ($request->isPost()) {
			$form->setData($request->getPost());
			if ($form->isValid()){
			    $this->getAuthService()
			         ->getAdapter()
			         ->setIdentity($request->getPost('username'))
			         ->setCredential($request->getPost('password'));
			    			    
			    $result = $this->getAuthService()->authenticate();
                if ($result->isValid()) {
                	echo 'success';exit;
                }			    
			}
		}
		return $this->redirect()->toRoute('login');
	}
}