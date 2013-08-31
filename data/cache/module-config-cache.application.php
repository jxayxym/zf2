<?php
return array (
  'router' => 
  array (
    'routes' => 
    array (
      'home' => 
      array (
        'type' => 'Zend\\Mvc\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/',
          'defaults' => 
          array (
            'controller' => 'Application\\Controller\\Index',
            'action' => 'index',
          ),
        ),
      ),
      'application' => 
      array (
        'type' => 'Literal',
        'options' => 
        array (
          'route' => '/application',
          'defaults' => 
          array (
            '__NAMESPACE__' => 'Application\\Controller',
            'controller' => 'Index',
            'action' => 'index',
          ),
        ),
        'may_terminate' => true,
        'child_routes' => 
        array (
          'default' => 
          array (
            'type' => 'Segment',
            'options' => 
            array (
              'route' => '/[:controller[/:action]]',
              'constraints' => 
              array (
                'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
              ),
              'defaults' => 
              array (
              ),
            ),
          ),
        ),
      ),
      'login' => 
      array (
        'type' => 'Zend\\Mvc\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/account/auth/login/',
          'defaults' => 
          array (
            'controller' => 'Account\\Controller\\Auth',
            'action' => 'login',
          ),
        ),
      ),
      'authenticate' => 
      array (
        'type' => 'Zend\\Mvc\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/account/auth/authenticate/',
          'defaults' => 
          array (
            'controller' => 'Account\\Controller\\Auth',
            'action' => 'authenticate',
          ),
        ),
      ),
      'zfcuser' => 
      array (
        'type' => 'Literal',
        'priority' => 1000,
        'options' => 
        array (
          'route' => '/user',
          'defaults' => 
          array (
            'controller' => 'zfcuser',
            'action' => 'index',
          ),
        ),
        'may_terminate' => true,
        'child_routes' => 
        array (
          'login' => 
          array (
            'type' => 'Literal',
            'options' => 
            array (
              'route' => '/login',
              'defaults' => 
              array (
                'controller' => 'zfcuser',
                'action' => 'login',
              ),
            ),
          ),
          'authenticate' => 
          array (
            'type' => 'Literal',
            'options' => 
            array (
              'route' => '/authenticate',
              'defaults' => 
              array (
                'controller' => 'zfcuser',
                'action' => 'authenticate',
              ),
            ),
          ),
          'logout' => 
          array (
            'type' => 'Literal',
            'options' => 
            array (
              'route' => '/logout',
              'defaults' => 
              array (
                'controller' => 'zfcuser',
                'action' => 'logout',
              ),
            ),
          ),
          'register' => 
          array (
            'type' => 'Literal',
            'options' => 
            array (
              'route' => '/register',
              'defaults' => 
              array (
                'controller' => 'zfcuser',
                'action' => 'register',
              ),
            ),
          ),
          'changepassword' => 
          array (
            'type' => 'Literal',
            'options' => 
            array (
              'route' => '/change-password',
              'defaults' => 
              array (
                'controller' => 'zfcuser',
                'action' => 'changepassword',
              ),
            ),
          ),
          'changeemail' => 
          array (
            'type' => 'Literal',
            'options' => 
            array (
              'route' => '/change-email',
              'defaults' => 
              array (
                'controller' => 'zfcuser',
                'action' => 'changeemail',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'service_manager' => 
  array (
    'factories' => 
    array (
      'translator' => 'Zend\\I18n\\Translator\\TranslatorServiceFactory',
      'Zend\\Db\\Adapter\\Adapter' => 'Zend\\Db\\Adapter\\AdapterServiceFactory',
    ),
    'aliases' => 
    array (
      'zfcuser_zend_db_adapter' => 'Zend\\Db\\Adapter\\Adapter',
    ),
  ),
  'translator' => 
  array (
    'locale' => 'en_US',
    'translation_file_patterns' => 
    array (
      0 => 
      array (
        'type' => 'gettext',
        'base_dir' => 'D:\\xampp\\htdocs\\zendframework2\\module\\Application\\config/../language',
        'pattern' => '%s.mo',
      ),
    ),
  ),
  'controllers' => 
  array (
    'invokables' => 
    array (
      'Application\\Controller\\Index' => 'Application\\Controller\\IndexController',
      'Account\\Controller\\Auth' => 'Account\\Controller\\AuthController',
      'zfcuser' => 'ZfcUser\\Controller\\UserController',
    ),
  ),
  'view_manager' => 
  array (
    'display_not_found_reason' => true,
    'display_exceptions' => true,
    'doctype' => 'HTML5',
    'not_found_template' => 'error/404',
    'exception_template' => 'error/index',
    'template_map' => 
    array (
      'layout/layout' => 'D:\\xampp\\htdocs\\zendframework2\\module\\Application\\config/../view/layout/layout.phtml',
      'application/index/index' => 'D:\\xampp\\htdocs\\zendframework2\\module\\Application\\config/../view/application/index/index.phtml',
      'error/404' => 'D:\\xampp\\htdocs\\zendframework2\\module\\Application\\config/../view/error/404.phtml',
      'error/index' => 'D:\\xampp\\htdocs\\zendframework2\\module\\Application\\config/../view/error/index.phtml',
    ),
    'template_path_stack' => 
    array (
      0 => 'D:\\xampp\\htdocs\\zendframework2\\module\\Application\\config/../view',
      1 => 'D:\\xampp\\htdocs\\zendframework2\\module\\Account\\config/../view',
      'zfcuser' => 'D:\\xampp\\htdocs\\zendframework2\\module\\ZfcUser\\config/../view',
    ),
  ),
  'db' => 
  array (
    'driver' => 'pdo',
    'dsn' => 'mysql:dbname=zf2;host=localhost',
    'username' => 'root',
    'password' => '123456',
  ),
);