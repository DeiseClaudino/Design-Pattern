<?php

class Requisicao{
  private $formato;

  public __construct($formato){
    $this->formato = $formato;
  }

  function getFormato()
  {
    return $this->formato;
  }
}
