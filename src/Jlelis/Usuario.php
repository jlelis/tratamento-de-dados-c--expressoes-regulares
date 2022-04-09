<?php

namespace App\Jlelis;

class Usuario
{
    private $nome;
    private $sobreNome;
    private $senha;
    private $genero;
    private $tratamento;

    /**
     * @param $nome
     * @param $sobreNome
     */
    public function __construct($nome, $senha, $genero)
    {

        $this->validaSenha($senha);
        $this->adicionaTratamentoSobreNome($nome,$genero);

        $nomeSobrenome = explode(" ", $nome, 2);

        if ($nomeSobrenome[0] === "") {
            $this->nome = "Nome Invalido";
        } else {
            $this->nome = $nomeSobrenome[0];
        }
        if ($nomeSobrenome[1] === null) {
            $this->sobreNome = "SobreNome Invalido";
        } else {
            $this->sobreNome = $nomeSobrenome[1];
        }
    }

    private function adicionaTratamentoSobreNome($nome, $genero)
    {
        if ($genero === 'm') {
            $this->tratamento = preg_replace('/^(\w+)\b/', 'Sr.', $nome, 1);
        }
        if ($genero === 'f') {
            $this->tratamento = preg_replace('/^(\w+)\b/', 'Sra.', $nome, 1);
        }

    }

    public function getTratamento()
    {
        return $this->tratamento;
    }

    public function validaSenha($senha)
    {
        $tamanhoSenha = strlen(trim($senha));

        if ($tamanhoSenha < 6) {
            return $this->senha = "senha fraca";
        }
        return $this->senha;

    }

    /**
     * @return mixed
     */
    public function getSenha()
    {
        return $this->senha;
    }

    /**
     * @param mixed $senha
     */
    public function setSenha($senha): void
    {
        $this->senha = $senha;
    }

    /**
     * @return mixed|string
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @return mixed|string
     */
    public function getSobreNome()
    {
        return $this->sobreNome;
    }

}