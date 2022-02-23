<?php

use App\Application;
use App\Controllers\HomeController;
use App\Controllers\AuthorizationController;
use App\Controllers\RegistrationController;
use App\Controllers\ProfileController;
use App\Controllers\Admin\AdminController;
use App\Controllers\Admin\AdminChangeStatusController;
use App\Controllers\AddCommentController;
use App\Controllers\ChangeStatusSubscribeController;
use App\Router;

error_reporting(E_ALL);
ini_set('display_errors',true);

require_once __DIR__ . DIRECTORY_SEPARATOR . 'bootstrap.php';

$router = new Router();

$router->get('', [HomeController::class, 'index']);
$router->get('authorization', [AuthorizationController::class, 'authorization']);
$router->get('registration', [RegistrationController::class, 'registration']);
$router->get('profile', [ProfileController::class, 'profile']);
$router->get('admin', [AdminController::class, 'admin']);
$router->get('admin', [AdminController::class, 'admin']);
$router->get('admin', [AdminChangeStatusController::class, 'changeStatus']);
$router->get('admin', [AddCommentController::class, 'changeStatus']);
$router->get('', [ChangeStatusSubscribeController::class, 'changeStatusSubscribe']);


$application = new Application($router);

$application->run($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']);
