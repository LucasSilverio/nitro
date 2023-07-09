<?php

namespace App\classes;

use App\database\models\Read;
use App\helpers\Flash;
use Exception;

class Usuario extends Permissao
{
    public $read;
    public $flash;
    protected string $telefone;
    protected string $nome;

    public function __construct()
    {
        $this->read = new Read();
        $this->flash = new Flash();
    }
    
    // Método responśavel por retornar todos os registros
    public function getAll(): array
    {
        return $this->read->all('usuarios');        
    }

    // Método responsável por preencher os dados
    public function preencherDados()
    {
        $validate = $this->validate([
            'nome'      => 'required',
            'telefone'  => 'required',
            'nivel'     => 'required'
        ]);

        if (!$validate) {
            $campos = implode(', ', array_keys($_SESSION['flash']));
            throw new Exception("Os campos {$campos} não foram preenchidos.");
        }
        
        return $validate;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getTelefone()
    {
        return $this->telefone;
    }

    public function cadastrar()
    {
        $this->read->create($this->nome, $this->telefone, $this->nivel);
        header("Location: /");
        die();
    }

    // Método responśavel por validar os campos do formuulário
    private function validate(array $validacoes)
    {
        $resultado = [];
        foreach ($validacoes as $campo => $validacao) {            
            $resultado[$campo] = $this->required($campo);
        }

        if (in_array(false, $resultado)) {
            return false;
        }

        return $resultado;
    }

    private function required($campo) 
    {
        if ($_POST[$campo] === '') {
            $this->flash->setFlash($campo, 'O campo é obrigatório');
            return false;
        }
        $this->$campo = filter_input(INPUT_POST, $campo, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        
        return $this->$campo;
    }
}