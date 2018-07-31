<?php

class Multiplicacao implements Expressao
{
    private $esquerda;
    private $direita;

    public function __construct(Expressao $esquerda, Expressao $direita)
    {
        $this->esquerda = $esquerda;
        $this->direita = $direita;
    }


    public function avalia()
    {
        $resultadoDaEsquerda = $this->esquerda->avalia();
        $resultadoDaDireita = $this->direita->avalia();
        return $resultadoDaEsquerda * $resultadoDaDireita;
    }

    public function getEsquerda()
    {
        return $this->esquerda;
    }

    public function getDireita()
    {
        return $this->direita;
    }


    public function aceita(Visitor $visitor)
    {
        $visitor->visitaMultiplicacao($this);
    }
}
