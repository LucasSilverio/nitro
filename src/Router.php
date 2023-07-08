<?php

namespace Nitro\App;

use Nitro\App\Exceptions\HttpException;
use Nitro\App\Controller;

class Router
{
    private $routes = [];

    public function add(string $method, string $pattern, $callback): void
    {
        $method = strtolower($method);
        $pattern = '/^' . str_replace('/', '\/', $pattern) . '$/';
        $this->routes[$method][$pattern] = $callback;
    }

    public function getCurrentUrl(): string
    {
        $requestUri = $_SERVER['REQUEST_URI'];

        $basePath = '';
        $pathInfo = '';

        if (strpos($requestUri, $basePath) === 0) {
            $pathInfo = substr($requestUri, strlen($basePath));
        }

        if (strlen($pathInfo) > 1) {
            $pathInfo = rtrim($pathInfo, '/');
        }

        return $pathInfo;
    }

    public function run(): string
    {
        $pathInfo = $this->getCurrentUrl();
        $method = strtolower($_SERVER['REQUEST_METHOD']);

        if (empty($this->routes[$method])) {
            throw new HttpException('Página não encontrada', 404);
        }
        
        foreach ($this->routes[$method] as $route => $action) {
            if (preg_match($route, $pathInfo, $params)) {
                $controller = new Controller();
                $controller->manage($action($params), $params);
                //return $action($params);
            }
        }
        
        throw new HttpException('Página não encontrada', 404);
        
    }
}
