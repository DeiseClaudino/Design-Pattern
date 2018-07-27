<?php

abstract class TemplateDeImpostoCondicional extends Imposto
{
    public function __construct($imposto = null)
    {
        parent::__construct($imposto);
    }


    public function calcula(Orcamento $Orcamento)
    {
        if ($this->deveUsarOMaximo($Orcamento)) {
            return $this->taxacaoMaxima($Orcamento) + $this->calculaOutroImposto($Orcamento);
        } else {
            return $this->taxacaoMinima + $this->calculaOutroImposto($Orcamento);
        }
    }

    abstract public function deveUsarOMaximo(Orcamento $Orcamento);
    abstract public function taxacaoMinima(Orcamento $Orcamento);
    abstract public function taxacaoMaxima(Orcamento $Orcamento);
}
