<?php

require __DIR__.'/vendor/autoload.php';

use Nitro\App\{
    Router
};
use Nitro\App\Exceptions\{
    HttpException
};

$router = new Router();

require __DIR__ . '/config/routes.php';

try {
    echo $router->run();
} catch(HttpException $e) {
    echo $e->getMessage();
} catch(Exception $e) {
    echo $e->getMessage();
}

