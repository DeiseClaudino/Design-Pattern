<?php

class Estado{

  private $contrato;

  public function Estado(Contrato $contrato){
    $this->contrato = $contrato;

  }

  public function getEstado()
  {
    return $this->contrato;
  }

}
