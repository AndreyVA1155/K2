<?php

use App\Application;
use App\Router;
use App\Controllers\HomeController;
use App\Controllers\AuthorizationController;
use App\Controllers\RegistrationController;
use App\Controllers\ProfileController;
use App\Controllers\Admin\AdminController;
use App\Controllers\Admin\AdminChangeStatusUserController;
use App\Controllers\AddCommentController;
use App\Controllers\ChangeStatusSubscribeController;
use App\Controllers\AdminAllUserController;
use App\Controllers\AdminSubscriptionController;
use App\Controllers\AdminPostController;
use App\Controllers\AdminCommentsController;
use App\Controllers\StaticPageController;
use App\Controllers\RuleSiteController;

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
$router->get('admin', [AdminChangeStatusUserController::class, 'changeStatusUser']);
$router->get('admin', [AddCommentController::class, 'changeStatus']);
$router->get('', [ChangeStatusSubscribeController::class, 'changeStatusSubscribe']);
$router->get('admin', [AdminAllUserController::class, 'getAllUsers']);
$router->get('admin', [AdminSubscriptionController::class, 'subscription']);
$router->get('admin', [AdminPostController::class, 'post']);
$router->get('admin', [AdminCommentsController::class, 'comment']);
$router->get('staticPage', [StaticPageController::class, 'staticPage']);
$router->get('staticPage', [RuleSiteController::class, 'ruleSite']);


$application = new Application($router);

$application->run($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']);
