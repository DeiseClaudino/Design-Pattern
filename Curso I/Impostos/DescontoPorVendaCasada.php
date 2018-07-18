<?php

class DescontoPorVendaCasada implements IDesconto
{
    private $proximoDesconto;

    public function desconta(Orcamento $Orcamento)
    {
        if (aconteceuCompraCasadaEm($Orcamento)) {
            return $Orcamento->getValor() * 0.5;
        } else {
            return $this->$proximoDesconto->desconta($Orcamento);
        }
    }

    private function aconteceuCompraCasadaEm(Orcamento $Orcamento)
    {
        return $this->existe("CIMENTO", $Orcamento) && $this->existe("TIJOLO") ;
    }

    private function existe($nomeDoItem, Orcamento $Orcamento)
    {
        foreach ($Orcamento->getItens() as $item) {
            if ($item->getNome() == $nomeDoItem) {
                return true;
            } else {
                return false;
            }
        }
    }
    public function setProximo(IDesconto $proximo)
    {
        $this->$proximoDesconto = $proximo;
    }
}
