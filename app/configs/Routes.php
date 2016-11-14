<?php
  // AuthController routing
  $app->get('/', 'AuthController:index');
  $app->get('/setToken', 'AuthController:setToken');
  $app->get('/getToken', 'AuthController:getToken');
