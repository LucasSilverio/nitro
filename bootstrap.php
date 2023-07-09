<?php

require __DIR__.'/vendor/autoload.php';
session_start();

use App\helpers\Flash;
use Nitro\App\{
    Router
};
use Nitro\App\Exceptions\{
    HttpException
};

$router = new Router();

require __DIR__ . '/config/routes.php';

try {
    $data = $router->run();

    extract($data['data']);

    if (!isset($data['view'])) {
        throw new Exception("A view não foi informada.");
    }

    if (!file_exists(__DIR__.'/app/views/'.$data['view'])) {
        throw new Exception("A view {$data['view']} não existe.");
    }

    $view = $data['view'];
    require __DIR__.'/app/views/template.php';
    
    $flash = new Flash();
    $flash->clear();
    
} catch(HttpException $e) {
    echo $e->getMessage();
} catch(Exception $e) {
    echo $e->getMessage();
}

