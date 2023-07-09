<?php

$router->add('GET', '/', function(){
    return 'Home@index';
});

$router->add('GET', '/usuarios', function() {
    return 'Usuarios@index';
});

$router->add('GET', '/usuarios/novo', function() {
    return 'Usuarios@create';
});

$router->add('POST', '/usuarios/salvar', function() {
    return 'Usuarios@store';
});

$router->add('GET', '/usuarios/(\d+)', function($params){
    return 'Usuarios@show';
    //return 'Listar usuário específico: '.$params[1];
});

