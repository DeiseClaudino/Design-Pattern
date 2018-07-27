<?php

abstract class Imposto
{
    protected $outroImposto;

    public function __construct($imposto = null)
    {
        $this->outroImposto = $imposto;
    }
    abstract public function calcula(Orcamento $Orcamento);

    public function calculaOutroImposto(Orcamento $Orcamento)
    {
        if (is_null($this->outroImposto)) {
            return 0;
        }

        return $this->outroImposto->calcula($Orcamento);
    }
}
