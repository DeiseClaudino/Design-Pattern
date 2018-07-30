<?php

class Historico
{
    private $estadosSalvos;

    public function __construct()
    {
        $this->estadosSalvos =  array();
    }

    public function pega($index)
    {
        return $this->estadosSalvos[$index];
    }
    
    public function adiciona(Estado $estado)
    {
        $this->estadosSalvos[] = $estado;
    }
}
