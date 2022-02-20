<?php

use App\Application;
use App\Controllers\HomeController;
use App\Controllers\AuthorizationController;
use App\Controllers\RegistrationController;
use App\Controllers\PersonalAccountController;
use App\Controllers\AdminController;
use App\Controllers\TestController;
use App\Router;

error_reporting(E_ALL);
ini_set('display_errors',true);

require_once __DIR__ . DIRECTORY_SEPARATOR . 'bootstrap.php';

$router = new Router();

$router->get('', [HomeController::class, 'homepage']);
$router->get('authorization', [AuthorizationController::class, 'authorization']);
$router->get('registration', [RegistrationController::class, 'registration']);
$router->get('personalAccount', [PersonalAccountController::class, 'personalAccount']);
$router->get('admin', [AdminController::class, 'admin']);
$router->get('test', [TestController::class, 'test']);

$application = new Application($router);

$application->run($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']);

