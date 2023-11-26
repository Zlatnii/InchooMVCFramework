<?php

require_once __DIR__.'/../vendor/autoload.php'; //Included autoload

use app\core\Application; //Include Application class;


$app = new Application(); //Create Application class in Core directory

$app->router->get('/', function(){    //Explanation: If GET request is made on '/' it should execute following function...
    return "Hello world!";
});

$app->router->get('/contact', function(){    //Explanation: If GET request is made on '/' it should execute following function...
    return "Contact";
});

$app->run();