<?php
class DescontoPor5Itens implements IDesconto
{
    private $proximoDesconto;

    public function desconta(Orcamento $Orcamento)
    {
        if (count($Orcamento->getItens()) >= 5) {
            return $Orcamento->getValor() * 0.1;
        } else {
            return $this->$proximoDesconto->desconta($Orcamento);
        }
    }

    public function setProximo(IDesconto $proximo)
    {
        $this->$proximoDesconto = $proximo;
    }
}
