<?php

namespace App\classes;

use App\database\models\Read;

class Permissao
{
    protected $nivel;
    
    public function setNivel($nivel): void
    {
        $this->nivel = $nivel;        
    }

    public function getNivel()
    {
        return $this->nivel;
    }
}