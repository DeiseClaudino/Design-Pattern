<?php

class SemDesconto implements IDesconto
{
    public function desconta(Orcamento $orcamento)
    {
        return 0;
    }

    public function setProximo(IDesconto $desconto)
    {
    }
}
