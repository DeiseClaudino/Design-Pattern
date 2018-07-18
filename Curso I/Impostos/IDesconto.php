<?php

interface IDesconto
{
    public function desconta(Orcamento $Orcamento);
    public function setProximo(IDesconto $proximo);
}
