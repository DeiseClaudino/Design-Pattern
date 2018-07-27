<?php

class EmAprovacao implements EstadoDeUmOrcamento
{
    public function aplicaDescontoExtra(Orcamento $Orcamento)
    {
        if (!$this->descontoAplicado) {
            $orcamento->valor -= $orcamento->valor * 0.05;
            $this->descontoAplicado = true;
        } else {
            throw new Exception("Desconto já aplicado!");
        }
    }

    public function aprova(Orcamento $Orcamento)
    {
        $Orcamento->setEstado(new Aprovado());
    }

    public function reprova(Orcamento $Orcamento)
    {
        $Orcamento->setEstado(new Reprovado());
    }

    public function finaliza(Orcamento $Orcamento)
    {
        throw new Exception("Orcamento em aprovação não podem ir para finalizado diretamente");
    }
}
