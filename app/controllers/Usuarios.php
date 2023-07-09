<?php

namespace App\controllers;

use App\classes\Permissao;
use App\classes\Usuario;
use Exception;

class Usuarios
{    

    public function create()
    {        
        return [
            'view' => 'create.php',
            'data' => []
        ];        
    }
    
    public function store()
    {
        $usuario = new Usuario();        

        try {
            if ($usuario->preencherDados()) {
                $usuario->cadastrar();
            }
        }catch (Exception $e){
            $e->getMessage();
        }
        return [
            'view' => 'create.php',
            'data' => []
        ];  
    }
}
