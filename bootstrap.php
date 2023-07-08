<?php

require __DIR__.'/vendor/autoload.php';

use Nitro\App\{
    Router
};
use Nitro\App\Exceptions\{
    HttpException
};

$router = new Router();

$router->add('GET', '/', function(){
    return 'Home';
});

$router->add('GET', '/usuarios', function() {
    return "Listar os usuários";
});

$router->add('GET', '/usuarios/(\d+)', function($params){
    return 'Listar usuário específico: '.$params[1];
});

try {
    echo $router->run();
} catch(HttpException $e) {
    echo $e->getMessage();
}

