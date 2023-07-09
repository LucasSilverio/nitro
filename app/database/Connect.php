<?php

namespace app\database;

use PDO;
use PDOException;

class Connect
{
    private static $pdo = null;

    // Método responśavel por realizar a conexão com o banco de dados
    public static function connect()
    {
        try {
            if (!static::$pdo) {
                static::$pdo = new PDO("mysql:host=mysql;dbname=app-nitro", "root", "root");                
            }
            return static::$pdo;
        } catch (PDOException $e) {
            var_dump($e->getMessage());
        }
    }    
}
