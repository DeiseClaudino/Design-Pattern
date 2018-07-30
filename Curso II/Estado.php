<?php

class Estado{

  private $contrato;

  public Estado(Contrato $contrato){
    $this->contrato = $contrato;

  }
  
  public function getEstado()
  {
    return $this->contrato;
  }

}
