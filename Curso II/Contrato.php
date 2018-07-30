<?php

class Contrato
{
    private $data;
    private $cliente;
    private $tipo;

    function __construct($datam $cliente)
    {
      $this->data = $data;
      $this->cliente = $cliente;
      $this->tipo = new Novo();
    }

    public function getData()
    {
      return $this->data;
    }

    public function setData($data)
    {
      return $this->data;
    }


    public function getCliente()
    {
      return $this->cliente;
    }


    public function setCliente($cliente)
    {
      return $this->cliente;
    }

    public function avanca()
    {
      $this->tipo->avanca();
    }
}
