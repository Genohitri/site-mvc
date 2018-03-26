<?php

class Router {

	private $routes;

	public function __construct() {

		$routesPath = ROOT.'/config/routes.php';
		$this->routes = include($routesPath);
	}

	
	// returns request string

	private function getURI() {

		if (!empty($_SERVER['REQUEST_URI'])) {
			return trim($_SERVER['REQUEST_URI'], '/');
		}	
		
		
		}

	public function run() {

		// get the request bar
		$uri = $this->getURI();

		// check this request in routes.php
		foreach ($this->routes as $uriPattern => $path) {
			
			if(preg_match("~$uriPattern~", $uri)) {

			// if there is a coincidence, define which controles and action will process the request
				
				$internalRoute = preg_replace("~$uriPattern~", $path, $uri);



				$segments = explode('/',$internalRoute);

				$controllerName = array_shift($segments) . 'Controller';
				$controllerName = ucfirst($controllerName);
				
				$actionName = 'action'.ucfirst(array_shift($segments));

				
				$parameters = $segments;
				
				// connect file class-controller

				$controllerFile = ROOT . '/controllers/' .
					$controllerName . '.php';

				if (file_exists($controllerFile)) {
					include_once($controllerFile);
				}

				// create object, call a method / action


				$controllerObject = new $controllerName;

				$result = call_user_func_array(array($controllerObject, $actionName), $parameters);

				//$controllerObject->$actionName();
				
				if ($result != null) {
					break;

				}

			}

		}

	}

}

?>