<?php

namespace App\database\models;

use PDOException;
use Throwable;

class Read extends Model
{
    // Método responsável por retornar todos os registros de uma tabela recebida por parâmetro
    public function all(string $table, $fields = '*'): array
    {
        try {
            $query = $this->connect->query("select {$fields} from {$table} order by id desc");
            $query->execute();

            return $query->fetchAll();
        } catch (Throwable $th) {
            var_dump($th->getMessage());
        }
    }

    // Método responsável por criar um novo registro na tabela usuários
    public function create(string $nome, string $telefone, string $nivel): void
    {
        try {
            $sql = "INSERT INTO usuarios (nome, telefone, nivel) VALUES (?, ?, ?)";
            $query = $this->connect->prepare($sql);
            $query->execute([$nome, $telefone, $nivel]);
        }catch (PDOException $e) {
            var_dump($e->getMessage());
        }
    }
}