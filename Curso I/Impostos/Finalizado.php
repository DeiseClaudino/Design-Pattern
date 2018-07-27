<?php

class Finalizado implements EstadoDeUmOrcamento
{
    public function aplicaDescontoExtra(Orcamento $Orcamento)
    {
        throw new Exception("Orçamentos finalizados não recebem desconto extra!");
    }

    public function aprova(Orcamento $Orcamento)
    {
        throw new Exception("Orçamento já está finalizado");
    }

    public function reprova(Orcamento $Orcamento)
    {
        throw new Exception("Orçamento já está finalizado");
    }

    public function finaliza(Orcamento $Orcamento)
    {
        throw new Exception("Orçamento já está finalizado");
    }
}
