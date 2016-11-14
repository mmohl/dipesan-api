<?php

  // start session
  session_start();

  // include slim
  require __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '..'  . DIRECTORY_SEPARATOR . 'vendor'  . DIRECTORY_SEPARATOR . 'autoload.php';

  // make new app
  $app = new \Slim\App([
    'settings' => [
      'displayErrorDetails' => true
    ]
  ]);

  // get the container for hold customs data
  $container = $app->getContainer();

  // holds Controllers
  $container['AuthController'] = function($container) {
    return new \App\Controllers\AuthController($container);
  };

  // include routing setting
  require __DIR__ . DIRECTORY_SEPARATOR .'Routes.php';
