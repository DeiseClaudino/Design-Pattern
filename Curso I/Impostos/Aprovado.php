<?php
class Aprovado implements EstadoDeUmOrcamento
{
    public function aplicaDescontoExtra(Orcamento $Orcamento)
    {
        if (!$this->descontoAplicado) {
            $orcamento->valor -= $orcamento->valor * 0.02;
            $this->descontoAplicado = true;
        } else {
            throw new Exception("Desconto já aplicado!");
        }
    }

    public function aprova(Orcamento $Orcamento)
    {
        throw new Exception("Orçamento já está em estado de aprovação");
    }

    public function reprova(Orcamento $Orcamento)
    {
        throw new Exception("Orçamento está em estado de aprovação e não pode ser reprovado");
    }

    public function finaliza(Orcamento $Orcamento)
    {
        $Orcamento->setEstado(new Finalizado());
    }
}
