<?php
class Desconto300Reais implements IDesconto
{
    private $proximoDesconto;


    public function desconta(Orcamento $Orcamento)
    {
        if ($Orcamento->getValor() > 300) {
            return $Orcamento->getValor() * 0.01;
        } else {
            return $this->$proximoDesconto->desconta($Orcamento);
        }
    }

    public function setProximo(IDesconto $proximo)
    {
        $this->proximoDesconto = $proximo;
    }
}
