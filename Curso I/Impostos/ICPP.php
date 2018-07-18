<?php

class ICPP implements Imposto
{
    public function calcula(Orcamento $Orcamento)
    {
        if ($Orcamento->getValor() > 500) {
            $Orcamento->getValor() * 0.07;
        } else {
            $Orcamento->getValor() * 0.05;
        }
    }
}
