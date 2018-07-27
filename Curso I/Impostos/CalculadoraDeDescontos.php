<?php
require_once 'DescontoPor5Itens.php';
require_once 'Desconto500Reais.php';
require_once 'SemDesconto.php';
require_once 'Desconto300Reais.php';


class CalculadoraDeDescontos
{
    public function desconto(Orcamento $Orcamento)
    {
        $d1 = new DescontoPor5Itens();
        $d2 = new Desconto500Reais();
        $d3 = new Desconto300Reais();
        $d4 = new SemDesconto();

        $d1->setProximo($d2);
        $d2->setProximo($d3);
        $d3->setProximo($d4);

        $valorDoDesconto = $d1->desconta($Orcamento);
        return $valorDoDesconto;
    }
}
