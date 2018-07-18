<?php

class Desconto500Reais implements IDesconto
{
    private $proximoDesconto;


    public function desconta(Orcamento $Orcamento)
    {
        if ($Orcamento->getValor() > 500) {
            return $Orcamento->getValor() * 0.05;
        } else {
            return $this->$proximoDesconto->desconta($Orcamento);
        }
    }

    public function setProximo(IDesconto $proximo)
    {
        $this->$proximoDesconto = $proximo;
    }
}
