<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 21.03.2019
 * Time: 21:27
 */

namespace mvc;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\Routing\Loader\YamlFileLoader;
use Symfony\Component\Routing\Matcher\UrlMatcher;
use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;


class Router
{
    private $routes;
    private $request;

    public function __construct($request)
    {
        $this->request = $request;
        $fileLocator = new FileLocator([CONFIG]);
        $loader = new YamlFileLoader($fileLocator);
        $this->routes = $loader->load('routes.yaml');
        $this->invokeController();
    }

    public function invokeController()
    {
        $context = new RequestContext('/');
        $matcher = new UrlMatcher($this->routes, $context);
//        try{
            $parameters = $matcher->match('/' . $this->request);
            $parts = explode(':', $parameters['_controller']);
            $controllerPath = 'app\controllers\\' . $parts[0];
            $controller = new $controllerPath();
            $action  = $parts[2];
            $controller->$action();
//        }catch (\Exception $e){
//            header('Location: /error_404');
//        }
    }
}