<?php

namespace App\controllers;

use App\classes\Usuario;
use App\database\models\Read;

class Home 
{

    public function index($params): array
    {
        
        $usuario = new Usuario();
        $data = $usuario->getAll();

        return [
            'view' => 'home.php',
            'data' => $data
        ];
    }
}
