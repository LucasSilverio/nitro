<?php

namespace Nitro\App;

use Exception;
use Nitro\App\Exceptions\HttpException;

//use App\controllers\Home;

class Controller
{
    public function manage($pathInfo, $params)
    {
        [$controller, $method] = explode("@", $pathInfo);

        $class = "App\\controllers\\".$controller;
        
        if (!class_exists($class)) {
            throw new HttpException("Controller {$controller} não existe", 406);
        }

        $controllerInstance = new $class;

        if (!method_exists($controllerInstance, $method)) {
            throw new HttpException("Método {$method} não encontrado no controller {$controller}", 406);
        }

        $controllerInstance->$method($params);
    }
}