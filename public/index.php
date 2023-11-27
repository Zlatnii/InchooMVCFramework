<?php

require_once __DIR__.'/../vendor/autoload.php'; //Included autoload

use app\core\Application; //Include Application class;
use app\controllers\SiteController;

$app = new Application(dirname(__DIR__)); //Creating new object with root directory

$app->router->get('/', 'home');

$app->router->get('/contact', [SiteController::class, 'contact']);

$app->router->post('/contact', [SiteController::class, 'handleContact']);

$app->router->get('/about', 'about');

$app->run();