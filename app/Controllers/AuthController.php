<?php

namespace App\Controllers;

use \Firebase\JWT\JWT;
use App\Helpers\Custom;

class AuthController extends Controller
{
  private $key = "example_key";

  public function index()
  {
    return var_dump($this->container->request);
  }

  public function setToken()
  {

      $token = [
        "iss" => "http://example.org",
        "aud" => "http://example.com",
        "iat" => 1356999524,
        "nbf" => 1357000000
      ];

      return JWT::encode($token, $this->key);
  }

  public function getToken()
  {
    $jwt = $this->setToken();

    $decoded = JWT::decode($jwt, $this->key, array('HS256'));
	
	$data = Custom::terbilang(456);

    return print_r($decoded);
  }
  
}
