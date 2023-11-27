<?php
//the main control unit in web app
/*It acts as an intermediary between the information about the request (Request) 
and the decision about what to do with that information (Router). */
namespace app\core;

use app\core\Request;
use app\core\Response;

class Application

{
    public static string $ROOT_DIR;
    public Request $request;
    public Router $router;
    public Response $response;
    public static Application $app;
    public function __construct($rootPath)
    {
        self::$ROOT_DIR = $rootPath;
        self::$app = $this;
        $this->request = new Request(); //get data that client want to find on web page
        $this->response = new Response(); //call this class to get error message if page was not found
        $this->router = new Router($this->request, $this->response); //has taks of directing that information to the appropriate action
    }

    public function run()
    {
      echo  $this->router->resolve();
    }
}