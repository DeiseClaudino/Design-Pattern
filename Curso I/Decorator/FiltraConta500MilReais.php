<?php

class FiltraConta500MilReais extends Filtro
{

  function __construct($outroFiltro = null)
  {
    parent::__construct($outroFiltro);
  }
    public function filtra($contas)
    {
        $filtrada = new array();
        foreach ($contas as $c) {
          if ($c->getValor() > 50000) {
            $filtrada[] = $c;

          }
          foreach ($this->proximo($contas) as $c) {
            $filtrada[] = $c;
          }
          return $filtrada;
        }
    }
}
