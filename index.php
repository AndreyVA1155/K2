<?php

use App\Application;
use App\Router;
use App\Controllers\HomeController;
use App\Controllers\AuthorizationController;
use App\Controllers\RegistrationController;
use App\Controllers\ProfileController;
use App\Controllers\EditProfileController;
use App\Controllers\OutSessionController;

use App\Controllers\ChangeStatusSubscribeController;

use App\Controllers\Admin\AdminController;
use App\Controllers\Admin\AdminShowAllUserController;
use App\Controllers\Admin\AdminShowAllPostController;
use App\Controllers\Admin\AdminShowAllCommentsController;
use App\Controllers\Admin\AdminShowAllSubscriptionController;
use App\Controllers\Admin\AdminShowAllStaticPageController;

use App\Controllers\Admin\AdminChangeUserController;
use App\Controllers\Admin\AdminChangePostController;
use App\Controllers\Admin\AdminChangeCommentsController;
use App\Controllers\Admin\AdminChangeSubscriptionController;
use App\Controllers\Admin\AdminChangeStaticPageController;
use App\Controllers\Admin\AdminChangeParamSiteController;


use App\Controllers\StaticPageController;
use App\Controllers\RuleSiteController;
use App\Controllers\TestController;


session_start();
error_reporting(E_ALL);
ini_set('display_errors',true);

require_once __DIR__ . DIRECTORY_SEPARATOR . 'bootstrap.php';

$router = new Router();

$router->get('', [HomeController::class, 'homepage']);
$router->get('outSession', [OutSessionController::class, 'outSession']);
$router->get('authorization', [AuthorizationController::class, 'authorization']);
$router->post('authorization', [AuthorizationController::class, 'authorization']);
$router->get('registration', [RegistrationController::class, 'registration']);
$router->post('registration', [RegistrationController::class, 'registration']);
$router->get('profile', [ProfileController::class, 'profile']);
$router->post('profile', [ProfileController::class, 'profile']);
$router->post('profile', [EditProfileController::class, 'editProfile']);
$router->get('', [ChangeStatusSubscribeController::class, 'changeStatusSubscribe']);

$router->get('admin', [AdminController::class, 'admin']);
$router->get('admin', [AdminShowAllUserController::class, 'getAllUsers']);
$router->get('admin', [AdminShowAllPostController::class, 'getAllPost']);
$router->get('admin', [AdminShowAllCommentsController::class, 'showAllComments']);
$router->get('admin', [AdminShowAllSubscriptionController::class, 'showAllSubscription']);
$router->get('admin', [AdminShowAllStaticPageController::class, 'getAllStaticPage']);

$router->post('admin', [AdminChangeUserController::class, 'changesUser']);
$router->post('admin', [AdminChangePostController::class, 'changePost']);
$router->post('admin', [AdminChangeCommentsController::class, 'ChangeComment']);
$router->post('admin', [AdminChangeSubscriptionController::class, 'changeSubscription']);
$router->post('admin', [AdminChangeStaticPageController::class, 'changeStaticPage']);
$router->post('admin', [AdminChangeParamSiteController::class, 'changeParamSite']);


$router->get('staticPage', [StaticPageController::class, 'staticPage']);
$router->get('staticPage', [RuleSiteController::class, 'ruleSite']);
$router->get('test', [TestController::class, 'test']);


$application = new Application($router);

$application->run($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']);
