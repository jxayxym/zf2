<?php
namespace Account;

use Zend\Authentication\Adapter\DbTable as DbTableAuthAdapter;
use Zend\Authentication\Storage\Session;
use Zend\Authentication\AuthenticationService;

class Module
{
    public function getConfig()
    {
    	return include __DIR__ . '/config/module.config.php';
    }
    
    public function getAutoloaderConfig()
    {
    	return array(
			'Zend\Loader\StandardAutoloader' => array(
				'namespaces' => array(
						__NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
				),
			),
    	);
    }    
    
    public function getServiceConfig()
    {
       return array(
            'factories'=>array(
                'AuthService' => function($sm) {
                    $dbAdapter = $sm->get('Zend\Db\Adapter\Adapter');
                    $dbTableAuthAdapter = new DbTableAuthAdapter($dbAdapter,'zf2_user','user_name','user_password');
                    $authService = new AuthenticationService();
                    $authService->setAdapter($dbTableAuthAdapter);
                    $authService->setStorage(new Session('zf2'));
                      
                    return $authService;
                },
            ),
        );
    }
}