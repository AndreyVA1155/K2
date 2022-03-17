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
ini_set('display_errors', true);

require_once __DIR__ . DIRECTORY_SEPARATOR . 'bootstrap.php';

$router = new Router();

$router->get('', [HomeController::class, 'homepage']);
$router->get('post/*', [HomeController::class, 'showPost']);
$router->get('outSession', [OutSessionController::class, 'outSession']);
$router->get('authorization', [AuthorizationController::class, 'authorization']);
$router->post('authorization', [AuthorizationController::class, 'authorization']);
$router->get('registration', [RegistrationController::class, 'registration']);
$router->post('registration', [RegistrationController::class, 'registration']);
$router->get('profile', [ProfileController::class, 'profile']);
$router->post('profile', [ProfileController::class, 'profile']);
$router->post('profile/editProfile', [EditProfileController::class, 'editProfile']);
$router->get('', [ChangeStatusSubscribeController::class, 'changeStatusSubscribe']);
$router->post('changeStatusSubscribe', [ChangeStatusSubscribeController::class, 'changeStatusSubscribe']);

$router->get('admin', [AdminController::class, 'admin']);
$router->get('admin/allUsers', [AdminShowAllUserController::class, 'getAllUsers']);
$router->get('admin/allPosts', [AdminShowAllPostController::class, 'getAllPost']);
$router->get('admin/allComments', [AdminShowAllCommentsController::class, 'showAllComments']);
$router->get('admin/allSubscription', [AdminShowAllSubscriptionController::class, 'showAllSubscription']);
$router->get('admin/allStaticPage', [AdminShowAllStaticPageController::class, 'getAllStaticPage']);
$router->get('admin/changeParamSite', [AdminChangeParamSiteController::class, 'changeParamSite']);
$router->get('admin/post/*', [AdminShowAllPostController::class, 'readPost']);

$router->post('admin/user/*', [AdminChangeUserController::class, 'changesUser']);
$router->post('admin/post/*', [AdminChangePostController::class, 'changePost']);
$router->post('admin/comment/*', [AdminChangeCommentsController::class, 'сhangeComment']);
$router->post('admin/subscription/*', [AdminChangeSubscriptionController::class, 'changeSubscription']);
$router->post('admin', [AdminChangeSubscriptionController::class, 'changeSubscription']);
$router->post('admin', [AdminChangeStaticPageController::class, 'changeStaticPage']);
$router->post('admin/changeParamSite', [AdminChangeParamSiteController::class, 'changeParamSite']);


$router->get('staticPage', [StaticPageController::class, 'staticPage']);
$router->get('staticPage', [RuleSiteController::class, 'ruleSite']);
$router->get('test', [TestController::class, 'test']);


$application = new Application($router);

$application->run($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']);
