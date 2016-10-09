<?php
  // AuthController routing
  $app->get('/', 'AuthController:index');

  $app->get('/hai', function($request, $response){
    return 'hello';
  });
