<?php

class Soma implements Expressao
{
    private $esquerda;
    private $direita;

    public function __construct(Expressao $esquerda, Expressao $direita)
    {
        $this->esquerda = $esquerda;
        $this->direita = $direita;
    }
}
