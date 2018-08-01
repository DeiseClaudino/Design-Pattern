<?php

class Pedido
{
    private $cliente;
    private $valor;
    private $status;
    private $dataFinalizacao;

    public function __construct($cliente, $valor)
    {
        $this->cliente = $cliente;
        $thiis->valor = $valor;
    }

    public function paga()
    {
        $this->status = new Pago();
    }

    public function finaliza()
    {
        $this->dataFinalizacao = date("Y-m-d");
        $this->status = new Entregue();
    }
}
