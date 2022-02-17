<?php

use App\Application;
use App\Controllers\HomeController;
use App\Controllers\StaticPageController;
use App\Controllers\TestingController;
use App\Controllers\ErrorController;
use App\Controllers\PostController;
use App\Router;

error_reporting(E_ALL);
ini_set('display_errors',true);

require_once __DIR__ . DIRECTORY_SEPARATOR . 'bootstrap.php';

$router = new Router();

$router->get('', [HomeController::class, 'homepage']);
$router->get('', [Authorization::class, 'authorization']);
//$router->get('about', [StaticPageController::class, 'about']);
//$router->get('testing', [TestingController::class, 'testing']);
//$router->get('error', [ErrorController::class, 'error']);
//$router->get('posts', [PostController::class, 'list']);
//$router->get('posts/*', [PostController::class, 'read']);
//$router->get('test/*/test2/*', [StaticPageController1::class, 'test']);

$application = new Application($router);

$application->run($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']);

