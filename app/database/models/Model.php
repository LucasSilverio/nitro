<?php

namespace App\database\models;

use App\database\Connect;

abstract class Model
{
    protected $connect;

    public function __construct()
    {
        $this->connect = Connect::connect();
    }
}