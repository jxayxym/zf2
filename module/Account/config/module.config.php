<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

return array(
    'router' => array(
        'routes' => array(
            'login' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route'    => '/account/auth/login/',
                    'defaults' => array(
                        '__NAMESPACE__'=>'Account\Controller',
                        'controller' => 'Auth',
                        'action'     => 'login',
                    ),
                ),
            ),
            'authenticate' => array(
        		'type' => 'Zend\Mvc\Router\Http\Literal',
        		'options' => array(
    				'route'    => '/account/auth/authenticate/',
    				'defaults' => array(
    					'controller' => 'Account\Controller\Auth',
    					'action'     => 'authenticate',
    				),
    			),	
        	),            
        ),
//     'route_plugins'=>RoutePluginManager对象,
//     'default_params'=>array(),//默认参数，将传给匹配的RouteMache对象
    ),
//     'service_manager' => array(
//         'factories' => array(
//             'translator' => 'Zend\I18n\Translator\TranslatorServiceFactory',
//         ),
//     ),
//     'translator' => array(
//         'locale' => 'en_US',
//         'translation_file_patterns' => array(
//             array(
//                 'type'     => 'gettext',
//                 'base_dir' => __DIR__ . '/../language',
//                 'pattern'  => '%s.mo',
//             ),
//         ),
//     ),
    'controllers' => array(
        'invokables' => array(
            'Account\Controller\Auth' => 'Account\Controller\AuthController'
        ),
    ),
    'view_manager' => array(
        'display_not_found_reason' => true,
        'display_exceptions'       => true,
        'doctype'                  => 'HTML5',
//         'not_found_template'       => 'error/404',
//         'exception_template'       => 'error/index',
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    ),
);
