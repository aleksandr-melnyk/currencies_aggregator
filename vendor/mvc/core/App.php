<?php

namespace mvc;

class App
{
    public static $app;

    public function __construct()
    {
        $query = rtrim($_SERVER['QUERY_STRING'], '/');
        session_start();
        self::$app = Registry::instance();
        $this->getParams();
//        new ErrorHandler();
        $router = new Router($query);
    }

    protected function getParams()
    {
        $params = require_once CONFIG . '/params.php';
        if (!empty($params)) {
            foreach ($params as $key => $param) {
                self::$app->setProperty($key, $param);
            }
        }
    }
}