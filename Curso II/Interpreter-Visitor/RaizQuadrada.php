<?php

class RaizQuadrada implements Expressao{
  private $esquerda;

  public function __construct(Expressao $esquerda)
  {
      $this->esquerda = $esquerda;

  }
  public function avalia()
    {
        $resultadoDaEsquerda = $this->esquerda->avalia();
        return sqrt($resultadoDaEsquerda);
    }

    public function aceita(Visitor $visitor)
    {
        $visitor->visitaRaizQuadrada($this);
    }

}
