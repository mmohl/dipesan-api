<?php
namespace App\Controllers;

use Faker\Factory;
use \App\Models\User;

class Controller
{

	protected $container;

	public function __construct($container)
	{
		$this->container = $container;
	}
  
	public function __get($property)
	{
		if ($this->container->{$property}) {
			return $this->container->{$property};
		}
	}
	
	public function generateDummy($className) 
	{	
//		$obj = new $className;
		$class = new \ReflectionClass($className);
		$instance = $class->getFileName();
		var_dump($instance);
	}

}
