<?php
class Reprovado implements EstadoDeUmOrcamento
{
    public function aplicaDescontoExtra(Orcamento $Orcamento)
    {
        throw new Exception("Orçamentos reprovados não recebem desconto extra!");
    }

    public function aprova(Orcamento $Orcamento)
    {
      throw new Exception("Orçamento já está em estado de reprovação, não é possível aprová-lo");
  }
    public function reprova(Orcamento $Orcamento)
    {
      throw new Exception("Orçamento já está em estado de reprovação");
    }

    public function finaliza(Orcamento $Orcamento)
    {
      throw new Exception("Orçamento já está em estado de reprovação");
    }
}
