<?php
return array(
	'service_manager' => array(
		'factories' => array(
			'Zend\Db\Adapter\Adapter' => 'Zend\Db\Adapter\AdapterServiceFactory',
		),
	),
	'db' => array(
        'driver'    => 'pdo',
        'dsn'       => 'mysql:dbname=zf2;host=localhost',
        'username'  => 'root',
        'password'  => '123456',
	),
);