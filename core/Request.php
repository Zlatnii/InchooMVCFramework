<?php

namespace app\core;

class Request
{
    public function getPath()
    {
        $path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        return $path ?? '/';
    }

    public function getMethod()
    {
        return strtolower($_SERVER['REQUEST_METHOD']);
    }
}
