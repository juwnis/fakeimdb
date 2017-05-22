<?php

require "bootstrap.php";

$app_name = "IMDB";

$route_prefix = "/fakeimdb";
$routes = [
	'/' => 'App\Controllers\WelcomeController',
	'/actors/' => 'App\Controllers\ActorController',
	'/directors/' => 'App\Controllers\DirectorController',
	'/movies/' => 'App\Controllers\MovieController',
];

$page = (isset($_SERVER['REDIRECT_URL'])) ? $_SERVER['REDIRECT_URL'] : "/";
$page = str_replace($route_prefix, "", $page);

if (array_key_exists($page, $routes)) {
	// ladda sida
	$controller = $routes[$page];    // $routes["actors"]
	$ctrl = new $controller();
	$ctrl->process();
} else {
	die("Page could not be found.");
}
