<?php

require_once __DIR__.'/../vendor/autoload.php'; //Included autoload

use app\controllers\AuthController;
use app\core\Application; //Include Application class;
use app\controllers\SiteController;

$app = new Application(dirname(__DIR__)); //Creating new object with root directory

$app->router->get('/', [SiteController::class, 'home']);
$app->router->get('/contact', [SiteController::class, 'contact']);
$app->router->post('/contact', [SiteController::class, 'handleContact']);
$app->router->get('/about', 'about');

$app->router->get('/login', [AuthController::class, 'login']);
$app->router->post('/login', [AuthController::class, 'login']);
$app->router->get('/register', [AuthController::class, 'register']);
$app->router->post('/register', [AuthController::class, 'register']);

$app->run();