<?php

class IHIT extends TemplateDeImpostoCondicional
{
    public function __construct($imposto = null)
    {
        parent::__construct($imposto);
    }


    public function deveUsarOMaximo(Orcamento $Orcamento)
    {
        $noOrcamento = array();

        foreach ($Orcamento->getItens() as $item) {
            if (in_array($item->getNome(), $noOrcamento)) {
                return true;
            } else {
                $noOrcamento[] = $item->getNome();
            }
            return false;
        }
    }

    public function taxacaoMinima(Orcamento $Orcamento)
    {
        return $Orcamento->getValor() * (0.01 * count($Orcamento->getItens()));
    }

    public function taxacaoMaxima(Orcamento $Orcamento)
    {
        return $Orcamento->getValor() * 0.13 + 100;
    }
}
