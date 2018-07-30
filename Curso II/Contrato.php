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

    public function salvaEstado()
    {
        return new Estado(new Contrato($this->data, $this->cliente, $this->tipo));
    }
}
