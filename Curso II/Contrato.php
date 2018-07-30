<?php

class Contrato
{
    private $data;
    private $cliente;
    private $tipo;

    public function __construct($cliente, $data, $tipo = null)
    {
        $this->data = $data;
        $this->cliente = $cliente;
        if (!is_null($tipo)) {
            $this->tipo = $tipo;
        } else {
            $this->tipo = new Novo();
        }
    }

    public function setTipo(TipoDeContrato $tipo)
    {
      $this->tipo = $tipo;
    }

    public function getData()
    {
        return $this->data;
    }

    public function setData($data)
    {
         $this->data;
    }


    public function getCliente()
    {
        return $this->cliente;
    }


    public function setCliente($cliente)
    {
        $this->cliente;
    }

    public function avanca()
    {
        $this->tipo->avanca($this);
    }

    public function salvaEstado()
    {
        return new Estado(new Contrato($this->data, $this->cliente, $this->tipo));
    }

    public function restaura(Estado $estado)
    {
        $this->data = $estado->getEstado()->getData();
        $this->cliente = $estado->getEstado()->getCliente();
        $this->tipo = $estado->getEstado()->getTipo();
    }
}
