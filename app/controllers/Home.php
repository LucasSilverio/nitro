<?php

namespace App\controllers;

class Home
{
    public function index($params): array
    {
        return [
            'view' => 'home.php',
            'data' => ['name' => 'Lucas Silvério']
        ];
    }
}
