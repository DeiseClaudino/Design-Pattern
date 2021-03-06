<?php

class FilaDeTrabalho
{
    private $comandos;

    public function __construct()
    {
        $this->comandos = array();
    }

    public function adiciona(Comando $comando)
    {
        $this->comandos[] = $comando;
    }

    public function processa()
    {
        foreach($this->comandos as $comando) {
            $comando->executa();
        }
    }
}
