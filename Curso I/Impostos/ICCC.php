<?php

class ICCC implements Imposto
{
  public function calcula(Orcamento $Orcamento)
  {
    if ($Orcamento->getValor() < 1000)
    {
      return $Orcamento->getValor() * 0.05;
    }
    else if ($Orcamento == 1000 && $Orcamento <= 3000)
    {
      return $Orcamento->getValor() * 0.07;
    }
    else
    {
      return $Orcamento->getValor() * 0.08 + 30;
    }
  }
}
