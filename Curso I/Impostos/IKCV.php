<?php

class IKCV implements Imposto
{
    public function calcula(Orcamento $Orcamento)
    {
        if ($Orcamento->getValor() > 500 && $this->temItemMaiorQue100ReaisNo($Orcamento)) {
            return $Orcamento->getValor() * 0.10;
        } else {
            return $Orcamento->getValor() * 0.06;
        }
    }

    private function temItemMaiorQue100ReaisNo(Orcamento $Orcamento)
    {
        foreach ($Orcamento->getItens() as $item) {
            if ($item->getValor() > 100) {
                return true;
            } else {
                return false;
            }
        }
    }
}
