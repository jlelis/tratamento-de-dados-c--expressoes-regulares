<?php

namespace App\Jlelis;

class Contato
{
    private $email;
    private $endereco;
    private $telefone;

    /**
     * @param $email
     */
    public function __construct($email, $endereco, $telefone)
    {
        if ($this->validaTelefone($telefone)) {
            $this->setTelefone($telefone);
        } else {
            $this->setTelefone("Telefone invalido");
        }

        if ($this->validaEmail(email) !== false) {
            $this->validaEmail($email);
        } else {
            $this->validaEmail("E-mail Invalido");
        }

        $this->endereco = $endereco;
    }

    private function validaTelefone($telefone)
    {
        //1234-1234
        return preg_match('/^[0-9]{4}-[0-9]{4}$/', $telefone, $encontrados);
    }

    /**
     * @return mixed
     */
    public function getTelefone()
    {
        return $this->telefone;
    }

    /**
     * @param mixed $telefone
     */
    public function setTelefone($telefone): void
    {
        $this->telefone = $telefone;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getUsuario()
    {
        $posicaoArroba = strpos($this->email, "@");
        if ($posicaoArroba === false) {
            return "Usuario Invalido";
        }
        $resultado = substr($this->email, 0, $posicaoArroba);
        return $resultado;
    }

    public function validaEmail($email)
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return mixed
     */
    public function getEndereco()
    {
        return $this->endereco;
    }

    /**
     * @param mixed $endereco
     */
    public function setEndereco($endereco): void
    {
        $this->endereco = $endereco;
    }


}