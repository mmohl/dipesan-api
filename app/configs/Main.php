<?php

  // start session
  session_start();

  // include slim
  require __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '..'  . DIRECTORY_SEPARATOR . 'vendor'  . DIRECTORY_SEPARATOR . 'autoload.php';

  // make new app
  $app = new \Slim\App([
    'settings' => [
      'displayErrorDetails' => true,
		'db' => [
			'driver' => 'mysql',
			'host' => 'localhost',
			'database' => 'dipesan',
			'username' => 'root',
			'password' => '',
			'charset' => 'utf8',
			'collation' => 'utf8_unicode_ci',
			'prefix' => ''
		]
    ]
  ]);

	// get the container for hold customs data
	$container = $app->getContainer();
  
	// add to eloquent orm
	$capsule = new \Illuminate\Database\Capsule\Manager;
	$capsule->addConnection($container['settings']['db']);
	$capsule->setAsGlobal();
	$capsule->bootEloquent();
	
	// holds database tobe accessable globally
	$container['db'] = function($container) use($capsule) {
		return $capsule;
	};
	
	// holds Controllers
	$container['AuthController'] = function($container) {
		return new \App\Controllers\AuthController($container);
	};
		
	// include routing setting
	require __DIR__ . DIRECTORY_SEPARATOR .'Routes.php';
